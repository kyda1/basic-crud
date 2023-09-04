<?php
if (!isset($_SESSION)) {
    session_start();
}
include_once('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $bday = $_POST['bday'];
    $address = $_POST['address'];

    $sql = "INSERT INTO users (fullname, bday, address) VALUES ('$fullname', '$bday', '$address')";

    if (mysqli_query($connection, $sql)) {
        echo "Information added successfully.";

        header('Location: index.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connection);
    }
}
mysqli_close($connection);
?>
