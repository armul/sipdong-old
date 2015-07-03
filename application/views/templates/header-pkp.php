<!DOCTYPE html>
<html lang="id">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="060116335">
		<link rel="shortcut icon" href="/images/kpp331.png">
		<title><?php if (isset($_SESSION['title'])):?><?php echo $_SESSION['title']; ?><?php endif ?></title>
		<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
<?php if (isset($css)): ?>
<?php foreach ($css as $stylesheet): ?>
		<link rel="stylesheet" type="text/css" href="/css/<?php echo $stylesheet; ?>.css">
<?php endforeach ?>
<?php endif ?>
		<style type="text/css" media="screen, print">
.col-md-9 {
	background-image: '/images/kpp331-bg.png';
}
		</style>
		<!--[if lt IE 9]>
		<script src="/js/html5shiv.js"></script>
		<script src="/js/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<nav class="navbar navbar-default" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" style="overflow: hidden" href="/penghargaan"><img src="/images/kpp331.png" alt="" style="width: 16px;"> KPP 331</a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
			</div><!-- /.navbar-collapse -->
		</nav>
		<div class="container">
			<div class="row">
				<div class="col-md-3">
<?php if (isset($_SESSION['submenu'])):?>
					<ul class="nav nav-stacked">
<?php foreach ($_SESSION['submenu'] as $text => $url): ?>
						<li><a href="<?php echo $url; ?>"><?php echo $text; ?></a></li>
<?php endforeach ?>
					</ul>
<?php endif ?>
				</div>
