<?php
include '../classes/User.php';

// create an instance of the User class
$user = new User;

$user->update($_POST, $_FILES);

?>