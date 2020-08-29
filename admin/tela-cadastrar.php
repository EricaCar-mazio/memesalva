<!doctype html>
<html lang="en">
   <head>
      <title>Cadastro de Publicação</title>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
      <!--     Fonts and icons     -->
      <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
      <!-- Material Kit CSS -->
      <link href="assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
   </head>
   <body class="dark-edition">
      <div class="wrapper ">
         <div class="sidebar" data-color="purple" data-background-color="black" data-image="../assets/img/sidebar-2.jpg">
            <!--
               Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"
               
               Tip 2: you can also add an image using data-image tag
               -->
            <div class="logo"><a href="#" class="simple-text logo-normal">
               MemeSalva
               </a>
            </div>
            <div class="sidebar-wrapper">
               <ul class="nav">
                  <li class="nav-item   ">
                     <a class="nav-link" href="#">
                        <i class="material-icons">dashboard</i>
                        <p>Admin</p>
                     </a>
                  </li>
                  <li class="nav-item active">
                     <a class="nav-link" href="posts.php">
                        <i class="material-icons">library_books</i>
                        <p>Publicações</p>
                     </a>
                  </li>
               </ul>
            </div>
         </div>
         <div class="main-panel">
            <div class="content">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-xl-12 col-lg-12">
                        <form>
                           
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Imagem</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>

                            
                           </div>
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="form-group">
                                   
                                    <div class="form-group">
                                       <label class="bmd-label-floating">Descrição</label>
                                       <textarea class="form-control" rows="5"></textarea>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           
                           <input type="submit"  class="btn btn-primary pull-right" value="Cadastrar">
                           <div class="clearfix"></div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--   Core JS Files   -->
      <script src="assets/js/core/jquery.min.js"></script>
      <script src="assets/js/core/popper.min.js"></script>
      <script src="assets/js/core/bootstrap-material-design.min.js"></script>
      <script src="https://unpkg.com/default-passive-events"></script>
      <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
      <!-- Place this tag in your head or just before your close body tag. -->
      <script async defer src="https://buttons.github.io/buttons.js"></script>
      <!--  Google Maps Plugin    -->
      <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
      <!-- Chartist JS -->
      <script src="assets/js/plugins/chartist.min.js"></script>
      <!--  Notifications Plugin    -->
      <script src="assets/js/plugins/bootstrap-notify.js"></script>
      <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
      <script src="assets/js/material-dashboard.js?v=2.1.0"></script>
      <!-- Material Dashboard DEMO methods, don't include it in your project! -->
      <script src="assets/demo/demo.js"></script>
      <script>
         $(document).ready(function() {
           // Javascript method's body can be found in assets/js/demos.js
           md.initDashboardPageCharts();
         
         });
      </script>
   </body>
</html>