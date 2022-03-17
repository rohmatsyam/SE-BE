<?php

class database
{

	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "db_blog";
	var $conn;

	function __construct()
	{
		$this->conn = new mysqli($this->host, $this->uname, $this->pass, $this->db);
	}

	function getAll()
	{
		$data = mysqli_query(
			$this->conn,
			"select blog.*, category.name as category_name, user.name as user_name from blog 
			join category on category.id_category = blog.id_category
			join user on user.id_user = blog.id_user
			"
		);
		while ($d = mysqli_fetch_assoc($data)) {
			$result[] = $d;
		}
		return $result;
	}

	function getSelectedBlog($id)
	{
		$result = [];

		$data = mysqli_query(
			$this->conn,
			"select blog.*, category.name as category_name, user.name as user_name from blog 
		join category on category.id_category = blog.id_category
		join user on user.id_user = blog.id_user WHERE blog.id_blog = $id"
		);
		while ($d = mysqli_fetch_assoc($data)) {
			$result[] = $d;
		}
		return $result;
	}

	function store($title, $subTitle, $content, $date, $categoryId, $userId)
	{
		$data = mysqli_query(
			$this->conn,
			"insert into blog (title,sub_title,content,date,id_category,id_user) 
		values('$title','$subTitle','$content','$date','$categoryId','$userId')"
		);

		return $data;
	}

	function update($id, $title, $subTitle, $content, $date, $categoryId, $userId)
	{
		$data = mysqli_query(
			$this->conn,
			"update blog set 
		title='$title', 
		sub_title='$subTitle', 
		content='$content',
		date='$date',
		id_category='$categoryId',
		id_user='$userId' 
		where id_blog='$id'"
		);

		return $data;
	}

	function delete($id)
	{
		$data = mysqli_query($this->conn, "delete from blog where id_blog='$id'");

		return $data;
	}
}
