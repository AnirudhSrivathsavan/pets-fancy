<?php
ob_start();
ini_set('date.timezone','Asia/Manila');
date_default_timezone_set('Asia/Manila');
require_once('initialize.php');
require_once('DBConnection.php');
$db = new DBConnection;
$conn = $db->conn;
function redirect($url=''){
	echo '<script>location.href="'.base_url .$url.'"</script>';
}
ob_end_flush();
?>