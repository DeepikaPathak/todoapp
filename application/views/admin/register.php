<?php include('header.php'); ?>
<div class="container" style="margin-top: 50px;">
	<div class="alert alert-info">
	<h3>Registration Form</h3>
</div>
		

		
		<?php echo form_open('login/front_validation');  ?>
		
			
		

			<div class="form-group">
				<label for="firstname"> First Name</label>
				<div class="row">
					<div class="col-lg-6">
				<?php echo form_input(['class'=>'form-control','type'=>'text','id'=>'firstname','placeholder'=>'Enter your First Name', 'name'=>'firstname','value'=>set_value('firstname')]);?>
					</div>
					<div class="col-lg-6" style="margin-top: 7px">  
						<?php echo form_error('firstname'); ?>
					</div>
				</div>	
			</div>

			<div class="form-group">
				<label for="lastname"> Last Name</label>
				<div class="row">
					<div class="col-lg-6">
				<?php echo form_input(['class'=>'form-control','type'=>'text','id'=>'lastname','placeholder'=>'Enter your Last Name', 'name'=>'lastname','value'=>set_value('lastname')]);?>
					</div>
					<div class="col-lg-6" style="margin-top: 7px">  
						<?php echo form_error('lastname'); ?>
					</div>
				</div>	
			</div>

			<div class="form-group">
				<label for="email"> Email</label>
				<div class="row">
					<div class="col-lg-6">
				<?php echo form_input(['class'=>'form-control','type'=>'text','id'=>'email','placeholder'=>'Enter your Email', 'name'=>'email','value'=>set_value('email')]);?>
					</div>
					<div class="col-lg-6" style="margin-top: 7px">  
						<?php echo form_error('email'); ?>
					</div>
				</div>	
			</div>

			<div class="form-group">
				<label for="password"> Password</label>
				<div class="row">
					<div class="col-lg-6">
				<?php echo form_password(['class'=>'form-control','type'=>'password','id'=>'password','placeholder'=>'Enter your Password', 'name'=>'password','value'=>set_value('password')]);?>
					</div>
					<div class="col-lg-6" style="margin-top: 7px">  
						<?php echo form_error('password'); ?>
					</div>
				</div>	
			</div>

			<div class="form-group">
				<label for="mobile"> Mobile</label>
				<div class="row">
					<div class="col-lg-6">
				<?php echo form_input(['class'=>'form-control','id'=>'mobile','placeholder'=>'Enter your Mobile Number', 'name'=>'mobile','value'=>set_value('mobile')]);?>
					</div>
					<div class="col-lg-6" style="margin-top: 7px">  
						<?php echo form_error('mobile'); ?>
					</div>
				</div>		
			</div>
			
			<div class="form-group">
				<?php echo form_submit(['type'=>'submit','value'=>'Register','class'=>'btn btn-success']); ?>
				<?php echo form_reset(['type'=>'reset','value'=>'Reset','class'=>'btn btn-primary']); ?> Already Registered...<?php echo anchor('login','Sign In?','class = "link-class"'); ?>
				

			</div>
			
	
</div>

<?php include('footer.php');?>