<!DOCTYPE html>
<html>
<head>
	<title>Registration form</title>
</head>
<body>
	<form method="post">
		<table border="0" cellpadding="10" cellspacing="0" width="40%" align="center" width="40%">
			<tr>
				<td width="30%" bgcolor="blue" style="color:white">Enter Your Name </td>
				<td bgcolor="green"><input type="text" name="name" placeholder="Enter Name"></td>
			</tr>
			<tr>
				<td width="30%" bgcolor="blue" style="color:white">Enter Your Email </td>
				<td bgcolor="green"><input type="text" name="email" placeholder="Enter Email"></td>
			</tr>
			<tr>
				<td width="30%" bgcolor="blue" style="color:white">Enter Your Phone </td>
				<td bgcolor="green"><input type="text" name="phone" placeholder="Enter Phone"></td>
			</tr>
			<tr>
				<td width="30%" bgcolor="blue" style="color:white">Enter Your Address </td>
				<td bgcolor="green"><input type="text" name="address" placeholder="Enter Address"></td>
			</tr>
			<tr>
				<td width="30%" bgcolor="blue" style="color:white">Enter Your Gender </td>
				<td bgcolor="green">
					<input type="radio" name="gender" value="male">Male
					<input type="radio" name="gender" value="female">Female
				</td>
			</tr>
			<tr><td width="30%" bgcolor="blue" style="color:white">Enter Your Hobby </td>
				<td bgcolor="green">
					<input type="checkbox" name="hobby[]" value="singing">Singsing
					<input type="checkbox" name="hobby[]" value="dancing">Dancing
					<input type="checkbox" name="hobby[]" value="playing">Playing
				</td>
			</tr>
			<tr>
				<td width="30%" bgcolor="blue" style="color:white">Enter Your Password </td>
				<td width="70%" bgcolor="green">
					<input type="Password" name="pass" placeholder="Enter Password">
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center" bgcolor="black">
					<input type="submit" name="submit">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>