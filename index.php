<?php include "template/header.php" ?>

<?php
include_once "model/connection.php";
$statement = $db->query("select * from `dentistas`");
$dentista = $statement->fetchAll(PDO::FETCH_OBJ);
//print_r($dentista);
?>

<div class="container mt-2">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <!-- ========== Start Alerta ========== -->
      <?php
      if (isset($_GET["message"]) and $_GET["message"] == "emptyfields") {
      ?>

        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          <strong>Erro! </strong> Por favor preencha todos os campos.
        </div>

      <?php
      }
      ?>

      <?php
      if (isset($_GET["message"]) and $_GET["message"] == "registered") {
      ?>

        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          <strong>Sucesso! </strong> Os dados foram cadastrados com sucesso.
        </div>

      <?php
      }
      ?>

      <?php
      if (isset($_GET["message"]) and $_GET["message"] == "editado") {
      ?>

        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          <strong>Sucesso! </strong> Os dados foram atualizados com sucesso.
        </div>

      <?php
      }
      ?>

      <?php
      if (isset($_GET["message"]) and $_GET["message"] == "error") {
      ?>

        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          <strong>Erro! </strong> Tente novamente.
        </div>

      <?php
      }
      ?>

      <?php
      if (isset($_GET["message"]) and $_GET["message"] == "deleted") {
      ?>

        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          <strong>Sucesso! </strong> Os dados foram deletados com sucesso.
        </div>

      <?php
      }
      ?>
      <!-- ========== End Alerta ========== -->
      <div class="card">
        <div class="card-header">
          Lista de Dentistas
        </div>
        <div class="p-2">
          <table class="table align-middle">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">email</th>
                <th scope="col">CRO</th>
                <th scope="col">UF</th>
                <th scope="col" colspan="2">Opções</th>
              </tr>
            </thead>
            <tbody>
              <?php
              foreach ($dentista as $entry) {
              ?>
                <tr>
                  <td scope="row"><?php echo $entry->id; ?> </td>
                  <td><?php echo $entry->nome; ?></td>
                  <td><?php echo $entry->email; ?></td>
                  <td><?php echo $entry->cro; ?></td>
                  <td><?php echo $entry->cro_uf; ?> </td>
                  <td><a href="edit.php?id=<?php echo $entry->id; ?>"><i class="bi bi-pencil-square text-success"></i></a></td>
                  <td><a onclick="return confirm('Tem certeza de que quer deletar estes dados?');" href="delete.php?id=<?php echo $entry->id; ?>"><i class="bi bi-trash-fill text-danger"></i></a></td>
                </tr>
              <?php
              }
              ?>
            </tbody>
          </table>

        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-header">
          Inserir dados
        </div>
        <form action="register.php" class="p-4" method="POST">
          <div class="mb-3">
            <label for="" class="form-label">Nome: </label>
            <input type="text" class="form-control" name="txtName" autofocus required>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Email:</label>
            <input type="email" class="form-control" name="txtEmail" id="" aria-describedby="emailHelpId" placeholder="" autofocus required>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">CRO: </label>
            <input type="number" class="form-control" name="numCro" autofocus required>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">UF: </label>
            <input type="text" class="form-control" name="charUF" autofocus required>
          </div>
          <div class="d-grid">
            <input type="hidden" name="id" value="1">
            <input type="submit" class="btn btn-primary" value="Cadastrar">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php include "template/footer.php" ?>