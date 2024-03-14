<?php
require_once '..\config.php'; 
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $json_data = file_get_contents('user.json');
    $users = json_decode($json_data, true);

    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        foreach ($users as $user) { 
            if ($user['user'] === $username && $user['pass'] === $password) {
                $_SESSION['user'] = $username;
                $_SESSION['toast_message'] = "Logged in successfully!";
                redirect('crud');
                exit;
            }
        }
        unset($_SESSION['toast_message']);
        $_SESSION['toast_message'] = "Incorrect Username or password!";
        redirect('login');
    }
}else {
    http_response_code(403);
}
