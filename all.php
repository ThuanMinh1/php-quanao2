<!DOCTYPE html>
<html>
<head>
    <title>tất cả sản phẩm của chúng tôi</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./assets/fontawesome-free-6.3.0-web/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/js/bootstrap.min.js">

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


/*css của treeview*/
ul, #myUL {
  list-style-type: none;
}

#myUL {
  margin: 0;
  padding: 0;
  position: relative;
}

.caret {
  cursor: pointer;
  -webkit-user-select: none; /* Safari 3.1+ */
  -moz-user-select: none; /* Firefox 2+ */
  -ms-user-select: none; /* IE 10+ */
  user-select: none;
}

.caret::before {
  content: "\25B6";
  color: black;
  display: inline-block;
  margin-right: 6px;
}

.caret-down::before {
  -ms-transform: rotate(90deg); /* IE 9 */
  -webkit-transform: rotate(90deg); /* Safari */
  transform: rotate(90deg);  
}

.nested {
  display: none;
}

.active {
  display: block;
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
		$sql1 = "SELECT COUNT(*) AS SMT FROM sanpham";
		$result = mysqli_query($link, $sql1);
		$row = mysqli_fetch_assoc($result);
		$total_records = $row['SMT'];
//		echo ("<br>Tong So MT :  "),  $total_records;
				
		//===================================================================== 		
		// BƯỚC 3: TÌM LIMIT VÀ CURRENT_PAGE
        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = 12;//số mẫu tin trong 1 trang
 
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
		$sql2 = "SELECT * FROM sanpham  LIMIT $start, $limit";
		$result = mysqli_query($link, $sql2);
		//=====================================================================					
		//=====================================================================			
        // -------------------- PHẦN HIỂN THỊ DỮ LIỆU -------------------------
		//=====================================================================
		//=====================================================================					
		// BƯỚC 6: HIỂN THỊ DANH SÁCH LÊN 1 BẢNG
        ?>
        <div align="center">
		<span class="ftext"><br>DANH SÁCH TẤT CẢ SẢN PHẨM</span>
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
                echo '<a href="phantrang3.PHP?page='.($current_page-1).'">Prev &nbsp;</a> | ';
            }
 
            // Lặp khoảng giữa
            for ($i = 1; $i <= $total_page; $i++){
                // Nếu là trang hiện tại thì hiển thị thẻ span
                // ngược lại hiển thị thẻ a
                if ($i == $current_page){
                    echo '<span>&nbsp;'.$i.'&nbsp;</span> | ';
                }
                else{
                    echo '<a href="phantrang3.PHP?page='.$i.'">&nbsp;'.$i.'&nbsp;</a> | ';
                }
            }
 
            // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
            if ($current_page < $total_page && $total_page > 1){
                echo '<a href="phantrang3.PHP?page='.($current_page+1).'">&nbsp; Next</a> | ';
            }
           ?>
		
        </div>
        </tr>
    </td>
      </table>
      <div class="footer">
			<?php
				include('footer.php');
			?>
		</div>
    </body>

</html>