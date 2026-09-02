<?php
include 'db.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM bookings WHERE id=$id";

    if($conn->query($sql)) {
        header("Location: index.php");
    } else {
        echo "Error deleting record!";
    }
}
?>