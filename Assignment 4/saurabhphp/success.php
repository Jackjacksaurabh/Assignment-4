<?php

require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
$user_id = $_SESSION['id'];
$item_ids_string = $_GET['itemsid'];


$query = "UPDATE users_items SET status='Confirmed' WHERE user_id=" . $user_id . " AND item_id IN (" . $item_ids_string . ") and status='Added to cart'";
mysqli_query($con, $query) or die($mysqli_error($con));
?>


<!DOCTYPE html>

<html>
    <head>
        <title>S-CART |success-page</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            .row_style{
                padding-top: 70px;
            }
        </style>
    </head>
    <body>
               <?php include 'includes/header.php'; ?>
        <div class="container">
            <div class="row row_style">
                <div class="col-xs-offset-2 col-xs-8">
                    <h3> Your order is confirmed.<br> Thank you for shopping with us.<label class="glyphicon glyphicon-shopping-cart"></label><br>
                        <a href="products.php">Click here</a> to purchase any other item.</h1>   
                </div>
            </div>
        </div>
               <?php include 'includes/footer.php'; ?>
    </body>
</html>
