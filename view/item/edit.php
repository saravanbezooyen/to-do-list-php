<div class="container">
	<h1>item bewerken</h1>
	<form action="<?= URL ?>item/editSave" method="post">
	
		<p><input type="text" name="item_title" value="<?= $item['item_title']; ?>"></p>
		<p><input type="text" name="item_status" value="<?= $item['item_status']; ?>"></p>
		<select name="list_id">
			<?php foreach ($lists as $list) { ?>
			<option <?php if($list['list_id'] == $item['list_id']){ echo "selected";} ?> value="<?= $list['list_id'] ?>"><?= $list['list_title'] ?></option>
			<?php } ?>
		</select>

		<input type="hidden" name="item_id" value="<?= $item['item_id']; ?>">
		<input type="submit" value="Verzenden">
	
	</form>

</div>
