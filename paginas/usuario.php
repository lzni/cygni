<?php 

require "../acoes/verifica.php"; 

if ($_SESSION["nivel"] == 'f') {

  header("Location: ../paginas/index.php"); 
  # code...
};

?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cadastro de usuário</title>

    <link href="../arquivos/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../arquivos/css/estilo.css" rel="stylesheet">
    <link href="../arquivos/css/3.css" rel="stylesheet">


    <script type="text/javascript">
    function checkPass(){
              //Store the password field objects into variables ...
              var inputsenha = document.getElementById('inputsenha');
              var inputconfsenha = document.getElementById('inputconfsenha');
              //Store the Confimation Message Object ...
              var message = document.getElementById('confirmMessage');
              //Set the colors we will be using ...
              var goodColor = "#66cc66";
              var badColor = "#ff6666";
              //Compare the values in the password field 
              //and the confirmation field
              if(inputsenha.value == inputconfsenha.value){
                  //The passwords match. 
                  //Set the color to the good color and inform
                  //the user that they have entered the correct password 
                  inputconfsenha.style.backgroundColor = goodColor;
                  message.style.color = goodColor;
                  message.innerHTML = "A senha confere!"
              }else{
                  //The passwords do not match.
                  //Set the color to the bad color and
                  //notify the user.
                  inputconfsenha.style.backgroundColor = badColor;
                  message.style.color = badColor;
                  message.innerHTML = "A senha não confere!"
              }
          } 

    function validar(){
      var inputsenha = document.getElementById('inputsenha');
      var inputconfsenha = document.getElementById('inputconfsenha');
      if(inputsenha.value == inputconfsenha.value){
        return true;
              }else{
                //window.alert( "Senha não confere!" );
                return false;
              }
    }

      
    </script>
    




  </head>
  <body>

    <?php include_once("../paginas/menu.php"); ?>


    

    <div id="page-content-wrapper">

      <div class="page-content inset">
        <div class="row">
          <div class="col-md-12">
            <p class="well lead">Cadastro de usuário</p>

            <div class="container">
              <div class="row"> 

                <div class="col-sm-8 contact-form">
                  <form id="contact" method="post" class="form" role="form" action="../acoes/cadusuario.php" onsubmit="return validar()">
                    <div class="row">
                      <div class="col-xs-6 col-md-6 form-group">
                        <label for="Nome">Nome</label>
                        <input class="form-control" id="inputnome" name="inputnome" placeholder="" type="text" maxlength="50" required="Preencha este campo"/>
                      </div>
                      <div class="clearfix"></div>
                      <div class="col-xs-6 col-md-6 form-group">
                        <label for="Nome">Login</label>
                        <input class="form-control" id="inputlogin" name="inputlogin" placeholder="" type="text" maxlength="20" required="Preencha este campo"/>
                      </div>
                      <div class="clearfix"></div>
                      <div class="col-xs-6 col-md-6 form-group">
                        <label for="Nome">Senha</label>
                        <input class="form-control" id="inputsenha" name="inputsenha" placeholder="" type="password" maxlength="60" required="Preencha este campo"/>
                      </div>
                      <div class="clearfix"></div>
                      <div class="col-xs-6 col-md-6 form-group">
                        <label for="Nome">Confirme a senha</label>
                        <input class="form-control" id="inputconfsenha" name="inputconfsenha" maxlength="60" placeholder="" type="password" onkeyup="checkPass(); return false;" required="Preencha este campo"/>
                        <span id="confirmMessage" class="confirmMessage"></span>
                      </div>
                      <div class="clearfix"></div>
                      <div class="col-xs-4 col-md-6 form-group">
                        <label for="Nome">Nivel de acesso</label>
                        <select class="form-control"id="selectnivel" name="selectnivel" maxlength="1" required="Preencha este campo">
                          <option>Selecione</option>
                          <option value="g">Gerente</option>
                          <option value="f">Funcionário</option>
                        </select>
                      </div>
                      <div class="clearfix"></div>
                    </div>

                    
                    <br />
                    
                    <div class="row">
                      <div class="col-xs-12 col-md-12 form-group">
                        <button class="btn btn-primary" type="submit">Salvar</button>
                        <!-- <button class="btn btn-primary" type="submit">Limpar</button> -->

                      </div>
                    </div>
                  </form>
                </div> 
              </div>
            </div>
            <!--
            <p class="well lead">Progração para Internet - Si5N - Senac</p> 
            -->
          </div>
        </div>
      </div>
    </div>
      <br/><br/>  
      <div class="container">

      <div class="panel panel-primary">
      <div class="panel-heading">
      <h3 class="panel-title">Lista de Usuarios</h3>
      </div>
      <div class="panel-body">
      <?php

          include_once("../acoes/connect.php");


          print("      
                
                   <div class=\"table-responsive col-md-12\">
                  <table class=\"table table-striped\" cellspacing=\"0\" cellpadding=\"0\">
                    <thead>
                    <tr>
                  
                      <th>Login</th>
                      <th>Nome</th>
                      <th>Senha</th>
                      <th>Nivel</th>
                    </tr>
                    </thead>
                    <tbody>

                    ");


          $sql = "SELECT * FROM usuario";
          $resultado = pg_query ($conexao , $sql);


          while ($linha=pg_fetch_array($resultado)) {
            echo "<tr>";
            echo "<td>".$linha[login]."</td>";
            echo "<td>".$linha[nome]."</td>";
            echo "<td>".$linha[senha]."</td>";
            echo "<td>".$linha[nivel]."</td>";

            echo "<td>";
           
            echo "<form style=\"display: inline-block;\" method=\"post\" action=\"../acoes/excluiusuario.php\" onsubmit=\"return confirm('Você tem certeza que deseje excluir o usuario?')\">";
            echo "<input id=\"iptexcluir\" name=\"iptexcluir\" type=\"hidden\" value=\"";
            echo $linha[login];
            echo "\"/>";
            echo "<button class=\"btn btn-danger btn-xs\" type=\"submit\">Excluir</button>";
            echo "</form>";
        
            echo "</td>";
            echo "</tr>";
          };


          pg_close($conexao);
    ?>
    </div>
  </div>





  <script src="../arquivos/bootstrap/js/jquery-2.2.3.min.js"></script>
  <script src="../arquivos/bootstrap/js/bootstrap.min.js"></script>
  <script src="../arquivos/js/menu.js"></script>
  <script src="../arquivos/js/showride.js"></script>


</body>
</html>