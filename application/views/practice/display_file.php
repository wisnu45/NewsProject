<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$i=1;
	foreach ($data as $row){?>
		<table border="1" cellpadding="10" cellspacing="0" align="center">
			<tr>
				<th>SN.no</th>
				<th>Image</th>
				<th>Delete</th>
			</tr>
			<tr>
				<td><?php echo $i ?></td>
				<td><img src="<?php echo base_url(). '/uploads/'. $row->picture ; ?>" width="150px" height='150px'></td>
				<td>
					<a href="delete_file?id=<?php echo $row->id ; ?>">Delete</a>
				</td>
			</tr>
<?php
	$i++;
	}
	echo anchor('upload','upload another image');
	?>
		</table>
</body>
</html>