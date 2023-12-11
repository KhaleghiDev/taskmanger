<?php
include "constant.php";
include "config.php";
include "vendor/autoload.php";

try {
    $DB = new PDO("mysql:host=$dataconfig->server;dbname=$dataconfig->database", $dataconfig->user, $dataconfig->pass);
    // set the PDO error mode to exception
    $DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
  } catch(PDOException $e) {
    diemassage("Connection failed: " . $e->getMessage());
  }
include "lib/helpers.php";
include "lib/lib-auth.php";
include "lib/lib-index.php";


