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
              foreach ($dentista as $data) {
              ?>
                <tr>
                  <td scope="row"><?php echo $data->id; ?> </td>
                  <td><?php echo $data->nome; ?></td>
                  <td><?php echo $data->email; ?></td>
                  <td><?php echo $data->cro; ?></td>
                  <td><?php echo $data->cro_uf; ?> </td>
                  <td>Editar</td>
                  <td>Apagar</td>
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
            <input type="text" class="form-control" name="txtNome" autofocus>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Idade: </label>
            <input type="number" class="form-control" name="txtIdade" autofocus>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Email:</label>
            <input type="email" class="form-control" name="" id="" aria-describedby="emailHelpId" placeholder="">
            <small id="emailHelpId" class="form-text text-muted">Help text</small>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">CRO: </label>
            <input type="number" class="form-control" name="txtIdade" autofocus>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">UF: </label>
            <input type="text" class="form-control" name="txtNome" autofocus>
          </div>
          <div class="d-grid">
            <input type="hidden" value="1">
            <input type="submit" class="btn btn-primary" value="Cadastrar">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php include "template/footer.php" ?>