<h2>HI List User</h2>

<table>
	<tr>
		<td>id</td>
		<td>FirstName</td>
		<td>LastName</td>
		<td>Email</td>
		<td>Location</td>
		<td>Created</td>
	</tr>
	<tr>
		<?php foreach($User as $var) //print_r($var); ?>
		<td><?php echo $var['User']['id']; ?></td>
		<td><?php echo $var['User']['firstname']; ?></td>
		<td><?php echo $var['User']['lastname']; ?></td>	
		<td><?php echo $var['User']['email']; ?></td>
		<td><?php echo $var['User']['location']; ?></td>
		<td><?php echo $var['User']['created']; ?></td>
		<php endforeach ?>

	</tr>
</table>
