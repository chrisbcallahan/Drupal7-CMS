<?php 

//create connection
$con = mysqli_connect("horus.fcs.uga.edu", "root", "hfgis99", "cfr_prosaaf_new");

if(mysqli_connect_errno()) 
{
echo "failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con, "SELECT first_name FROM caregiver WHERE caregiver_id = 14");


printf $result;


?>