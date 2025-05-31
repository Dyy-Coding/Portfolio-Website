<?php


if (session_status() == PHP_SESSION_NONE) {
    session_start();
}




class BaseController
{
    protected function renderCustomerView(string $view, array $data = [])
    {
        extract($data);

        $viewFile = __DIR__ . '/../views/' . $view . '.php';
        $headerFile = __DIR__ . '/../views/customerLayouts/header.php';
        $navbarFile = __DIR__ . '/../views/customerLayouts/navbar.php';
        $footerFile = __DIR__ . '/../views/customerLayouts/footer.php';

        if (!file_exists($viewFile)) {
            $this->handleError(404, 'Customer view not found');
            return;
        }

        ob_start();

        if (file_exists($headerFile)) require $headerFile;
        if (file_exists($navbarFile)) require $navbarFile;
        require $viewFile;
        if (file_exists($footerFile)) require $footerFile;

        echo ob_get_clean();
    }

    protected function renderView(string $view, array $data = [], string $layout = 'layout')
    {
        extract($data);
        ob_start();

        $viewFile = __DIR__ . '/../views/' . $view . '.php';
        if (!file_exists($viewFile)) {
            $this->handleError(404, 'View not found');
            return;
        }

        require $viewFile;
        $content = ob_get_clean();

        if ($view === 'forgot-password' || $view === 'reset-password') {
            echo $content;
        } else {
            if ($layout) {
                $this->loadLayout($layout, $content);
            } else {
                echo $content;
            }
        }
    }

    protected function renderAuthView(string $view, array $data = [])
    {
        extract($data);
        ob_start();

        $viewFile = __DIR__ . '/../views/' . $view . '.php';
        if (!file_exists($viewFile)) {
            die("Error: View file not found at $viewFile");
        }

        require $viewFile;
        echo ob_get_clean();
    }

    protected function redirect(string $url)
    {
        header("Location: $url");
        exit;
    }

    protected function requireAuth()
    {
        if (empty($_SESSION['user'])) {
            $this->redirect('/login');
        }
    }

    private function handleError(int $errorCode, string $message)
    {
        $this->logError($errorCode, $message);
        http_response_code($errorCode);

        $userMessage = match ($errorCode) {
            404 => 'Sorry, the page you are looking for could not be found.',
            500 => 'Sorry, something went wrong on our end. Please try again later.',
            default => 'An unexpected error occurred. Please try again.'
        };

        echo "<h1>Error $errorCode</h1>";
        echo "<p>$userMessage</p>";

        $errorView = __DIR__ . '/../views/errors/' . $errorCode . '.php';
        $fallback404 = __DIR__ . '/../views/errors/404.php';

        if (file_exists($errorView)) {
            require $errorView;
        } elseif (file_exists($fallback404)) {
            require $fallback404;
        } else {
            echo "<p>No error view found. Please create '/views/errors/{$errorCode}.php' or '/views/errors/404.php'</p>";
        }

        exit();
    }

    private function logError(int $errorCode, string $message)
    {
        $logDir = __DIR__ . '/../Logs';
        $logFile = $logDir . '/error_log.txt';

        if (!is_dir($logDir)) {
            mkdir($logDir, 0777, true);
        }

        $date = date('Y-m-d H:i:s');
        $logMessage = "[$date] Error $errorCode: $message" . PHP_EOL;
        file_put_contents($logFile, $logMessage, FILE_APPEND);
    }

    private function loadLayout(string $layout, string $content, bool $isCustomer = false)
    {
        $authPages = ['login.php', 'register.php', 'forgot_password.php', 'reset_password.php'];
        $customersPage = ['welcome.php', 'stock.php'];

        $currentPage = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?? '';
        $currentFile = basename($currentPage);
        $isAuthPage = in_array($currentFile, $authPages);

        $layoutFile = __DIR__ . "/../views/{$layout}.php";
        if (!file_exists($layoutFile)) {
            $this->handleError(500, 'Layout not found');
            return;
        }

        $headerFile = $isCustomer ? __DIR__ . '/../views/layouts/headerCustomer.php' : __DIR__ . '/../views/layouts/header.php';
        require_once $headerFile;

        if (!$isAuthPage) {
            $navbarFile = $isCustomer ? __DIR__ . '/../views/layouts/navbarCustomer.php' : __DIR__ . '/../views/layouts/navbar.php';
            require_once $navbarFile;
        }

        echo $content;

        if (!$isAuthPage) {
            require_once __DIR__ . '/../views/layouts/footer.php';
        }
    }

    public function setFlashMessage($type, $message)
    {
        $_SESSION['flash'][$type] = $message;
    }

    public function getFlashMessage($type)
    {
        if (isset($_SESSION['flash'][$type])) {
            $message = $_SESSION['flash'][$type];
            unset($_SESSION['flash'][$type]);
            return $message;
        }
        return null;
    }
}
?>
