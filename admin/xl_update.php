<style>

</style>
<?php
session_start();
$ma = $_SESSION['row']; //nội dung , $seeson row từ bên formupdate.php  đem qua
$id_sp =$_SESSION ['id'];// $sesson id từ update.php  đem qua

include('../DBCONN.PHP');
$sql = "SELECT * FROM sanpham where sanpham_id =  '".$id_sp."'";
$result = mysqli_query($link,$sql);
//-----
if ($_POST['udp']) {
    $nd = $_POST['ud'];
}


    $update = "UPDATE sanpham SET $ma = '".$nd."' WHERE sanpham_id =  '" . $id_sp . "'" ;
    $result2 = mysqli_query($link, $update);
    if ($result2) {
        echo "Update Thành công !!!</b>";
    }
?>
<div class="menu"> 
   <h1 style="text-align:center;"><a href="index.php"> trang chủ admin </a></h1>
</div>