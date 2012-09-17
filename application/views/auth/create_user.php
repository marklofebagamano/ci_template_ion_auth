<div class="well">
	<h1>Create User</h1>
	<p>Please enter the users information below.</p>
	<?php if($message): ?>
	<div id="infoMessage" class="alert alert-error"><?php echo $message; ?></div>
	<?php endif; ?>
	
	<?php echo form_open("auth/create_user"); ?>
	
	      <p>
	            Username: <br />
	            <?php echo form_input($username); ?>
	      </p>
	      
	      <p>
	            First Name: <br />
	            <?php echo form_input($first_name); ?>
	      </p>
	
	      <p>
	            Last Name: <br />
	            <?php echo form_input($last_name); ?>
	      </p>
	      
	      <p>
	            Password: <br />
	            <?php echo form_input($password); ?>
	      </p>
	
	      <p>
	            Confirm Password: <br />
	            <?php echo form_input($password_confirm); ?>
	      </p>
	
	      <p>
	            Company Name: <br />
	            <?php echo form_input($company); ?>
	      </p>
	
	      <p>
	            Email: <br />
	            <?php echo form_input($email); ?>
	      </p>
	
	      <p>
	            Phone: <br />
	            <?php echo form_input($phone1); ?>-<?php echo form_input($phone2); ?>-<?php echo form_input($phone3); ?>
	      </p>
	
	
	      <p><?php echo form_submit(array('id' => 'submit', 'class' => 'btn btn-info'), 'Create User'); ?></p>
	
	<?php echo form_close(); ?>
</div>