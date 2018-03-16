	<header>
		<h1>To do Lists</h1>
	</header>
	<table>
		<tr>
			<th>Name</th>
			<th colspan="2">Action</th>
		</tr>
		<?php foreach($lists as $list){ ?>
		<tr>
			<td><?php echo $list["list_title"]; ?></td>
			<td><a href="<?= URL ?>0<?php echo $list['list_id']?>">Show</a></td>
			<td><a href="<?= URL ?>list/edit/<?php echo $list["list_id"]; ?>">Edit</a></td>
			<td><a href="<?= URL ?>list/delete/<?php echo $list["list_id"]; ?>">Delete</a></td>
		</tr>
		<?php } ?>
		 
	</table>
