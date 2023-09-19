<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>xử lý thêm sản phẩm </title>
</head>
<body>
    <?php
    if(isset($_POST['themsanpham'])){
        
        include('db.PHP');
        $ma_sp = $_POST['ma_sp'];
        $dm_product = $_POST['dm_product'];
        $ten_product = $_POST['ten_product'];
        //xu ly hinh ảnh
        // $file = $_FILES['hinhanh'];
        // $hinhanh = $file['name'];
        // $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
        // $hinhanhgio =time().'_'.$img_product;
        
        $hinhanh = $_POST['hinhanh'];
        $gia_product = $_POST['gia_product'];
        $nd_product = $_POST['nd_product'];




        // if(isset($_FILES['img_product'])){
        //     if($file['type']== 'image/jpeg'||$file['type']== 'imgae/jpg'||$file['type']== 'image/png'){
                
        //         move_uploaded_file($img_product_tmp,'uploads/'.$img_product);
                
                $sql_themsp = mysqli_query($link,"INSERT INTO sanpham (id_sp,id_dm,ten_sp,anh_sp,gia_sp,chi_tiet_sp) values 
                ('$ma_sp','$dm_product','$ten_product','$hinhanh','$gia_product','$nd_product')");       
            // }




            // $sql_themsp = mysqli_query($link,"INSERT INTO sanpham (id_sp,id_dm,ten_sp,anh_sp,gia_sp,chi_tiet_sp) values ('$ma_sp','$dm_product','$ten_product','$img_product','$gia_product','$nd_product')");
           if ($sql_themsp ==true){
               echo "thêm sản phẩm thành công";
           }else{
               echo "thêm sản phẩm thất bại";
           }
        // }
    }
    ?>
    <h3 style="margin: auto"> <a href="index.php"> trang chủ admin </a> </h3>
</body>
</html>