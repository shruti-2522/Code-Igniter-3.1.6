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
  <h2>ADD ARTICLES</h2>

 
<?php echo form_open("Admin/userValidation")?>
 <?php echo form_hidden('uid',$this->session->userdata('id'));?>

<div class="row">
  <div class="col-lg-6">
  <div class="form-group">
  <label>Article Title:</label>
 <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Article Title','name'=>'title','value'=>set_value('title')]) ?>
</div></div>
<div class="col-lg-6"  style="margin-top:35px;">
  <?php echo form_error('title');?>
  </div>

</div>
<br>
<div class="row">
  <div class="col-lg-6">
<div class="form-group">
  <label>Article Body</label>
 <?php echo form_textarea(['class'=>'form-control','type'=>'textarea','placeholder'=>"Enter Article Body",'name'=>'body','value'=>set_value('body')]) ?>
</div>
</div>

<div class="col-lg-6"  style="margin-top:35px;">
  <?php echo form_error('body');?>
  </div>
</div>

<br>
<?php echo form_submit(['type'=>'submit','class'=>'btn btn-light','value'=>'SUBMIT'])?>
<?php echo form_reset(['type'=>'reset','class'=>'btn btn-primary','value'=>'RESET'])?>

</div>


<?php include 'footer.php';?>


</body>
</html>