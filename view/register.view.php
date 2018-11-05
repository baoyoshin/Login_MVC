<?php
if(isset($_SESSION['show'])):
	?><div class="alert alert-primary" role="alert">
		<?php 
		echo $_SESSION['show'];
		unset($_SESSION['show']);
		?>
	</div>
	<?php
endif
?>
<form action="register.php" method="POST">
	<div class="form-group">
		<label>Họ và tên:</label>
		<input type="text" class="form-control" placeholder="Nhập vào họ tên của bạn..." name="name">
	</div>
	<div class="form-group">
		<label>Địa chỉ Email:</label>
		<input type="email" class="form-control" placeholder="Nhập vào email của bạn..." name="email">
	</div>
	<div class="form-group">
		<label>Mật khẩu</label>
		<input type="password" class="form-control" placeholder="Nhập vào mật khẩu..." name="password">
	</div>
	<a href="login.php">Đã có tài khoản? - Đăng nhập</a><br><br>
	<button type="submit" name="submit" class="btn btn-primary">Đăng kí</button>
</form>

