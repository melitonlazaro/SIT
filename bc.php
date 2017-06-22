<?php
if( isset($_GET['action']) ){
	switch($_GET['action']){
	case 'home': home_view(); break;
	case 'editissue': editissue(); break;
	case 'addissue': addissue(); break;
	case 'adminpage': adminpage(); break;
	
}}

function home_view()
{
	include "View-Clearance.php";
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

?>
