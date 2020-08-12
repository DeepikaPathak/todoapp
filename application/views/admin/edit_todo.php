<?php include('header.php'); ?>
<div class="container" style="margin-top: 50px;">


<div class="alert alert-primary">
	<h3>Edit my Todo</h3>
	</div>


		
		<?php echo form_open("admin/update_user/{$todos->id}");  ?>
		<!-- <?php echo form_hidden('id',$article->id); ?> -->
		
			
			<div class="form-group">
				<label for="title"> Todo</label>
				<div class="row">
					<div class="col-lg-6">
				<?php echo form_input(['class'=>'form-control','type'=>'text','id'=>'title','placeholder'=>'Enter your Todo', 'name'=>'todo','value'=>set_value('todo',$todos->todo)]);?>
					</div>
					<div class="col-lg-6" style="margin-top: 7px">  
						<?php echo form_error('todo'); ?>
					</div>
				</div>		
			</div>
		<div class="form-group">
				<label for="body">Description</label>
				<div class="row">
					<div class="col-lg-6">
				<?php echo form_textarea(['class'=>'form-control','type'=>'text','id'=>'body','placeholder'=>'Enter your Description', 'name'=>'description','value'=>set_value('description',$todos->description)]);?>
					</div>
					<div class="col-lg-6" style="margin-top: 7px">  
						<?php echo form_error('description'); ?>
					</div>
				</div>	
			</div>
			
			
			<div class="form-group">
				<?php echo form_submit(['type'=>'submit','value'=>'Update','class'=>'btn btn-success']); ?>
				<?php echo form_reset(['type'=>'reset','value'=>'Reset','class'=>'btn btn-primary']); ?>
				

			</div>
			
	
</div>

<?php include('footer.php');?>
