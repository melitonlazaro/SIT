<?php
if( isset($_GET['action']) ){
		switch($_GET['action']){
		case 'index'		: index(); break;
		case 'faq'			: faq(); break;
		case 'editissue'	: editissue(); break;
		case 'addissue'		: addissue(); break;
		case 'tickets'		: tickets(); break;
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
		case 'ergoemployee'	: ergoemployee(); break;
		case 'login'		: login(); break;
		case 'logout'		: logout(); break;
		case 'ticketpage'	: ticketpage(); break;
		case 'news'			: news(); break;
		case 'publishnews'	: publishnews(); break;
		case 'news_list'	: news_list(); break;
		case 'show_news'	: show_news(); break; 
		default: index();

		
	}
}

function index()
{
	include_once "models/backend_model.php";
	$news = index_function();
	include_once "index.php";

}

function dashboard()
{
	include_once "models/backend_model.php";
	$request = show_it_concern();
	$request_show_upload = retrieveup();
	$pending_ticket_count = count_pending_ticket();
	$completed_ticket = completed_ticket();
	$incomplete_ticket = incomplete_ticket();
	include_once "dashboard.php";
}

function faq()
{
	include "faq.php";
}

function login()
{
	include "models/backend_model.php";
	$result = user_login();
	if($result)
	{
		dashboard();
	}
	else
	{
		echo 	'
				<script>
				alert("Login Failed.");
				</script>
				';
		session_destroy();

		include "loginpage.php";
	}


}

function logout()
{
	session_start();
	session_destroy();
	index();
}

function ticketpage()
{
	include "addticket.php";

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

function tickets()
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
	
	$result = add_ticket();
	index();
	
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

function ergoemployee()
{
	include "ergoemployee.php";
}


function publishnews()
{
	include "models/backend_model.php";
	$result = publish_news();
	if($result)
	{
		include "news.php";
	}
	else
	{
		include "dashboard.php";
	}
}

function news_list()
{
	include "models/backend_model.php";
	$result = news_lists();
	include "news_lists.php";
}

function show_news()
{
	include "models/backend_model.php";
	$result = show_clicked_news();
	$other_news = show_other_news();
	
	include "view_news.php";
}

?>
