<?php
// Include the database configuration file
require_once 'dbConfig.php';

// Get image data from database
$sql = "SELECT image FROM images ORDER BY id DESC";
$result = $db->query($sql);
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<title>GTA SHOP</title>
<meta charset="utf-8">

<!-- Custom stylesheet -->
<link rel="stylesheet" href="css/style2.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: 100%;
  }
  </style>
</head>
<body>
<div class="container">
	<h1>GTA SHOP</h1>
	<div id="demo" class="carousel slide" data-ride="carousel" align="center">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
	<img src="https://image.wconcept.co.kr/images/builder/1/4/15/28/pc05_1920x600_20230213103606.jpg" alt="처음사진" width="1910" height="1020">
      <div class="carousel-caption">

      </div>   
    </div>
    <div class="carousel-item">
	<img src="https://image.wconcept.co.kr/images/builder/1/4/15/28/pc04_1920x600_20230210155342.jpg" alt="두번째사진" width="1910" height="500">
      <div class="carousel-caption">

      </div>   
    </div>
    <div class="carousel-item">
	<img src="https://image.wconcept.co.kr/images/builder/1/4/15/28/pc06_1920x600_20230210155514.jpg" alt="세번째 사진" width="1910" height="500">
      <div class="carousel-caption">

      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<h2>BEST PICK</h2>
	<div class="gallery">
		<?php if($result->num_rows > 0){ ?>
			<?php while($row = $result->fetch_assoc()){ ?>
			<div class="img-box">
				<img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" />
			</div>
			<?php } ?>
		<?php }else{ ?>
		<p class="status error">Image(s) not found...</p>
		<?php } ?>
	</div>
	
	<a href="index.php">Admin</a>
</div>
</body>
</html>