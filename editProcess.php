<?php
  print_r($_POST);
  if(!isset($_POST["id"])){
    header("Location: index.php?message=error");
  }

  include "model/connection.php";
  $id = $_POST['id'];
  $name = $_POST['txtName'];
  $email = $_POST['txtEmail'];
  $cro = $_POST['numCro'];
  $cro_uf = $_POST['charUF'];


  $statement = $db->prepare("UPDATE dentistas SET nome = ?, email = ?, cro = ?, cro_uf = ? where id = ?;");
  $result = $statement->execute([$name, $email, $cro, $cro_uf, $id]);

  if ($result === TRUE) {
    header("Location: index.php?message=edited");
  } else {
    header("Location: index.php?message=error");
    exit();
  }
?>