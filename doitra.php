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
    span{
       font-weight: bold;
    }
    .chu{
        padding-left: 10px;
        font-size: 15px;
    }
    .footer{
        padding-top: 100px;
    }
  </style>
</head>
<body>
<div>
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
            <h2><b> Chính sách đổi trả </b></h2>
            <h4><b>  1. Điều kiện đổi trả</b></h4>
            <p> Quý Khách hàng cần kiểm tra tình trạng hàng hóa và có thể đổi hàng/ trả lại hàng ngay tại thời điểm giao/nhận hàng trong những trường hợp sau:</p>
            <ul>
                <li>Hàng không đúng chủng loại, mẫu mã trong đơn hàng đã đặt hoặc như trên website tại thời điểm đặt hàng.</li>
                <li>Không đủ số lượng, không đủ bộ như trong đơn hàng</li>
                <li>Tình trạng bên ngoài bị ảnh hưởng như rách bao bì, bong tróc, bể vỡ…</li>
            </ul>
            <p> Khách hàng có trách nhiệm trình giấy tờ liên quan chứng minh sự thiếu sót trên để hoàn thành việc hoàn trả/đổi trả hàng hóa. </p>
            <h4><b>  2. Quy định về thời gian thông báo và gửi sản phẩm đổi trả</b></h4>
            <ul>
                <li><span> Thời gian thông báo đổi trả:</span>trong vòng 48h kể từ khi nhận sản phẩm đối với trường hợp sản phẩm thiếu phụ kiện, quà tặng hoặc bể vỡ. </li>
                <li><span> Thời gian gửi chuyển trả sản phẩm:</span> trong vòng 14 ngày kể từ khi nhận sản phẩm. </li>
                <li><span> Địa điểm đổi trả sản phẩm:</span>Khách hàng có thể mang hàng trực tiếp đến văn phòng/ cửa hàng của chúng tôi hoặc chuyển qua đường bưu điện. </li>
            </ul>
            <p> Trong trường hợp Quý Khách hàng có ý kiến đóng góp/khiếu nại liên quan đến chất lượng sản phẩm, Quý Khách hàng vui lòng liên hệ đường dây chăm sóc khách hàng của chúng tôi.</p>
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