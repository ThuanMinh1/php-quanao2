
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->


    <title>giỏ hàng</title>
    <style type="text/css">
        table th{
            background-color: green;
            color: white;
            text-align: center;
        }
        .btn{
            background-color: green;
            color: white;
        }
        .sanpham > td{
            text-align: center;
        }
        .giohang{
            margin-top: 50px;
        }
        .khachhang{
            margin-left: 400px;
            margin-top: 50px;
            margin-bottom: 50px;

        }
        .footer{
            margin-top: 50px;
        }
    </style>
</head>
<body>
<?php
include('DBCONN.PHP');

?>
<?php
include('menutop.php');
?>
<?php
if (isset($_POST['themgiohang'])) {
    $tensanpham = $_POST['tensanpham'];
    $sanpham_id = $_POST['sanpham_id'];
    $giasanpham = $_POST['giasanpham'];
    $hinhanh = $_POST['hinhanh'];
    $soluong = $_POST['soluong'];

    $sql_select_giohang = mysqli_query($link,"SELECT * FROM tbl_giohang where sanpham_id = '$sanpham_id' ");
    $count = mysqli_num_rows($sql_select_giohang);
    if($count>0){
        $row_sanpham = mysqli_fetch_array($sql_select_giohang);
        $soluong = $row_sanpham['soluong']+1;
        $sql_giohang = " UPDATE tbl_giohang set soluong = '$soluong' where sanpham_id ='$sanpham_id' ";
    }else{
        $soluong = $soluong;
        $sql_giohang = "insert into tbl_giohang(tensanpham,sanpham_id,giasanpham,hinhanh,soluong) VALUES('$tensanpham','$sanpham_id','$giasanpham','$hinhanh','$soluong') ";
    }
    $insert_row = mysqli_query($link,$sql_giohang);
    if( $insert_row==0){
        header('location:all.php$id='.$sanpham_id);
    }
}elseif (isset($_POST['capnhatsoluong'])) {


    for ($i=0; $i < count($_POST['product_id']); $i++){
        $sanpham_id = $_POST['product_id'][$i];
        $soluong = $_POST['soluong'][$i];
        if ($soluong<=0) {
            $sql_delete = mysqli_query($link,"DELETE  from tbl_giohang  where sanpham_id = '$sanpham_id'");
        }else{
            $sql_update = mysqli_query($link,"UPDATE tbl_giohang set soluong = '$soluong' where sanpham_id = '$sanpham_id'");
        }
    }

}elseif (isset($_GET['xoa'])) {
    $id = $_GET['xoa'];
    $sql_delete = mysqli_query($link,"DELETE  from tbl_giohang  where giohang_id = '$id'");
}elseif(isset($_POST['thanhtoan'])){
    $name =  $_POST['name'];
    $phone =  $_POST['phone'];
    $email =  $_POST['email'];
    $note =  $_POST['note'];
    $address =  $_POST['address'];
    $giaohang = $_POST['giaohang'];
    $sql_khachhang = mysqli_query($link,"insert into tbl_khachhang(name,phone,email,note,address,giaohang)VALUES('$name','$phone','$email','$note','$address','$giaohang')");

}

?>

<?php
$sql_giohang = mysqli_query($link,"SELECT * FROM tbl_giohang order by giohang_id ASC ");

?>
<div class="giohang">
    <table border='2' cellspacing='1' cellpadding='1' width="800" align="center">
        <tr>
            <th>stt</th>
            <!-- <th>id</th> -->
            <th>tên sản phẩm</th>
            <th>giá sản phẩm</th>
            <th>giá tổng</th>
            <th>số lượng</th>
            <th>hình</th>
            <th>xóa sản phẩm</th>
        </tr>
        <?php
        $total = 0;
        $i = 0;
        while ($rows_giohang = mysqli_fetch_array($sql_giohang))
        {
            $i++;
            $subtotal = $rows_giohang['soluong']*$rows_giohang['giasanpham'];
            $total += $subtotal;
            ?>
            <div class="sanpham">
                <form  action="" method="post">
                    <tr>
                        <td> <?php  echo $i ?></td>

                        <td width="600"> <?php echo $rows_giohang['tensanpham'] ?>  </td>
                        <td><?php echo $rows_giohang['giasanpham'] ?></td>
                        <td width="400" align="center"><?php echo number_format($subtotal) ?></td>
                        <td><input type="number" name="soluong[]" min="1" value="<?php echo $rows_giohang['soluong']?>"></td>

                        <input type="hidden" name="product_id[]" min="1" value="<?php echo $rows_giohang['sanpham_id']?>">

                        <td><img src="<?php echo $rows_giohang['hinhanh'] ?>"width="100" height="70"> </td>
                        <td width="400" align="center"> <a href="?xoa=<?php echo$rows_giohang['giohang_id'] ?>"> xóa </td>
                    </tr>
            </div>




            <?php
        }
        ?>
        <tr>
            <td colspan="8">tổng tiền: <?php echo number_format($total) ?></td>
        </tr>
        <tr>
            <td colspan="6"><input class="btn" type="submit" name="capnhatsoluong" value="cập nhật giỏ hàng" ></td>
            <td colspan="2"><a href="all.php"> tiếp tục mua hàng</td>
        </tr>
    </table>
    </form>
</div>
</body>
</html>
