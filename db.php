<?php
function open_db_connection(){
	return mysqli_connect('localhost', 'root', 'root', 'Ahm_Assignment');
}

function list_suppliers(){
	$conn = open_db_connection();
	if(!$conn){
		echo "Cannot connect to db";
	}else{
		$sql = "SELECT * FROM Supplier";
		$res = $conn->query($sql);
		if($res->num_rows > 0){
			while($row = $res->fetch_assoc()){
				$id = $row["Vendor_id"];
				$name = $row["Vendor_name"];
				echo "<option value='$id'>$name</option>";
			}
		}
		$conn->close();
	}
}


   

?>