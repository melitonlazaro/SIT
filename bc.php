<?php
if( isset($_GET['action']) ){
		switch($_GET['action']){
		case 'editissue'	: editissue(); break;
		case 'addissue'		: addissue(); break;
		case 'adminpage'	: adminpage(); break;
		case 'mousetbl'		: mousetbl(); break;
		case 'hubtbl'		: hubtbl(); break;
		case 'inktbl'		: inktbl(); break;
		case 'keyboardtbl'	: keyboardtbl(); break;
		case 'monitortbl'	: monitortbl(); break;		
		case 'printertbl'	: printertbl(); break;		
		case 'projectortbl'	: projectortbl(); break;
		case 'tonertbl' 	: tonertbl(); break;
		case 'deleteissue'	: deleteissue(); break;
		case 'search_log' 	: search_log(); break;
		case 'employeepage' : employeepage(); break;
		case 'addticket'	: addticket(); break;
		case 'dashboard'	: dashboard(); break;
		case 'confirmconcern'	:confirmconcern(); break;
		case 'confirm_issue'	: confirm_issue(); break;
		case 'archive_log'		: archive_log(); break;
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

function test_id()
{
	include "models/backend_model.php";
	$request = testid();
	include "ok.php";
}
?>
