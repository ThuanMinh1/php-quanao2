<?php
include('../DBCONN.PHP')
?>
<?php
if (isset($_POST['themdanhmuc'])) {
    $tendanhmuc = $_POST['danhmuc'];
    $sql_insert = mysqli_query($link, "INSERT INTO dmsanpham(ten_dm) values ('$tendanhmuc')"); //câu truy vấn của thêm
}elseif(isset($_POST['capnhatdanhmuc'])){
    $id_post_capnhat = $_POST['id_danhmuc'];
     $tendanhmuc = $_POST['danhmuc'];
    $sql_update = mysqli_query($link, "UPDATE dmsanpham set ten_dm = '$tendanhmuc' where id_dm = '$id_post_capnhat' "); //câu truy vấn của cập nhật
    header('location: xldanhmuc.php' );
}
if (isset($_GET['xoa'])) {
    $id = $_GET['xoa'];
    $sql_xoa = mysqli_query($link,"DELETE FROM dmsanpham where id_dm = '$id' "); // câu truy vấn của xóa 
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
            <div class="col-md-4">
                    <h4> cập nhật danh mục</h4>
                     <form action="" method="POST">
                    <label>tên danh mục</label>
                        <input type="text" class="form-control" name="danhmuc" value="<?php echo $row_capnhat['ten_dm'] ?>">
                        <br>
                        <input type="hidden" class="form-control" name="id_danhmuc" value="<?php echo $row_capnhat['id_dm'] ?>">
                        <br>
                        <br>
                        <input type="submit" name="capnhatdanhmuc" value="cập nhật danh mục" class="btn btn-success">
                    </form>
            </div>
            <?php
                }else{
            ?>
                <div class="col-md-4">
                <form action="" method="POST">
                    <h4> thêm danh mục</h4>
                    <label for="">tên danh mục</label>
                    <input type="text" class="form-control" name="danhmuc" placeholder="tên danh mục"><br>
                    <input type="submit" name="themdanhmuc" value="thêm danh mục" class="btn btn-success">
                </form>
            </div>
            <?php
             }
            ?>


            <div class="col-md-8">
                <h4>liệt kê danh mục</h4>
                <?php
                $sql_select = mysqli_query($link, "SELECT * FROM dmsanpham order by id_dm desc ");
                ?>
                <table class="table table-responsive table-bordered">
                    <tr>
                        <th> thứ tự</th>
                        <th> tên danh mục</th>
                        <th> quản lý </th>
                    </tr>
                    <?php
                    $i = 0;
                    while ($rows = mysqli_fetch_array($sql_select)) {
                        $i++;
                    ?>
                        <tr>
                            <td>
                                <?php echo $i ?>
                            </td>
                            <td><?= $rows['ten_dm'] ?></td>
                            <td> <a href="?xoa=<?php echo $rows['id_dm'] ?>"> xóa </a> || <a href="?quanly=capnhat&id=<?php echo $rows['id_dm'] ?>"> cập nhật</a></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
            <h3> <a href="index.php"> quay lại trang admin</h3>
        </div>
    </div>
</body>

</html>