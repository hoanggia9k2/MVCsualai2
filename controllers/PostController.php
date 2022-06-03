<?php

require "models/PostModel.php";
require "views/PostView.php";

class PostController {

	public function getPost()
	{
		$postModel = new PostModel();
		$rows = $postModel -> getAllData();

		$postView = new PostView();
		$postView -> showAllData($rows);
	}

	public function addPost()
	{
		$postView = new PostView();
		$postView -> showAdd();

		if(isset($_POST['add'])){
			$username = $_POST['username'];
			$password = $_POST['password'];
			$fullname = $_POST['fullname'];
			$gioitinh = $_POST['gioitinh'];
			$ngaysinh = $_POST['ngaysinh'];
			$diachi = $_POST['diachi'];
			$email = $_POST['email'];
			$sdt = $_POST['sdt'];

			$postModel = new PostModel();
			if($postModel -> add($fullname,$gioitinh,$ngaysinh,$diachi,$email,$sdt)){
				header('Location: ?');
			}else{
				header('Location: ?action=error');
			}
		}
	}

	public function updatePost()
	{
		if (isset($_GET['id']))
		{
			$id = $_GET['id'];
			$postModel = new PostModel();
			$postModel -> getData($id);
			$rows = $postModel -> getData($id);

			$updateView = new PostView();
			$updateView -> showUpdate($rows);

			if(isset($_POST['update'])){
				$fullname = $_POST['fullname'];
				$gioitinh = $_POST['gioitinh'];
				$ngaysinh = $_POST['ngaysinh'];
				$diachi = $_POST['diachi'];
				$email = $_POST['email'];
				$sdt = $_POST['sdt'];
				if($postModel->update($id,$fullname,$gioitinh,$ngaysinh,$diachi,$email,$sdt)){
					header('Location: ?');
				}else{
					header('Location: ?action=error');
				}
			}
		}
	}

	public function deletePost()
	{
		if (isset($_GET['id'])){
			$id = $_GET['id'];
			$postModel = new PostModel();
			$postModel -> delete($id);
			if($postModel->update($id,$fullname,$gioitinh,$ngaysinh,$diachi,$email,$sdt)){
				header('Location: ?');
			}else{
				header('Location: ?action=error');
			}
		}
	}

	public function errorPost()
	{
		$postView = new PostView();
		$postView -> error();
	}

	public function insertPost()
	{
		if (isset($_GET['id']))
		{
			$id = $_GET['id'];
			$postModel = new PostModel();
			$postModel -> getData($id);
			$rows = $postModel -> getData($id);	

			$postView = new PostView();
			$postView -> showInsert($rows);
		}
	}
}
?>