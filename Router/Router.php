<?php

class Router
{
    private $uri;
    private $method;
    private $addRoute;
    private $routes = [];

    public function __construct()
    {
        $this->uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $this->method = $_SERVER['REQUEST_METHOD'];
    }

    public function get($uri, $action)
    {
        $this->addRoute('GET', $uri, $action);
    }

    public function post($uri, $action)
    {
        $this->addRoute('POST', $uri, $action);
    }

    public function put($uri, $action)
    {
        $this->addRoute('PUT', $uri, $action);
    }

    public function delete($uri, $action)
    {
        $this->addRoute('DELETE', $uri, $action);
    }

    public function match(array $methods, $uri, $action)
    {
        foreach ($methods as $method) {
            $upper = strtoupper($method);
            if (!in_array($upper, ['GET', 'POST', 'PUT', 'DELETE'])) {
                throw new Exception("Invalid HTTP method: $method");
            }
            $this->addRoute($upper, $uri, $action);
        }
    }

    public function group($prefix, $callback)
    {
        $prefix = trim($prefix, '/');

        // Capture original addRoute method to override URI with prefix
        $originalAddRoute = [$this, 'addRoute'];

        $this->addRoute = function ($method, $uri, $action) use ($prefix, $originalAddRoute) {
            $prefixedUri = trim($prefix . '/' . trim($uri, '/'), '/');
            call_user_func($originalAddRoute, $method, $prefixedUri, $action);
        };

        call_user_func($callback, $this);

        // Restore original method
        $this->addRoute = $originalAddRoute;
    }

    private function addRoute($method, $uri, $action)
    {
        $uri = trim($uri, '/');
        if ($uri === '') {
            $uri = '/';
        }

        foreach ($this->routes as $route) {
            if ($route['uri'] === $uri && $route['method'] === $method) {
                throw new Exception("Route for '{$method} {$uri}' already exists.");
            }
        }

        $this->routes[] = [
            'uri' => $uri,
            'method' => $method,
            'action' => $action
        ];
    }

    public function route()
    {
        $currentUri = trim($this->uri, '/');
        $requestMethod = $this->method;

        if ($requestMethod === 'POST' && !empty($_POST['_method'])) {
            $overrideMethod = strtoupper($_POST['_method']);
            if (in_array($overrideMethod, ['PUT', 'DELETE'])) {
                $requestMethod = $overrideMethod;
            }
        }

        foreach ($this->routes as $route) {
            $routeUri = trim($route['uri'], '/');
            $pattern = preg_replace('/\{([a-zA-Z0-9_]+)\}/', '(?P<$1>[a-zA-Z0-9_]+)', $routeUri);

            if ($requestMethod === $route['method'] && preg_match("#^{$pattern}$#", $currentUri, $matches)) {
                array_shift($matches); // remove full match

                $controllerClass = $route['action'][0];
                $method = $route['action'][1];

                if (class_exists($controllerClass) && method_exists($controllerClass, $method)) {
                    $controller = new $controllerClass();
                    call_user_func_array([$controller, $method], array_values($matches));
                    return;
                } else {
                    $this->handleError(500, "Error: Controller or method not found: {$controllerClass}::{$method}");
                    return;
                }
            }
        }

        $this->handleError(404, "Page '{$this->uri}' does not exist.");
    }

    private function handleError($statusCode, $message)
    {
        http_response_code($statusCode);

        $errorViewPath = __DIR__ . "/../views/errors/{$statusCode}.php";

        if (file_exists($errorViewPath)) {
            include $errorViewPath;
        } else {
            echo "<h3 style='color:red;'>{$statusCode} Error</h3><p>{$message}</p>";
            echo "<small>No error view found. Please create '/views/errors/{$statusCode}.php'</small>";
        }
    }

    public function printRoutes()
    {
        echo "<h3>Registered Routes:</h3>";
        foreach ($this->routes as $route) {
            $controller = $route['action'][0];
            $method = $route['action'][1];
            $uri = $route['uri'] === '/' ? '/' : '/' . $route['uri'];
            echo "URI: <strong>{$uri}</strong> | Method: <strong>{$route['method']}</strong> | Action: <strong>{$controller}::{$method}</strong><br>";
        }
    }

    public function loadView($view)
    {
        require_once "views/{$view}.php";
    }
}
