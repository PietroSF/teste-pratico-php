<?php include "template/header.php" ?>

<?php
  if(!isset($_GET['id'])){
    header("Location: index.php?message=error");
    exit();
  }

  include_once "model/connection.php";
  $id = $_GET['id'];

  $statement = $db->prepare("select * from dentistas where id = ?;");
  $statement->execute([$id]);
  $dentista = $statement->fetch(PDO::FETCH_OBJ);
  print_r($dentista);
?>

<div class="container mt-5">
  <div class="row justify-content">
    <div class="col-md-5">
      <div class="card">
        <div class="card-header">
          Inserir dados
        </div>
        <form action="editProcess.php" class="p-4" method="POST">
          <div class="mb-3">
            <label class="form-label">Nome: </label>
            <input type="text" class="form-control" name="txtName" autofocus required 
            value="<?php echo $dentista->nome; ?>">
          </div>
          <div class="mb-3">
            <label class="form-label">Email:</label>
            <input type="email" class="form-control" name="txtEmail" id="" aria-describedby="emailHelpId" placeholder="" autofocus required
            value="<?php echo $dentista->email; ?>">
          </div>
          <div class="mb-3">
            <label class="form-label">CRO: </label>
            <input type="number" class="form-control" name="numCro" autofocus required
            value="<?php echo $dentista->cro; ?>">
          </div>
          <div class="mb-3">
            <label class="form-label">UF: </label>
            <input type="text" class="form-control" name="charUF" autofocus required
            value="<?php echo $dentista->cro_uf; ?>">
          </div>
          <div class="d-grid">
            <input type="hidden" name="id" value="<?php echo $dentista->id; ?>">
            <input type="submit" class="btn btn-primary" value="Editar">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php include "template/footer.php" ?>