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
<div class="info">
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
	<center><h5>Chào mừng <?=$info['fullname'];?> đã trở lại!</h5></center>
	<h2>Bài đăng mới:</h2>
	<?php $status = $data['status'] ?>
	<?php foreach ($status as $item): ?>
	<div class="status">
		<!-- <?php echo $status; ?> -->
			<h4><?= $item['fullname'];?></h4>
			<h5>Email: <?=$item['email']?></h5>
			<small>Đăng lúc: <?=$item['time_create_status']?></small>
			<p><?=$item['content']?></p>
		
	</div>
	<?php endforeach?>
</div>
