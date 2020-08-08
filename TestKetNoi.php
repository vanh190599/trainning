<!-- /* Bài tập:
	MVC
	1. tạo db Sinhvien
		- id
		- hoten
		- dien thoai
		- lop
		- diem
	2. hien thi: 
		- tu code html
		- foreach
	//-------
	1. ket noi
	2. csdl
*/ -->

<?php 
 	function connection(){
 		//khai bao bien toan cuc de su dung o day
 		$hostname = "localhost";
 		$database = "mypham";
 		$user = "root";
 		$password = "";
 		//ket noi csdl
 		$conn = new PDO("mysql:host=$hostname;dbname=$database","$user","$password");
 		//tra bien ket noi de lay tu cac ham khac
 		return $conn;
 	}

 	$conn = connection();
 	if($conn){
		print("thanh cong");
 	}
 ?>