<html>
<head>
  <meta charset="utf-8">
  <title>Painel respostas</title>
  <link rel="stylesheet" type="text/css" href="media/css/painel.css">

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
  <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Hospital Entra21</a>
    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap d-none d-sm-block">
        <a class="nav-link" href="index.php">Sair</a>
      </li>
    </ul>
  </nav>
  <div class="container-fluid">
    <div class="row">
      <nav class="col-md-2 bg-light sidebar" style="border-bottom: 1px solid rgba(0, 0, 0, 0.1);">
        <div class="sidebar-sticky pt-2 pb-3 pt-sm-0" style="height: 100% !important;">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" href="painel.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="profissional.php">Profissional</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="perguntas_painel.php">Perguntas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="respostas.php">Respostas</a>
            </li>   
            <li class="nav-item d-block d-sm-none">
              <a class="nav-link" href="index.php">Sair</a>
            </li>   
          </ul>
        </div>
      </nav>
      <div class="col-md-10">
        <h1 class="mt-5" style="text-align: center;">Alterações e Criações de Respostas ao cliente é feita nesta página! </h1>
        <h5 class="mt-4" style="text-align: center;">Todas as respostas que serão enviadas ao cliente, vira desta página. E será salva nesta tabela.</h5>

        <!-- Alertas -->
        <div class="mt-4">
          <div class="alert alert-primary" role="alert">
            <a href="#" class="alert-link">Alerta!</a> Todas as alterações feitas nesta tabela serão alteradas na Página Principal.</div> 

            <div class="alert alert-Danger" role="alert">
              <a href="#" class="alert-link">Alerta!</a> Todas as alterações feitas nesta tabela terão que ser comunicada a toda equipe.</div>
        </div>  

              <button type="button" class="btn btn-success">Criar</button>  
          <!-- Tabela de alterações -->

            <table class="table table-striped table-dark mt-3">
              <thead>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Tipo de resposta</th>
                  <th scope="col">Área de atuação</th>

                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Sua </td>
                  <td>Otorrinolaringologista</td>
                  <td style="float: right;"><button type="button" class="btn btn-Primary">Editar</button>
                  <button type="button" class="btn btn-danger">Excluir</button>
                  </td>
                </tr>
              </tbody>
            </table>
                
          </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>