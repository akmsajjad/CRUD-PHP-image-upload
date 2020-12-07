<!DOCTYPE html>
<html>
<head>
	<title>upload image</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<?php

		if ( $_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['submit']) ) {
		 	echo $image = $_FILES['image'] ['name'];
		 	$imagetmp = $_FILES['image'] ['tmp_name'];

		 	move_uploaded_file($imagetmp, 'upload/'.$image);
		
		}
		
	?>


	<div class="inputform">

		<h2>Upload Your File</h2>
		<hr>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
			<table>
				<tr>
					<td>
						<input name="image" type="file">
					</td>
				</tr>
				<tr>
					<td>
						<input name="submit" type="submit" value="upload">
					</td>
				</tr>
			</table>
		</form>
	</div>



</body>
</html>