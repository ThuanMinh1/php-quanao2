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
      height: auto;;
    }
    .col-sm-3 p{
      padding: 0px 0px 0px 10px;
    }
    span{
       font-weight: bold;
    }
    .chu{
        font-family:'Quicksand', sans-serif!important;;
    }
    .col-sm-9{
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
      <h2><b> Điều khoản dịch vụ </b></h2>
      <h4><b>  1. Giới thiệu</b></h4>
      <p> Chào mừng quý khách hàng đến với website chúng tôi.</p>
      
      <p> Khi quý khách hàng truy cập vào trang website của chúng tôi có nghĩa là quý khách đồng ý với các điều khoản này. Trang web có quyền thay đổi, chỉnh sửa, thêm hoặc lược bỏ bất kỳ phần nào trong Điều khoản mua bán hàng hóa này, vào bất cứ lúc nào. Các thay đổi có hiệu lực ngay khi được đăng trên trang web mà không cần thông báo trước. Và khi quý khách tiếp tục sử dụng trang web, sau khi các thay đổi về Điều khoản này được đăng tải, có nghĩa là quý khách chấp nhận với những thay đổi đó. </p>
      <p> Quý khách hàng vui lòng kiểm tra thường xuyên để cập nhật những thay đổi của chúng tôi.</p>
      <h4><b>  2. Hướng dẫn sử dụng website</b></h4>
      
      <p> Khi vào web của chúng tôi, khách hàng phải đảm bảo đủ 18 tuổi, hoặc truy cập dưới sự giám sát của cha mẹ hay người giám hộ hợp pháp. Khách hàng đảm bảo có đầy đủ hành vi dân sự để thực hiện các giao dịch mua bán hàng hóa theo quy định hiện hành của pháp luật Việt Nam.</p>
      <p>  Trong suốt quá trình đăng ký, quý khách đồng ý nhận email quảng cáo từ website. Nếu không muốn tiếp tục nhận mail, quý khách có thể từ chối bằng cách nhấp vào đường link ở dưới cùng trong mọi email quảng cáo.</p>
      <h4><b>  3.Thanh toán an toàn và tiện lợi</b></h4>
      <p> Người mua có thể tham khảo các phương thức thanh toán sau đây và lựa chọn áp dụng phương thức phù hợp:</p>
      <p><span> Cách 1:</span>Thanh toán trực tiếp (người mua nhận hàng tại địa chỉ người bán) </p>
      <p><span> Cách 2:</span>Thanh toán sau (COD - giao hàng và thu tiền tận nơi) </p>
      <p><span> Cách 3:</span> Thanh toán online qua thẻ tín dụng, chuyển khoản</p>
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