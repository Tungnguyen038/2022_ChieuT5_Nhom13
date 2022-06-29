<?php
	$hoTen = $_POST['hoTen'];
	$email = $_POST['email'];
	$sdt = $_POST['sdt'];
	$diaChi = $_POST['diaChi'];

	$conn = new mysqli('localhost','root','','batdongsan');
	if($conn->connect_error){
		die('Connect Failed : '.$conn->connect_error);
 	}else{
 $sql = "INSERT INTO thanhtoan(hoTen,email,sdt,diaChi) VALUES ('$hoTen', '$email','$sdt', '$diaChi')";
if (mysqli_query($conn, $sql)) {
      echo "Thanh toán thành công";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
	}
?>