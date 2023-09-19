<?php 
	session_start();
?>
<?PHP
$user = $_POST['user'];
$pass = $_POST['pass'];

$pass1 	= md5($pass);

include ("DBCONN.PHP");	//Goi TT KNCSDL
    $sql = "SELECT * FROM login WHERE user = '" .$user. "' and pass='".$pass1."'";
	$result = mysqli_query($link, $sql);
	$rows = mysqli_fetch_array($result);

	/*if(mysqli_num_rows($result)>0)*/
	if($rows['user'] == $user)
		{
			$_SESSION['user'] = $user;
			header ("location: admin.php");
		}
		else
		{
			header ("location: login_fail.php");
			
		}
?>



<?
/*
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?PHP
	$user 	= $_POST['txtuser'];
	$pass 	= $_POST['txtpass'];


	echo '<br><br>===== <A HREF = "FORM_LOGIN.PHP">BACK </A>=====   !';
    echo '<br><br>===== NOI DUNG BAN DAU =====   !';
    echo '<br>USERNAME  :   '  .$user;
    echo '<br>PASSWORD  :   '  .$pass;
    
    echo '<br><br>====== DUNG HAM MA HOA MD5  ===== !';
    echo '<br>======CU PHAP   ===== !';        
    echo '<br>======MA HOA 1 CHUOI :  md5(string)  ===== !';    
    echo '<br>======MA HOA 1 TAP TIN :  md5_file("filename")  ===== !';        
    $user1 	= md5($user);	
    $pass1 	= md5($pass);
    echo '<br>USERNAME  :   '  .$user1;
    echo '<br>PASSWORD  :   '  .$pass1;
    
	echo '<br><br>==== DUNG HAM MA HOA crC32 (Cyclic Redundancy Check) ==== ';
    echo '<br>======CU PHAP   ===== !';        
    echo '<br>======MA HOA 1 CHUOI :  crc32(string)  ===== !';    
    $user2 	= crc32($user);	
    $pass2 	= crc32($pass);
    echo '<br>USERNAME  :   '  .$user2;
    echo '<br>PASSWORD  :   '  .$pass2;

	    
	echo '<br><br>==== DUNG HAM MA HOA string hash (string $algo, string $data, bool $output)  ==== ';    
    echo '<br>Ví dụ mã hóa  user bằng thuật toán RIPEMD (RIPE Message Digest) !';
    echo '<br>===== Mã Hóa Dạng Văn bản: ' . hash('ripemd160', $user) . "<br />";    
	echo '<br>===== Mã Hóa Dạng Nhị phân: ' . hash('ripemd160', $user, TRUE);   
	
	//==== THEM DL VAO CSDL ======
	include ("DBCONN.PHP");	//Goi TT KNCSDL
	//==== KIEM TRA TRONG KHOA ======
	$sqlKey = "SELECT * FROM LOGIN WHERE USER = '" .$user. "' ";
	$resultKey = mysqli_query($link, $sqlKey);
	$smtKey = 0;
	$smtKey = mysqli_num_rows($resultKey);
	if($smtKey > 0)
		echo "Trung KHoa !";
	else
	{
	
		//===== THEM DL VAO BANG LOGIN =====
		$sqlInsert = "INSERT INTO LOGIN (USER, PASS) VALUES ('" .$user1. "', '" .$pass1. "')";
		$result = mysqli_query($link, $sqlInsert);
		$smt = 0;
		if($result)
			$smt = mysqli_affected_rows($link);
		mysqli_close($link);
		//===== CHUYEN HUONG TRANG WEB =====
		header ("location: DSTK.PHP");
	}
?>

?>

<body>
</body>
</html>
*/
?>