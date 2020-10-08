<?php
  //header('Content-Type: text/html; charset=utf-8');
  $idConexao = mysqli_connect('localhost', 'root', 'root') or die('Falha na conex�o.');

  if($idConexao)
  {
     mysqli_select_db($idConexao,'memesalva') or die('Falha na sele��o do banco.');

   //   $Comando = 'SELECT P.id, P.descricao, P.imagem, U.nome FROM post P, usuario U where P.autor = U.id ORDER BY P.id';
     $categoria = 'erros';
     $Comando = "SELECT p.*, u.nome AS autor FROM post_categoria pc "
                ."JOIN post p ON pc.post_id = p.id "
                ."JOIN categoria c ON pc.categoria_id = c.id "
                ."JOIN usuario u ON p.autor = u.id "
                ."WHERE c.nome = '" . $categoria. "' ";

     $Resultado = mysqli_query($idConexao,$Comando) or die('Comando SQL n�o executado.');

     mysqli_close($idConexao) or die('Falha no fechamento da conex�o.');      
  }
  else
  { Echo 'Erro na conex�o com o servidor do banco.';
  }
?>
<!DOCTYPE HTML>
<html lang="pt-br">
   <head>
      <title>ADJETIVOS</title>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
      <link rel="stylesheet" href="assets/css/main.css" />
      <noscript>
         <link rel="stylesheet" href="assets/css/noscript.css" />
      </noscript>
   </head>
   <body class="is-preload">
      <!-- Wrapper -->
      <div id="wrapper" class="fade-in">
         <!-- Intro -->
         <div id="intro">
            <h1>MEMESALVA</h1>
            <p>Aprendendo o português com o gênero textual meme.</p>
            <ul class="actions">
               <li><a href="#header" class="button icon solid solo fa-arrow-down scrolly">Continue</a></li>
            </ul>
         </div>
         <!-- Header -->
         <header id="header">
            <a href="index.html" class="logo">MEMESALVA</a>
         </header>
         <!-- Main -->
         <div id="main">
            <header class="major">
                <h2>ERROS ORTOGRÁFICOS</h2>
             </header>
            <!-- Posts -->
            <section class="posts">

            <?php while ( $Registro = mysqli_fetch_array($Resultado)) { ?>
                  <article>
                     <a href="#" class="image fit">
                        <img src="<?php echo $Registro['imagem'] ?>" alt="" height="455" width="320">
                     </a>
                     <p><?php echo $Registro['descricao'] ?></p>
                     <p>Autor: <?php echo $Registro['autor'] ?></p>
                     <ul class="actions special"></ul>
                  </article>
               <?php }?>
            </section>
         </div>
         <!-- Copyright -->
         <div id="copyright">
            <ul>
               <li>&copy; IFC</li>
               <li>Design: <a href="#">#</a></li>
               <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
               <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
               <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
               <li><a href="#" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
            </ul>
         </div>
      </div>
      <!-- Scripts -->
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/jquery.scrollex.min.js"></script>
      <script src="assets/js/jquery.scrolly.min.js"></script>
      <script src="assets/js/browser.min.js"></script>
      <script src="assets/js/breakpoints.min.js"></script>
      <script src="assets/js/util.js"></script>
      <script src="assets/js/main.js"></script>
   </body>
</html>