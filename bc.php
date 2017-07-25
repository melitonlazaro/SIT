<?php
if( isset($_GET['action']) ){
		switch($_GET['action']){
		case 'editissue'	: editissue(); break;
		case 'addissue'		: addissue(); break;
		case 'adminpage'	: adminpage(); break;
		case 'deleteissue'	: deleteissue(); break;
		case 'search_log' 	: search_log(); break;
		case 'employeepage' : employeepage(); break;
		case 'addticket'	: addticket(); break;
		case 'dashboard'	: dashboard(); break;
		case 'confirmconcern'	:confirmconcern(); break;
		case 'confirm_issue'	: confirm_issue(); break;
		case 'archive_log'		: archive_log(); break;
		case 'logsort'		: logsort(); break;
		case 'retriveuploads'	: retriveuploads(); break;
		default: include "View-People.php";

		
	}
}

function deleteissue()
{
	include "models/backend_model.php";
	deleteissue_mdl();
	$request= show_issues();
	include "View-People.php";
}

function addissue()
{
	include "models/backend_model.php";
	AddIssue_Mdl();
	$request= show_issues();
	include "View-People.php";
}


function editissue()
{
	include "models/backend_model.php";
	EditIssue_Mdl();
	$request = show_issues();
	include "View-People.php";
}

function adminpage()
{
	include "models/backend_model.php";
	$request = show_issues();
	$request_show_upload = retrieveup();
	include "View-People.php";
}


function search_log()
{
	include "models/backend_model.php";
	$request = searchlog();
	include "View-People.php";
}

function archive_log()
{
	include "models/backend_model.php";
	archivelog();
	$request = show_issues();
	include "View-People.php";

}

function employeepage()
{
	include "models/backend_model.php";
	$request = show_employee();
	include "employee.php";
}

function addticket()
{
	include "models/backend_model.php";
	add_ticket();
	$request = show_employee();
	include "employee.php";
}

function dashboard()
{
	include "models/backend_model.php";
	$request = show_it_concern();
	$request_show_upload = retrieveup();
	include "dashboard.php";
}

function confirmconcern()
{
	include "models/backend_model.php";
	$request = show_it_concern();
	include "dashboard.php";
}

function confirm_issue()
{
	include "models/backend_model.php";
	transfer_issue();
	$request = show_issues();
	include "view-people.php";

}

function logsort()
{
	include "models/backend_model.php";
	$request = log_sort();
	include "view-people.php";
}

function retriveuploads()
{
	include "models/backend_model.php";
	$request = retrieveup();
	include "retriveupload.php";
}

?>
