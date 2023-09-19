<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<style>
.duoi{
  margin-top: 0px;
}
.btn{
  background-color: red;
  color: white;
}
.btn:hover{
  background-color: green;
}
</style>
<title>trang chi tiết sản phẩm</title>
</head>

<body>
          <div>
            <?php
            include('menutop.php');
            ?>
            </div>

            <?php
            include ('DBCONN.php');
            $ma = $_GET['id'];
            $sql = "SELECT * FROM sanpham WHERE sanpham_id = '".$ma."' ";
            $result = mysqli_query($link, $sql);
            ?>

  <?php
  while ($rows = mysqli_fetch_array($result))
  {
  ?>
           

          <table width="100%" border="1" cellspacing="0" cellpadding="0">
            <tr>
              <td width="30%" valign="middle"> <img src ="img/png/<?=$rows['anh_sp']?>" width="400" height="500" /></td>
              <td width="38%" valign="top"><h1> <?=$rows['ten_sp']?> </h1>

                <p><b> giá sản phẩm: <?=$rows['gia_sp']?> </b></p>

                <p> chi tiết sản phẩm:<br> <?=$rows['chi_tiet_sp']?> </p>
             

        
<form method="post" action="giohang1.php">

  <input type="hidden" name="sanpham_id" value=" <?php echo $rows['sanpham_id']?> ">
  <input type="hidden" name="tensanpham" value=" <?php echo $rows['ten_sp'] ?>">
  <input type="hidden" name="giasanpham" value="<?php echo $rows['gia_sp']?>  ">
  <input type="hidden" name="hinhanh" value="<?php echo $rows['anh_sp']?>     ">
  <input type="hidden" name="soluong" value="1">
  <input type="submit" name="themgiohang" value="thêm vào giỏ hàng" class="btn">
</form>
</td>
</tr>
</table>


  <?php
    }
  ?>

<footer class="duoi">
<?php
include('footer.php');
?>
</footer>
</body>
</html>
