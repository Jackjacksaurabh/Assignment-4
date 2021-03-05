<?php

require 'includes/common.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>S-CART|Login-Page</title>
             <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            .row_style{
                margin-top: 100px;
            }
            .footer {
             
                padding: 10px 0;
                 position: fixed;
                background-color: #101010;
                color:#9d9d9d;
                bottom: 0;
                width: 100%;
                text-align: center;
                left: 0;
}
                

            </style>
            
    </head>
    <body>
       <!-- header part-->
       <?php
       include 'includes/header.php';
       ?>
       <!-- header part-->
       <!-- log in form-->
       <div class="container">
           <div class="row row_style">
               <div class="col-xs-offset-4 col-xs-4">
           <div class="panel panel-primary">
               <div class="panel-heading">
                   <h2>Login</h2>
               </div>
               <div class="panel-body">
                   <p class="text-warning"><i>Login to make purchase</i></p>
                   <!--creating form element -->
                   <form action="login_submit.php" method="POST" > 
                       <div class="form-group">
                           <input type="email" name="email" placeholder="Email" class="form-control">
                       </div>
                       <div class="form-group">
                   <input type="password" name="password" placeholder="password" class="form-control">
                       </div>
                       <button class="btn btn-primary">Login</button>
                   </form>
               </div> 
               <div class="panel-footer">
                   <p>Don't have an account? <a href="signup.php">Register<a><p>
               </div>
           </div>
               </div>
           </div>
           
       </div>
       
       
       
       <!-- log in form end-->
       <!-- footer start-->
       
        <?php
        include 'includes/footer.php';
        ?>
       
   
       <!-- footer end-->
    </body>
</html>
