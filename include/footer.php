<?php 
require_once('include/duvidas.php');

?>

<link rel="stylesheet" type="text/css" href="media/css/footer.css">

<footer class="ft page-footer font-small indigo pt-3">

<hr style="background-color: rgb(168, 182, 186); width: 1200px; height: 1px; ">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-2 mx-auto">

        <!-- Links -->
        <h4 class="text-uppercase mt-4 mb-4  footer">Redes Sociais</h4>
        <ul class="nt list-unstyled">
          <li class="">
            <i class="fab fa-facebook " ></i>
            <a href="https://pt-br.facebook.com/pages/category/hospital/?page=4"
            style="text-decoration: none;">Facebook </a>
          </li>

          <li>
            <i class="fab fa-instagram "></i>
            <a  href="https://www.instagram.com/hospitalmaededeus/"
            style="text-decoration: none;">Instagram</a>
          </li>

          <li>
            <i class="fab f fa-twitter "></i>
            <a href="https://twitter.com/hashtag/hospital" 
            style="text-decoration: none;">twitter</a>
          </li>

          <li>
            <i class="fas fa-at" ></i>
            <a href="https://gmail.com/mail/help/intl/pt_pt/about.html" 
            style="text-decoration: none;">Nosso Email</a>
          </li>
        </ul>
      </div>

      <!-- Grid column -->
      <div class="col-md-2 mx-auto">

        <!-- Links -->
        <h4 class="text-uppercase mt-4 mb-4  footer">Usuário</h4>
        <ul class="nt list-unstyled">
          <li><a href="#" data-target="#modal_duvidas" data-toggle="modal" style="text-decoration:none;">Dúvidas</a></li>
          <li><a href="#" data-target="#modal_sugestao" data-toggle="modal" style="text-decoration:none;">Sugestões</a></li>
          <li><a href="#" data-target="#modal_feedback" data-toggle="modal" style="text-decoration:none;">Feedback</a></li>
        </ul>
      </div>

      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <h4 class="text-uppercase mt-4 mb-4  footer">Observações</h4>
        <p >Toda a Página está em desenvolvimento, por uma equipe de jovens do programa Entra21 Edição 2019. E esta sendo desenvolvida com muito orgulho. Temos como objetivo agradar nossos clientes. Se possível deixe seu feedback e Sugestões ou até mesmo algo que gostaria de ver em nossa página.</p>
      </div>
    </div>
  </div>

  <!-- Copyright -->
  <div class="ft1 footer-copyright text-center pt-4 pb-2">
   <p>Direitos Reservedos a equipe do projeto TCC Entra21.
     <strong > SymFinder © 2019</strong>  
     <?php if ($_SESSION['logado'] == true) { 
      if ($_SESSION['nivel_acesso'] == 'adm') { ?>
      <a class="pr-3 " style="float: right; color: black;" href="painel.php">Administrador</a>
      <?php } ?>
      <?php } ?>
    </p>

  </div>
</footer>