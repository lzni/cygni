<?php require "../acoes/verifica.php"; ?>

	<ul class="mainnav" id="nav"></ul>

  <div id="wrapper" class="active">  

    <div id="sidebar-wrapper">
      <ul id="sidebar_menu" class="sidebar-nav">
       <li class="sidebar-brand"><a id="menu-toggle" href="#">Menu<span id="main_icon" class="glyphicon glyphicon-align-justify"></span></a>
       </li>
     </ul>

     <ul class="sidebar-nav" id="sidebar">
      <li><a href="../paginas/index.php">Início<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
    </ul>

    <ul class="sidebar-nav" id="sidebar">
      <li><a href="javascript:void(0)" onclick="toggleID('sub1')">Cadastro<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
      <ul class="sidebar-nav-2" id="sub1" style="display:none">
        <li><a href="../paginas/categoria.php">Categoria</a></li>
        <li><a href="../paginas/departamento.php">Departamento</a></li>
        <li><a href="../paginas/relbem.php">MBP</a></li>
        <li><a href="../paginas/patrimonio.php">Patrimônio</a></li>
        <li><a href="../paginas/predio.php">Prédio</a></li>
        <li><a href="../paginas/sala.php">Sala</a></li>
        <?php 

        if($_SESSION["nivel"] == 'g'){
          echo "<li><a href=\"../paginas/usuario.php\">Usuário</a></li>";
        }
        ?>
      </ul>
    </ul>
    <ul class="sidebar-nav" id="sidebar">
      <li><a href="javascript:void(0)" onclick="toggleID('sub2')">Relatórios<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
      <ul class="sidebar-nav-2" id="sub2" style="display:none">
        <li><a href="../paginas/relbem.php">Bem patrimonial</a></li>
        <li><a href="../paginas/relmbp.php">MBP</a></li>
      </ul>
    </ul>
    <ul class="sidebar-nav" id="sidebar">
      <li><a href="../paginas/logout.php">Sair<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
    </ul>
  </div>