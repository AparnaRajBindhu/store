
<?php
	require('mysqli_connect.php');
 
?>


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
    <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
    color: black;
}
  </style>

</head>
<body>

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
          <li><a href="#">COLLECTION</a></li>
        
      </ul>
    </div>
  </div>
</nav>
    
<div style="margin-bottom:0; color: #004A55; text-align: center; font-weight: bold;">
    <br><br><br>
  <h1>OUR COLLECTIONS</h1> <br><br>
</div>
<?php
    
echo '<div class="container">';
echo '<div class="row">';

 $q1="SELECT * FROM products";
 $r1=@mysqli_query($dbc,$q1);
 	while($row=mysqli_fetch_array($r1,MYSQLI_ASSOC)){
		   echo '<div class="gallery"><img src="images/' . $row['prod_name'] . '.jpg" width="600" height="400">';
		    echo '<br>'; echo '<br>';
		  echo '<div class="desc">'.$row["prod_name"].'</div></div>';
        
      /* echo '<input type="submit" name="submit" value="Submit">'; */
	}    
  
echo '';
  
 echo '<br>';
echo '</div>';
echo '</div>';
?>
 <div style="margin-bottom:0; color: #004A55; text-align: center; font-weight: bold; ">
    <br><br>
  <h2>CHOOSE YOUR FAVOURITE ITEM</h2>
  </div>
<br>
  <div class="container-fluid  text-center" style="color: #111; background-color: #f2f2f2">
      
      <form method="post" action="cart.php" >
        <label>Select item : </label>
		<select name="item">
			<option value="kurtas">KURTAS
			<option value="pants">PANTS
            <option value="tops">TOPS
			<option value="tshirts">TSHIRTS
            <option value="shirts">SHIRTS
		</select>
         
          <br>
        <label>Quantity : </label>
		<input type="text" name="quantity" placeholder="Enter Quantity" required><br><br>
        <input type="submit" name="submit" class="btn btn-danger" value="Add to Cart">
	
	</form>
      
  </div>

<br><br><br><br>
<footer class="container-fluid bg-4 text-center">
  <p>ARAS @2019</p> 
</footer>
</body>
</html>