<?php
    
    include_once __DIR__ . '/../inc/functions.php';
	include_once __DIR__ . '/../inc/allModels.php';
	
	
	@$view = $action = $_REQUEST['action'];  // @ will ignore error if occur in following expression ie on no action , cheks is der ny request, also let 
	@$format = $_REQUEST['format'];
	switch ($action) {
		case 'create':
				break;
		case 'update':
				break;
		case 'delete':
				break;
		
		default:
			
			$model = Users::Get();  // static dereferening operator :: is used to access a static get method,get list of all users
			
			if($action == null) $action = 'index';
			include __DIR__ . "/../Views/Users/$action.php";
 			if($view == null) $view = 'index';
	}
	
	// second switch will take care to view 
	switch ($format) {
		case 'plain':
			include __DIR__ . "/../Views/Users/$view.php"; // we always wanna display view
			break;
		
		default:
			$view = __DIR__ . "/../Views/Users/$view.php";
			include __DIR__ . "/../Views/Shared/_Layout.php"; 			
			break;
	}
	
	
