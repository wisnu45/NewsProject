<!DOCTYPE html>
<html>
<head>
	<title>upload file</title>
</head>
<body>
	<?php echo form_open_multipart('Upload/upload_file') ?>
		upload file:<input type="file" name="upload_file" size="20"><br><br>
		<input type="submit" name="upload">
	</form>
</body>
</html>