<?php

require(ROOT . "model/listModel.php");

function index()
{
	if (isset($_GET['sort'])) {
		$sort = $_GET['sort'];
	} else {
		$sort = 'list_title';
	}
	if (isset($_GET['direction'])) {
		$direction = $_GET['direction'];
	} else {
		$direction = 'ASC';

	}
	
	render("list/index", array(
	'lists' => getAllLists($sort, $direction),
	'direction' => $direction));
}

function create()
{
	render("list/create");
}

function createSave()
{
	if (!createList()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "list/index");
}

function edit($list_id)
{
	render("list/edit", array(
		'list' => getList($list_id)
	));
}

function editSave()
{
	if (!editList()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "list/index");
} 

function delete($list_id)
{
	if (!deleteList($list_id)) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "list/index");
}
