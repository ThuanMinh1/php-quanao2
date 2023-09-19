<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>trang chủ</title>
</head>
<body>

 
 
 <table width="1480" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="26" align="center" valign="top">
<?PHP
	include ('menutop.php');
?>    
    </td>
 
 
    
<table width="1480" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="26" align="center" valign="middle">
<?PHP
	include ('console.php');
?>    
    </td>

<?PHP
	include ('dsbh_sanpham.php');
?>
<?php
  include('video.php');
?>

<?php
include('dsbh_sp2.php');
?>

<?php
  include ('footer.php');
?>


</body>
</html>