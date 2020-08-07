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
			<th>Deadline</th>
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
			<td><?php echo $todo->deadline; ?></td>
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
<br><!-- 
<hr style="height:0.5px;border-width:0;color:gray;background-color:gray">
 -->




<?php  echo $this->pagination->create_links();   ?>


<!-- <hr style="height:1px;border-width:0;color:gray;background-color:gray"> -->

<br>


 <!-- <ul class="pagination">
 	<li><a href=""><</a></li>
 	<li><a href="">1</a></li>
 	<li><a href="">2</a></li>
 	<li class="active"><a href="">3</a></li>
 	<li><a href="">4</a></li>
 	<li><a href="">5</a></li>
 	<li><a href="">></a></li>

 </ul>

 <div>
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#">&laquo;</a>
    </li>
    <li class="page-item active">
      <a class="page-link" href="#">1</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">2</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">3</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">4</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">5</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">&raquo;</a>
    </li>
  </ul>
</div>
 -->



</div>
<?php include('footer.php'); ?>