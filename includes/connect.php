<?php 
    $con = mysqli_connect("localhost","root","") or die("Couldnt connect to locahost");
    mysqli_select_db($con,"airline") or die("Couldnt connect to databse");
?>