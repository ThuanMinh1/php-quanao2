<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>trang thêm sản phẩm</title>
</head>

<body>
  <?php
  include('../DBCONN.PHP');
  $sql = mysqli_query($link, "SELECT * FROM sanpham");
  ?>
  <table>
    <form method="post" action="xl.php">
      <tr>
        <th>thêm sản phẩm</th>
      </tr>
      <tr>
        <td>id sản phẩm</td>
        <td> <input type="text" name="ma_sp"></td>
      </tr>
      <tr>
        <td>danh mục sản phẩm</td>
        <td>
          <select name="dm_product" class="form-select" aria-label="Default select example">
            <option selected> danh mục sản phẩm </option>
            <option value="1">1</option>
            <option value="2">2</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>tên sản phẩm </td>
        <td><input type="text" name="ten_product"></td>
      </tr>
      <tr>
        <td>hình ảnh sản phẩm</td>
        <td><input type="text" name="hinhanh"></td>
      </tr>
      <tr>
        <td>giá sản phẩm</td>
        <td><input type="text" name="gia_product"></td>
      </tr>
      <tr>
        <td>nội dung của sản phẩm</td>
        <td><textarea name="nd_product"></textarea></td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" name="themsanpham" value="thêm sản phẩm" class="btn btn-block btn-info"> </td>
      </tr>
    </form>
  </table>
  <br>
  <a href="index.php" class="btn btn-block btn-info"> quay lại trang chủ admin</a>
</body>

</html>