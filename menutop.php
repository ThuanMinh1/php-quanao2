<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="./assets/fonts/fontawesome-free-6.3.0-web/css/all.min.css">

  <style>
    /* *{
    position: fixed;
  } */
    .header_search {
      background-color: var(--while-color);
      padding: 0px 0px 0px 1000px;
      /* height: 50px;
  width: 100px; */
    }

    .header_search_input {
      width: 250px;
      height: 40px;
      color: var(--text-color);
      /* outline:none; */
    }

    .header_search_btn {
      height: 40px;
      width: 50px;
    }

    .danhmuc {
      float: left;
      margin-right: 0px;
      padding-left: 50px;
      text-decoration: none;
    }

    td {
      padding-top: 10px
    }

    .dropdown {
      position: relative;
      display: inline-block;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f3f4f0;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      z-index: 1;
    }

    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      /* xóa bỏ gạch chân */
      display: block;
    }

    .dropdown-content a:hover {
      background-color: #f5bdbd
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }

    .dropdown:hover .dropbtn {
      background-color: #3e8e41;
    }

    .hinh {
      font-size: small;
    }
  </style>

  <title>Untitled Document</title>
</head>

<body>
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <a href="index.php">
      <td width="14%" align="center" valign="middle"><img src="https://file.hstatic.net/200000312481/file/newlogoort_5ffe29c58c414ccebc2120bed119c8c0.png" alt="ảnh logo" width="200px" height="70px"> </a></td>

      <td width="2%"><img src="https://theme.hstatic.net/200000312481/1000699457/14/policy_icon_1.png?v=205"> </td>
      <td width="15%" align="left" valign="middle">
        <p><b>hotline mua hàng</b><br />
          gọi ngay: 086 2642568</p>
      </td>

      <td width="2%"><img src="https://theme.hstatic.net/200000312481/1000699457/14/policy_icon_2.png?v=205"> </td>
      <td width="14%" align="left" valign="middle">
        <p><b>giao hàng tận nơi</b><br />
          miễn phí từ 5 sản phẩm
        </p>
      </td>

      <td width="2%"><img src="https://theme.hstatic.net/200000312481/1000699457/14/policy_icon_3.png?v=205"> </td>
      <td width="13%" align="left" valign="middle">
        <p><b>1 đổi 1 nếu lỗi hàng</b><br />
          Trong vòng 7 ngày</p>
      </td>

      <td width="3%" align="left" valign="middle" class="hinh"><img src="https://publicdomainvectors.org/tn_img/abstract-user-flat-4.webp" width="41" height="43"> </td>
      <td width="14%" align="left" valign="middle">
        <p><b><a href="form.php" /></b><br />
          <?php
          if (isset($_SESSION['user'])) { ?>
            <a href="logout.php"> Đăng xuất </a>
          <?php
          } else {
          ?>
            <a href="./admin/login.php"> Đăng nhập admin </a>
          <?php
          }
          ?>
          <?php
          if (isset($_SESSION['user'])) {
            echo " || Xin Chào " . $_SESSION['user'];
          } else {
            echo " || Bấm vào đây để đăng nhập";
          }
          ?>
          <!-- <a href ="form.php">Đăng nhập</a> || <a href = "FORM_INSERT_LOGIN.PHP">Đăng kí</a></td> -->

        

      <td width="3%" align="left" valign="middle" class="hinh"><img src="https://threeboxvietnam.com/wp-content/uploads/2022/04/shopping-bag.png" width="41" height="43"> </i></td>
      <td width="21%" align="left" valign="middle">
        <div>
          <a href="giohang1.php"> Giỏ hàng</a>
        </div>
      </td>

      <!-- <div > 
    <input class="themgiohang" type="submit" value="thêm giỏ hàng"> </td>
    </div>  -->
    </tr>
  </table>
  <div>
    <a href="index.php">
      <p class="danhmuc">HOME &emsp;</p>
    </a>


    <div class="dropdown danhmuc">
      <class="dropbtn"><b>sản phẩm</b>
        <i class="fa fa-caret-down"></i>
        <div class="dropdown-content">
          <a href="all.php">tất cả sản phẩm</a>
          <a href="ao.php">áo</a>
          <a href="quan.php">quần</a>
        </div>
    </div>
    </p>


    <p class="danhmuc"><b>bản size</b>&emsp;</p>


    <p class="danhmuc"><b>thông báo </b>&emsp;</p>


    <p class="danhmuc"><b>liên hệ</b></p>

    <form action="timkiem.php" method="post">
      <div class="header_search">
        <input type="text" name="noidung" class="header_search_input" placeholder="tìm kiếm sản phẩm">
        <button type="submit" name="btn" value="tìm kiếm" class="header_search_btn">
          <i class="fa-solid fa-magnifying-glass"></i>
        </button>

      </div>
    </form>
  </div>
</body>

</html>