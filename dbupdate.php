<?php

require("connect.php");

$id = $_POST["id"];
$zxc = $_POST["name"];

$surname = $_POST["surname"];

$sql = "UPDATE qwer SET name='$zxc', surname='$surname' WHERE id=$id";

if($conn->query($sql) === TRUE)
	{
		echo "Updating Successful";
	}
else
	{
		echo "Error:".$sql."<br>".$conn->error;
	}

$conn->close();

?>