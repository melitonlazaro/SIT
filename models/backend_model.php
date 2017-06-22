<?php





function show_issues()
{
	// connect to the server
	include"config.inc.php";
	$conn = mysqli_connect($host,$user,$pass,$ojt);

	// check the connection
	if( mysqli_connect_errno($conn) ){
		echo "Error connecting to MySQL server!";
	}
	$sql = "Select * from daily_log";

	//execute the query
	$result = mysqli_query($conn, $sql);

	//process the result
	$record = array();
	if( $myrow=mysqli_fetch_array($result) ){
		do{
			$info = array();
			$info['id'] = $myrow['id'];
			$info['employee'] = $myrow['employee'];
			$info['department'] = $myrow['department'];
			$info['conflict'] = $myrow['conflict'];
			$info['remarks'] = $myrow['remarks'];
			$info['status'] = $myrow['status'];
			$info['tech'] = $myrow['tech'];
			$info['date'] = $myrow['date'];
			$record[] = $info;
		}while($myrow=mysqli_fetch_array($result));
	}
	// print_r($record);
	return $record;

}



function AddIssue_Mdl(){
	//
	include("config.inc.php");

	$conn = mysqli_connect("localhost","root","","ojt");

	if( mysqli_connect_errno($conn)){
		echo "Error connecting to MySQL server!";
	}

	$employee= $_POST['employee'];
	$department= $_POST['department'];
	$conflict= $_POST['conflict'];
	$remarks= $_POST['remarks'];
	$status= $_POST['status'];
	$tech= $_POST['tech'];
	$date= date('Y-m-d');

	// echo "'$firstname','$lastname','$middleinitial','$address1','$type'";
	$sql= "INSERT INTO daily_log VALUES (NULL,'$employee','$department','$conflict','$remarks','$status','$tech', '$date')";

	// $result = mysqli_query($conn,$sql);

	if(mysqli_query($conn, $sql))
	{
		echo '<script language="javascript">';
		echo 'alert("Successfully Inserted!")';
		echo '</script>';
	}else{
		echo '<script language="javascript">';
		echo 'alert("Not Inserted")';
		echo '</script>';
	}

}

function EditIssue_Mdl(){
	$conn = mysqli_connect("localhost","root","","ojt");

	if( mysqli_connect_errno($conn)){
		echo "Error connecting to MySQL server!";
	}

	 $id1=$_POST['id'];
	 $conflict1=$_POST['conflict'];
	 $remarks1=$_POST['remarks'];
	 $status1=$_POST['status'];
	 $tech1=$_POST['tech'];

	$sql= "UPDATE daily_log SET remarks='$remarks1', status='$status1', tech='$tech1' where id='$id1'";
		if(mysqli_query($conn, $sql))
		{
			echo '<script language="javascript">';
			echo 'alert("Successfully Edited!")';
			echo '</script>';
			// echo "Updated";
		}else{
			echo '<script language="javascript">';
			echo 'alert("Failed to Update")';
			echo '</script>';
			// echo "Failed to Update";
		}

	
}


function AddOfficial_model(){
	$conn = mysqli_connect("localhost","root","","barangay");

	if( mysqli_connect_errno($conn)){
		echo "Error connecting to MySQL server!";
	}

	$username= $_POST['username'];
	$position= $_POST['position'];
	$password= $_POST['password'];
	$confirmpass= $_POST['confirmpass'];
	
		
	/*if($password!=$confirmpass){
		echo '<script language="javascript">';
		echo 'alert("Your passwords did not match. Repeat the process.")';
		echo '</script>';
	}*/
	
	
	if(empty($username)){
		echo '<script language="javascript">';
		echo 'alert("You should enter a username to continue. You have to repeat the process.")';
		echo '</script>';
		
	}
	
	else if(empty($position)){
		echo '<script language="javascript">';
		echo 'alert("You should enter the position to continue. You have to repeat the process.")';
		echo '</script>';
		
	}
	
	else if(empty($password)){
		echo '<script language="javascript">';
		echo 'alert("You should enter your password to continue. You have to repeat the process.")';
		echo '</script>';
		
	}
	
	else if(empty($confirmpass)){
		echo '<script language="javascript">';
		echo 'alert("You should confirm your password to continue. You have to repeat the process.")';
		echo '</script>';
		
	}
	
	else{
		if($password!=$confirmpass){
		echo '<script language="javascript">';
		echo 'alert("Your passwords did not match. Repeat the process.")';
		echo '</script>';
		}
		else{
			$sql= "INSERT INTO officials VALUES (NULL,'$username','$password','$position')";
		
			if(mysqli_query($conn, $sql))
			{
				echo '<script language="javascript">';
				echo 'alert("Successfully Inserted!")';
				echo '</script>';
			}
			else{
				echo '<script language="javascript">';
				echo 'alert("Not Inserted")';
				echo '</script>';
			}
		}
	}
	// $result = mysqli_query($conn,$sql);

	
	
}


function EditOfficial_model(){
	
	$conn = mysqli_connect("localhost","root","","barangay");

	if( mysqli_connect_errno($conn)){
		echo "Error connecting to MySQL server!";
	}

	
	$sql= "UPDATE  SET Username='".$_POST['username']."', Position='".$_POST['position']."' WHERE ID='".$_POST['ID']."'" ;

	
	if(mysqli_query($conn, $sql))
		{
			echo '<script language="javascript">';
			echo 'alert("Successfully Edited!")';
			echo '</script>';
			
		}else{
			echo '<script language="javascript">';
			echo 'alert("Failed to Update")';
			echo '</script>';
		}
	
	
}

function DeleteOfficial_model(){
	
	$conn = mysqli_connect("localhost","root","","barangay");

	if( mysqli_connect_errno($conn)){
		echo "Error connecting to MySQL server!";
	}

	

	$sql= "UPDATE officials SET Position='Old' WHERE ID='".$_POST['ID']."'" ;
		if(mysqli_query($conn, $sql))
		{
			echo '<script language="javascript">';
			echo 'alert("Successfully Deleted!")';
			echo '</script>';
			
		}else{
			echo '<script language="javascript">';
			echo 'alert("Failed to Update")';
			echo '</script>';
		}
	
}



?>
