<?php
include ('DBCONN.PHP');
$id = $_GET['id'];
$sql_delete = mysqli_query($link,"DELETE  from sanpham  where id_sp = '$id'");
if ($sql_delete){
    ?>
<script>
    alert("đã xóa!!!");
</script>
<a href="quantri.php" style="margin: auto;"> tiếp tục</a>
<?php
}
?>