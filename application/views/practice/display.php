<!DOCTYPE html>
<html>
<head>
	<title>display data</title>
</head>
<body>
	<table border="1" cellpadding="10" cellspacing="0" align="center">
		<tr bgcolor="grey">
			<th>No</th>
			<th>Name</th>
			<th>Email</th>
			<th>Phone</th>
			<th>Address</th>
			<th>Gender</th>
			<th>Hobby</th>
			<th>Delete</th>
			<th>Update</th>
		</tr>
	<?php 
	$i=1;
	foreach ($data as $row){ ?>
		<tr>
			<td><?php echo $i ?></td>
			<td><?php echo $row->name; ?></td>
			<td><?php echo $row->email; ?></td>
			<td><?php echo $row->Phone ;?></td>
			<td><?php echo $row->address; ?></td>
			<td><?php echo $row->gender ;?></td>
			<td><?php echo $row->hobby ;?></td>
			<td>
				<a href="deletedata?id=<?php echo $row->id ;?>">delete</a>
			</td>
			<td>
				<a href="updatedata?id=<?php echo $row->id ;?>">update</a>
			</td>
	<?php 
		$i++;
		}
	?>
		</tr>
	</table>
</body>
</html>