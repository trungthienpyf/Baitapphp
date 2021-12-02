<?php 

$tieu_de=$_POST['tieu_de'];
$noi_dung=$_POST['noi_dung'];
$anh=$_POST['anh'];

$ket_noi=mysqli_connect('localhost','root','','j2school');
mysqli_set_charset($ket_noi,'utf8');

$sql="insert into j2school_crud(TIEU_DE,NOI_DUNG,ANH)
values('$tieu_de','$noi_dung','$anh')";

mysqli_query($ket_noi,$sql);

$loi=mysqli_error($ket_noi);

mysqli_close($ket_noi);