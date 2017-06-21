<?php 
	require("connect.php");
?>
<!DOCTYPE html>
<html>
<head>
<style>
table{
	width:100%;
	border-collapse: collapse;
}

table, td, th{
	border: 1px solid black;
	padding: 5px;
}

th{
	text-align: left;
}
</style>
</head>
<body>
<?php
	$q = intval($_GET['q']);

	$sql = "SELECT * FROM qwer WHERE id = '".$q."' ";
	$result = $conn->query($sql);

	echo "
	<table>
	<tr>
	<th>ID</th>
	<th>Name</th>
	<th>Surname</th>
	</tr>";
	while ($row = mysqli_fetch_array($result))
	{
		echo "<tr>";
		echo "<td>".$row['id']."</td>";
		echo "<td>".$row['name']."</td>";
		echo "<td>".$row['surname']."</td>";
		echo "</tr>";
	}	
	echo "</table>";
	$conn->close();

?>
</body>
</html>