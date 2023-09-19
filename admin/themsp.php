<?php
include('../DBCONN.PHP')
?>
<?php 
	if(isset($_POST['themsp'])){
		$tensp = $_POST['tensanpham'];
		//hình ảnh
		$hinhanh = $_FILES['hinhanh']['name'];
        $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
        $paid = '../img/png';

		$giasp = $_POST['giasp'];
		$giakm = $_POST['giakhuyenmai'];
        $danhmuc = $_POST['danhmuc'];
		$soluong = $_POST['soluong'];
        $mota = $_POST['mota'];
        $chitiet = $_POST['chitiet'];

		$sql_insert = mysqli_query($link, "INSERT INTO sanpham(ten_sp, anh_sp, gia_sp,gia_km,id_dm,soluong,mota,chi_tiet_sp ) 
values('$tensp','$hinhanh','$giasp','$giakm','$danhmuc','$soluong','$mota','$chitiet')");
		move_uploaded_file($hinhanh_tmp,$paid.$hinhanh);
		//phần này là phần cập nhật sản phẩm
	}elseif (isset($_POST['capnhatsp'])){
        $id_update = $_POST['capnhat_id'];
        $tensp = $_POST['tensanpham'];
        //hình ảnh
        $hinhanh = $_FILES['hinhanh']['name'];
        $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];

        $giasp = $_POST['giasp'];
        $giakm = $_POST['giakhuyenmai'];
        $soluong = $_POST['soluong'];
        $chitiet = $_POST['chitiet'];
        $mota = $_POST['mota'];
        $danhmuc = $_POST['danhmuc'];
        $paid = '../img/png';
        if ($hinhanh==''){
            $sql_capnhat_hinhanh = " UPDATE sanpham set ten_sp='$tensp',gia_sp='$giasp',gia_km='$giakm',id_dm='$danhmuc',soluong='$soluong',mota='$mota',chi_tiet_sp='$chitiet' where sanpham_id='$id_update'";
        }else{
            move_uploaded_file($hinhanh_tmp,$paid.$hinhanh);
            $sql_capnhat_hinhanh = " UPDATE sanpham set ten_sp='$tensp',anh_sp='$hinhanh',gia_sp='$giasp',gia_km='$giakm',id_dm='$danhmuc',soluong='$soluong',mota='$mota',chi_tiet_sp='$chitiet' where sanpham_id='$id_update'";
        }
        mysqli_query($link,$sql_capnhat_hinhanh);
    }
?>
<!-- phần code của xóa sản phẩm -->
<?php
 if (isset($_GET['xoa'])){
     $id = $_GET['xoa'];
     $sql_xoa = mysqli_query($link,"DELETE FROM sanpham where sanpham_id = '$id' ");
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>thêm sản phẩm</title>
    <link href="../assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
</head>
<body>
	<div class="container">
		<div class="row">
            <!-- phần của cập nhật -->
            <?php
            if (isset($_GET['quanly'])== 'sanpham'){
                $id_capnhat = $_GET['capnhat_id'];
                $sql_capnhat = mysqli_query($link,"SELECT * FROM sanpham where sanpham_id = '$id_capnhat' ");
                $row_capnhat = mysqli_fetch_assoc($sql_capnhat);
                $id_dm_capnhat = $row_capnhat['id_dm']; //biến này để gán cho $row_capnhat và dò vòng lặp của danh mục ở dưới để in ra hiển thị cập nhật
            ?>
                <div class="col-md-4">
                    <h4> cập nhật sản phẩm </h4>
                    <form action="" method="post" enctype="multipart/form-data">
                        <label> tên sản phẩm </label>
                        <input type="text" class="form-control" name="tensanpham" value="<?php echo $row_capnhat['ten_sp'] ?>" >  <br>
                        <input type="hidden" class="form-control" name="capnhat_id" value="<?php echo $row_capnhat['sanpham_id'] ?>" >  <br>
                        <label> hình ảnh sản phẩm </label>
                        <input type="file" class="form-control" name="hinhanh" placeholder="hình ảnh"> <br>
                        <img src="../img/png/<?php echo $row_capnhat['anh_sp'] ?>" height="80" width="80"> <br>
                        <label> giá </label>
                        <input type="text" class="form-control" name="giasp" value="<?php echo $row_capnhat['gia_sp'] ?>"  > <br>
                        <label> giá khuyến mãi</label>
                        <input type="text" class="form-control" name="giakhuyenmai" value="<?php echo $row_capnhat['gia_km'] ?>" > <br>
                        <label> số lượng</label>
                        <input type="text" class="form-control" name="soluong" value="<?php echo $row_capnhat['soluong'] ?>" > <br>
                        <label> chi tiết sản phẩm</label>
                        <textarea class="form-control" rows="10" name="chitiet"> <?php echo $row_capnhat['chi_tiet_sp'] ?> </textarea> <br>
                        <label> mô tả</label>
                        <textarea class="form-control" rows="10" name="mota"> <?php echo $row_capnhat['mota'] ?> </textarea> <br>
                        <label> danh mục sản phẩm</label>
                        <?php
                        $sql_dm = mysqli_query($link,"SELECT * FROM dmsanpham order by id_dm desc");
                        ?>
                        <select name="danhmuc" class="form-control">
                            <option value="0">---------chọn danh mục---------</option>
                            <?php
                            while ($row_dm = mysqli_fetch_assoc($sql_dm)){
                                if ($id_dm_capnhat == $row_dm['id_dm']){ //cái này là để so sánh nếu giống nhau thì sẽ hiển thị
                                ?>
                                <option selected value="<?php echo $row_dm['id_dm'] ?>"> <?php echo $row_dm['ten_dm'] ?>  </option> <!--thêm selected để có thể hiển
                                  thị bên combox cái danh mục của sản phẩm-->
                                    <?php
                                }else{
                                    ?>
                                    <option value="<?php echo $row_dm['id_dm'] ?>"> <?php echo $row_dm['ten_dm'] ?>  </option> <!--ngược lai ko giống thì nó ko chọn-->
                                <?php
                                }
                            }
                                ?>
                        </select> <br>
                        <input type="submit" class="form-control" name="capnhatsp" value="cập nhật sản phẩm " class="btn btn-success">
                    </form>
                </div>
            <?php
            }else{
            ?>
                <!-- này là phần code thêm sản phẩm -->
                <div class="col-md-4">
                    <h4> thêm sản phẩm </h4>
                    <form action="" method="post" enctype="multipart/form-data">
                        <label> tên sản phẩm </label>
                        <input type="text" class="form-control" name="tensanpham" placeholder="tên sản phẩm "><br>
                        <label> hình ảnh sản phẩm </label>
                        <input type="file" class="form-control" name="hinhanh" placeholder="hình ảnh"> <br>
                        <label> giá </label>
                        <input type="text" class="form-control" name="giasp" placeholder="giá sản phẩm"> <br>
                        <label> giá khuyến mãi</label>
                        <input type="text" class="form-control" name="giakhuyenmai" placeholder="giá khuyến mãi"> <br>
                        <label> số lượng</label>
                        <input type="text" class="form-control" name="soluong"  placeholder="số lượng"> <br>
                        <label> chi tiết sản phẩm</label>
                        <input type="text" class="form-control" name="chitiet" placeholder="chi tiết sản phẩm"><br>
                        <label> mô tả</label>
                        <textarea class="form-control" name="mota"> </textarea> <br>
                        <label> danh mục sản phẩm</label>
                        <?php
                        $sql_dm = mysqli_query($link,"SELECT * FROM dmsanpham order by id_dm desc");
                        ?>
                        <select name="danhmuc" class="form-control">
                            <option value="0">---------chọn danh mục---------</option>
                            <?php
                            while ($row_dm = mysqli_fetch_assoc($sql_dm)){
                                ?>
                                <option value="<?php echo $row_dm['id_dm'] ?>"> <?php echo $row_dm['ten_dm'] ?>  </option>
                                <?php
                            }
                            ?>
                        </select> <br>
                        <input type="submit" class="form-control" name="themsp" value="thêm sản phẩm " class="btn btn-success">
                    </form>
                </div>
            <?php
            }
            ?>
			<div class="col-md-8"> 
				<h4> liệt kê sản phẩm </h4>
                <?php
                //câu truy vấn này ghép 2 bảng sản phẩm và danh mục lại để show tên danh mục
                $sql_sp = mysqli_query($link,"SELECT * FROM sanpham,dmsanpham where sanpham.id_dm = dmsanpham.id_dm order by sanpham.sanpham_id asc ");
                ?>
				<table class="table table-responsive">
					<tr> 
						<th> thứ tự </th>
						<th>tên sản phẩm </th>
						<th> hình ảnh</th>
						<th> giá sản phẩm </th>
                        <th> giá khuyến mãi</th>
                        <th> danh mục </th>
						<th> số lượng </th>
                        <th> chức năng </th>
					</tr>
                    <?php
                    $i = 0;
                    while ($row_sanpham = mysqli_fetch_array($sql_sp)){
                        $i++;
                    ?>
					<tr>
						<td> <?php echo $i ?> </td>
						<td> <?=$row_sanpham['ten_sp']?> </td>
						<td><img src="../img/png/<?=$row_sanpham['anh_sp']?>" height="80" width="80" </td>
						<td> <?php echo number_format($row_sanpham['gia_sp']).'VNĐ'  ?>   </td>
						<td> <?php echo number_format($row_sanpham['gia_km']).'VNĐ'  ?>   </td>
                        <td> <?php echo $row_sanpham['ten_dm'] ?> </td>
						<td> <?=$row_sanpham['soluong']?></td>
                        <td> <a href="?xoa=<?php echo$row_sanpham['sanpham_id'] ?>"> xóa </a> || <a href="?quanly=sanpham&capnhat_id=<?php echo $row_sanpham['sanpham_id'] ?>"> cập nhật</a>
                        || <a href="?themsp=<?php $row_sanpham['sanpham_id'] ?>"> thêm </a>
                        </td>
					</tr>
                    <?php
                    }
                    ?>
				</table>
			</div>
		</div>
	</div>
</body>






