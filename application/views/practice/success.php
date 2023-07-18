<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3>file has been uploaded</h3>
	<img src="<?php echo base_url().'/uploads/'.$upload_file['file_name']?>">

	<p><?php echo anchor('upload','another upload file'); ?></p>
</body>
</html>