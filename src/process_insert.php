<?php
if(isset($_POST['hoten'])){
$hoten = $_POST['hoten'];
}
if(isset($_POST['gioitinh'])){
    $gioitinh = $_POST['gioitinh'];
    }
if(isset($_POST['namsinh'])){
    $namsinh = $_POST['namsinh'];
    }
if(isset($_POST['nghenghiep'])){
    $nghenghiep = $_POST['nghenghiep'];
    }
if(isset($_POST['ngaycapthe'])){
    $ngaycapthe = $_POST['ngaycapthe'];
    }
if(isset($_POST['ngayhethan'])){
    $ngayhethan = $_POST['ngayhethan'];
    }
if(isset($_POST['diachi'])){
    $diachi = $_POST['diachi'];
    }

$conn = mysqli_connect('localhost','root','','1951060598_libraries');
if(!$conn){
    die("ss");
}

$sql = "INSERT INTO docgia( hovaten, gioitinh, namsinh, nghenghiep, ngaycapthe, ngayhethan, diachi) 
VALUES('$hoten','$gioitinh','$namsinh','$nghenghiep','$ngaycapthe','$ngayhethan','$diachi')";
$result = mysqli_query($conn,$sql); 
if(!$result){
    header("location: error.php"); //Chuyển hướng lỗi
}else{
    header("location: index.php"); //Chuyển hướng lại Trang Quản trị
}

?>