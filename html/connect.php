<?php
	function connectDB(){
		$conn = mysqli_connect("localhost", "root", "", "medspin");
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
		return $conn;
	}
?>