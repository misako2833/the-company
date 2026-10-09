<?php
include "../classes/User.php";

// Create an obj
$user = new User;

// Call th mehod
$user->login($_POST);

?>