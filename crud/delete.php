<?php
include_once('connection.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $deleteSql = "DELETE FROM users WHERE id = $id";
    
    if (mysqli_query($connection, $deleteSql)) {
        echo "User deleted successfully.";
    } else {
        echo "Error deleting user: " . mysqli_error($connection);
    }
} else {
    echo "User ID not provided.";
}
header('Location: index.php');

mysqli_close($connection);
?>
