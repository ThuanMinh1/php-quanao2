<?php
session_start();
include('../DBCONN.PHP');
?>
<?php
// session_destroy();
if(isset($_POST['login'])){
    $user = $_POST['user'];
    $pass = md5($_POST['pass']);
    if($user == '' || $pass == ''){
        echo'<p>xin nhập đủ thông tin</p>';
    }else{
        $sql_admin = mysqli_query($link,"SELECT * FROM tbl_admin where user='$user' && pass='$pass' limit 1");
        $count = mysqli_num_rows($sql_admin);
        $row_login = mysqli_fetch_array($sql_admin);//này để sử dụng session 
        if($count > 0){
            $_SESSION['login'] = $row_login['admin_name']; //sử dụng $row_login để sử dụng 
            $_SESSION['admin_id'] = $row_login['admin_id'];//sử dụng $row_login để sử dụng 
            header('location:index.php');
        }else{
            echo '<p> tài khoản hoặc mật khẩu sai</p>  ';
        }
        
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trang admin</title>
    <style>
        .mid{
            text-align: center;
        }
        .submid{
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="mid">
        <h3> đăng nhập admin </h3>
        <form method="post" action="">
            <label> tài khoản</label>
            <input type="text" name="user" placeholder="điền tài khoản" ><br>
            <label> mật khẩu </label>
            <input type="password" name="pass" placeholder="điền mật khẩu" class="pass"><br>
             <input type="submit" name="login" value="đăng nhập" class="submid"> 
        </form>
        <a href="../index.php"> trang chủ bán hàng</a>
    </div>

    
</body>
</html>