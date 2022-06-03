<?php

class PostView {
	public function showAllData($rows){
		require "publics/list.php";
	}
	public function showAdd(){
		require "publics/add.php";
	}
	public function error(){
		require "publics/error.php";
	}
	public function showUpdate($rows){
		require "publics/update.php";
	}
	public function showInsert($rows){
		require "publics/insert.php";
	}
}

?>