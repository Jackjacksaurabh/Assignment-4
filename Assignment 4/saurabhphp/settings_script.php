<?php

require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}

$old_pass = $_POST['oldpassword'];
$old_pass = mysqli_real_escape_string($con, $old_pass);
$old_pass = MD5($old_pass);

$new_pass = $_POST['password'];
$new_pass = mysqli_real_escape_string($con, $new_pass);
$new_pass = MD5($new_pass);

$new_pass1 = $_POST['password1'];
$new_pass1 = mysqli_real_escape_string($con, $new_pass1);
$new_pass1 = MD5($new_pass1);

$query = "SELECT email, password FROM users WHERE email ='" . $_SESSION['email'] . "'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$row = mysqli_fetch_array($result);

$orig_pass = $row['password'];

if ($new_pass != $new_pass1) {
    echo "pass not match";
    $error= "<span class='red'> The two passwords don't match </span>";
    header('location: settings.php?error=' . $error);
} else {
    if ($row>0 ) {
        echo "both pass match";
        $query = "UPDATE  users SET password = '" . $new_pass . "' WHERE email = '" . $_SESSION['email'] . "'";
        mysqli_query($con, $query) or die($mysqli_error($con));
        $error="<span style='color:green'>Password Updated Successfully</span>";
        header('location: products.php?errorup='.$error);
    } else
    {
        echo "wrong old pass";
        $error=  "<span class='red'> Wrong Old Password  </span>";
        header('location: settings.php?errorp='.$error);
    }
}
?>