<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hệ thống quản lý thư viện</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<a style="text-decoration: none" href="insert.php">Thêm thông tin người đọc</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Mã độc giả</th>
      <th scope="col">Họ và tên</th>
      <th scope="col">Giới tính</th>
      <th scope="col">Năm sinh</th>
      <th scope="col">Nghề nghiệp</th>
      <th scope="col">Ngày cấp thẻ</th>
      <th scope="col">Ngày hết hạn</th>
      <th scope="col">Địa chỉ</th>
      <th scope="col">Thêm</th>
      <th scope="col">Sửa</th>
      <th scope="col">Xóa</th>
    </tr>
  </thead>
  <tbody>
  <?php
                       
                        $conn = mysqli_connect('localhost','root','','1951060598_libraries');
                        if(!$conn){
                            die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
                        }
                        
                        $sql = "SELECT * FROM docgia";
                        $result = mysqli_query($conn,$sql);
                      
                        if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_assoc($result)){
                    ?>
                                <tr>
                                    <th scope="row"><?php echo $row['madg']; ?></th>
                                    <td><?php echo $row['hovaten']; ?></td>
                                    <td><?php echo $row['gioitinh']; ?></td>
                                    <td><?php echo $row['namsinh']; ?></td>
                                    <td><?php echo $row['nghenghiep']; ?></td>
                                    <td><?php echo $row['ngaycapthe']; ?></td>
                                    <td><?php echo $row['ngayhethan']; ?></td>
                                    <td><?php echo $row['diachi']; ?></td>
                                   
                                    
                                    <td><a style="text-decoration: none" href="update.php?madg=<?php echo $row['madg']; ?>">Sửa</td>
                                    <td><a style="text-decoration: none" href="delete.php?madg=<?php echo $row['madg']; ?>">Xóa</td>
                                </tr>
                                
                    <?php
                            }
                        }
                        // Bước 04: Đóng kết nối Database Server
                        mysqli_close($conn);
                    ?>
  </tbody>
</table>

<?php 

?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>    
</body>
</html>