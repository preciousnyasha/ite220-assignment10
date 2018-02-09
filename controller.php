<?php
	include 'db.php';
	// error_log("test ajax");
	$action = $_POST["action"];
	if($action == "get_supplier_address"){
		get_supplier_address();
	}

	function get_supplier_address(){
		$id = $_POST["id"];
		// echo "got it: $id";
		$conn = open_db_connection();
		$sql = "SELECT * FROM Supplier WHERE Vendor_id = $id";
		$res = $conn->query($sql);
		if($res->num_rows > 0){
			$item = $res->fetch_assoc();
			echo $item["Address"]." ". $item["Email"]." ". $item["Phone_number"];
		}
		$conn->close();
	}

?>