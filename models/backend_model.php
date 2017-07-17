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
	$sql = "Select * from daily_log ORDER BY id DESC";

	//execute the query
	$result = mysqli_query($conn, $sql);

	//process the result=
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
			$info['time'] = $myrow['time'];
			$record[] = $info;
		}while($myrow=mysqli_fetch_array($result));
	}
	// print_r($record);
	return $record;

}



function AddIssue_Mdl(){
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
	$date = date("Y-m-d");
	$time = date("h:i A");

	// echo "'$firstname','$lastname','$middleinitial','$address1','$type'";
	$sql= "INSERT INTO daily_log VALUES (NULL,'$employee','$department','$conflict','$remarks','$status','$tech', '$date', '$time' )";

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
	
	$id1=$_POST['id'];
	$remarks1=$_POST['remarks'];
	$conflict1=$_POST['conflict'];
	$status1=$_POST['status'];
	$tech1=$_POST['tech'];
	
	
	if( mysqli_connect_errno($conn)){
		echo "Error connecting to MySQL server!";
	}
	
	
	// remarks='$remarks1', status='$status1', tech='tech1'
	$sql= "UPDATE daily_log SET remarks='$remarks1', conflict='$conflict1', status='$status1', tech='$tech1' where id='$id1'";
	//$sql= "UPDATE daily_log SET employee='$employee1' where id='$id1'";
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

function archivelog()
{
	include("config.inc.php");
	$conn = mysqli_connect("localhost","root","","ojt");


	if( mysqli_connect_errno($conn)){
		echo "Error connecting to MySQL server!";
	}

	$id = $_POST["id"];
	$employee = $_POST["employee"];
	$department = $_POST["department"];
	$conflict = $_POST["conflict"];
	$remarks = $_POST["remarks"];
	$status = $_POST["status"];
	$tech = $_POST["tech"];
	$date = $_POST["date"];
	$time = $_POST["time"];
	$logdate = date("Y-m-d");

	$sql = "INSERT INTO log_archived VALUES(NULL, '$id', '$employee', '$department', '$conflict', '$remarks', '$status', '$tech', '$date','$time', '$logdate')";
	$result = mysqli_query($conn, $sql);

	if($result)
	{
		$sql1 = "DELETE FROM daily_log WHERE id='$id' ";
		$result1 = mysqli_query($conn, $sql1);

		if($result1)
		{
			echo '<script language="javascript">';
			echo 'alert("SUCCESS")';
			echo '</script>';
		}
		else
		{
			echo '<script language="javascript">';
			echo 'alert("ERROR")';
			echo '</script>';
		}	
	}
	else
	{

		echo '<script language="javascript">';
		echo 'alert("ERROR")';
		echo '</script>';
	}
		





}


function searchlog()
{
	include("config.inc.php");
	$conn = mysqli_connect("localhost","root","","ojt");


	if( mysqli_connect_errno($conn)){
		echo "Error connecting to MySQL server!";
	}

	$search = $_POST["search"];

	$query = "SELECT * FROM daily_log
	 WHERE employee LIKE '%".$search."%'
	  OR id LIKE '%".$search."%'
	  OR department LIKE '%".$search."%' 
	  OR conflict LIKE '%".$search."%' 
	  OR remarks LIKE '%".$search."%' 
	  OR status LIKE '%".$search."%'
	  OR tech LIKE '%".$search."%'
	  OR date LIKE '%".$search."%'
	  AND status !='Old'
	";
	$result = mysqli_query($conn, $query);

	$record = array();
	if( $myrow=mysqli_fetch_assoc($result) ){
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
			$info['time'] = $myrow['time'];
			$record[] = $info;
		}while($myrow=mysqli_fetch_array($result));
	}
	// print_r($record);
	return $record;



}



function show_employee()
{
	include"config.inc.php";
	$conn = mysqli_connect($host,$user,$pass,$ojt);


		if(mysqli_connect_errno($conn))
		{
			echo "Error connecting to MySQL server!";
		}

	$query = "SELECT * FROM employee";

	$result = mysqli_query($conn, $query);

	$record = array();

	if($myrow = mysqli_fetch_array($result))
	{
		do
		{
			$info = array();
			$info["employee_id"] = $myrow["employee_id"];
			$info["first_name"] = $myrow["first_name"];
			$info["last_name"] = $myrow["last_name"];
			$info["department"] = $myrow["department"];
			$info["directory"] = $myrow["directory"];
			$info["email"] = $myrow["email"];
			$info["status"] = $myrow["status"];
			$record[] = $info;

		}
		while($myrow = mysqli_fetch_array($result));
	}
		return $record;


}

function add_ticket()
{
	include "config.inc.php";
	$conn = mysqli_connect($host, $user, $pass, $ojt);

	if(mysqli_errno($conn))
	{
		echo "Error connecting to MySQL Server";
	}


	$ticketname = $_POST["name"];
	$department = $_POST["department"];
	$concern = $_POST["concern"];
	$date = date("Y-m-d");
	$time = date("h:i A");

	$sql = "INSERT INTO it_concern VALUES (NULL, '$ticketname', '$department', '$concern', '$date', '$time')";
	
	$query = mysqli_query($conn, $sql);

	if($query)
	{
		$last_id = mysqli_insert_id($conn);
		if(isset($_FILES['files']))
		{
			    $errors= array();
				foreach($_FILES['files']['tmp_name'] as $key => $tmp_name )
				{
					$file_name = $_FILES['files']['name'][$key];
					$file_size =$_FILES['files']['size'][$key];
					$file_tmp =$_FILES['files']['tmp_name'][$key];
					$file_type=$_FILES['files']['type'][$key];	
		      	
		       	
		        $desired_dir="user_data";
		        if(empty($errors)==true)
		        {
		            if(is_dir($desired_dir)==false)
		            {
		                mkdir("$desired_dir", 0700);		// Create directory if it does not exist
		            }
		            if(file_exists("$desired_dir/".$file_name)==false)
		            {
		            	$path = move_uploaded_file($file_tmp,"user_data/".$file_name);
		            	$query="INSERT into uploads  VALUES(NULL, '$last_id','$file_name') ";
		            	mysqli_query($conn, $query);
		              
		            }
		            else
		            {
		            	$newname = time().$file_name;		
		           		$new_dir="user_data/".$newname;
		                rename($file_tmp,$new_dir) ;						//rename the file if another one exist
		             	$query="INSERT into uploads  VALUES(NULL,'$last_id','$newname') ";
		             	mysqli_query($conn, $query);	
		            }
		            
		            			
		        }
		        else
		        {
		                print_r($errors);
		        }
		    }
			if(empty($error)){
				echo "Success";
			}
		}
		
	
		echo '<script language="javascript">';
		echo 'alert("Your request has been sent to IT Department, Please wait to be assisted. Thank You!")';
		echo '</script>';
	}else{
		echo '<script language="javascript">';
		echo 'alert("Error")';
		echo '</script>';
	}


}



function show_it_concern()
{
	include"config.inc.php";
	$conn = mysqli_connect($host,$user,$pass,$ojt);


		if(mysqli_connect_errno($conn))
		{
			echo "Error connecting to MySQL server!";
		}

	$query = "SELECT * FROM it_concern";

	$result = mysqli_query($conn, $query);

	$record = array();

	if($myrow = mysqli_fetch_array($result))
	{
		do
		{
			$info = array();
			$info["ticket_id"] = $myrow["ticket_id"];
			$info["name"] = $myrow["name"];
			$info["department"] = $myrow["department"];
			$info["concern"] = $myrow["concern"];
			$info["date"] = $myrow["date"];
			$info["time"] = $myrow["time"];
			
			$record[] = $info;

		}
		while($myrow = mysqli_fetch_array($result));
	}
		return $record;
}

function transfer_issue()
{
	include"config.inc.php";
	$conn = mysqli_connect($host,$user,$pass,$ojt);


		if(mysqli_connect_errno($conn))
		{
			echo "Error connecting to MySQL server!";
		}

	$id = $_POST["id"];
	$name = $_POST["name"];
	$department = $_POST["department"];
	$conflict = $_POST["concern"];
	$status = $_POST["status"];
	$tech = $_POST["tech"];
	$remarks = $_POST["remarks"];
	$datelog = $_POST["datelog"];
	$timelog = $_POST["timelog"];



	

	$sql = "INSERT INTO daily_log VALUES (NULL, '$name', '$department', '$conflict', '$remarks', '$status', '$tech', '$datelog', '$timelog')";

	$result = mysqli_query($conn,$sql);

	if($result)
	{
		$sql2 = "DELETE FROM it_concern WHERE id='$id'";
		$result2 = mysqli_query($conn, $sql2);
		
		if($sql2)
		{
			echo '<script language="javascript">';
			echo 'alert("SUCCESS")';
			echo '</script>';
		}
		else
		{
			echo '<script language="javascript">';
			echo 'alert("ERROR")';
			echo '</script>';
		}	
	}
	else
	{

		echo '<script language="javascript">';
		echo 'alert("ERROR")';
		echo '</script>';
	}

}

function log_sort()
{
		include"config.inc.php";
	$conn = mysqli_connect($host,$user,$pass,$ojt);


		if(mysqli_connect_errno($conn))
		{
			echo "Error connecting to MySQL server!";
		}

	$fromsort = $_POST["fromsort"];
	$tosort = $_POST["tosort"];

	$sql = "SELECT * FROM daily_log WHERE `date` between '$fromsort' and '$tosort' order by `id` desc";

	$result = mysqli_query($conn, $sql);

	$record = array();

	if($myrow = mysqli_fetch_array($result))
	{
		do
		{
		$info = array();
		$info["id"] = $myrow["id"];
		$info["employee"] = $myrow["employee"];
		$info["department"] = $myrow["department"];
		$info["conflict"] = $myrow["conflict"];
		$info["remarks"] = $myrow["remarks"];
		$info["status"] = $myrow["status"];
		$info["tech"] = $myrow["tech"];
		$info["date"] = $myrow["date"];
		$info["time"] = $myrow["time"];

		$record[] = $info;
		}while($myrow = mysqli_fetch_array($result));
	}

	return $record;
}

function retrieveup()
{
	include "config.inc.php";
	$ticket_id = $_POST["ticket_id"];
	$sql = "SELECT * FROM uploads WHERE ticket_id='$ticket_id' ";

	$result = mysqli_query($conn, $sql);

	$record = array();

	if($myrow = mysqli_fetch_array($result))
	{
		do
		{
			$info = array();
			$info["id"] = $myrow["id"];
			$info["ticket_id"] = $myrow["ticket_id"];
			$info["path"] = $myrow["path"];

			$record[] = $info;
		}while($myrow = mysqli_fetch_array($result));	
	}
	return $record;
}

?>
