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
	?><div class="alert alert-success" role="alert">
		<?php 
		echo $_SESSION['show'];
		unset($_SESSION['show']);
		?>
	</div>
	<?php
endif
?>
<br>
<h2>Bài đăng mới:</h2>
<form action="status.php" method="POST">
	<div class="form-group">
		<textarea class="form-control" rows="3" name="content"></textarea>
	</div>
	<button type="submit" class="btn btn-primary" name="submit">Đăng trạng thái</button>
</form>
