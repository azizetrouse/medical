<?php 
include('./connection.php');
$pId = $_GET['id'];

//sql to delete a record
$sql = "DELETE  FROM patients WHERE id=$pId";

if ($conn->query($sql) === TRUE) {
    header("Location: http://localhost/pr/page-patient.php");
} else {
    echo "Error deleting record: " . $conn->error;
}
$conn->close();
?>