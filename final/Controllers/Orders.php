<?php
    
    include_once __DIR__ . '/../inc/functions.php';
	include_once __DIR__ . '/../inc/allModels.php';
	
	
	@$action = $_REQUEST['action'];
	
	switch ($action) {
		case 'create':
				break;
		case 'update':
				break;
		case 'delete':
				break;
		
		default:
			print_r('controller');
			$model = Order::Get();  // static dereferening operator
			if($action == null) $action = 'index';
			include __DIR__ . "/../Views/Users/$action.php";
			include __DIR__ . "/../Views/Shared/_Layout.php"; 			
			
	}
	
	
