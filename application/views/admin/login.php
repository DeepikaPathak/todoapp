<?php include('header.php'); ?>
<div class="container" style="margin-top: 50px;">

<div class="alert alert-info">

	<h3>Admin Form</h3>
</div>

		<?php if($error = $this->session->flashdata('Login_error')):  ?>
			
				<div class="row">
					<div class="col-lg-6">
						<div class="alert alert-danger">
						<?php echo $error; ?>
						</div>
					</div>
				</div>
			

		<?php endif; ?>

		<?php if($msg = $this->session->flashdata('user')): ?>

	<?php $msg_class = $this->session->flashdata('user_class'); ?>
			
				<div class="row">
					<div class="col-lg-6">
						<div class="alert <?= $msg_class ?>">
						<?php echo $msg; ?>
						</div>
					</div>
				</div>
				
	
		<?php endif; ?>		

		<?php echo form_open('login');  ?>
		
			
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
				<?php echo form_submit(['type'=>'submit','value'=>'Login','class'=>'btn btn-success']); ?>
				<?php echo form_reset(['type'=>'reset','value'=>'Reset','class'=>'btn btn-primary']); ?> Not registered....
				<?php echo anchor('login/register','Sign Up?','class = "link-class"'); ?>

			</div>
			
	
</div>

<?php include('footer.php');?>