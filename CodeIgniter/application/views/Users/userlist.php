<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>USER LIST</title>
</head>
<body>
	<h1>USER DETAILS</h1>
	<table>
		<tr>
			<td>First Name</td>
			<td>Last Name</td>
		</tr>
     <?php foreach($users as $user): ?>
		<tr>
			<td><?php echo $user['Fname'];?></td>
			<td><?php echo $user['Lname'];?></td>
			
		</tr>
	<?php endforeach; ?>
	</table>

</body>
</html>