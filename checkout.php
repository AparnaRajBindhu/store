
<?php
	require('mysqli_connect.php');
error_reporting(0);
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



input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}


    </style>
    </head>
<body style="color:#004A55">
   
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
          <li><a href="store.php">COLLECTION</a></li>
          <li><a href="#">CART</a></li>
      </ul>
    </div>
  </div>
</nav>
    <div style="margin-bottom:0; color: #004A55; text-align: center; font-weight: bold;">
    <br><br><br>
  <h1 style="font-weight: bold">CHECKOUT PAGE</h1> <br><br>
</div>
 <?php
    $q1="SELECT * FROM inventory JOIN cartitem on inventory.item_name=cartitem.prod_id";
    $r1=@mysqli_query($dbc,$q1);
    $row=mysqli_fetch_array($r1,MYSQLI_ASSOC);
     $onhand = $row[on_hand];
     $item = $row[item_name];
     $quantity = $row[quantity];
    if($onhand<0){
        echo '<h1 style="margin-bottom:0; color: #004A55; text-align: center; font-weight: bold;" >The Selected item is out of stock</h1>';
    }
    /*else{
        echo "onhand: $onhand  item: $item   quan: $quantity";
    }*/
 ?>
    <div class="row">
  <div class="col-75">
    <div class="container">
      <form action="action_page.php" method="post">
      
        <div class="row">
          <div class="col-50">
            <h3 style="font-weight: bold">Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Enter name" required>
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="Enter email" required>
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="Enter address" required>
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="City" required>

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="State" required>
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="Zipcode" required>
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3 style="font-weight: bold">Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="Enter name" required>
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" required>
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="Enter month" required>
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="Enter year" required>
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="Enter cvv" required>
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" value="Continue to checkout" class="btn" style="font-weight: bold">
          
      </form>
    </div>
        </div></div>
<br><br><br>
    <footer class="container-fluid bg-4 text-center">
  <p>ARAS @2019</p> 
</footer>

</body>
</html>