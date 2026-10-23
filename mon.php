<?php
include("connect.php");

$sql = "SELECT * FROM mon";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="vi">
<head>

<meta charset="UTF-8">

<title>Quản lý món</title>

<link rel="stylesheet" href="style.css">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>

<body>

<?php include("includes/sidebar.php"); ?>

<div class="main">

<?php include("includes/topbar.php"); ?>

<h2>Quản lý món</h2>

<br>

<button class="btn">+ Thêm món</button>

<table>

<tr>

<th>Mã</th>

<th>Tên món</th>

<th>Giá</th>

<th>Loại</th>

<th>Sửa</th>

<th>Xóa</th>

</tr>

<?php while($row = mysqli_fetch_assoc($result)){ ?>

<tr>

<td><?php echo $row['maMon']; ?></td>

<td><?php echo $row['tenMon']; ?></td>

<td><?php echo number_format($row['gia']); ?>đ</td>

<td><?php echo $row['loai']; ?></td>

<td><button>Sửa</button></td>

<td><button>Xóa</button></td>

</tr>

<?php } ?>

</table>

</div>

</body>

</html>