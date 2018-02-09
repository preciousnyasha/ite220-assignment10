<?php
include 'db.php';

function create_supplires(){
   $conn = open_db_connection();

    $venderName = $_POST["vendor_name"];
    $address = $_POST["address"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $zipcode = $_POST["zipcode"];

//check whether user exist
    if(!$conn){
    	echo "cannot connect to DB";
    }else{
    	$res = $conn->query("SELECT * FROM Supplier WHERE Vendor_name = '$venderName'");
	    if(mysqli_num_rows($res)>=1){
	        echo "name already exist !";
	    }else {
	    	if($conn->query("INSERT INTO Supplier(Vendor_name, Address,Email,Phone_number,Zipcode) VALUES('$venderName', '$address','$email','$phone','$zipcode')")){
	            // echo "sucessfully inserted";
	            header("Location: http://localhost/acc/expense.php");
	            exit;
	        }else{
	            echo "failed";
	        }
	    }
	    $conn->close();	
    }
}

create_supplires();


?>