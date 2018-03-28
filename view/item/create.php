<h2>Item toevoegen</h2>
	<div class="form">
	<form action="<?= URL ?>item/createSave" method="post">
	<label>
		<p><input type="text" name="item_title" placeholder="Title"></p>
		<p><input type="number" max="1" min="0" name="item_status" placeholder="status"></p>

		<input type="hidden" name="list_id" value="<?= $list_id ?>">
		<input type="submit" value="Verzenden">
	</label>
	</form> 
	</div>


	