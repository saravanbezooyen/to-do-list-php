<?php

require(ROOT . "model/itemModel.php");
require(ROOT . "model/listModel.php");

function index($list_id)
{
	render("item/items", array(
		'items' => getAllItems($list_id),
		'list' => getList($list_id)
	)
);

}

function create()
{
	render("item/create");
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