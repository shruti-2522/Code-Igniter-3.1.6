<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SHOW USERS</title>
</head>
<body>
	<?php include('header.php');?>


	<div class="table container mt-3">
		
		<table class="table" style="width:60;">

			<thead>
				<tr>
					<th>1</th>
					<th>Name</th>
					<th>Address</th>
					<th>Mobile No</th>
					<th>Delete</th>
					<th>Edit</th>
				</tr>

			</thead>


			<tbody>
               <?php
               $count=0; 
               if(count($users)):?>
               	<?php foreach($users as $u):?>

				<tr>
                   <td><?= ++$count;?></td>
                   <td><?= $u->name; ?></td>
                   <td><?= $u->addr;?></td>
                   <td><?= $u->mno;?></td>
                   <td>
                   	<?=
                     form_open('User/delUser'),
                     form_hidden('id',$u->id),
                     form_submit(['type'=>'submit','class'=>'btn btn-danger','value'=>'DELETE']),
                     form_close();


                   	?>


                   </td>
                   <td><?= anchor("User/editUser/{$u->id}",'EDIT',['class'=>'btn btn-success']);?></td>
				</tr>
			<?php endforeach?>
            <?php else:?>
            	<tr>
            		<td colspan="3">
            			DATA NOT AVAILABLE
            		</td>
            	</tr>
			</tbody>
		<?php endif;?>


		</table>


       <?=anchor('User/create','ADD',['class'=>'btn btn-secondary']);?>  
 
	</div>

</body>
</html>