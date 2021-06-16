<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ADD USER</title>

</head>
<body>
<?php include('header.php');?>

	<div class="container mt-3">

		<h3>ADD USER</h3>

		<?php echo form_open('User/userValidation');?>

		<div class="row">
			<div class="col-lg-6">
				<label>Username:</label>
				<?php echo form_input(['name'=>'name','class'=>'form-control','placeholder'=>'Enter Name']);?>


			</div>
			<div class="col-lg-6">
				
				<?php echo form_error('name'); ?>


			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<label>Address:</label>
				<?php echo form_textarea(['name'=>'addr','class'=>'form-control','placeholder'=>'Enter Address']);?>


			</div>
			<div class="col-lg-6">
				
				<?php echo form_error('addr'); ?>


			</div>
		</div>

		<div class="row">
			<div class="col-lg-6">
				<label>Mobile No:</label>
				<?php echo form_input(['name'=>'mno','class'=>'form-control','placeholder'=>'Enter Mobile Number']);?>


			</div>

			<div class="col-lg-6">
				
				<?php echo form_error('mno'); ?>


			</div>
		</div>




		<div class="row">
			<div class="col-lg-6 mt-2">
				
				<?php echo form_submit(['type'=>'submit','class'=>'btn btn-primary','value'=>'SUBMIT']);?>
			    <?php echo form_reset(['type'=>'reset','class'=>'btn btn-warning','value'=>'RESET']);?>


			</div>
		</div>







	</div>

</body>
</html>