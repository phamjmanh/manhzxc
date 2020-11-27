<?php
	require_once('contrellers/postController.php');
	$postController = new PostController();
	// $postController->getPost();

	$action = $_GET['action'];
	if($action =='list'){
		$postController->getPost();
	}
	if($action =='listCline'){
		$postController->getPostCline();
	}
	if($action =='add'){
		$postController->addPost();
	}
	if($action =='delete'){
		$postController->delete();
	}
	if($action =='show'){
		$postController->show();
	}
	if($action =='showCline'){
		$postController->showCline();
	}
	if($action == 'doAdd'){
		$postController->doAdd();
	}
	if($action =='update'){
		$postController->edit();
	}
	if($action =='doUpdate'){
		$postController->doUpdate();
	}

?>