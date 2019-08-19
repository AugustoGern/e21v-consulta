<html>
<head>
  <meta charset="utf-8">
  <title>Painel Inicio</title>
  <link rel="stylesheet" type="text/css" href="media/css/painel.css">

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
  <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Hospital Entra21</a>
    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="nav-link" href="index.php">Sair</a>
      </li>
    </ul>
  </nav>
  <div class="container-fluid">
    <div class="row">
      <nav class="col-md-2 d-none d-md-block bg-light sidebar">
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="painel.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="profissional.php">Profissional</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="perguntas_painel.php">Perguntas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="respostas.php">Respostas</a>
            </li>   
          </ul>
        </div>
      </nav>
      <div class="col-md-10">
        <h1 class="mt-5">Exemplos de como vai funcionar</h1>
        <table class="table table-dark  mt-5">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Nome</th>
              <th scope="col">Área de atuação</th>
              <th scope="col">Data</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>João</td>
              <td>Piscologo</td>
              <td>04/01/2000</td>
            </tr>
          </tbody>
        </table>
        <button type="button" class="btn btn-primary">Editar</button>
        <button type="button" class="btn btn-success">Criar</button>

        <div class="card mt-5" style="width: 18rem;">
          <img src="media/images/mdc-22.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Nesta Pagina você tera acesso a Alteração, Atualização ou Exclusão de Profissionais ou Resposta e Perguntas </p>
          </div>
        </div>
      </div>

    </div>
  </div>
</body>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>