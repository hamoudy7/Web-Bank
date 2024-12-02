<?php
$Server="localhost";
$user="root";
$password="";
$dbname="bank web";

$con=mysqli_connect($Server, $user, $password, $dbname);

if(!$con){
    echo '<script type="text/javascript">alert("Error connecting the server "); </script>';
}
?>