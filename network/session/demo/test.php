<?php

include_once "../session/session.php";

session::getSession('redis', array(
    'host' => "localhost",
    'port' => "6379",
))->begin();

/*
  session::getSession('db',array(
  'host' => "localhost",
  'user' => "root",
  'passwd' => "123456",
  'db' => "session",
  'table' => "session",
  ))->begin(); */

session_start();

if (isset($_SESSION['view'])) {
    $_SESSION['view'] = $_SESSION['view'] + 1;
} else {
    $_SESSION['view'] = 1;
}

echo "VIEW:" . $_SESSION['view'];
