	<header>
		<h1>Items</h1>
		<h3><?php echo $list['list_title']; ?></h3>
	</header>
	<nav>
		<ul>
			<li><a href="<?= URL ?>list"><h4>Home</h4></a></li>
			<li><a href="<?= URL ?>item/create"><h4>Add item</h4></a></li>
		</ul>
	</nav>
	<table>
		<tr>
			<th>Title</th>
			<th>Status</th>
			<th colspan="2">Action</th>
		</tr>
		<?php foreach($items as $item){ ?>
			<tr>
				<td nowrap="true"><?php echo $item['item_title'] ?></td>
				<td nowrap="true"><?php echo $item["item_status"] ?></td>
				<td><a href="<?= URL ?>item/edit/<?php echo $item["item_id"]; ?>">Edit</a></td>
				<td><a href="<?= URL ?>item/delete/<?php echo $item["item_id"]; ?>">Delete</a></td>
			</tr>
		<?php } ?>
	</table>
