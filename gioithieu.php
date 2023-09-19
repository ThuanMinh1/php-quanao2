<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./assets/fontawesome-free-6.3.0-web/css/all.min.css">
  <title>Document</title>
  <style>
    div {
    display: block;
}
    *{
        box-sizing: border-box;
    }
    ul a{
      list-style: none;
      color: #000000;
      font-weight: 500;
      font-size: 14px;
      line-height: 28px;
      letter-spacing: 1px;
    }
    li{
      padding-top: 10px;
    }
    .col-sm-3 h2{
      text-decoration: underline;
      text-align: center;
    }
    .col-sm-3{
        position: relative;
        left: 10px;
        margin-top: 20px;
      border: 0.1px solid black;
    }
    .head{
        border: none;
        margin: 0;
    }
    .footer{
        padding-top: 200px;
    }
    .col-sm-9{
        padding-left: 10px;
        font-size: 15px;
    }
    
  </style>
</head>
<body>
<div class="head">
<?php
include('menutop.php');
?>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-3">
      <h2> DANH MUC TRANG</h2>
      <ul>
        <a href="gioithieu.php"><li>Giới thiệu</li></a>
        <a href="doitra.php">   <li>chính sách đổi trả</li></a>   
        <a href="baomat.php">   <li>chính sách bảo mật</li></a>  
        <a href="dichvu.php">   <li>điều khoản dịch vụ</li></a>  
      </ul>
    </div>
    <div class="col-sm-9">
        <div>
            <h2><b> giới thiệu </b></h2>
            <p> Chúng mình xuất hiện để đem tới mọi người một chất lượng áo tốt nhất, với giá thành hấp dẫn nhất để đưa Outerity đến với tất cả lứa tuổi và khắp mọi vùng miền đất nước</p>
        </div>
    </div>
  </div>
</div>
<div class="footer">
<?php
include('footer.php');
?>

</body>
</html>