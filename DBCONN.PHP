<?PHP
	//Ket Noi & Mpo CSDL
	$link = mysqli_connect("localhost", "root", "", "qlbh2");
	mysqli_set_charset($link, "UTF8");
	if (!$link)
	{
		echo "Ket Noi Khong Thanh Cong !";
		exit();
	}
//else
//{	echo "Ket Noi Thanh Cong !"; }
?>