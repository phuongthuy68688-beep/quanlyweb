<?php
include("connect.php");

$mon=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM mon"));

$kh=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM khachhang"));

$hd=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM hoadon"));

$tong=mysqli_fetch_assoc(mysqli_query($conn,"SELECT SUM(tongTien) as tong FROM hoadon"));
?>

<!DOCTYPE html>
<html lang="vi">
<head>

<meta charset="UTF-8">

<title>Thống kê</title>

<link rel="stylesheet" href="style.css">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>

<body>

<?php include("includes/sidebar.php"); ?>

<div class="main">

<?php include("includes/topbar.php"); ?>

<h2>Thống kê</h2>

<div class="cards">

<div class="card">
<h2><?php echo $mon; ?></h2>
<p>Món</p>
</div>

<div class="card">
<h2><?php echo $kh; ?></h2>
<p>Khách hàng</p>
</div>

<div class="card">
<h2><?php echo $hd; ?></h2>
<p>Hóa đơn</p>
</div>

<div class="card">
<h2><?php echo number_format($tong['tong']); ?>đ</h2>
<p>Doanh thu</p>
</div>

</div>

</div>

</body>
</html>