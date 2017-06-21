<?php

require("connect.php");

$id = $_POST["id"];


$sql = "DELETE FROM qwer WHERE id=$id";

if($conn->query($sql) === TRUE)
	{
		echo "successfully Deleted.";
	}
else
{
	echo "Error:".$sql."<br>".$conn->error; 
}
?>