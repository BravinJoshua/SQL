<?php
// contains code showing hoe our login system will work
session_start();
include "dbconnect.php";
$uname = $_REQUEST['uname'];
$pwd = $_REQUEST['pwd'];

//confirming our variable are not empty
if (empty($uname)) {
    header("location :index.php?error = User Name is required!");
    exit();
} else if (empty($pwd)) {
    header("Location : index.php?error = Fill in your password");
    exit();
}
$sql = "insert into users values('$uname','$pwd')";
if ($conn->query($sql) === true) {
    echo "New records inserted";
} else {
    echo "error";
}

$conn->close();
