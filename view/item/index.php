	<header>
		<h1>Items</h1>
	</header>
	<table>
		<tr>
			<th>Title</th>
			<th>Status</th>
		</tr>
		<tr>
		<?php foreach($items as $item){ ?>
			<td><?php echo $item["item_title"]; ?></td>
			<td><?php echo $item["item_status"]; ?></td>
		<?php } ?>
		</tr>
	</table>
