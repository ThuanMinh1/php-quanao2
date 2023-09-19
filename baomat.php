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
    .col-sm-7{
        /* font-family: 'Montserrat'; */
        font-weight: 500;
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
      border: 0.5px solid black;
      width: auto;
      height: auto;
      
    }
    .col-sm-3 p{
      padding: 0px 0px 0px 10px;
    }
    .footer{
        padding-top: 200px;
    }
    .chu{
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
        <div class="chu">
            <h2><b> Chính sách bảo mật </b></h2>
            
            <p> Chính sách bảo mật này nhằm giúp Quý khách hiểu về cách website thu thập và sử dụng thông tin cá nhân của mình thông qua việc sử dụng trang web, bao gồm mọi thông tin có thể cung cấp thông qua trang web khi Quý khách đăng ký tài khoản, đăng ký nhận thông tin liên lạc từ chúng tôi, hoặc khi Quý khách mua sản phẩm, dịch vụ, yêu cầu thêm thông tin dịch vụ từ chúng tôi.</p>

            <p> Chúng tôi sử dụng thông tin cá nhân của Quý khách để liên lạc khi cần thiết liên quan đến việc Quý khách sử dụng website của chúng tôi, để trả lời các câu hỏi hoặc gửi tài liệu và thông tin Quý khách yêu cầu.</p>
                
            <p>Trang web của chúng tôi coi trọng việc bảo mật thông tin và sử dụng các biện pháp tốt nhất để bảo vệ thông tin cũng như việc thanh toán của khách hàng. </p>
            
            <p>Mọi thông tin giao dịch sẽ được bảo mật ngoại trừ trong trường hợp cơ quan pháp luật yêu cầu.</p>
        </div>
    </div>
  </div>
</div>
<div class="footer">
<?php
include('footer.php');
?>
</div>
</body>
</html>