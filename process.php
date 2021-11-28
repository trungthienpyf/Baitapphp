<?php 

$name=$_POST['name'];
echo "Tên: " .$name ."<br>";

$gender = $_POST['gioi_tinh'];

echo "Giới tính: ".$gender."<br>";

$email=$_POST['email'];
echo "Email: " .$email."<br>";

$password=$_POST['password'];
echo "Mật khẩu: " .$password."<br>";

$date=$_POST['date'];
echo "Ngày sinh: " .$date."<br>";

$address=$_POST['address'];
echo "Địa chỉ: " .$address."<br>";

$hobby=$_POST['hobby'];
echo "Sở thích: " .$hobby."<br>";
