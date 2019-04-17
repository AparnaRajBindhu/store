<?php
	require('mysqli_connect.php');
?>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <title>ARAS BOUTIQUE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/default_thank_you.css">
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/jquery-1.9.1.min.js"></script>
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/html5shiv.js"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body style="color: #004A55">
    <!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">ARAS</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">HOME</a></li>
      </ul>
    </div>
  </div>
</nav>
    <br><br><br>
    <?php
        $q2="UPDATE inventory SET on_hand=on_hand-1 WHERE item_name=(SELECT prod_id FROM cartitem)";
        $r2=@mysqli_query($dbc,$q2);
        $q1="DELETE FROM cartitem";
        $r1=@mysqli_query($dbc,$q1);

    ?>
	<header class="site-header" id="header">
		<h1 class="site-header__title" data-lead-id="site-header-title" >THANK YOU!</h1>
        <p style="font-size: 2em">Your order was completed successfull!!!</p>
	</header>

	<div class="main-content">
		
	</div>
<br><br><br><br><br><br>
<footer class="container-fluid bg-4 text-center">
  <p>ARAS @2019</p> 
</footer>
</body>
</html>