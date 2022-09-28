<?php
$hostname='localhost';
$username='root';
$pass='';
$banco='techcompany';
$db=mysqli_connect($hostname,$username,$pass);
mysqli_select_db($db,$banco);
?>