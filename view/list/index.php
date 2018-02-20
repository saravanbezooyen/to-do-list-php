	<header>
		<h1>To do Lists</h1>
	</header>
	<table>
		<tr>
			<th>Name</th>
		</tr>
		<?php foreach($lists as $list){ ?>
		<tr>
			<td><?php echo $list["list_title"]; ?></td>
			<td><a href="<?= URL ?>item/index/<?php echo $list['list_id']?>">Show</a></td>
		</tr>
		<?php } ?>
		 
	</table>
