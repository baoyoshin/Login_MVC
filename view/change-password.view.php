<?php
$info = $data['info'];
?>
<div class="home">
	<ul class="nav">
		<li class="nav-item">
			<a class="nav-link active" href="home.php">Trang chủ</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="change-info.php"><?=$info['fullname']?></a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="status.php">Đăng trạng thái</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="change-password.php">Đổi mật khẩu</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="logout.php">Đăng xuất</a>
		</li>
	</ul>
</div>
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
<form action="change-password.php" method="POST">
	<div class="form-group">
		<label>Mật khẩu cũ:</label>
		<input type="password" class="form-control" placeholder="Nhập vào mật khẩu cũ..." name="oldPass">
	</div>
	<div class="form-group">
		<label>Mật khẩu mới:</label>
		<input type="password" class="form-control" placeholder="Nhập vào mật khẩu mới..." name="newPass1">
	</div>
	<div class="form-group">
		<label>Mật khẩu mới (nhập lại):</label>
		<input type="password" class="form-control" placeholder="Nhập vào mật khẩu mới..." name="newPass2">
	</div>
	<button type="submit" name="submit" class="btn btn-primary">Đổi mật khẩu</button>
</form>