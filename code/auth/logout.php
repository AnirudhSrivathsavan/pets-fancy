<?php
require_once '..\config.php'; 

session_start();
unset($_SESSION['user']);
$_SESSION['toast_message']="Logged out successfully";
redirect("login");