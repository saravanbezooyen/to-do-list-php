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
	$list_title = isset($_POST['list_title']) ? $_POST['list_title'] : null;
	$list_id = isset($_POST['list_id']) ? $_POST['list_id'] : null;
	
	if (strlen($list_title) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "UPDATE lists SET list_title = :list_title WHERE list_id = :list_id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':list_title' => $list_title,
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
	$list_title = isset($_POST['list_title']) ? $_POST['list_title'] : null;

	if (strlen($list_title) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "INSERT INTO lists(list_title) VALUES (:list_title)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':list_title' => $list_title));

	$db = null;
	
	return true;
}
