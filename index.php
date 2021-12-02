<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<h1>
	Đây là trang chủ
</h1>
	<?php 
	$ket_noi=mysqli_connect('localhost','root','','j2school');
	mysqli_set_charset($ket_noi,'utf8');
	$sql="select * from j2school_crud";
	$ket_qua= mysqli_query($ket_noi,$sql);
	?>

	<a href="form_crud.php">Thêm bài viết tại đây</a>
	 <table border="1" width="100%">
	 	<tr>
	 		<th>Mã</th>
	 		<th>Tiêu đề</th>
	 		<th>Ảnh</th>
	 	</tr>
	 	<?php foreach ($ket_qua as $tin_tuc){ ?>
	 		<tr>
	 			<td><?php echo $tin_tuc['ID'] ?></td>
	 			<td>
	 				<a href="show.php?ma=<?php echo $tin_tuc['ID']?>"><?php echo $tin_tuc['TIEU_DE'] ?></a>
	 			</td>
	 			<td> <img height="100" src="<?php echo $tin_tuc['ANH'] ?>" >
	 				</td>
	 			
	 		</tr>
	 	<?php } ?> 
	 	
	 </table>
</body>
</html>