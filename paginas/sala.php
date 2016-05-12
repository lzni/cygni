  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cadastro de Sala</title>

    <link href="../arquivos/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../arquivos/css/estilo.css" rel="stylesheet">
    <link href="../arquivos/css/3.css" rel="stylesheet">

  </head>
  <body>

    <?php include_once("../paginas/menu.html"); ?>


    

    <div id="page-content-wrapper">

      <div class="page-content inset">
        <div class="row">
          <div class="col-md-12">
            <p class="well lead">Cadastro de sala</p>

            <div class="container">
              <div class="row">

                <div class="col-sm-8 contact-form"> 
                  <form id="contact" method="post" class="form" role="form" action="../acoes/cadsala.php">
                    <div class="row">
                      <div class="col-xs-6 col-md-4 form-group">
                        <label for="Nome">Número</label>
                        <input class="form-control" id="inputnumero" name="inputnumero" placeholder="" type="text" required="Preencha este campo"/>
                      </div>
                      <div class="col-xs-4 col-md-4 form-group">
                        <label for="Nome">Comprimento</label>
                        <input class="form-control" id="inputcomprimento" name="inputcomprimento" placeholder="" type="text" required="Preencha este campo"/>
                      </div>
                      <div class="col-xs-4 col-md-4 form-group">
                        <label for="Nome">Largura</label>
                        <input class="form-control" id="inputlargura" name="inputlargura" placeholder="" type="text" required="Preencha este campo"/>
                      </div>
                    </div> 
                    <br> 

                    <div class="row">
                      <div class="col-xs-6 col-md-4 form-group">
                        <label for="Nome">Código do prédio</label>
                        <select class="form-control" id="selectpredido" name="selectpredio" required="required">
                          <option>Selecione</option>
                          <option>a</option>
                          <option>b</option>
                          <option>c</option>
                        </select>
                      </div>
                      <div class="col-xs-4 col-md-4 form-group">
                        <label for="Nome">Sigla do departamento</label>
                        <select class="form-control" id="selectdepartamento" name="selectdepartamento" required="required">
                          <option>Selecione</option>
                          <option>a</option>
                          <option>b</option>
                          <option>c</option>
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


</body>
</html>