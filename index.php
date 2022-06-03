<?php

$action = $_GET['action'];

require "controllers/PostController.php";
$postController = new PostController();

switch ($action) {
	case 'add':
		$postController ->addPost();
		break;

	case 'error':
		$postController ->errorPost();
		break;

	case 'update':
		$postController ->updatePost();
		break;

	case 'delete':
		$postController ->deletePost();
		break;

	case 'insert':
		$postController ->insertPost();
		break;

	default:
		$postController -> getPost();
		break;
}
?>