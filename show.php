<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php  
	$ma=$_GET['ma'];
	$ket_noi=mysqli_connect('localhost','root','','j2school');
	mysqli_set_charset($ket_noi,'utf8');
	$sql="select * from j2school_crud where id =$ma";
	$ket_qua= mysqli_query($ket_noi,$sql);
	$bai_tin_tuc=mysqli_fetch_array($ket_qua);
	?>
	<h1>
		<?php echo $bai_tin_tuc['TIEU_DE']?>
	</h1>
	<p>
		<?php echo nl2br($bai_tin_tuc['NOI_DUNG'])?>
	</p>
	<img src="<?php echo $bai_tin_tuc['ANH']?>" >
</body>
</html>