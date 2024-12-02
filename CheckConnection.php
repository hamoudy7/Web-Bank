<?php
include 'Connection.php';

if (!$con)
{echo '<script type="text/javascript"> 
   alert("Error connecting the server"); 
  window.location.href="index.php";
          </script>';
}
?>