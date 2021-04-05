<?php
include "./connect.php";

$id = $_GET['id'];
$update = mysqli_query($con, "SELECT * FROM books WHERE id=$id");

if ($del) {
    mysqli_close($conn); // Close connection
    header("location: ../components/tables.php"); // redirects to all records page

    exit;
} else {
    echo "Error editing record"; // display error message if not delete
}
