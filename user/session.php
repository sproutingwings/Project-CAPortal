<?php
include('dbcon.php');


session_start();
if($_SESSION['uid'])
{
    $id = $_SESSION['uid'];
$r = "SELECT `name` FROM `user1` WHERE `id` = $id";
$res = mysqli_query($con,$r);
$d = mysqli_fetch_array($res);
}
#else
#{
   # header('location:login.php');
#}



?>



