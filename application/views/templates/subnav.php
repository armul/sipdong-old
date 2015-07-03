		<div class="container">
			<div class="row">
				<div class="col-md-3">
<?php if (isset($_SESSION['submenu'])): ?>
					<ul class="nav nav-pills nav-stacked">
<?php foreach ($_SESSION['submenu'] as $link => $description): ?>
						<li<?php echo $link == $_SESSION['submenu_active'] ? ' class="active"' : ''; ?>><a href="<?php echo $link; ?>"><?php echo $description; ?></a></li>
<?php endforeach ?>
					</ul>
<?php endif ?>
				</div>
