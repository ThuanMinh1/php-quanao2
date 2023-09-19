<!-- này để ngăn khach hang vào trang admin bằng link -->
<?php
session_start();
if (!isset($_SESSION['login'])) {
    header('location: login.php');
}
//này là phần đăng xuất admin
if (isset($_GET['dangnhap'])) {
    $dangxuat = $_GET['dangnhap'];
} else {
    $dangxuat = '';
}
if ($dangxuat == 'dangxuat') {
    session_destroy();
    header('location: login.php ');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        #title {
            padding-left: 5px;
            padding-top: 5px;
            background-color: rgb(red, green, blue);
        }

        h1 {
            text-align: center;
            background-color: blue;
            color: white;
        }

        nav {
            background-color: #47bdec;
        }

        nav a {
            display: inline-block;
            padding: 10px;
            font-size: 20px;
            color: white;
            text-decoration: none;
        }
        nav a:hover {
            background-color: #333;
        }
    </style>
</head>

<body>
    <div id="title">
        <p> xin chào admin: <?php echo $_SESSION['login'] ?>
        <h4> <a href="?dangnhap=dangxuat">đăng xuất</a></h4>
        </p>
    </div>
    <div>
        <h1> ADMIN </h1>
    </div>
    <nav>
        <a href="quantri.php"> cập nhật sản phẩm</a>
        <a href="addsp.php"> thêm sản phẩm</a>
        <a href="donhang.php"> xem đơn hàng</a>
        <a href="xldanhmuc.php"> thêm danh mục</a>
        <a href="themsp.php"> thêm sản phẩm 222</a>
        <a href="xldonhang.php"> đơn hangggggg  </a>
    </nav>
    </div>
    <?php
    include('../DBCONN.PHP');
    $sql = "SELECT * from sanpham order by sanpham_id ";
    $result = mysqli_query($link, $sql);
    // $smt = mysqli_fetch_array($result);
    ?>
    <table width="100%" border="1">
        <div id="sanpham">
            <tr>
                <th>id</th>
                <th>hình ảnh</th>
                <th>tên giá</th>
                <th>giá</th>
                <th>chi tiết sp</th>
            </tr>
            <?php
            while ($rows = mysqli_fetch_array($result)) {
            ?>

                <tr>
                    <td height="100px" align="center"><?= $rows['sanpham_id'] ?> </td>
                    <td><img src="img/png/<?php echo $rows['anh_sp'] ?>" width="100" height="70"> </td>
                    <td align="center"><?= $rows['ten_sp'] ?></td>
                    <td align="center"> <?= $rows['gia_sp'] ?></td>
                    <td valign="top"> <?= $rows['chi_tiet_sp'] ?> </td>
                </tr>
        </div>
    <?php
            }
    ?>
    </table>
</body>

</html>