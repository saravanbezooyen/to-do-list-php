<?php

require(ROOT . "model/itemModel.php");
require(ROOT . "model/listModel.php");

function index($list_id)
{
	//$item_status = $_GET['item_status'];

	render("item/items", array(
		'items' => getAllItemsByStatus($list_id, $_GET['item_status']),
		'list' => getList($list_id)
	)
);

}

function create($list_id)
{
	render("item/create", array(
		'list_id' => $list_id ));
}

function createSave()
{
	if (!createItem()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "item/index/".$_POST['list_id']);
}

function edit($item_id)
{
	render("item/edit", array(
		'item' => getItem($item_id),
		'lists' => getAllLists()
	));
}

function editSave()
{
	if (!editItem()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "item/index/".$_POST['list_id']);
} 

function delete($item_id)
{ 	
	$item = getItem($item_id);
	if (!deleteItem($item_id)) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "item/index/".$item['list_id']);
}
