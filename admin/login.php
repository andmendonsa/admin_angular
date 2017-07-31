<!DOCTYPE html>
<html ng-app="myApp">
  <div ng-include src="'partials/head.php'"></div>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div ng-include src="'partials/header.php'"></div>  
    </nav>
    
    <div class="logo-admin" style="text-align:center;margin-top:70px;margin-bottom:30px;">
      <img src="assets/img/php-logo.png">
    </div>
    <?php if(isset($_GET['message'])):?>
      <?php 
        if($_GET['message'] == "preencha"){
          $message = "Preencha todos os campos!";
        } elseif ($_GET['message'] == "invalidos") {
          $message = "Usuário e/ou Senha Inválidos.";  
        } else {
          $message = "";
        }
      ?>
      <div id="mensagem-retorno" class="<?=$_GET['class']?>"><?=$message?></div>
    <?php endif;?>
    <form action="send-login.php" id="login" method="POST" style='width: 40%; margin: 0 auto;'>
      <div class="col-lg-12">
        <div class="input-group input-group-lg">
          <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
          <input type="text" name="name" class="form-control" placeholder="Nome" aria-describedby="basic-addon1">
        </div><br />
        <div class="input-group input-group-lg">
          <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-certificate" aria-hidden="true"></span></span>
          <input type="password" name="password" class="form-control" placeholder="Senha" aria-describedby="basic-addon1">
        </div><br />
        <button type="submit" class="btn btn-primary btn-md" id="enviar-login">Enviar</button>
      </div>
    </form>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery-2.1.4.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script type="text/javascript" src="assets/js/angular.min.js"></script>
    <script type="text/javascript" src="app/app.js"></script>
  </body>
</html>


<script type="text/javascript">
  // $(function() {
  //   $('.loading').hide();

  //   $('#login').on('submit', function() {
  //     var url = "send-login.php";

  //     var messageBox = $('#mensagem-retorno');
  //     messageBox.attr('class', '').html('');

  //     $('.loading').show();
  //     $.ajax({
  //         url: url,
  //         type : 'POST',
  //         data : $(this).serialize(),
  //         success: function(message) {
  //           var data = JSON.parse(message);
  //           messageBox.addClass(data.class).html(data.message);
  //           $('.loading').hide();
  //         },
  //         error: function() {
  //           console.log("error");
  //           $('.loading').hide();
  //         }
  //     });

  //     return false;

  //   });
  // });
  
</script>