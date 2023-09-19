<style>
     /* .menu{
            border: 1px solid black;
            width: 100%;
            height: auto;
            background-color: rgb(76, 175, 80, 0.4);

        }
        .menu h2 {
            display: inline;
            padding: 8px 20px;
        } */
</style>
<?php
include ('../DBCONN.PHP');
session_start();
$id = $_GET['id'];
$sql = "SELECT * FROM sanpham where sanpham_id = '".$id."' ";
$result = mysqli_query($link,$sql);
$row = mysqli_fetch_array($result);
$_SESSION['id'] = $row['sanpham_id']; //gán seeson của id của sản phẩm
?>


<table border="1">

    <?php

    ?>
        <tr>
        <td>id sản phẩm</td>
            <td><?=$row['sanpham_id']?></td>
            <td> <a href="formupdate.php?id=sanpham_id">update  </a> </td>
        </tr>
    <tr>
        <td>tên sản phẩm</td>
            <td><?=$row['ten_sp']?></td>
        <td> <a href="formupdate.php?id=ten_sp">update  </a> </td>
    </tr>
    <tr>
        <td>ảnh sản phẩm </td>
            <td> <?=$row['anh_sp']?> </td>
        <td> <a href="formupdate.php?id=anh_sp">update  </a> </td>    </tr>
    <tr>
        <td>giá sản phẩm</td>
            <td><?=$row['gia_sp']?></td>
        <td> <a href="formupdate.php?id=gia_sp">update  </a> </td>    </tr>
    <tr>
        <td>chi tiết sản phẩm</td>
            <td><?=$row['chi_tiet_sp']?></td>
        <td> <a href="formupdate.php?id=chi_tiet_sp">update  </a> </td>    </tr>

</table>
<h1 style="text-decoration: none;" >  <a href="index.php"> quay lại trang admin </a></h1>

