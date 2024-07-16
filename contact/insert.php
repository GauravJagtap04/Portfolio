<?php
$username = $_POST['username'];
$email = $_POST['email'];
$message = $_POST['message'];


if (!empty($username) || !empty($email)) {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "test";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    if (mysqli_connect_error()) {
        die('Connect Error('.mysqli_connect_error().')'. mysqli_connect_error());
    } else {
        $INSERT = "INSERT Into messages(username, email, message) values(?, ?, ?)";

        $stmt = $conn->prepare($INSERT);
        $stmt->bind_param("sss", $username, $email, $message);
        $stmt->execute();
 
 	    echo "<script language='javascript'>";
	    echo 'alert("Saved successfully!");';
	    echo 'window.location.replace("/Portfolio/contact/contact_page.html");';
	    echo "</script>";
        
        $stmt->close();
    }
} else {
    echo "All fields are required";
    die();
}
