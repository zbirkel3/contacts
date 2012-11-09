<form class="form-horizontal" action="actions/add_contact.php" method="post">
	
	
	<div class="control-group">
		<label class="control-label" for="name">Name</label>
		<div class="controls">
			<input type="text" name="name" placeholder="First Name"/>
			<input type="text" name="name" placeholder="Last Name"/>
		</div>
	</div>
	
	<div class="control-group">
		<label class="control-label" for="e-mail">Email</label>
		<div class="controls">
			<input type="text" name="Email" placeholder="Email@email.com" />
		</div>
	</div>
	
	<div class="control-group">
		<label class="control-label" for="phone">Phone Number</label>
		<div class="controls">
			<input type="text" name="phone" placeholder="Phone Number" />
		</div>
	</div>
	
	<div class="form-actions">
		<button type="submit" class="btn-success"><i class="icon-plus icon-white"></i>ADD CONTACT</button>
		<button type="button" class="btn-danger" onclick="window.history.go(-1)"><i class="icon-remove-circle icon-white"></i>Cancel</button>
	</div>
</form>