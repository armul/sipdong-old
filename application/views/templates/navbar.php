		<div class="navbar navbar-inverse">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
<?php if ($_SERVER['PHP_SELF'] != '/index.php/beranda'): ?>
				<a class="navbar-brand" href="/beranda"><img src="/images/kpp331.jpg" alt="KPP Pratama Jambi" style="width: 20px; height=20px"> SIPdong</a>
<?php else: ?>
				<span class="navbar-brand"><img src="/images/kpp331.jpg" alt="KPP Pratama Jambi" style="width: 20px; height=20px"> SIPdong</span>
<?php endif ?>
			</div>
			<div class="collapse navbar-collapse">
<?php if (isset($_SESSION['menu'])): ?>
				<ul class="nav navbar-nav">
<?php foreach ($_SESSION['menu'] as $item): ?>
					<li<?php echo $item['link'] == $_SESSION['menu_active'] ? ' class="active"' : ''; ?>><a href="/<?php echo $item['link']; ?>"><span class="glyphicon glyphicon-<?php echo $item['icon']; ?>"></span> <?php echo $item['description']; ?></a></li>
<?php endforeach ?>
				</ul>
<?php endif ?>
<?php if (isset($_SESSION['nama'])): ?>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<span class="glyphicon glyphicon-user"></span> <?php echo ucwords(strtolower($_SESSION['nama'])); ?> <b class="caret"></b>
						</a>
						<ul class="dropdown-menu">
						<li><a href="/gantisandi"><span class="glyphicon glyphicon-lock"></span> Ganti Kata Sandi</a></li>
						<li><a href="/keluar"><span class="glyphicon glyphicon-log-out"></span> Keluar</a></li>
						</ul>
					</li>
				</ul>
<?php endif ?>
			</div>
		</div>
