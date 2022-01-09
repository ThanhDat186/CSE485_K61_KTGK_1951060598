<?php
   
   $ma = $_GET['madg'];

   // Bước 01: Kết nối Database Server
   $conn = mysqli_connect('localhost','root','','1951060598_libraries');
   if(!$conn){
       die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
   }
   // Bước 02: Thực hiện truy vấn
   $sql = "SELECT * FROM docgia where madg='$ma'";

   $result = mysqli_query($conn,$sql); //Nó chỉ ra về 1 bản ghi, mà mình chỉ cần lấy 1 bản ghi thôi

// Bước 03: Xử lý kết quả
   if(mysqli_num_rows($result) > 0){
     $row = mysqli_fetch_assoc($result);
   
      }

// Bước 04: Đóng kết nối
mysqli_close($conn);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
<div class="container">
        <h5 class="text-center text-primary mt-5">Sửa thông tin người đọc</h5>
        <form action="process_update.php" method="post">
        <div class="form-group">
                <label for="madg">Mã đọc giả</label>
                <input type="text" class="form-control" readonly id="madg" name="madg" placeholder="Nhập mã đọc giả" value="<?php echo $row['madg']; ?>">
            </div>
            <div class="form-group">
                <label for="hoten">Họ và tên</label>
                <input type="text" class="form-control" id="hoten" name="hoten" placeholder="Nhập họ tên" value="<?php echo $row['hovaten']; ?>"> 
            </div>
            <div class="form-group">
                <label for="gioitinh">Giới tính</label>
                <input type="text" class="form-control" id="gioitinh" name="gioitinh" placeholder="Nhập giới tính" value="<?php echo $row['gioitinh']; ?>"> 
            </div>
            <div class="form-group">
                <label for="namsinh">Năm Sinh</label>
                <input type="date" class="form-control" id="namsinh" name="namsinh" placeholder="Nhập năm sinh" value="<?php echo $row['namsinh']; ?>">
            </div>
            
            <div class="form-group">
                <label for="nghenghiep">Nghề Nghiệp</label>
                <input type="text" class="form-control" id="nghenghiep" name="nghenghiep" placeholder="Nhập nghề nghiệp"value="<?php echo $row['nghenghiep']; ?>">
            </div>

            <div class="form-group">
                <label for="ngaycapthe">Ngày cấp thẻ</label>
                <input type="date" class="form-control" id="ngaycapthe" name="ngaycapthe" value="<?php echo $row['ngaycapthe']; ?>">
            </div>
            <div class="form-group">
                <label for="ngayhethan">Ngày hết hạn</label>
                <input type="date" class="form-control" id="ngayhethan" name="ngayhethan"value="<?php echo $row['ngayhethan']; ?>" >
                
            </div>
            <div class="form-group">
                <label for="diachi">Địa chỉ</label>
                <input type="text" class="form-control" id="diachi" name="diachi" placeholder="Nhập địa chỉ"value="<?php echo $row['diachi']; ?>">
               
            </div>
            
            
            
            <button type="submit" class="btn btn-primary mt-3">Sửa thông tin người đọc</button>
        </form>
    </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>  
</body>
</html>