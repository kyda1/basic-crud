<?php
if (!isset($_SESSION)) {
    session_start();
}
include_once('connection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $newFullname = $_POST['fullname'];
    $newBday = $_POST['bday'];
    $newAddress = $_POST['address'];

    $updateSql = "UPDATE users SET fullname='$newFullname', bday='$newBday', address='$newAddress' WHERE id='$id'";
    
    $updateResult = mysqli_query($connection, $updateSql);

    if ($updateResult) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error updating information: " . mysqli_error($connection);
    }
}

mysqli_close($connection);
?>
