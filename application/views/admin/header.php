<!DOCTYPE html>
<html>
<head>
	<title>ToDo App</title>
	<!-- <link rel="stylesheet" type="text/css" href="<?= base_url("Assets/css/bootstrap.min.css")  ?>"> -->
	<?= link_tag("Assets/css/bootstrap.min.css") ?>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Admin Panel</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

<div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
     
      <li class="nav-item">
       
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <?php  if($this->session->userdata('id')) { ?>
    
    
    <form class="form-inline my-2 my-lg-0">
        <a href="<?= base_url('admin/logout'); ?>" class="btn btn-danger">Logout</a>
    

    </form>

  


  <?php } ?>
    </form>
  </div>




 

  
</nav>