<div class="container">
	<h1>list bewerken</h1>
	<form action="<?= URL ?>list/editSave" method="post">
	
		<p><input type="text" name="list_title" value="<?= $list['list_title']; ?>"></p>

		<input type="hidden" name="list_id" value="<?= $list['list_id']; ?>">
		<input type="submit" value="Verzenden">
	
	</form>

</div>
