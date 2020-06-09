<?php session_start(); 
include 'connection.php';
// HAD CODE BACH TJIB M3TOMAT


$name = htmlspecialchars(strtolower(trim($_POST['name'])));
$description = htmlspecialchars(strtolower(trim($_POST['description'])));

$sql = "INSERT INTO medicaments (name, description) VALUES ('$name', '$description')";
$_SESSION['user'] = $name;
$_SESSION['description'] = $description;

if ($conn->query($sql) === TRUE) {
    // echo "added with success !";
    header("Location: http://localhost/pr/medicaments.php");
} else {
    // echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>