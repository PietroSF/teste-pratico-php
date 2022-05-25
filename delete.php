<?php
  print_r($_POST);
  if(!isset($_POST["id"])){
    header("Location: index.php?message=emptyfields");
    exit();
  }

  include "model/connection.php";
  $id = $_GET("id");

  $statement = $db->prepare("DELETE FROM dentistas where id = ?;");
  $result = $statement->execute([$id]);

  if ($result === TRUE) {
    header("Location: index.php?message=deleted");
  } else {
    header("Location: index.php?message=error");
    exit();
  }
?>;
