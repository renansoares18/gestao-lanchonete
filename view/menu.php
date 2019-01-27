
<?php
require_once "dependencias.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<!-- Begin Navbar -->
	<div id="nav">
		<div class="navbar navbar-inverse navbar-fixed-top" data-spy="affix" data-offset-top="100">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="inicio.php"><img class="img-responsive logo img-thumbnail" src="../img/phpoo.png" alt="" width="200px" height="150px"></a>
				</div>
				<div id="navbar" class="collapse navbar-collapse">

					<ul class="nav navbar-nav navbar-right">

						<li class="active"><a href="inicio.php"><span class="glyphicon glyphicon-home"></span> Inicio</a>
						</li>

						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-shopping-cart"></span> Gestão de Produtos <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="categorias.php">Gerir categorias</a></li>
								<li><a href="fornecedores.php">Gerir fornecedores</a></li>
								<li><a href="produtos.php">Gerir produtos</a></li>
							</ul>
						</li>

						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Gestão de Pessoas <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="clientes.php">Gerir clientes</a></li>
								<li><a href="usuarios.php">Gerir funcionários</a></li>
							</ul>
						</li>

						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-usd"></span> Financeiro <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="entrada_produtos.php">Entrada de produtos</a></li>
								<li><a href="caixa.php">Caixa diário</a></li>
							</ul>
						</li>
						
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-usd"></span> Fiados <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="vender.php">Realizar venda</a></li>
								<li><a href="relatorio_fiados.php">Relatório de vendas</a></li>
							</ul>
						</li>
						
						<li class="dropdown" >
							<a href="#" style="color: red"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Usuario: <?php echo $_SESSION['usuario']; ?>  <span class="caret"></span></a>
							<ul class="dropdown-menu">

								<?php if($_SESSION['cargo'] == 1) : ?>

								<?php endif ?>

								<li> <a style="color: red" href="../procedimentos/sair.php"><span class="glyphicon glyphicon-off"></span> Sair</a></li>
								
							</ul>
						</li>
				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
		<!--/.contatiner -->
	</div>
</div>
<!-- Main jumbotron for a primary marketing message or call to action -->





<!-- /container -->        


</body>
</html>

<script type="text/javascript">
	$(window).scroll(function() {
		if ($(document).scrollTop() > 150) {
			$('.logo').width(100);
			$('.logo').height(60);

		}
		else {
			$('.logo').height(100);
			$('.logo').width(150);
		}
	}
	);
</script>