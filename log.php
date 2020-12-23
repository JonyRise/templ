<?php 
$password="NONE";
$login="Default";
if(isset($_POST['login'])&&strlen($_POST['login'])>0) $login=$_POST['login'];
if(isset($_POST['password'])&&strlen($_POST['password'])>0) $password=$_POST['password'];
echo "You login: $login, your password: $password";
?>
<form action="index.php", method="GET">
    <input type="submit", value="Back">