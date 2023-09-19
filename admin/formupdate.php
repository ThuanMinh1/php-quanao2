<div> 
   <h1 style="text-align:center;"><a href="index.php"> trang chủ admin </a></h1>
</div>


<?php
session_start();
$test= $_GET['id']; //'id' của sesson và gán vào $test ở dưới
$_SESSION['row'] = $test; //biến $test sẽ gán vào seeson Row
$_SESSION['id'];
?>
<form method="post" action="xl_update.php">
    nội dung mới: <textarea name="ud" class="form-control">   </textarea>
     <input type="submit" name="udp" VALUE="UPDATE">
</form>
