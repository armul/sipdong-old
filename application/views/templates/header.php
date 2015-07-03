<!DOCTYPE html>
<html lang="id">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="060116335">
		<link rel="shortcut icon" href="/img/favicon.ico">
		<title>SIPdong<?php if (isset($_SESSION['title'])):?> / <?php echo $_SESSION['title']; ?><?php endif ?></title>
		<script src="/js/jquery.js"></script>
		<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="/css/flat-ui.min.css">
		<link rel="stylesheet" type="text/css" href="/css/typicons.min.css">
		<link rel="stylesheet" type="text/css" href="/css/gotham-ssm.css">
		<link rel="stylesheet" type="text/css" href="/css/sipdong.css">
<?php if (isset($css)): ?>
<?php foreach ($css as $stylesheet): ?>
		<link href="/css/<?php echo $stylesheet; ?>.css">
<?php endforeach ?>
<?php endif ?>
		<!--[if lt IE 9]>
		<script src="/js/html5shiv.js"></script>
		<script src="/js/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
<?php if (!isset($cover)): ?>
		<nav class="navbar navbar-inverse" role="navigation">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
					<span class="sr-only">Menu</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" style="overflow: hidden" href="#"><img src="/images/dahlia.png" alt="" style="width: 16px;">SIPdong</a>
			</div>
			<div class="collapse navbar-collapse" id="menu">
 				<ul class="nav navbar-nav navbar-left">
					<li<?php if (isset($_SESSION['menu_active']) && $_SESSION['menu_active'] == 'tatausaha') echo ' class="active"'; ?>><a href="/tatausaha"><i class="typcn typcn-document"></i> Tata Usaha</a></li>
					<li<?php if (isset($_SESSION['menu_active']) && $_SESSION['menu_active'] == 'pemeriksaan') echo ' class="active"'; ?>><a href="/pemeriksaan"><i class="typcn typcn-calculator"></i> Pemeriksaan</a></li>
					<li<?php if (isset($_SESSION['menu_active']) && $_SESSION['menu_active'] == 'organisasi') echo ' class="active"'; ?>><a href="/organisasi"><i class="typcn typcn-flow-merge"></i> Organisasi</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">??? <i class="caret"></i></a>
						<span class="dropdown-arrow"></span>
						<ul class="dropdown-menu">
							<li><a href="#">???</a></li>
							<li><a href="#">???</a></li>
							<li><a href="#">???</a></li>
							<li><a href="#">???</a></li>
							<li><a href="#">???</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="typcn typcn-user-outline"></i> <?php echo $this->sipdong_model->formatNama($_SESSION['nama']); ?> <i class="caret"></i></a>
						<span class="dropdown-arrow"></span>
						<ul class="dropdown-menu">
							<li><a href="/keluar"><i class="typcn typcn-eject-outline"></i> Keluar</a></li>
							<li><a href="#"><i class="typcn typcn-key-outline"></i> Ubah Kata Sandi</a></li>
						</ul>
					</li>
				</ul>
				<form class="navbar-form navbar-right" role="search" method="post" action="/pemeriksaan/riwayat">
					<div class="form-group">
						<div class="input-group">
							<input class="form-control" name="npwp" placeholder="NPWP" type="search">
							<span class="input-group-btn">
								<button type="submit" class="btn"><span class="fui-search"></span></button>
							</span>
						</div>
					</div>
				</form>
			</div>
		</nav>
		<div class="container">
			<div class="row">
				<div class="col-md-3 hidden-print">
<?php if (isset($_SESSION['submenu'])):?>
					<ul class="nav nav-pills nav-stacked">
<?php foreach ($_SESSION['submenu'] as $text => $url): ?>
						<li<?php if (isset($_SESSION['submenu_active']) && $_SESSION['submenu_active'] == $url) echo ' class="active"'; ?>><a href="<?php echo $url; ?>"><?php echo $text; ?></a></li>
<?php endforeach ?>
					</ul>
<?php endif ?>
				</div>
<?php endif ?>