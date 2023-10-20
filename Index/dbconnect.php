<?php
$servername = "localhost"; // the server hosting your database
$user = "root"; // this is thre user created whenever you install xampp
$password = ""; // signifies an empty passwprd . if you have a password leave it blank like mine is.
$DATABASE_NAME = "campus"; // this is your database name, created on your server . Use one specific to your server.

// create a connection
$conn = new mysqli($servername, $user, $password, $DATABASE_NAME);


//check if connection is working
if ($conn->connect_error) {
    die("connection failed :" . $conn->connect_error);
} else {
    echo "connection successful";
}
