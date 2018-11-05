
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
<form action="login.php" method="POST">
	<div class="form-group">
		<label>Địa chỉ Email:</label>
		<input type="email" class="form-control" placeholder="Nhập vào email của bạn..." name="email">
	</div>
	<div class="form-group">
		<label>Mật khẩu:</label>
		<input type="password" class="form-control" placeholder="Nhập vào mật khẩu..." name="password">
	</div>
	<a href="register.php">Chưa có tài khoản? - Đăng kí</a><br><br>
	<a href="forgot-password.php">Quên mật khẩu? - Khôi phục mật khẩu</a><br><br>
	<button type="submit" class="btn btn-primary" name="submit">Đăng nhập</button>
</form>
