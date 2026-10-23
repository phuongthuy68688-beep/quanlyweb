<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("connect.php");

$sql = "SELECT * FROM khachhang";
$result = mysqli_query($conn, $sql);

if(!$result){
    die(mysqli_error($conn));
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>

<meta charset="UTF-8">
<title>Khách hàng</title>

<link rel="stylesheet" href="style.css">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>

<body>

<?php include("includes/sidebar.php"); ?>

<div class="main">

<?php include("includes/topbar.php"); ?>

<h2>Quản lý khách hàng</h2>

<br>

<button class="btn">+ Thêm khách hàng</button>

<table>

<tr>

<th>Mã</th>

<th>Họ tên</th>

<th>SĐT</th>

<th>Điểm</th>

<th>Sửa</th>

<th>Xóa</th>

</tr>

<?php while($row=mysqli_fetch_assoc($result)){ ?>

<tr>

<td><?php echo $row['maKH']; ?></td>

<td><?php echo $row['hoTen']; ?></td>

<td><?php echo $row['sdt']; ?></td>

<td><?php echo $row['diemTichLuy']; ?></td>

<td><button>Sửa</button></td>

<td><button>Xóa</button></td>

</tr>

<?php } ?>

</table>

</div>

</body>
</html>