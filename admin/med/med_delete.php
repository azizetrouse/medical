<?php 
 include '../function/db.php';
$mId = $_GET['id'];

$sql = "DELETE FROM medicaments WHERE id=$mId";

if ($conn->query($sql) === TRUE) {
    header("Location: http://127.0.0.1/medical/admin/med/");
} else {
    echo "Error deleting record: " . $conn->error;
}
$conn->close();
?>