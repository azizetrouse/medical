<?php include ("../function/db.php");
// HAD CODE BACH TJIB M3TOMAT

$id = $_POST['id'];
$name =  $_POST['name'];
$description = $_POST['description'];

$sql = "UPDATE medicaments SET name = '$name', description = '$description' WHERE id=$id";
$message  = db_insert($sql);
if ($conn->query($sql) === TRUE) {

    // echo "added with success !";

    header("Location: index.php");

} else {

    echo "Error: " . $sql . "<br>" . $conn->error;

}

$conn->close();
?>