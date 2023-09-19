<!DOCTYPE html>
<html>
<head>
    <title>sản phẩm về áo</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style type="text/css">
.AA {
	text-align: center;
	font-size: 24px;
	color:#00F;
}
.ftext {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 18px;
	color:#00F;
}

.ftext1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 18px;
	color: #F00;
}
.flink {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #00F;
}
a {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #00F;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #00F;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
	color: #00F;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.pagination{
	margin: auto;
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
.footer{
  margin-top: 50px;
}
</style>
    
    </head>
    <body>
        <?php
        include('menutop.php');
        ?>
        <?php 
		//=====================================================================
        //--------------------------- PHẦN XỬ LÝ PHP  -------------------------
		//=====================================================================
        // BƯỚC 1: KẾT NỐI CSDL
    	//----------Goi Tap Tin KNCSDL ------------
		include ("DBCONN.PHP");

		//=====================================================================
	    // BƯỚC 2: TÌM TỔNG SỐ RECORDS
		$sql1 = "SELECT COUNT(id_dm) AS SMT FROM sanpham where id_dm = '1'";
		$result = mysqli_query($link, $sql1);
		$row = mysqli_fetch_assoc($result);
		$total_records = $row['SMT'];
//		echo ("<br>Tong So MT :  "),  $total_records;
				
		//===================================================================== 		
		// BƯỚC 3: TÌM LIMIT VÀ CURRENT_PAGE
        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = 12;
 
 		//=====================================================================
        // BƯỚC 4: TÍNH TOÁN TOTAL_PAGE VÀ START
        // tổng số trang
		// Ham ceil Lam Tron Tang
        $total_page = ceil($total_records / $limit);
 
        // Giới hạn current_page trong khoảng 1 đến total_page
        if ($current_page > $total_page){
            $current_page = $total_page;
        }
        else if ($current_page < 1){
            $current_page = 1;
        }
 
        // Tìm Start
        $start = ($current_page - 1) * $limit;
 
		//=====================================================================
        // BƯỚC 5: TRUY VẤN LẤY DANH SÁCH 
        // Có limit và start rồi thì truy vấn CSDL lấy danh sách 
		$sql2 = "SELECT * FROM sanpham where id_dm = '1' LIMIT $start, $limit";
		$result = mysqli_query($link, $sql2);
		//=====================================================================					
		//=====================================================================			
        // -------------------- PHẦN HIỂN THỊ DỮ LIỆU -------------------------
		//=====================================================================
		//=====================================================================					
		// BƯỚC 6: HIỂN THỊ DANH SÁCH LÊN 1 BẢNG
        ?>
        <div align="center">
		<span class="ftext"><br>DANH SÁCH MẶT HÀNG ÁO</span>
<table width="900" border="0" align="center" cellpadding="2" cellspacing="2">
	<?php 
		//=====================================================================						
        // VÒNG LẶP DÒNG DỮ LIỆU HIỂN THỊ
        while ($rows = mysqli_fetch_assoc($result))
        //while ($rows = mysqli_fetch_array($result))
		{
	?>
	<tr class="ftext1">
    
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
?>
	</tr>
	<?php
	}	//KT While
	?>          
  </table class="pagination">
        </div>
        <div   align="center">
		
<?php 
		//=====================================================================					
        //---------------------- PHẦN HIỂN THỊ PHÂN TRANG ---------------------
		//=====================================================================					
            // BƯỚC 7: HIỂN THỊ PHÂN TRANG
 		//=====================================================================					
            // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
            if ($current_page > 1 && $total_page > 1){
                echo '<a href="phantrang.PHP?page='.($current_page-1).'">Prev &nbsp;</a> | ';
            }
 
            // Lặp khoảng giữa
            for ($i = 1; $i <= $total_page; $i++){
                // Nếu là trang hiện tại thì hiển thị thẻ span
                // ngược lại hiển thị thẻ a
                if ($i == $current_page){
                    echo '<span>&nbsp;'.$i.'&nbsp;</span> | ';
                }
                else{
                    echo '<a href="phantrang.PHP?page='.$i.'">&nbsp;'.$i.'&nbsp;</a> | ';
                }
            }
 
            // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
            if ($current_page < $total_page && $total_page > 1){
                echo '<a href="phantrang.PHP?page='.($current_page+1).'">&nbsp; Next</a> | ';
            }
           ?>
		
        </div>
		<div class="footer">
			<?php
				include('footer.php');
			?>
		</div>
    </body>
</html>