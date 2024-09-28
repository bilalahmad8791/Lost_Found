<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "lossfound";

$db = mysqli_connect($servername,$username,$password,$database);
if($db){
	
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		
		$name = $_POST['name'];
		$enroll_no = $_POST['enroll_no'];
		$number_no = $_POST['number_no'];
		$item_name = $_POST['item_name'];
		$item_description = $_POST['item_description'];
		$item_location = $_POST['item_location'];
		$item_photo = $_POST['item_photo'];
	   /* $filename = $_FILES['item_photo']['name'];
	    $filetem = $_FILES['item_photo']['tem_name'];*/
		
		$sql = "INSERT INTO user_data(name,enroll_name,phone_no,item_name,item_description,item_photo,location)VALUES('$name','$enroll_no','$number_no','$item_name','$item_description','$item_photo','$item_location')";
		$reselt = $db->query($sql);
		if($reselt){
			echo "insert data";
		}
		else{
			echo "not insert data";
		}
	}
	else{
        echo $_SERVER['REQUEST_METHOD'];
	}
}
else{
	echo "not databse create";
}

?>