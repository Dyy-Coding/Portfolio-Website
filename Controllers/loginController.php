<?php



class LoginController extends BaseController
{
  public function login()
{
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        if (isset($_SESSION['user'])) {
            header('Location: /DataSubmission'); // Fix: add 'Location: '
            exit;
        }
        $this->renderView('Authenication/Login');
        return;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Clear any existing user session before login attempt
        if (isset($_SESSION['user'])) {
            unset($_SESSION['user']);
            // or session_destroy(); if you want to clear all session data
        }

        // Get raw input and decode JSON if Content-Type is application/json
        if (strpos($_SERVER['CONTENT_TYPE'] ?? '', 'application/json') !== false) {
            $input = json_decode(file_get_contents('php://input'), true);
            $email = trim($input['email'] ?? '');
            $password = $input['password'] ?? '';
        } else {
            // Default: get from form data
            $email = trim($_POST['email'] ?? '');
            $password = $_POST['password'] ?? '';
        }

        if (empty($email) || empty($password)) {
            $this->renderView('Authenication/Login', ['error' => 'Email and password are required.']);
            return;
        }

        $userModel = new UserModel();
        $user = $userModel->getUserByEmail($email);

        if ($user && $password === $user['password']) {
            $_SESSION['user'] = $user;
            $_SESSION['logged_in'] = "logged-in";
            header('Location: /DataSubmission');
            exit;
        } else {
            $this->renderView('Authenication/Login', ['error' => 'Invalid email or password.']);
            return;
        }
    }
}





    public function logout()
    {
        session_unset();
        session_destroy();
        header('Location: /');
        exit;
    }
    public function loginForm()
    {
        $this->renderView('Authenication/Login', ['error' => 'Invalid email or password.']);
        
        
    }
}
