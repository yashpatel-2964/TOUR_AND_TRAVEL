<?php

$profpic="web/1.jpg";

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>

<!-- swiper css link -->

     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

<!-- font awesome cdn link -->
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>

<!-- custom css link -->

	<link rel="stylesheet" type="text/css" href="css/style.css">

	  
</head>
<body>
<style>
*{
	margin: 0;
	padding: 0;
	font-family: 'Josefin Sans', sans-serif;
}	

header{
	background-image:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.1)),url('<?php echo $profpic ?>');
    background-position: center;
    background-size: cover;
    height: 100vh;
    width: 100%;
}

nav{
	width: 100%;
	height: 15vh;
	background: rgba(0, 0, 0, 0.4);
	color: white;
	display: flex;
	justify-content: space-between;
	align-items: center;
	text-transform: uppercase;
	float: right;
}

ul{
	float: right;
	list-style-type: none;
	margin-top: 15px;
}

ul li{
	display: inline-block;
}

ul li a{
    text-decoration: none;
    color: white;
    padding: 5px 20px;
    border: 1px solid transparent;
    transition: o.6s ease;
    font-weight: bold;
}

ul li a:hover{
	background-color: #00b894;
	color: #000;
}

ul li.active a{
	background-color: white;
	color: #000;
}

nav .logo img{
	width: 150px;
	
}

main{
	width: 100%;
	height: 80vh;
	display: flex;
	color: white;
	justify-content: center;
	align-items: center;
	text-align: center;
}

section{

}

section h3{
	font-size: 35px;
	font-weight: 400; 
	letter-spacing: 3px;
	text-shadow: 1px 1px 2px black;
}

section h1{
	margin: 30px 0 20px 0;
	font-size: 55px;
	font-weight: 800;
	text-shadow: 2px 1px 5px black;
	text-transform: uppercase;
	word-spacing: 5px;
}

section p{
	font-size: 25px;
	word-spacing: 2px;
	margin-bottom: 50px;
	text-shadow: 1px 1px 1px black;
}

section a{
	padding: 12px 30px;
	border-radius: 4px;
	outline: none;
	text-transform: uppercase;
	font-size: 13px;
	font-weight: 500;
	text-decoration: none;
	letter-spacing: 1px;
}

.change_content:after{
	content: '';
	animation: changetext 10s infinite linear;
	color: #00b894;
	word-spacing: 5px;
}

@keyframes changetext{
	0%{content: "Goa";}  
	20%{content: "Aasam";}
	40%{content: "Rajsthan";}
	60%{content: "Kerala";}
	80%{content: "Gujarat";}
	100%{content: "Himachal Pradesh";}
	

}
</style>

<header>
<nav>
	<a href="#" class="logo"><img src="web/2.png" alt=""></a>
	<div class="menu">
		<ul>
				<li class="active"><a href="Home.html">Home</a></li>
				<li><a href="#">About us</a></li>
				<li><a href="#">Packages</a></li>
				<li><a href="#">Book</a></li>
				<li><a href="Login.php">Login</a></li>
			</ul>
	</div>
</nav>
	<main>
		<section>
			<h3>Welcome To India</h3>
			<h1>Do Come & Visit<span class="change_content"></span></h1>
			<p>"India once is not enough"</p>
		</section>
	</main>	
	
</header>



<!-- swiper js file -->

	<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file -->

	<script src="js/script.js"></script>


</body>
</html>