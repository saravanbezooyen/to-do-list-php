<h2>Item toevoegen</h2>
	<div class="form">
	<form action="<?= URL ?>item/createSave" method="post">
	<label>
		<p><input type="text" name="item_title" placeholder="Title"></p>
		<p><input type="text" name="item_status" placeholder="status"></p>
		<select name="list_id">
			<?php foreach ($lists as $list) { ?>
			<option value="<?= $list['list_id'] ?>"><?= $list['list_title'] ?></option>
			<?php } ?>
		</select>


		<input type="submit" value="Verzenden">
	</label>
	</form> 
	</div>


	