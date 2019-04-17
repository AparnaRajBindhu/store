<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require('mysqli_connect.php');
   // if (isset($_POST['item']) && isset($_POST['quantity']))
   // {
        

        $item = $_POST['item'];
        $quantity = $_POST['quantity'];
        echo "item : $item";
        echo"q : $quantity";
        //  echo "<script>console.log( 'item: " . $item . "' );</script>";
        if (isset($_COOKIE['cart_id']))
        {
            echo "inside if";
            $cart_id = $_COOKIE['cart_id'];

            $q = "INSERT INTO cartitem (cart_id, prod_id, quantity) 
            VALUES ('$cart_id', '$item', '$quantity')";
            $r = @mysqli_query($dbc, $q);
        }
        else {
          /*  $date = date();
            $q = "INSERT INTO cart (date) VALUES ($date)";
            $r = @mysqli_query($dbc, $q);*/
            echo "inside else";
            $last_id = mysqli_insert_id($dbc);
            setcookie('cart_id', $last_id, time()+10000);
            $q = "INSERT INTO cartitem (cart_id, prod_id, quantity) 
            VALUES ('$last_id', '$item', '$quantity')";
            $r = @mysqli_query($dbc, $q);
                    }
    //}
    header('location: checkout.php');
	
	}

?>