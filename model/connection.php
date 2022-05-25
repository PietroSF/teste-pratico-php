<?php
$pswd = "root";
$user = "phpmyadmin";
$db_name = "processoSeletivo2021_Pietro_Foltran";
  
try {
  $db = new PDO (
    'mysql:host=localhost;
    dbname='.$db_name,
    $user,
    $pswd,
    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
  );
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>