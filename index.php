<?php include "template/header.php" ?>

<?php ?>

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
                  <th scope="col">Idade</th>
                  <th scope="col">email</th>
                  <th scope="col">CRO</th>
                  <th scope="col">UF</th>
                  <th scope="col" colspan="2">Opções</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td scope="row">1</td>
                  <td>Alfredo Simões</td>
                  <td>34</td>
                  <td>alsimoes@gmail.com</td>
                  <td>1234.1234-123</td>
                  <td>SC</td>
                  <td>Editar</td>
                  <td>Apagar</td>
                </tr>
                <tr>
                  <td scope="row">1</td>
                  <td>Alfredo Simões</td>
                  <td>34</td>
                  <td>alsimoes@gmail.com</td>
                  <td>1234.1234-123</td>
                  <td>SC</td>
                  <td>Editar</td>
                  <td>Apagar</td>
                </tr>
                <tr>
                <td scope="row">1</td>
                  <td>Alfredo Simões</td>
                  <td>34</td>
                  <td>alsimoes@gmail.com</td>
                  <td>1234.1234-123</td>
                  <td>SC</td>
                  <td>Editar</td>
                  <td>Apagar</td>
                </tr>
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
            <input type="submit" class="btn btn-primary"value="Cadastrar">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php include "template/footer.php" ?>