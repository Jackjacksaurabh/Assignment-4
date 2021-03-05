
<?php
require 'includes/common.php';
if (isset($_SESSION['email'])) 
{
  header('location: products.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>S-CART</title>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="index.css" rel="stylesheet" type="text/css" >
    </head>
    <body>
        <!-- header part-->
        <!-- nav bar-->
        
  <?php
  include 'includes/header.php';
  ?>
        
 <?php if (isset($_SESSION['email'])) {
          header('location: products.php');
         }
         ?>

     <!-- nav bar-->
          
        <div id="banner_image">
         
                <div class="container">
                    <div id="inner_img">
                    <div id="banner_content">
                        <a href="products.php" class ="btn btn-danger btn-lg active">Shop Now</a>
                    </div>
                    </div>
                </div>
        </div>
          
       <!-- header part end-->
       <!-- footer   -->
      <?php
      include 'includes/footer.php';
      ?>
       <!-- footer end -->
    </body>
</html>
