<?php
  session_start();
  if(!isset($_SESSION['id']))
    header("Location: login.php");
?>

<!DOCTYPE html>
<html ng-app="myApp">
    <div ng-include src="'partials/head.php'"></div>
    <body>
      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div ng-include src="'partials/header.php'"></div>  
      </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-2 sidebar">
              <div ng-include src="'partials/menu.php'"></div>  
            </div>
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <div ng-include src="'partials/contato.php'"></div>
            </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script type="text/javascript" src="assets/js/angular.min.js"></script>
    <script type="text/javascript" src="app/app.js"></script>
  </body>
</html>