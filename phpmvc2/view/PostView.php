<?php

class PostView{

	public function ShowAllPost($posts){
		require_once('templates/posts.php');
	}
	public function ShowAllPostCline($posts){
		require_once('templates/postcline.php');
	}
	public function addPost(){
		require_once('templates/addpost.php');
	}
	public function updatePost($data){
		require_once('templates/updatepost.php');
	}
	public function edit($data){
		require_once('templates/updatepost.php');
	}

	public function showSing($row){
		require_once('templates/show.php');
	}
	public function showCline($row){
		require_once('templates/showCline.php');
	}

	public function notifyAdd($status){
		if($status){
			echo'<a href="http://localhost/phpmvc2/?action=list">back to home</a>';
		}else{ echo 'fail';}
	}
	public function notifyUpdate($update){
		if($update){
			echo'<a href="http://localhost/phpmvc2/?action=list">back to home</a>';
		}else{ echo 'fail';}
	}


}
