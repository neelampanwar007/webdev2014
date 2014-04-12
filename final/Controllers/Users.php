<?php
    
    include_once __DIR__ . '/../inc/functions.php';
	include_once __DIR__ . '/../inc/allModels.php';
	
	
	@$view = $action = $_REQUEST['action'];  // @ will ignore error if occur in following expression ie on no action , cheks is der ny request, also let 
	@$format = $_REQUEST['format'];
	
	
	switch ($action) {
		case 'new':
			   $view = 'edit';
			   break;
		case 'edit':
			 //losd a record to edit
			 $model = Users::Get($_REQUEST['id']);
				break;
		case 'save':
			// validate
			   $errors = Users::Valdate($_REQUEST['id']);
			   if(!$errors)
			   {
			   	
				$errors = Users::Save($_REQUEST);
			   }
			   
				if(!$errors)
				{
					//echo "success";
					//show recently addes record
					header("Location:  ?");// post redirect get (prg)
					die();// stop processing php for this page
					
				}
				else 
				{
					print_r($errors);	
					$model= $_REQUEST;
					$view = 'edit';
					
				}
			    
			    break;
		case 'delete':
				break;
		
		default:
			
			$model = Users::Get();  // static dereferening operator :: is used to access a static get method,get list of all users
			
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
	
	