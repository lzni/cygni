  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Listar patrimônio</title>

    <link href="../arquivos/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../arquivos/css/estilo.css" rel="stylesheet">
    <link href="../arquivos/css/3.css" rel="stylesheet">

      <script language="javascript">

    function opensala() {
      document.getElementById('divsala').style.display="block";
      document.getElementById('divpredio').style.display="none";
      document.getElementById('divsituacao').style.display="none";
      document.getElementById('selectpredio').value = "Selecione";
      document.getElementById('selectsituacao').value = "Selecione";
    }
    function openpredio() {
      document.getElementById('divpredio').style.display="block";
      document.getElementById('divsala').style.display="none";
      document.getElementById('selectsala').value = "Selecione";
      document.getElementById('divsituacao').style.display="none";
      document.getElementById('selectsituacao').value = "Selecione";
    }
    function opensituacao() {
      document.getElementById('divsituacao').style.display="block";
      document.getElementById('divsala').style.display="none";
      document.getElementById('selectsala').value = "Selecione";
      document.getElementById('divpredio').style.display="none";
      document.getElementById('selectpredio').value = "Selecione";
    }

    </script>
    
  </head>
  <body>

    <?php include_once("../paginas/menu.html"); ?>
    <?php include_once("../acoes/connect.php"); ?>



    <div id="page-content-wrapper">

      <div class="page-content inset">
        <div class="row">
          <div class="col-md-12">
            <p class="well lead">Listar patrimônio</p>

            <div class="container">
              <div class="row"> 

                <div class="col-sm-8 contact-form">
                  <form id="contact" method="post" class="form" role="form" action="../acoes/listarbem.php">

              

                    <div class="col-xs-4 col-md-6 form-group">
                    <label>Listar Itens por: </label>
                    </div>
                    <div class="clearfix"></div>

                    <div class="row">

                    <div class="col-xs-4 col-md-2 form-group">
                    <input name="rdlistarbem" id="rdsala" type="radio" value="sala" onclick="opensala();"/>Sala
                    </div>

                    <div class="col-xs-4 col-md-2 form-group">
                    <input name="rdlistarbem" id="rdpredio" type="radio" value="predio" onclick="openpredio();"/>Prédio
                    </div>

                    <div class="col-xs-4 col-md-2 form-group">
                    <input name="rdlistarbem" id="rdsituacao" type="radio" value="situacao" onclick="opensituacao();"/>Situação
                    </div>
                    <div class="clearfix"></div>


                    <br>



                    <div id="divsala" style="display:none;">
                      <div class="col-xs-4 col-md-6 form-group">
                        <label for="Nome">Escolha a sala</label>
                        <select class="form-control"id="selectsala" name="selectsala" required="Preencha este campo">
                          <option value="Selecione">Selecione</option>
                          <?php
                          $result = pg_query ($conexao , "select s.numero, s.sigladpto, p.nome from sala s inner join predio p on s.codpredio=p.codigo order by p.nome;");
                              while ($row=pg_fetch_row($result)) {
                                echo "<option value=\"".$row[0]."\">".$row[2]." - ".$row[1]."</option>";
                              }
                          ?>
                        </select>
                      </div>
                      <div class="clearfix"></div>
                      </div>

              
                      <div id="divpredio" style="display:none;">
                      <div class="col-xs-6 col-md-6 form-group">
                        <label for="Nome">Escolha o prédio</label>
                        <select class="form-control" id="selectpredio" name="selectpredio" required="required">
                          <option value="Selecione">Selecione</option>

                          <?php
                          $result = pg_query ($conexao , "select * from predio order by nome;");
                              while ($row=pg_fetch_row($result)) {
                                echo "<option value=\"".$row[0]."\">".$row[1]."</option>";
                              }
                          ?>

                        </select>
                      </div>
                      <div class="clearfix"></div>
                      </div>


                      <div id="divsituacao" style="display:none;">
                      <div class="col-xs-4 col-md-6 form-group">
                        <label for="Nome">Escolha a situação</label>
                        <select class="form-control"id="selectsituacao" name="selectsituacao" required="Preencha este campo">
                          <option value="Selecione">Selecione</option>
                          <option value="1">Em uso</option>
                          <option value="2">Manutenção</option>
                          <option value="3">Inutilizado</option>
                        </select>
                      </div>
                      <div class="clearfix"></div>
                      </div>


                   

                    </div>
                    <br />
                    
                    <div class="row">
                      <div class="col-xs-12 col-md-12 form-group">
                        <button class="btn btn-primary" type="submit">Listar</button>
                        <!-- <button class="btn btn-primary" type="submit">Limpar</button> -->
 
                      </div>
                    </div>
                  </form>
                </div> 
              </div> 
            </div>
            <p class="well lead">Progração para Internet - Si5N - Senac</p> 
          </div>
        </div>
      </div>
    </div>
    
  </div>






  <script src="../arquivos/bootstrap/js/jquery-2.2.3.min.js"></script>
  <script src="../arquivos/bootstrap/js/bootstrap.min.js"></script>
  <script src="../arquivos/js/menu.js"></script>
  <script src="../arquivos/js/showride.js"></script>



<?php pg_close($conexao); ?>
</body>
</html>