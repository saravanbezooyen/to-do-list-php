<?php

function getList($list_id) 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM lists WHERE list_id = :list_id";
	$query = $db->prepare($sql);
	$query->execute(array(
		":list_id" => $list_id));

	$db = null;

	return $query->fetch();
}

function getAllLists() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM lists";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function editList() 
{
	$title = isset($_POST['title']) ? $_POST['title'] : null;
	$list_id = isset($_POST['list_id']) ? $_POST['list_id'] : null;
	
	if (strlen($title) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "UPDATE lists SET title = :title WHERE list_id = :list_id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':title' => $title,
		':list_id' => $list_id));

	$db = null;
	
	return true;
}

function deleteList($list_id = null) 
{
	if (!$list_id) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "DELETE FROM lists WHERE list_id=:list_id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':list_id' => $list_id));

	$db = null;
	
	return true;
}

function createList() 
{
	$title = isset($_POST['title']) ? $_POST['title'] : null;

	if (strlen($title) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "INSERT INTO lists(title) VALUES (:title)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':title' => $title));

	$db = null;
	
	return true;
}
