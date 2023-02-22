<?php
// Include form submission script
include 'upload.php';
?>

<!DOCTYPE html>
<html lang="ko">
<head>
<title>GTA SHOP</title>
<meta charset="utf-8">

<!-- Custom stylesheet -->
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
	<h1>GTA SHOP</h1>
	<div class="wrapper">
		<!-- Display status message -->
		<?php if(!empty($statusMsg)){ ?>
			<p class="status <?php echo $status; ?>"><?php echo $statusMsg; ?></p>
		<?php } ?>
		
		<!-- File upload form -->
		<form action="" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label for="image">Select Image File:</label>
				<input type="file" name="image" class="form-control">
			</div>
			
			<input type="submit" name="submit" class="btn-primary" value="Upload">
		</form>
		
		<a href="view2.php">View uploaded images</a>
	</div>
</div>
</body>
</html>