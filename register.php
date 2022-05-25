<?php include "template/header.php" ?>
<?php
  print_r($_POST);
  if(empty($_POST["id"]) || empty($_POST["txtName"]) || empty($_POST["txtEmail"]) ||  empty($_POST["numCro"]) || empty($_POST["charUF"])){
    header("Location: index.php?message=emptyfields");
    exit();
  }

  include_once "model/connection.php";
  $name = $_POST["txtName"];
  $email = $_POST["txtEmail"];
  $cro = $_POST["numCro"];
  $uf = $_POST["charUF"];

  $statement = $db->prepare("INSERT INTO dentistas(nome,email,cro,cro_uf) VALUES (?,?,?,?);");
  $result = $statement->execute([$name,$email,$cro,$uf]);

  if ($result === TRUE) {
    header("Location: index.php?message=registered");
  } else {
    header("Location: index.php?message=error");
    exit();
  }
  
?>
<?php include "template/footer.php" ?>
