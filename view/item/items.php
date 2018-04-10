	<header>
		<h1>Items</h1>
		<h3><?php echo $list['list_title']; ?></h3>
	</header>
	<nav>
		<ul>
			<li><a href="<?= URL ?>list">Home</a></li>
			<li><a href="<?= URL ?>item/create/<?= $list['list_id']; ?>" class="button create">Add item</a></li>
			<form action="/To do list PHP/item/index/3" method="get">
				<select name="item_status">
				<option value="0">0</option>			
				<option value="1">1</option>
			</select>
			<input type="submit">
		</form>
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
					<td><a href="<?= URL ?>item/edit/<?php echo $item["item_id"]; ?>" class="button edit">Edit</a></td>
					<td><a href="<?= URL ?>item/delete/<?php echo $item["item_id"]; ?>" class="button delete">Delete</a></td>
				</tr>
		<?php } ?>
	</table>
