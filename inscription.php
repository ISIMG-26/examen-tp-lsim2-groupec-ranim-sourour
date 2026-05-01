<?php
include("config.php");
$conn = new mysqli("localhost", "root", "", "vintage_shop");
if ($conn->connect_error) {
    die("Connexion échouée: " . $conn->connect_error);
}

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nom = trim($_POST['nom']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    if (!empty($nom) && !empty($email) && !empty($password)) {
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $stmt = $conn->prepare("INSERT INTO users (nom, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $nom, $email, $hashedPassword);

        if ($stmt->execute()) {
            header("Location: login.php");
            exit();
        } else {
            $message = "❌ Erreur lors de l'inscription";
        }

        $stmt->close();

    } else {
        $message = "⚠️ Tous les champs sont obligatoires";
    }
}
?>
