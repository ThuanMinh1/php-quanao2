<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		.menu {
			border: 1px solid black;
			width: 100%;
			height: auto;
			background-color: rgb(76, 175, 80, 0.4);
		}

		.menu h2 {
			display: inline;
			padding: 8px 20px;
		}
	</style>
</head>

<body>


	<?php
	  include('../DBCONN.PHP');
	$sql_donhang = "SELECT * FROM tbl_donhang inner join tbl_khachhang on tbl_donhang.khachhang_id  =  tbl_khachhang.khachhang_id ";
	$result = mysqli_query($link, $sql_donhang);
	if (isset($_GET['xoa'])) {
		$id = $_GET['xoa'];
		$sql_xoa = mysqli_query($link,"DELETE from tbl_donhang WHERE khachhang_id = '$id'");
	}
	?>

	<a href="index.php"> quay lại trang chủ</a>

	<table width="100%" border="1">
		<tr>

			<th> id của khách hàng</th>
			<th> tên khách hàng</th>
			<th> email </th>
			<th> địa chỉ</th>
			<th>id của sản phẩm</th>
			<th>số lượng </th>
			<th> mã hàng</th>
			<th> thời gian đặt hàng</th>
			<th> quản lý</th>

		</tr>
		<?php

		while ($rows = mysqli_fetch_array($result)) {
		?>
			<tr>

				<td><?= $rows['khachhang_id'] ?></td>
				<td> <?=$rows['name']?></td>
				<td> <?= $rows['email'] ?></td>
				<td> <?= $rows['address'] ?></td>
				<td>
					<p> sản phẩm: </p><?= $rows['donhang_id'] ?>
				</td>
				<td> <?= $rows['soluong_donhang'] ?></td>
				<td> <?= $rows['mahang'] ?></td>

				<td><?= $rows['ngaythang'] ?> </td>
				<td> 
					<a href="?xoa=<?php  echo $rows['khachhang_id']?>">xóa</a>
				</td>
			</tr>

		<?php
		}
		?>

	</table>
</body>

</html>