<?php
$prénom = $_POST['prénom'];
$nom = $_POST['nom'];
$téléphone = $_POST['téléphone'];
$adresse = $_POST['adresse'];
$email = $_POST['email'];
$message = $_POST['message'];

//Data Base Connection
$conn = new mysqli('sql916.main-hosting.eu', 'u355802664_mbporgestion', 'Mimounalina24', 'u355802664_RDV');
if ($conn->connect_error) {
    die($conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into ClientsPotentiel(prénom, nom, téléphone, adresse, email, message)
    values(?,?,?,?,?,?)");
    $stmt->bind_param("ssisss", $prénom, $nom, $téléphone, $adresse, $email, $message);
    $stmt->execute();
    $stmt->close();
    $conn->close();
}

?>