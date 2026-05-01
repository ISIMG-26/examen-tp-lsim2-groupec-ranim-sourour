<?php
include("config.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, nom, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($user = $result->fetch_assoc()) {

        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['nom'] = $user['nom'];

            header("Location: ../index.php");
            exit();

        } else {
            echo "❌ Mot de passe incorrect";
        }

    } else {
        echo "❌ Email introuvable";
    }

    $stmt->close();
}
?>