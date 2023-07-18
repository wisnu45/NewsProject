<!DOCTYPE html>
<html>
<head>
	<title>
	</title>
</head>
<body>
	<form method="post" action="<?php echo base_url(). 'index.php/MailSend/sent';?>">
		sender mail:<input type="text" name="email"><br>
		sub:<input type="text" name="subject"><br>
		body:<input type="text" name="body"><br>
		<input type="submit" name="submit" value="submit">
	</form>
</body>
</html>