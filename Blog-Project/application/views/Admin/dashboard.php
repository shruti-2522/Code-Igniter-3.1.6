 <?=link_tag("Assests/CSS/bootstrap.min.css")?>
<?php include 'header.php';?>
	<div class="container" style="margin-top: 20px;">

    <div class="table">
    	<table class="table">
    		<thead>
    			<tr>
    				<th>Sr No.</th>
    				<th>Article body</th>
    				<th>Edit</th>
    				<th>Delete</th>
    			</tr>
    		</thead>
    		<tbody>
    			<tr>
    			<?php if(count($articles)) : ?>
    			<?php foreach($articles as $art):?>
    			
    			<td>1</td>
    			<td><?= $art->article_title;?></td>
    			<td><a href="#" class="btn btn-primary">Edit</a></td>
    			<td><a href="#" class="btn btn-danger">Delete</a></td>
    		</tr>
    		     <?php endforeach;?>
    		  <?php else:?>
    		  	<tr>
    		  		<td colspan="4">DATA NOT AVAILABLE</td>
    		  	</tr>
    			<?php endif; ?>
    		</tbody>
    	</table>




    </div>






  </div>
	<?php include 'footer.php';?>

	
