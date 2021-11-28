<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
<form action="process.php" method="post">
	Tên
	<br>
	<input type="text" name="name" placeholder="Hãy nhập tên">
	<br>
	Giới tính
	<input type="radio" name="gioi_tinh" value="nam">Nam
	<input type="radio" name="gioi_tinh" value="nữ">Nữ
	<br>
	Email
	<input type="email" name="email" placeholder="Hãy nhập email">
	<br>
	Mật khẩu
	<input type="password" name="password" placeholder="Hãy nhập Mật khẩu">
	<br>
	Ngày sinh
	<input type="date" name="date">
	<br>
	Địa chỉ
	<input type="text" name="address" placeholder="Hãy nhập ngày Địa chỉ">
	<br>
	Sở thích
	<select name="hobby">
		<option>Xem phim</option>
		<option>Nghe nhạc</option>
		<option>Chơi game</option>
	</select>
	<br>
	<button name="submit">submit</button>
</form>

	
</body>
</html>