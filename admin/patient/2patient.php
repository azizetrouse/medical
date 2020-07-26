<?php 
include "../function/db.php";
include "../function/validate.php";
$type = sanitizeString($_POST["type"]);
$nom = $_POST["nom"];
$prenom = sanitizeString($_POST["prenom"]);
$reference = sanitizeString($_POST["reference"]);
$cin = sanitizeString($_POST["cin"]);
$mutuelle = sanitizeString($_POST["mutuelle"]);
$scolarite = sanitizeString($_POST["scolarite"]);
$date_naissance_age = sanitizeString($_POST["date_naissance_age"]);
$adresse = sanitizeString($_POST["adresse"]);
$tel = sanitizeString($_POST["tel"]);
$autre_inforamtions = sanitizeString($_POST["autre_inforamtions"]);
$profession = sanitizeString($_POST["profession"]);
$nombre_denfant = sanitizeString($_POST["nombre_denfant"]);
$situation_familiale = sanitizeString($_POST["situation_familiale"]);
$sql = "INSERT INTO patients (nom, prenom, reference, cin, mutuelle, scolarite, date_naissance_age, adresse, tel, autre_inforamtions, profession, nombre_denfant, situation_familiale)
VALUES ('$nom', '$prenom', '$reference', '$cin', '$mutuelle', '$scolarite', '$date_naissance_age', '$adresse', '$tel','$autre_inforamtions','$profession',$nombre_denfant, '$situation_familiale')";

if( $type === 'update') {
    $id = $_POST["id"];
    $sql = "UPDATE patients SET nom = '$nom', prenom = '$prenom', reference = '$reference', cin = '$cin', mutuelle = '$mutuelle', scolarite = '$scolarite', date_naissance_age = '$date_naissance_age', adresse = '$adresse', tel = '$tel', autre_inforamtions = '$autre_inforamtions', profession = '$profession', nombre_denfant = $nombre_denfant WHERE id=$id";
}

if ($conn->query($sql) === TRUE) {
    header("Location: http://localhost/medical/admin/patient/index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>