<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php echo form_open_multipart('Img_controller/products');?>
	<input type="file" name="userfile[]" multiple="multiple">
	<input type="submit" class="btn btn-success btn-block"/> 
</form>
</body>
</html>