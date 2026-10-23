<?php

include("connect.php");

$sql="SELECT * FROM hoadon";

$result=mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html lang="vi">
<head>

<meta charset="UTF-8">

<title>Hóa đơn</title>

<link rel="stylesheet" href="style.css">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>

<body>

<?php include("includes/sidebar.php"); ?>

<div class="main">

<?php include("includes/topbar.php"); ?>

<h2>Quản lý hóa đơn</h2>

<br>

<button class="btn">+ Tạo hóa đơn</button>

<table>

<tr>

<th>Mã</th>

<th>Mã KH</th>

<th>Ngày lập</th>

<th>Tổng tiền</th>

<th>Trạng thái</th>

</tr>

<?php while($row=mysqli_fetch_assoc($result)){ ?>

<tr>

<td><?php echo $row['maHD']; ?></td>

<td><?php echo $row['maKH']; ?></td>

<td><?php echo $row['ngayLap']; ?></td>

<td><?php echo number_format($row['tongTien']); ?>đ</td>

<td><?php echo $row['trangThai']; ?></td>

</tr>

<?php } ?>

</table>

</div>

</body>
</html>