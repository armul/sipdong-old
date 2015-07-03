		<div class="container">
			<form method="post" action="/masuk" class="form-signin">
				<h1>SIPdong</h1>
<?php if (isset($message)): ?>
				<div class="alert alert-<?php echo $message['type']; ?>"><?php echo $message['content']; ?></div>
<?php endif ?>
				<input name="username" type="text" class="form-control" placeholder="Identitas Pengguna" autofocus>
				<input name="password" type="password" class="form-control" placeholder="Kata sandi">
				<button class="btn btn-lg btn-primary pull-right" type="submit">
					<i class="typcn typcn-key-outline"></i> Masuk
				</button>
			</form>
		</div>