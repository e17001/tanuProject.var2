<?php
session_start();

require_once(__DIR__ . '/functions.php');

define('DSN', 'mysql:host=localhost;dbname=tourabuDB;charset=utf8');
define('DB_USERNAME', 'dbuser');
define('DB_PASSWORD', 'pass');

$css = 'public/css/styles.css';
$js = 'public/javaScripts/';
?>