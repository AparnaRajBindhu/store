<!DOCTYPE html>
<html lang="en">
<head>
  <title>ARAS BOUTIQUE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body>
   
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
        <li><a href="#">HOME</a></li>
          <li><a href="#login">LOGIN</a></li>
      </ul>
    </div>
  </div>
</nav>
<br><br><br>
<!-- First Container -->
<div id="login" class="container-fluid bg-1 text-center">
  <!--<h3 class="margin">Who Am I?</h3>-->
  <img src="title.png" class="img-responsive img-circle margin" style="display:inline" alt="Bird" width="350" height="350">
  <h3 style="font-weight: bold; font-size: 2em; font: Georgia;">ARAS BOUTIQUE</h3>
    
    <form class="form-inline" method="post" action="store.php" >
    
      <input type="email" class="form-control" size="15" placeholder="Enter Email" required><br>
        <input type="submit" name="submit" class="btn btn-danger" value="LOGIN">

      

  </form>
</div>

<!-- Second Container -->
<div class="container-fluid bg-2 text-center">
  <h3 class="margin">About ARAS</h3>
  <p>We are ARAS, a small but motivated company specializing in trendy clothes. We believe passionately in great bargains and excellent service, which is why we commit ourselves to giving you the best of both. If you’re looking for something new, you’re in the right place. We strive to be industrious and innovative, offering our customers something they want, putting their desires at the top of our priority list. </p>

</div>

<!-- Third Container (Grid) -->
<div class="container-fluid bg-3 text-center">
  <h3 class="margin" style="font-weight: bold; font-size: 1.5em;">Contact</h3>
  <p style="color: #004A55">Contact us and we'll get back to you within 24 hours.</p>
      <p style="color: #004A55"><span class="glyphicon glyphicon-map-marker"></span> Kitchener, Canada</p>
      <p style="color: #004A55"><span class="glyphicon glyphicon-phone"></span> +1 1515151515</p>
      <p style="color: #004A55"><span class="glyphicon glyphicon-envelope"></span> abc@gmail.com</p> 

</div>
<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p>ARAS @2019</p> 
</footer>

</body>
</html>
