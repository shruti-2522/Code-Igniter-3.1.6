 <?=link_tag("Assests/CSS/bootstrap.min.css")?>
<?php include 'header.php';?>
	<div class="container" style="margin-top: 20px;">


         <?php if($msg=$this->session->flashdata('Msg')):
         $msg_class=$this->session->flashdata('msg_class')


    ?>
  <div class="row">
    <div class="col-lg-6">
      <div class="alert <?= $msg_class ?>">
        <?= $msg; ?>
      </div>
    </div>

   </div>
   
 <?php endif;?>


    <div class="table">
    	<table class="table">
    		<thead>
    			<tr>
    				
    				<th>Article body</th>
    				<th>Edit</th>
    				<th>Delete</th>
    			</tr>
    		</thead>
    		<tbody>
    			<tr>
    			<?php if(count($articles)) : ?>
    			<?php foreach($articles as $art):?>
    			
    			
    			<td><?= $art->title;?></td>
    			<td>
         
      <?=  anchor("admin/edituser/{$art->id}",'EDIT',['class'=>'btn btn-success']);  ?>
          </td>
    			<td>
                <?=
                  form_open('Admin/delUser'),
                  form_hidden('id',$art->id),
                  form_submit(['name'=>'submit','class'=>'btn btn-danger','value'=>'DELETE']),
                  form_close();
                ?>   

                </td>
    		</tr>
    		     <?php endforeach;?>
    		  <?php else:?>
    		  	<tr>
    		  		<td colspan="4">DATA NOT AVAILABLE</td>
    		  	</tr>
    			<?php endif; ?>
    		</tbody>


            
    	</table>
<?php echo $this->pagination->create_links(); ?>



    </div>

<div class="container">
 <div class="row">
    <?= anchor('Admin/adduser','ADD ARTICLES',['class'=>'btn btn-lg btn-primary']) ?>
 </div>
</div>





  </div>
	<?php include 'footer.php';?>

	
