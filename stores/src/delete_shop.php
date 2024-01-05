<?php
include './includes/db.php';
// Check if the ID parameter is set in the URL
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    // Delete the selected shop from the database
    $sql = "DELETE FROM Shop WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "<script> 
        alert('Shop removed successfully');
        window.location.href = 'retrieve.php';
        </script>";
    } else {
        echo "<script> 
        alert('There was an error removing the shop');
        window.location.href = 'retrieve.php';
        </script>";
    }
} else {
    echo "<script> alert('Invalid request.');</script";
}

$conn->close();
?>
