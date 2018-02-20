<?php

function getItem($item_id) 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM items WHERE item_id = :item_id";
	$query = $db->prepare($sql);
	$query->execute(array(
		":item_id" => $item_id));

	$db = null;

	return $query->fetch();
}

function getAllItems($item_id) 
{
	$db = openDatabaseConnection();

	$sql = "SELECT `items`.*, `lists`.list_title
			FROM `items`
			INNER JOIN `lists`
			ON `items`.list_id = `lists`.list_id
			WHERE `lists`.list_id = :list_id";

	$query = $db->prepare($sql);
	$query->bindParam(':list_id', $list_id);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function editItem() 
{
	$item_title	 = isset($_POST['item_title']) ? $_POST['item_title'] : null;
	$item_status = isset($_POST['item_status']) ? $_POST['item_status'] : null;
	$list_id = isset($_POST['list_id']) ? $_POST['list_id'] : null;
	$item_id = isset($_POST['item_id']) ? $_POST['item_id'] : null;
	
	if (strlen($item_title) == 0 || strlen($item_status) == 0 || strlen($list_id) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "UPDATE items SET item_title = :item_title, item_status = :item_status, list_id = :list_id WHERE item_id = :item_id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':item_title' => $item_title,
		':item_status' => $item_status,
		':list_id' => $list_id,
		':item_id' => $item_id));

	$db = null;
	
	return true;
}

function deleteItem($item_id = null) 
{
	if (!$item_id) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "DELETE FROM items WHERE item_id=:item_id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':item_id' => $item_id));

	$db = null;
	
	return true;
}

function createItem() 
{
	$item_title = isset($_POST['item_title']) ? $_POST['item_title'] : null;
	$item_status = isset($_POST['item_status']) ? $_POST['item_status'] : null;
	$list_id = isset($_POST['list_id']) ? $_POST['list_id'] : null;
	
	if (strlen($item_title) == 0 || strlen($item_status) == 0 || strlen($list_id) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "INSERT INTO items (item_title, item_status, list_id) VALUES (:item_title, :item_status, :list_id)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':item_title' => $item_title,
		':item_status' => $item_status,
		':list_id' => $list_id));

	$db = null;
	return true;
}
