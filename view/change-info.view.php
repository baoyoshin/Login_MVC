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
<h2>Thông tin của bạn:</h2>
<p>Họ tên: <?=$info['fullname']?></p>
<p>Email: <?=$info['email']?></p>
<p>Nơi ở: <?=$info['location']?></p>
<p>Công việc: <?=$info['work']?></p>
<form action="change-info.php" method="GET">
	<div class="form-group">
		<label>Họ và tên:</label>
		<input type="text" class="form-control" placeholder="Nhập vào họ tên..." name="name">
	</div>
	<div class="form-group">
		<label>Nơi ở:</label>
		<input type="text" class="form-control" placeholder="Nhập vào nơi ở..." name="location">
	</div>
	<div class="form-group">
		<label>Việc làm:</label>
		<input type="text" class="form-control" placeholder="Nhập vào việc làm..." name="work">
	</div>
	<button type="submit" name="submit" class="btn btn-primary">Cập nhật thông tin</button>
</form>