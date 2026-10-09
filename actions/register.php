<?php
include "../classes/User.php";

// Create an obj
$user = new User;

// Call th method
$user->store($_POST);
?>