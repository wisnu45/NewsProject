<!DOCTYPE html>
<html>
<head>
	<title>Registration form</title>
</head>
<body>
	<?php 
	$i=1;
	foreach($data as $row){
	 ?>
	<form method="post">
		<table border="0" cellpadding="10" cellspacing="0" width="40%" align="center" width="40%">
			<tr>
				<td colspan="2" align="center" bgcolor="black" style="color:white">UPDATE RECORDS</td>
			</tr>
			<tr>
				<td width="30%" bgcolor="blue" style="color:white">Enter Your Name </td>
				<td bgcolor="green"><input type="text" name="name" value="<?php echo $row->name ; ?>"></td>
			</tr>
			<tr>
				<td width="30%" bgcolor="blue" style="color:white">Enter Your Email </td>
				<td bgcolor="green"><input type="text" name="email" value="<?php echo $row->email; ?>"></td>
			</tr>
			<tr>
				<td width="30%" bgcolor="blue" style="color:white">Enter Your Phone </td>
				<td bgcolor="green"><input type="text" name="phone" value="<?php echo $row->Phone;  ?>"></td>
			</tr>
			<tr>
				<td width="30%" bgcolor="blue" style="color:white">Enter Your Address </td>
				<td bgcolor="green"><input type="text" name="address" value="<?php echo $row->address;  ?>"></td>
			</tr>
			<tr>
				<td colspan="2" align="center" bgcolor="black">
					<input type="submit" name="update" value="update">
				</td>
			</tr>
		</table>
	</form>

	<?php  
}
	?>
</body>
</html>