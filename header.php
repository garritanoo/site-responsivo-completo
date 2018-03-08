<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Site Responsivo</title>
	<link rel="stylesheet" href="css/<?php echo $style; ?>.css">
	<link rel="stylesheet" href="css/geral.css">
	<link rel="stylesheet" href="bower_components/wow/css/libs/animate.css">
	<link rel="stylesheet" href="css/plugins.css">
</head>
<body>

<?php include('includes/organisms/menu-responsivo.php'); ?>

	<div class="layout">
		<header>
			<div class="container">
				<div class="logo">
					<a href="index.php">
						<img src="images/logo-tag-top.svg" alt="Logo Topo Tag">
					</a>
				</div>
				<div class="links">
					<?php include('includes/organisms/menu.php'); ?>
					<a class="toggle" href="javascript:;">
						<span></span>
						<span></span>
						<span></span>
					</a>

					<ul class="social">
						<li><a href="#"><span class="fas fa-facebook"></span></a></li>
						<li><a href="#"><span class="fas fa-github"></span></a></li>
					</ul>
				</div>

				<h1 class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s"><?php echo $chamada; ?></h1>

				<p>Web Designer // Designer Gráfico</p>
			</div>
		</header>
		<main>
