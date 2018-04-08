<?php
require_once(__DIR__ . '/config.php');
require_once(__DIR__ . '/Talk.php');

$talkApp = new \MyAPP\Talk();

if($_SERVER['REQUEST_METHOD'] === 'POST'){
  try {
    $res = $talkApp->post();
    // var_dump($res);
    header('Content-Type: application/json');
    echo jeson_encode($res);
    exit;
  }catch(Exception $e) {
    header($_SERVER['SERVER_PROTOCOL'] . '500 Internal Server Error', true, 500);
    echo $e->getMessage();
    exit;
  }
}


?>