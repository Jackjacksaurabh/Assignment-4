<?php
require("includes/common.php");

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>S-CART| Product-Page</title>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
                    .footer {
                       
                padding: 10px 0;
                position: fixed;
                background-color: #101010;
                color:#9d9d9d;
                bottom:0px;
                width: 100%;
                text-align: center;
                left: 0;
                    }
          
.rowstyle{
    padding-top:60px;
  
}


.caption{
    text-align: center;
}

.navbar{
    position:fixed;
}
    </style>
        
    </head>
    <body>
              <!-- header part-->
        
      <?php
      include 'includes/header.php';
      include 'includes/check-if-added.php';
      ?>
           <!-- thumbnail star here-->  
           
  <div class="container">
            <div class="row rowstyle">
                   <div class="jumbotron">
                       <h1>Welcome to our S-CART!</h1>
                       <p>We have the best cameras,watches and shirts for you. No need to hunt around, we have all in one place</p>
                       
                   </div>
                   
                   <div class="col-xs-3">
                   <div class="thumbnail">
                   <a href="#"><img src="5.jpg" alt="responsive image" ></a>
                   <div class="caption">
                       
                       <h3><b>Canon EOS</b></h3>
                   <p>Price:Rs.36000.00</p>
                <?php if (!isset($_SESSION['email'])) { ?>
                             <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                         Now</a></p>
                          <?php
                          } else {
                       
                          if (check_if_added_to_cart(1)) { 
                          echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                         cart</a>';
                          } else {
                          ?>
                         <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block
                         btn-primary">Add to cart</a>
                          <?php
                          }
                          }
                          ?>
                  
                    </div>
                   </div>
                   </div>
                   
                    <div class="col-xs-3">
                   <div class="thumbnail">
                   <a href="#"><img src="2.jpg" alt="responsive image" ></a>
                   <div class="caption">
                       <h3><b>Sony DSLR</b></h3>
                   <p>Price:Rs.40000.00</p>
                    <?php if (!isset($_SESSION['email'])) { ?>
                             <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                         Now</a></p>
                          <?php
                          } else {
                    
                          if (check_if_added_to_cart(2)) { 
                          echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                         cart</a>';
                          } else {
                          ?>
                         <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block
                         btn-primary">Add to cart</a>
                          <?php
                          }
                          }
                          ?>
                    </div>
                   </div>
                   </div>
                   
                   <div class="col-xs-3">
                   <div class="thumbnail">
                   <a href="#"><img src="3.jpg" alt="responsive image" ></a>
                   <div class="caption">
                       <h3><b>Sony DSLR</b></h3>
                   <p>Price:Rs.50000.00</p>
               <?php if (!isset($_SESSION['email'])) { ?>
                             <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                         Now</a></p>
                          <?php
                          } else {
                         
                          if (check_if_added_to_cart(3)) { 
                          echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                         cart</a>';
                          } else {
                          ?>
                         <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block
                         btn-primary">Add to cart</a>
                          <?php
                          }
                          }
                          ?>
                    </div>
                   </div>
                   </div>
                   
                    <div class="col-xs-3">
                   <div class="thumbnail">
                   <a href="#"><img src="4.jpg" alt="responsive image" ></a>
                   <div class="caption">
                   <h3><b>Olympus DSLR</b></h3>
                   <p>Price:Rs.80000.00</p>
           <?php if (!isset($_SESSION['email'])) { ?>
                             <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                         Now</a></p>
                          <?php
                          } else {
                          if (check_if_added_to_cart(4)) { 
                          echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                         cart</a>';
                          } else {
                          ?>
                         <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block
                         btn-primary">Add to cart</a>
                          <?php
                          }
                          }
                          ?>
                    </div>
                   </div>
                   </div>
                   
                     <div class="col-xs-3">
                   <div class="thumbnail">
                   <a href="#"><img src="9.jpg" alt="responsive image" ></a>
                   <div class="caption">
                       <h3><b>Titan Model#310</b></h3>
                   <p>Price:Rs.13000.00</p>
                 <?php if (!isset($_SESSION['email'])) { ?>
                             <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                         Now</a></p>
                          <?php
                          } else {
                          if (check_if_added_to_cart(5)) { 
                          echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                         cart</a>';
                          } else {
                          ?>
                         <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block
                         btn-primary">Add to cart</a>
                          <?php
                          }
                          }
                          ?>
                    </div>
                   </div>
                   </div>
                   
                     <div class="col-xs-3">
                   <div class="thumbnail">
                   <a href="#"><img src="10.jpg" alt="responsive image" ></a>
                   <div class="caption">
                       <h3><b>Titan Model#210</b></h3>
                   <p>Price:Rs.3000.00</p>
                  <?php if (!isset($_SESSION['email'])) { ?>
                             <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                         Now</a></p>
                          <?php
                          } else {
                          if (check_if_added_to_cart(6)) { 
                          echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                         cart</a>';
                          } else {
                          ?>
                         <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block
                         btn-primary">Add to cart</a>
                          <?php
                          }
                          }
                          ?>
                    </div>
                   </div>
                   </div>
                   
                     <div class="col-xs-3">
                   <div class="thumbnail">
                   <a href="#"><img src="11.jpg" alt="responsive image" ></a>
                   <div class="caption">
                       <h3><b>HMT Milan</b></h3>
                   <p>Price:Rs.8000.00</p>
                   <?php if (!isset($_SESSION['email'])) { ?>
                             <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                         Now</a></p>
                          <?php
                          } else {
                     
                          if (check_if_added_to_cart(7)) { 
                          echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                         cart</a>';
                          } else {
                          ?>
                         <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block
                         btn-primary">Add to cart</a>
                          <?php
                          }
                          }
                          ?>
                    </div>
                   </div>
                   </div>
                     <div class="col-xs-3">
                   <div class="thumbnail">
                   <a href="#"><img src="12.jpg" alt="responsive image" ></a>
                   <div class="caption">
                       <h3><b>Faber Luba#111</b></h3>
                   <p>Price:Rs.18000.00</p>
                      <?php if (!isset($_SESSION['email'])) { ?>
                             <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                         Now</a></p>
                          <?php
                          } else {
                          //We have created a function to check whether this particular product is added to cart or not.
                          if (check_if_added_to_cart(8)) { //This is same as if(check_if_added_to_cart != 0)
                          echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                         cart</a>';
                          } else {
                          ?>
                         <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block
                         btn-primary">Add to cart</a>
                          <?php
                          }
                          }
                          ?>
                    </div>
                   </div>
                   </div>
                   
                     <div class="col-xs-3">
                   <div class="thumbnail">
                   <a href="#"><img src="8.jpg" alt="responsive image" ></a>
                   <div class="caption">
                       <h3><b>H&W</b></h3>
                   <p>Price:Rs.800.00</p>
                  <?php if (!isset($_SESSION['email'])) { ?>
                             <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                         Now</a></p>
                          <?php
                          } else {
                          //We have created a function to check whether this particular product is added to cart or not.
                          if (check_if_added_to_cart(9)) { //This is same as if(check_if_added_to_cart != 0)
                          echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                         cart</a>';
                          } else {
                          ?>
                         <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block
                         btn-primary">Add to cart</a>
                          <?php
                          }
                          }
                          ?>
                    </div>
                   </div>
                   </div>
                     <div class="col-xs-3">
                   <div class="thumbnail">
                   <a href="#"><img src="6.jpg" alt="responsive image" ></a>
                   <div class="caption">
                       <h3><b>Luis Phil</b></h3>
                   <p>Price:Rs.1000.00</p>
                  <?php if (!isset($_SESSION['email'])) { ?>
                             <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                         Now</a></p>
                          <?php
                          } else {
                          //We have created a function to check whether this particular product is added to cart or not.
                          if (check_if_added_to_cart(10)) { //This is same as if(check_if_added_to_cart != 0)
                          echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                         cart</a>';
                          } else {
                          ?>
                         <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block
                         btn-primary">Add to cart</a>
                          <?php
                          }
                          }
                          ?>
                    </div>
                   </div>
                   </div>
                     <div class="col-xs-3">
                   <div class="thumbnail">
                   <a href="#"><img src="13.jpg" alt="responsive image" ></a>
                   <div class="caption">
                       <h3><b>John Zok</b></h3>
                   <p>Price:Rs.1500.00</p>
              <?php if (!isset($_SESSION['email'])) { ?>
                             <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                         Now</a></p>
                          <?php
                          } else {
                  
                          if (check_if_added_to_cart(11)) { 
                          echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                         cart</a>';
                          } else {
                          ?>
                         <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block
                         btn-primary">Add to cart</a>
                          <?php
                          }
                          }
                          ?>
                    </div>
                   </div>
                   </div>
                       <div class="col-xs-3">
                   <div class="thumbnail">
                   <a href="#"><img src="14.jpg" alt="responsive image" ></a>
                   <div class="caption">
                       <h3><b>John Zok</b></h3>
                   <p>Price:Rs.1500.00</p>
                  <?php if (!isset($_SESSION['email'])) { ?>
                             <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                         Now</a></p>
                          <?php
                          } else {
                          if (check_if_added_to_cart(12)) {
                          echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                         cart</a>';
                          } else {
                          ?>
                         <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block
                         btn-primary">Add to cart</a>
                          <?php
                          }
                          }
                          ?>
                    </div>
                   </div>
                   </div>
                   
                  
           </div>
 </div>
           <br><br>
              <!-- thumbnail end here-->  
                 <!-- footer start-->
       
         <?php
         include 'includes/footer.php';
         ?>
   
       <!-- footer end-->
    </body>
</html>
