<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->


    <title>giỏ hàng</title>
    <style type="text/css">
        table th {
            background-color: green;
            color: white;
            text-align: center;
        }

        .btn {
            background-color: green;
            color: white;
        }

        .sanpham>td {
            text-align: center;
        }

        .giohang {
            margin-top: 50px;
        }

        .khachhang {
            margin-left: 400px;
            /* margin-top: 50px; */
            margin-bottom: 50px;

        }

        .footer {
            margin-top: 50px;
        }

        h2 {
            margin-left: 400px;
            font-weight: 500;
            font-style: italic;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            color: #FF0000;
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

        $sql_select_giohang = mysqli_query($link, "SELECT * FROM tbl_giohang where sanpham_id = '$sanpham_id' ");
        $count = mysqli_num_rows($sql_select_giohang);
        if ($count > 0) { 
            $row_sanpham = mysqli_fetch_array($sql_select_giohang);
            $soluong = $row_sanpham['soluong'] + 1;
            $sql_giohang = " UPDATE tbl_giohang set soluong = '$soluong' where sanpham_id ='$sanpham_id' ";
        } else {
            $soluong = $soluong;
            $sql_giohang = "insert into tbl_giohang(tensanpham,giasanpham,hinhanh,soluong,sanpham_id) VALUES('$tensanpham','$giasanpham','$hinhanh','$soluong','$sanpham_id') ";
        }
        $insert_row = mysqli_query($link, $sql_giohang);
        if ($insert_row == 0) { 
            header('location:all.php$id=' . $sanpham_id);
        }
    } elseif (isset($_POST['capnhatsoluong'])) { //phần cập nhật lại số lượng của sản phẩm


        for ($i = 0; $i < count($_POST['product_id']); $i++) {
            $sanpham_id = $_POST['product_id'][$i];
            $soluong = $_POST['soluong'][$i];
            if ($soluong <= 0) {
                $sql_delete = mysqli_query($link, "DELETE  from tbl_giohang  where sanpham_id = '$sanpham_id'");
            } else {
                $sql_update = mysqli_query($link, "UPDATE tbl_giohang set soluong = '$soluong' where sanpham_id = '$sanpham_id'");
            }
        }
    } elseif (isset($_GET['xoa'])) {
        $id = $_GET['xoa'];
        $sql_delete = mysqli_query($link, "DELETE  from tbl_giohang  where giohang_id = '$id'");
    } elseif (isset($_POST['thanhtoan'])) { //đây là biến khai báo thông tin khách hàng 
        $name =  $_POST['name'];
        $phone =  $_POST['phone'];
        $email =  $_POST['email'];
        $note =  $_POST['note'];
        $address =  $_POST['address'];
        $giaohang = $_POST['giaohang'];
        $sql_khachhang = mysqli_query($link, "insert into tbl_khachhang(name,phone,email,note,address,giaohang)VALUES('$name','$phone','$email','$note','$address','$giaohang')");
        if ($sql_khachhang) {
            $sql_select_khachhang = mysqli_query($link, "SELECT * FROM tbl_khachhang order by khachhang_id desc limit 1");
            $mahang = rand(0, 9999);
            $row_khachhang = mysqli_fetch_array($sql_select_khachhang);
            $khachhang_id = $row_khachhang['khachhang_id'];
            for ($i = 0; $i < count($_POST['thanhtoan_product_id']); $i++) { //đây là phần số lượng sản phẩm trong giỏ hàng
                $sanpham_id = $_POST['thanhtoan_product_id'][$i];
                $soluong = $_POST['thanhtoan_soluong'][$i];
                $sql_donhang = mysqli_query($link, "insert into tbl_donhang(sanpham_id,khachhang_id,soluong_donhang,mahang)VALUES('$sanpham_id','$khachhang_id','$soluong','$mahang')");
                $sql_delete_thanhtoan = mysqli_query($link, "DELETE  from tbl_giohang  where sanpham_id = '$sanpham_id'");
            }
        }
    }
    ?>

    <?php
    $sql_giohang = mysqli_query($link, "SELECT * FROM tbl_giohang order by giohang_id ASC ");

    ?>
    <div class="giohang">
        <table border='2' cellspacing='1' cellpadding='1' width="800" align="center">
            <tr>
                <th>stt</th>
                <th>id</th>
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
            while ($rows_giohang = mysqli_fetch_array($sql_giohang)) {
                $i++;
                $subtotal = $rows_giohang['soluong'] * $rows_giohang['giasanpham'];
                $total += $subtotal;
            ?>
                <div class="sanpham">
                    <form action="" method="post">
                        <tr>
                            <td> <?php echo $i ?></td>
                            <td width="600" align="center" valign="middle">
                                <p>sản phẩm</p> <?php echo $rows_giohang['sanpham_id'] ?>
                            </td>
                            <td width="600"> <?php echo $rows_giohang['tensanpham'] ?> </td>
                            <td><?php echo $rows_giohang['giasanpham'] ?></td>
                            <td width="400" align="center"><?php echo number_format($subtotal) ?></td>
                            <td><input type="number" name="soluong[]" min="1" value="<?php echo $rows_giohang['soluong'] ?>"></td>

                            <input type="hidden" name="product_id[]" min="1" value="<?php echo $rows_giohang['sanpham_id'] ?>">

                            <td><img src="img/png/<?php echo $rows_giohang['hinhanh'] ?>" width="100" height="70"> </td>
                            <td width="400" align="center"> <a href="?xoa=<?php echo $rows_giohang['giohang_id'] ?>"> xóa </td>
                        </tr>
                </div>




            <?php
            }
            ?>
            <tr>
                <td colspan="8">tổng tiền: <?php echo number_format($total) ?></td>
            </tr>
            <tr>
                <td colspan="6"><input class="btn" type="submit" name="capnhatsoluong" value="cập nhật giỏ hàng"></td>
                <td colspan="2"><a href="all.php"> tiếp tục mua hàng</td>
            </tr>
        </table>
        </form>
    </div>




    <!-- phần này là phần của thông tin khách hàng -->
    <h2> thông tin của khách hàng </h2>
    <form method="post" action="">
        <div class="khachhang">
            <table>
                <tr>
                    <td>điền tên khách hàng</td>
                    <td><input type="text" name="name" placeholder="điền tên " required=""> </td>
                    <td style="color:#FF0000;font-size:large;">*</td>
                </tr>
                <tr>
                    <td>điền số điện thoại</td>
                    <td><input type="text" name="phone" placeholder="số điện thoại " required=""> </td>
                    <td style="color:#FF0000;font-size:large;">*</td>
                </tr>
                <tr>
                    <td>điền địa chỉ</td>
                    <td><input type="text" name="address" placeholder="địa chỉ " required=""> </td>
                    <td style="color:#FF0000;font-size:large;">*</td>
                <tr>
                    <td>điền email</td>
                    <td> <input type="text" name="email" placeholder="email " required=""> </td>
                    <td style="color:#FF0000;font-size:large;">*</td>
                </tr>
                <tr>
                    <td>nội dung</td>
                    <td> <textarea placeholder="ghi chú" name="note" required=""> </textarea></td>
                </tr>
                <tr>
                    <td>hình thức</td>
                    <td>
                        <select name="giaohang">
                            <option>chọn hình thức giao hàng</option>
                            <option value="1">thanh toán atm</option>
                            <option value="0">nhận tiện tại nhà</option>
                        </select>
                    </td>
                    <td style="color:#FF0000;font-size:large;">*</td>
                </tr>

                <tr>
                    <?php
                    $sql_lay_giohang = mysqli_query($link, "SELECT * FROM tbl_giohang order by giohang_id desc ");
                    while ($row_thanhtoan = mysqli_fetch_array($sql_lay_giohang)) {
                    ?>


                        <input type="hidden" name="thanhtoan_soluong[]" value="<?php echo $row_thanhtoan['soluong'] ?>">

                        <input type="hidden" name="thanhtoan_product_id[]" value="<?php echo $row_thanhtoan['sanpham_id'] ?>">


                    <?php
                    }
                    ?>

                    <td> <input type="submit" name="thanhtoan" value="thanh toán"></td>
                </tr>
                <tr>
                    <td>
                        <p style="color:blue;"> đối tượng có dấu <span style="color:#FF0000;font-size:large;">*</span> phải nhập dữ liệu </p>
                    </td>
                </tr>
            </table>
    </form>
    </div>
    <div class="footer">
        <?php
        include('footer.php');
        ?>
    </div>
</body>

</html>