<?php


require("connect.php");

$name = $_POST["name"];
$surname = $_POST["surname"];



$sql = "INSERT INTO qwer VALUES (NULL, '$name', '$surname')";

if ($conn->query($sql) === TRUE)
	{
		echo "success";
	}
else
{
	echo "Error: ". $sql ."<br>". $conn->error;
}
$conn->close();

?>