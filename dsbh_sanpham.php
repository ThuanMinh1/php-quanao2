<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>trưng bày sản phẩm</title>
</head>
<?PHP
			include ('DBCONN.PHP');
			$sql = "SELECT * FROM sanpham order by sanpham_id asc LIMIT 8";
			$result = mysqli_query($link, $sql);
			$smt = mysqli_num_rows($result);	
?>

<body>
<style type="text/css">
td{
	padding:10px 10px;
}
.nd2 h4{
	width: 100px;
	height: auto;
	border: 0.5px solid black;
	margin: auto;
	margin-bottom: 10px;
}
.div h4:before{
	content:"";
	top:0;
	left:0;
	right:0;
	height:0 ;
}
.sanpham li {
	padding: 0px 10px;
	list-style: none;
	text-align: center;

}
.sanpham #price{
	color: red;
}
.sanpham #img{
	background: rgba(142, 144, 157, 0.2)
	

}
/* .ovuong{
	background-color: #eeeeee;
} */
</style>


<table width="750" border="0" align="center" cellpadding="1" cellspacing="1">
 <?PHP
 	if($smt > 0)
	{
	while($rows = mysqli_fetch_array($result))
	{
 ?>
 	<tr>
 <?PHP
    	$n = 4;		//Số Mẫu Tin Mỗi Dòng 
		for($i = 1; $i <= $n; $i++)	
		{
			echo "<td valign='top'>";
            if($rows != false)	//Cho View noi dung nao do
            {
?>
<div class="sanpham">	
			<ul>
				<li id="img"> <a href="mota.php?id=<?=$rows['sanpham_id']?>"> <img src="img/png/<?=$rows['anh_sp']?>" width="300" height="333"/> </li>

				<li>  <a href="mota.php?id=<?=$rows['sanpham_id']?>"> <?=$rows['ten_sp']?> </li>

				<li id="price"> <?=$rows['gia_sp']?> </li>
			</ul>
</div>

 <?php
			}
			else
			{
				echo "&nbsp;";
			}
			echo "</td>";
      		if($i != $n)
           	{
            	$rows = mysqli_fetch_array($result);
			}
		}	//KT For
		echo "</tr>";
	}	//KT While
	}
?>
</table>



</div>
</body>
</html>