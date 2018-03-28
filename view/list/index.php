<?php 

	if ($direction === 'ASC') {
		$direction = 'DESC';
	} else{
		$direction = 'ASC';
	}
	var_dump($direction);
?>

	<header>
		<h1>To do Lists</h1>
	</header>
	<nav>
		<ul>
			<li><a href="<?= URL ?>list/create" class="button create">Add item</a></li>
		</ul>
	</nav>


	<table>
		<tr>
			<th><a href="<?= URL ?>?sort=list_title&direction=<?= $direction ?>">Name</a></th>
			<th>List</th>
			<th colspan="2">Action</th>
		</tr>
		<?php foreach($lists as $list){ ?>
		<tr>
			<td nowrap="true"><?php echo $list["list_title"]; ?></td>
			<td nowrap="true"><a href="<?= URL ?>item/index/<?php echo $list['list_id']?>" >Show</a></td>
			<td><a href="<?= URL ?>list/edit/<?php echo $list["list_id"]; ?>" class="button edit">Edit</a></td>
			<td><a href="<?= URL ?>list/delete/<?php echo $list["list_id"]; ?>" class="button delete">Delete</a></td>
		</tr>
		<?php } ?>
		 
	</table>
