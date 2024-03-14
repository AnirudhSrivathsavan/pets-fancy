<?php

if (basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"])) {
    header("Location: index");
    exit;
}

$dev_data = array('id'=>'-1','firstname'=>'Anirudh','lastname'=>'Srivathsavan S','username'=>'anirudhsrivathsavvan@gmail.com','password'=>'','last_login'=>'','date_updated'=>'','date_added'=>'');
if(!defined('base_url')) define('base_url','http://localhost/pets-fancy/');
if(!defined('DB_SERVER')) define('DB_SERVER',"localhost");
if(!defined('DB_USERNAME')) define('DB_USERNAME',"root");
if(!defined('DB_PASSWORD')) define('DB_PASSWORD',"");
if(!defined('DB_NAME')) define('DB_NAME',"petwebsite");
?>

<!-- https://github.com/AnirudhSrivathsavan -->