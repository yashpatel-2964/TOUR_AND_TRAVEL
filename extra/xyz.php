<?php
 
 $conn = mysqli_connect("localhost","root","","tour");
 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

	<!-- custom css file link -->
	

	<!-- fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

</head>
<style>
	.packages .box-container .box{
	flex: 1 1 30rem;
	border-radius: .5rem;
	overflow: hidden;
	box-shadow: 0 1rem 2rem rgba(0, 0, 0, .1);
}

.packages .box-container .box img{
	height: 15rem;
	width: 350px;
	object-fit: cover;
}

.packages .box-container .box .content{
	padding: 2rem;
}

.packages .box-container .box .content h3{
	font-size: 2rem;
	color: #333;
}

.packages .box-container .box .content h3 i{
	color: #FFA500;
}

.packages .box-container .box .content p{
	font-size: 1.7rem;
	color: #666;
	padding: 1rem 0;
}

.packages .box-container .box .content .stars i{
	font-size: 1.7rem;
	color: #FFA500;
}

.packages .box-container .box .content .price{
	font-size: 2rem;
	color: #333;
	padding-top: 1rem;
}
</style>
<body>

	<section class="packages" id="packages">

	

	<h1 class="heading">
		<span>P</span>
		<span>a</span>
		<span>c</span>
		<span>k</span>
		<span>a</span>
		<span>g</span>
		<span>e</span>
		<span>s</span>
	</h1>

<?php


$qry = "Select * from packa_table";
$result = mysqli_query($conn,$qry);

while($row = mysqli_fetch_array($result))



	


echo " <div class=\"box-container\">

	<div class=\"box\">
		<img src =".$row[4].">
		<div class=\"content\">
			<h3><i class=\"fas fa-map-marker-alt\">  </i>"  . $row[1] . " </h3>
			<div class=\"stars\">
				<i class=\"fas fa-star\"></i>
				<i class=\"fas fa-star\"></i>
				<i class=\"fas fa-star\"></i>
				<i class=\"fas fa-star\"></i>
				<i class=\"fas fa-star\"></i>
			</div>
			<div class=\"price\">
				<h4> ". $row[2] . "</h4>
				<h4>".$row[3]."  <i class=\"fa-solid fa-indian-rupee-sign\"></i></h4>
			</div> 


			<a href =\"#\" class=\"btn\">Book now</a>
			<a href=\"package.php?pack_d_id\" class=\"btn\">See more</a>
		</div>
	</div>
"

?>

</section>

</body>
</html>
