<div class="row-fluid">
	<div class="well span5 offset4" style="margin-top: 7%; margin-left: 30%; margin-bottom: 14%; text-align: center;">
	    <h1>Login</h1>
	    <p>Please login with your email/username and password below.</p>
	        
	    <?php if($message): ?>
	    <div id="infoMessage" class="alert alert-error"><?php echo $message;?></div>
	    <?php endif; ?>
	    
	    <?php echo form_open("auth/login", array('class' => 'form form-inline'));?>
	        
	      <p>
	        <label for="identity">Username:</label>
	        <?php echo form_input($identity);?>
	      </p>
	    
	      <p>
	        <label for="password">Password:</label>
	        <?php echo form_input($password);?>
	      </p>
	    
	      <p>
	        <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
	        <label for="remember" style="vertical-align: -4px;"><strong>Remember Me</strong></label>
	      </p>
	      
	      <p><a href="forgot_password">Forgot your password?</a></p>        
	        
	      <p><?php echo form_submit(array('type' => 'submit', 'class' => 'btn'), 'Login');?></p>
	        
	    <?php echo form_close();?>
	</div>
</div>