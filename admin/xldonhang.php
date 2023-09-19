<?php
include('../DBCONN.PHP')
?>
<?php
//if (isset($_POST['themdanhmuc'])) {
//    $tendanhmuc = $_POST['danhmuc'];
//    $sql_insert = mysqli_query($link, "INSERT INTO dmsanpham(ten_dm) values ('$tendanhmuc')"); //câu truy vấn của thêm
//}elseif(isset($_POST['capnhatdanhmuc'])){
//    $id_post_capnhat = $_POST['id_danhmuc'];
//    $tendanhmuc = $_POST['danhmuc'];
//    $sql_update = mysqli_query($link, "UPDATE dmsanpham set ten_dm = '$tendanhmuc' where id_dm = '$id_post_capnhat' "); //câu truy vấn của cập nhật
//    header('location: xldanhmuc.php' );
//}
//if (isset($_GET['xoa'])) {
//    $id = $_GET['xoa'];
//    $sql_xoa = mysqli_query($link,"DELETE FROM dmsanpham where id_dm = '$id' "); // câu truy vấn của xóa
//}
//?>

<?php
    if (isset($_POST['xoa'])){
        $id_xoa = $_POST['xoa'];
        $sql_xoa = mysqli_query($link,"Delete FROM tbl_donhang WHERE donhang_id = '$id_xoa' ");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>danh mục sản phẩm</title>
    <link href="../assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
</head>

<body>
<div class="container">
    <div class="row">
        <?php
        if (isset($_GET['quanly']) == 'capnhat') {
            $id_capnhat = $_GET['id'];
            $sql_capnhat = mysqli_query($link,"SELECT * FROM dmsanpham where id_dm = '$id_capnhat'");
            $row_capnhat = mysqli_fetch_array($sql_capnhat);
            ?>

            <?php
        }else{
            ?>
<!--            <div class="col-md-4">-->
<!--                <form action="" method="POST">-->
<!--                    <h4> thêm danh mục</h4>-->
<!--                    <label for="">tên danh mục</label>-->
<!--                    <input type="text" class="form-control" name="danhmuc" placeholder="tên danh mục"><br>-->
<!--                    <input type="submit" name="themdanhmuc" value="thêm danh mục" class="btn btn-success">-->
<!--                </form>-->
<!--            </div>-->
            <?php
        }
        ?>
        <div class="col-md-8">
            <h4>liệt kê đơn hàng</h4>
            <?php
            $sql_select = mysqli_query($link, " SELECT * FROM tbl_donhang, tbl_khachhang where
 tbl_donhang.khachhang_id = tbl_khachhang.khachhang_id  order by tbl_donhang.donhang_id ");
            ?>
            <table class="table table-responsive table-bordered">
                <tr>
                    <th> thứ tự </th>
                    <th> tên sản phẩm</th>
                    <th> số lượng </th>
                    <th> mã hàng </th>
                    <th> tên khách hàng </th>
                    <th> ngày đặt </th>
                    <th> xóa</th>
                    <th> cập nhật </th>
                </tr>
                <?php
                $i = 0;
                while ($rows_donhang = mysqli_fetch_array($sql_select)) {
                    $i++;
                    print_r($rows_donhang['donhang_id']);
                    ?>
                    <tr>
                        <td> <?php echo $i ?> </td>
                        <td> <?php echo $rows_donhang['ten_sp'] ?></td>
                        <td> <?php echo $rows_donhang['soluong_donhang'] ?></td>
                        <td> <?php echo $rows_donhang['mahang'] ?></td>
                        <td> <?php echo $rows_donhang['name'] ?></td>
                        <td> <?php echo $rows_donhang['ngaythang'] ?></td>
<!--                        <td>-->
<!--                            <a href="?xoa=--><?php //echo $rows_donhang['donhang_id']?><!-- "> xóa </a>-->
<!--                        </td>-->
                        <form method="post" action="">
                            <td>
                                <button name="xoa" value="<?php echo $rows_donhang['donhang_id']?>"> xóa </button>
                            </td>
                            <td>
                                <button name="capnhat" value="<?php echo $rows_donhang['donhang_id']?>">xem đơn hàng </button>
                            </td>
                        </form>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
    </div>
</div>
</body>

</html>