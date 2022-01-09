<?php
    $madocgia = $_GET['madg'];

    $conn = mysqli_connect('localhost','root','','1951060598_libraries');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    $sql = "DELETE FROM DOCGIA where madg='$madocgia'";

    $number = mysqli_query($conn,$sql);

    if($number > 0){
        header("location: index.php");
    }else{
        header("location: error.php");
    }
?>



