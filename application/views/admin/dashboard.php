<?php include('header.php'); ?>
<div class="container" style="margin-top: 50px;">
	<div class="row">
		<?= anchor('admin/adduser','Add New Todos',['class'=>'btn btn-lg btn-success']) ?>
	</div>
</div>

<div class="container" style="margin-top: 50px;">

	<?php if($msg = $this->session->flashdata('msg')): ?>

	<?php $msg_class = $this->session->flashdata('msg_class'); ?>
			
				<div class="row">
					<div class="col-lg-6">
						<div class="alert <?= $msg_class ?>">
						<?php echo $msg; ?>
						</div>
					</div>
				</div>
			

		<?php endif; ?>


	
	<table class="table">
	<!--  <?php print_r($articles); ?> -->
<!-- <?php echo $this->db->last_query(); ?> -->
	<thead>
		<tr>
			<th>S No.</th>
			<th>My Todos</th>
			<th>Description</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
	</thead>
	<tbody>
		<?php if(count($todos)): 
			$count = $this->uri->segment(3);?>
		<?php foreach($todos as $todo):  ?>
		<tr>
		<!-- <?php	print($art->id);?> -->
			<td><?php echo  ++$count;  ?></td>
			<td><?php echo $todo->todo; ?></td>
			<td><?php echo $todo->description; ?></td>
			<td><?= anchor("admin/edituser/$todo->id",'EDIT',['class'=>'btn btn-info']); ?></td>
			<td>
				<?=
				form_open('admin/deltodo'),
				form_hidden('id',$todo->id),
				form_submit(['name'=>'submit', 'value'=>'DELETE', 'class'=>'btn btn-warning']),
				form_close();
				?>
			</td>
		
		</tr>
		<?php  endforeach; ?>
		<?php else: ?>
			<tr colspan="4">No articles found</tr>
		<?php  endif; ?>
	</tbody>
</table>
<br>
<br>
<br>
<?php  echo $this->pagination->create_links();   ?>
<br> 
</div>
<?php include('footer.php'); ?>
