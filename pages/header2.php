<?php require 'config.php'; ?>
<html>
<head>
	<title>Classificados</title>
	<link rel="stylesheet" href="assets/css/style.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
      			</button>
      <a class="navbar-brand" href="./">Classificados</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
			  <?php if(isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin'])): ?>
						<li><a href="meus-anuncios.php"><span class="glyphicon glyphicon-tag"> MeusAnúncios</a></li>
						<li><a href="sair.php"><span class="glyphicon glyphicon-log-out"> Sair</a></li>
					<?php else: ?>
						<li><a href="cadastre-se.php"><span class="glyphicon glyphicon-user"></span>  Cadastre-se</a></li>
						<li><a href="login.php"><span class="glyphicon glyphicon-log-in"> Login</a></li>
					<?php endif; ?>
      		</ul>
    		</div>
  		</div>
	</nav>

    <br><br><br>
    