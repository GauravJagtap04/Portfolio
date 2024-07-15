<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

if (!empty($name)) || (!empty($email)) || (!empty($message)) {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "test_form";
    
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    
    if (mysqli_connect_error()) {
        die('Connect Error('.mysqli_connect_error().')'. mysqli_connect_error());
    } else {
    	$INSERT = "INSERT Into message(name, email, message) values(?, ?, ?)";
    	
    	echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
    }
} else {
    echo "<script type='text/javascript'>alert('All fields are required')</script>";
}
