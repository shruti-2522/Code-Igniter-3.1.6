<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>EDIT USER</title>

</head>
<body>
<?php include('header.php');?>

	<div class="container mt-3">

		<h3>EDIT USER</h3>

		<?php echo form_open("User/updateUser/{$user->id}");?>

		<div class="row">
			<div class="col-lg-6">
				<label>Username:</label>
				<?php echo form_input(['name'=>'name','class'=>'form-control','placeholder'=>'Enter Name','value'=>set_value('name',$user->name)]);?>


			</div>
			<div class="col-lg-6">
				
				<?php echo form_error('name'); ?>


			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<label>Address:</label>
				<?php echo form_textarea(['name'=>'addr','class'=>'form-control','placeholder'=>'Enter Address','value'=>set_value('addr',$user->addr)]);?>


			</div>
			<div class="col-lg-6">
				
				<?php echo form_error('addr'); ?>


			</div>
		</div>

		<div class="row">
			<div class="col-lg-6">
				<label>Mobile No:</label>
				<?php echo form_input(['name'=>'mno','class'=>'form-control','placeholder'=>'Enter Mobile Number','value'=>set_value('mno',$user->mno)]);?>


			</div>

			<div class="col-lg-6">
				
				<?php echo form_error('mno'); ?>


			</div>
		</div>




		<div class="row">
			<div class="col-lg-6 mt-2">
				
				<?php echo form_submit(['type'=>'submit','class'=>'btn btn-primary','value'=>'UPDATE']);?>
			


			</div>
		</div>







	</div>

</body>
</html>