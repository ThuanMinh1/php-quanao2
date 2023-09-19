<style type="text/css">
    /* table{
        margin: auto;
    }
    .menu{
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
include('../DBCONN.PHP');
$sql = "SELECT * FROM sanpham order by sanpham_id asc";
$result = mysqli_query($link, $sql);
$smt = mysqli_num_rows($result);
?>
<?php
echo "số mẫu tin: $smt ";
?>
<br>
<!-- <div class="menu"> 
    <a href="admin.php"><h2> admin </h2></a>
    <a href="donhang.php"><h2> xem đơn hàng </h2></a>
</div> -->
<h4> <a style="text-align: center;" href="index.php">quay lại trang admin</a></h4>
<table border="1" width="100%">
    <tr>
        <th>stt</th>
        <th>id </th>
        <th>tên sản phẩm </th>
        <th>ảnh sản phẩm </th>
        <th>giá </th>
        <th> cập nhật sản phẩm </th>
        <th> xóa sản phẩm </th>
    </tr>
    <?php
    $i = 0;
    while ($row = mysqli_fetch_array($result)) {
        $i = $i + 1;

    ?>
        <tr>
            <td><?= $i ?></td>
            <td><?= $row['sanpham_id'] ?></td>
            <td><?= $row['ten_sp'] ?></td>
            <td><img src="img/png/<?php echo $row['anh_sp'] ?>" width="100" height="70"> </td>
            <td><?= $row['gia_sp'] ?></td>
            <?php

            echo '<td align="center" valign="middle"> <a href="update.php?id=' . $row['sanpham_id'] . '"         >cập nhật </td> </a>';
            echo ' <td align="center" valign="middle"> <a href="xoa.php?id=' . $row['sanpham_id'] . '"         >xóa </td> </a>';

            ?>
        </tr>
    <?php
    }
    ?>
</table>