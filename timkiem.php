<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>trưng bày sản phẩm</title>
<style>
table{
    display: inline;
    margin: autos;
}


</style>

</head>
    <body>
        <?php
        include('DBCONN.php');
        ?>
        <?php
        include('menutop.php');
        ?>
        <?php
        if(isset($_POST['btn'])){
            $tukhoa = $_POST['noidung'];
        }
        $sql = "SELECT * FROM sanpham where ten_sp like '%".$tukhoa."%' ";
        $result = mysqli_query($link,$sql);
        ?>

        <?php
            while($row = mysqli_fetch_array($result)){
        ?>



        <table  width="240" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td class="ovuong" width="236" height="288" valign="top">&nbsp; <a href="mota.php?id=<?=$row['sanpham_id']?>"> <img src="img/png/<?=$row['anh_sp']?>" width="200" height="200"/> </td>
                        </tr>
                        <tr>
                            <td height="54"  valign="center" align= "middle">&nbsp;<a href="mota.php?id=<?=$row['sanpham_id']?>"> <?=$row['ten_sp']?></td>
                        </tr>
                        <tr>
                            <td height="32" valign="center" align="middle">&nbsp;<?=$row['gia_sp']?></td>
                        </tr>
        </table>


        <?php
        }
        ?>
    </body>
</html>