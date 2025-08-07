<?php
include_once('tourism_infop.php');
if(isset($_POST['goa'])) {
	$que="SELECT * FROM `information` WHERE pname='Goa'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['kerala'])) {
	$que="SELECT * FROM `information` WHERE pname='Kerala'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['mysore'])) {
	$que="SELECT * FROM `information` WHERE pname='Mysore'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['ladakh'])) {
	$que="SELECT * FROM `information` WHERE pname='Ladakh'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['agra'])) {
	$que="SELECT * FROM `information` WHERE pname='Taj Mahal'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['india_gate'])) {
	$que="SELECT * FROM `information` WHERE pname='India Gate'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['hampi'])) {
	$que="SELECT * FROM `information` WHERE pname='Hampi'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['rajasthan'])) {
	$que="SELECT * FROM `information` WHERE pname='Rajasthan'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['manali'])) {
	$que="SELECT * FROM `information` WHERE pname='Manali'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['srinagar'])) {
	$que="SELECT * FROM `information` WHERE pname='Srinagar'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['amritsar'])) {
	$que="SELECT * FROM `information` WHERE pname='Amritsar'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['jogfalls'])) {
	$que="SELECT * FROM `information` WHERE pname='Jog Falls'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['search_p'])) {
	$search = $_POST['search_p'];
	$que="SELECT * FROM `information` WHERE pname='$search'";
	$result = mysqli_query($db, $que);
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="tourism_info.css">
	<title>Information</title>
</head>
<body>
	<div class="main">
	    <ul>
	      <ul class="list">
	        <li class="logo"><a href="tourism_mainPage.html"><img src="https://png.pngtree.com/png-clipart/20220228/original/pngtree-pin-location-with-3d-earth-globe-png-image_7326089.png" alt="Logo" style="width:36px;height:36px"></a></li>
	        <div class="search">
                <form method="POST" action="tourism_info.php">
                  <input type="text" name="search_p" placeholder="Search..." size="50">
              
                  <input type="image" name="submit_p" src="https://img.icons8.com/?size=100&id=W0xu6u7K9A0F&format=png&color=000000" width="22px" height="22px" alt="Search image" style="width:22;height:22; margin-left: 35px;">
                </form>
            </div>
	      </ul>
	      <ul class="list2">
	        <li><a href="tourism_mainPage.html">Home</a></li>
	        <li><a id="long" href="tourism_destination.html">Destination</a></li>
	        <li><a href="tourism_gallery.html">Gallery</a></li>
			<li><a href="tourism_feedback.html">Feedback</a></li>
			<li><a href="tourism_signin_index.html">Logout</a></li>
	      </ul>
	    </ul>
	</div>
	<div class="hedder">
		<h1>Place Information</h1>
	</div>
	<div class="container">
		<div class="description-container" style="border: 1px solid black;">
			<div class="box1">
				<?php
					while($rows = mysqli_fetch_assoc($result))
					{
				?>
				<img src="<?php echo $rows['pi_main']; ?>" alt="Taj Mahal Image" style="width: auto;height: 302px;">
			</div>
			<div class="description">
				<h1><?php echo $rows['pname']; ?><h1>
				<p style="text-align: justify;"><?php echo $rows['pdescription']; ?></p>
				<p style="color:red; top: -10px;" >Package: <?php echo $rows['package']; ?> Rs</p>
			</div>
			<a href="tourism_booking.html" style="top: -20px; float: right; margin-right: 27%;">Book Tour</a>
		</div>
		<div class="image-container" style="border: 1px solid black">
			<div class="box">
		        <div class="imgBox">
		          <img src="<?php echo $rows['pi1']; ?>" alt="Taj Mahal Image" style="width: auto;height: 270px;">
		        </div>
	        </div>
	      <div class="box">
	        <div class="imgBox">
	          <img src="<?php echo $rows['pi2']; ?>" alt="Taj Mahal Image" style="width: auto;height: 270px;">
	        </div>
	      </div>
	      <div class="box">
	        <div class="imgBox">
	          <img src="<?php echo $rows['pi3']; ?>" alt="Taj Mahal Image" style="width: auto;height: 270px;">
	        </div>
	        	<?php
					}
				?>
	      </div>
		</div>
	</div>
</body>
</html>