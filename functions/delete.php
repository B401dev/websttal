<?php 
include "./connect.php";

$id = $_GET['id'];
$del = mysqli_query($conn, "DELETE FROM books where id = '$id'");

if ($del) {
    mysqli_close($conn); // Close connection
    header("location: ../components/tables.php"); // redirects to all records page
    
    exit;
  } else {
    echo "Error deleting record"; // display error message if not delete
  }