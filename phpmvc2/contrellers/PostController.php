<?php

class PostController{
	public function getPost(){
		require_once('models/postmodel.php');
		$postModel= new PostModel();
		$posts = $postModel ->getPost();
		// tess hien thu du lieu trong database len controller
		// print_r($posts);
		require_once('view/PostView.php');
		$postView = new PostView();
		$postView ->showAllPost($posts);
	}
	public function getPostCline(){
		require_once('models/postmodel.php');
		$postModel= new PostModel();
		$posts = $postModel ->getPost();
		// tess hien thu du lieu trong database len controller
		// print_r($posts);
		require_once('view/PostView.php');
		$postView = new PostView();
		$postView ->ShowAllPostCline($posts);
	}
	//them bai viet
	public function addPost(){
		require_once('view/PostView.php');
		$postView = new PostView();
		$postView ->addpost();
	}
	//them 
	public function doAdd(){
		$title = $_POST['title'];
		$image = $_POST['image'];
		$status = $_POST['status'];
  		//check du lieu
  		//ket thuc check du lieu	
		$data= array(
			'title' =>$title,
			'image' =>$image,
			'status' =>$status,
		);
		require_once('models/postmodel.php');
		$postModel= new PostModel();
		$status = $postModel ->addPost($data);
		require_once('view/PostView.php');
		$postView = new PostView();
		$postView ->notifyAdd($status);
	}
	//xoa
	public function delete(){
		require_once('models/postmodel.php');
		$postModel= new PostModel();
		 $id =$_REQUEST['id'];
		$delete = $postModel ->deletePost($id);
		require_once('view/PostView.php');
		$postView = new PostView();
		$postView ->notifyAdd($id);	 
	}
	//show
	public function show(){
		require_once('models/PostModel.php');
		$postModel= new PostModel();
		$id =$_REQUEST['id'];
		$row = $postModel->fetch_single($id);
		require_once('view/PostView.php');
		$postView = new PostView();
		$postView ->showSing($row);
	}
	public function showCline(){
		require_once('models/PostModel.php');
		$postModel= new PostModel();
		$id =$_REQUEST['id'];
		$row = $postModel->fetch_single($id);
		require_once('view/PostView.php');
		$postView = new PostView();
		$postView ->showCline($row);
	}
	//edit
	public function edit(){
		require_once('models/PostModel.php');
		$postModel= new PostModel();
		$id =$_REQUEST['id'];
		$post = $postModel->fetch_single($id);
		require_once('view/PostView.php');
		$postView = new PostView();
		$postView ->updatePost($post);
	}
	//update
	public function doUpdate(){	
		$id =$_REQUEST['id'];
		$title = $_POST['title'];
		$image = $_POST['image'];
		$status = $_POST['status'];
  		//check du lieu
  		//ket thuc check du lieu	
		$post= array(
			'id' => $id,
			'title' =>$title,
			'image' =>$image,
			'status' =>$status,
		);
		require_once('models/postmodel.php');
		$postModel= new PostModel();
		$update = $postModel ->updatePost($post);
		require_once('view/PostView.php');
		$postView = new PostView();
		$postView ->notifyUpdate($update);
	}
	
 }
?>