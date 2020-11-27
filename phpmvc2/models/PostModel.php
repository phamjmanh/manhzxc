<?php

class Postmodel {
	public function getPost(){
		$con = mysqli_connect('localhost','root','','mvc_manh');
		// loi dau utf8
		// check conection
		if(mysqli_connect_errno()){
			echo 'Connect error' . mysqli_connect_errno();
		}
		$result = $con-> query('SELECT * FROM mvc_mananger');

		$posts = array();
		// kiem tra cac ban ghi 
		if ($result->num_rows > 0) {
			while ($post = mysqli_fetch_assoc($result)) {
				$posts[] =$post;
			}
		}
		return $posts;
	}
	//them moi du lieu
	public function addPost($data){
		$con = mysqli_connect('localhost','root','','mvc_manh');
		if(mysqli_connect_errno()){
			echo 'Connect error' . mysqli_connect_errno();
		}
		$sql ="INSERT INTO `mvc_mananger` (`id`, `Imager`, `title`, `status`) VALUES (NULL, '".$data['title']."', '".$data['image']."', '".$data['status']."');";
		$rs = $con->query($sql);
		return $rs;
	}
	//xoa du lieu
	public function deletePost($id){
		$con = mysqli_connect('localhost','root','','mvc_manh');
		if(mysqli_connect_errno()){
			echo 'Connect error' . mysqli_connect_errno();
		}
		$sql ="DELETE FROM `mvc_mananger` WHERE  id = $id";
			$rs = $con->query($sql);
		return $rs;
	}
	//edit
	public function edit($data){
		$con = mysqli_connect('localhost','root','','mvc_manh');
		if(mysqli_connect_errno()){
			echo 'Connect error' . mysqli_connect_errno();
		}
		$sql ="SELECT * FROM mvc_mananger WHERE id ='$id'";
		$posts = array();
		// kiem tra cac ban ghi 
		if ($result->num_rows > 0) {
			while ($post = mysqli_fetch_assoc($result)) {
				$posts[] =$post;
			}
		}
		return $posts;
		// $rs = $con->query($sql);
		// return $rs;
	}
	//su du lieu
	public function updatePost($data){
		$con = mysqli_connect('localhost','root','','mvc_manh');
		if(mysqli_connect_errno()){
			echo 'Connect error' . mysqli_connect_errno();
		}
		 $sql ="UPDATE mvc_mananger SET `Imager` = '".$data['image']."', `title` = '".$data['title']."', `status` = '".$data['status']."' WHERE `mvc_mananger`.`id` = '".$data['id']."'";
		// var_dump( $data); exit();
		// echo $sql =  "UPDATE `mvc_mananger` SET   `Imager` = `$data[image]`, `title` = `$data[title]`, `status` = `$data[status]` WHERE `id` = `$data[id]`;";
		$rs = $con->query($sql);
		return $rs;
	}
	//lay ra 1 
	public function fetch_single($id){
		$con = mysqli_connect('localhost','root','','mvc_manh');
		if(mysqli_connect_errno()){
			echo 'Connect error' . mysqli_connect_errno();
		}
		$sql = "SELECT * FROM mvc_mananger WHERE id =$id";
		$rs = $con->query($sql);
		return $rs;
	}

}

?>