<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
  	ARTICLE LIST
	</title>
    <!-- ADD CSS -->
       <!-- <link rel="stylesheet" type="text/css" href="<?=base_url("Assests/CSS/bootstrap.min.css") ?>">
           -->
<!-- another way to include css file  -->
 <?=link_tag("Assests/CSS/bootstrap.min.css")?>
</head>
<body>

<?php include 'header.php';?>

<div class="container " style="margin-top:20px;">
  <h2>ADMIN FORM</h2>
<?php echo form_open("Admin/index")?>
<div class="row">
  <div class="col-lg-6">
  <div class="form-group">
  <label>Username</label>
 <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Username','name'=>'uname','value'=>set_value('uname')]) ?>
</div></div>
<div class="col-lg-6"  style="margin-top:35px;">
  <?php echo form_error('uname');?>
  </div>

</div>
<br>
<div class="row">
  <div class="col-lg-6">
<div class="form-group">
  <label>Enter Password</label>
 <?php echo form_password(['class'=>'form-control','type'=>'password','placeholder'=>"Enter Password",'name'=>'password','value'=>set_value('password')]) ?>
</div>
</div>

<div class="col-lg-6"  style="margin-top:35px;">
  <?php echo form_error('password');?>
  </div>
</div>

<br>
<?php echo form_submit(['type'=>'submit','class'=>'btn btn-light','value'=>'SUBMIT'])?>
<?php echo form_reset(['type'=>'reset','class'=>'btn btn-primary','value'=>'RESET'])?>

</div>


<?php include 'footer.php';?>


</body>
</html>