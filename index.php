<?php
session_start();
	if(isset($_SESSION["username"]))
		{
			header("location:home.php");
		}




require("connect.php");
?>

<html>

<?php


$sql = "SELECT * FROM daily_log";

$result = $conn->query($sql);

if ($result->num_rows > 0)
	{
		while($row = $result->fetch_assoc())
		{
			echo "id: " .$row["id"]. " ";
			echo "";
			echo "employee: " .$row['employee']. " ";
			echo "";
			echo "dept: " .$row['department']. " ";
			echo "";
			echo "issue: " .$row['conflict']. "  ";
			echo "";
			echo "remarks: " .$row['remarks']. "  ";
			echo "";
			echo "status: " .$row['status']. " ";
			echo "";
			echo "tech " .$row['tech']. " ";
			echo "";
			echo "date: " .$row['date']. " ";
			echo "<br>";
		}
	}
?>

<br><br>

<form method="POST" action="login.php">
<input type="text" name="username" placeholder="Username">
<br>
<input type="password" name="password" placeholder="Password">
<br>
<input type="submit" value="submit">
</form>


<?php
echo $_SESSION["username"];
?>


</html>