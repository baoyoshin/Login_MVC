<?php
if(($view!='home')&&($view != 'status')){
	if($view != 'change-info'&&$view != 'change-password'){
		if(isset($_SESSION['id'])){
			header('Location: home.php');
		}
	}
}
if($view=='home'||$view =='status'){
	if(!isset($_SESSION['id']))
		header('Location: index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $title?></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container">
		<h1><?php echo $title?></h1>
		<?php
		include_once "$view.view.php";
		?>
		<div class="footer"><a href="home.php">Trang chủ</a> | Design by Lương Trần Gia Bảo</div>
	</div>
</body>
</html>
