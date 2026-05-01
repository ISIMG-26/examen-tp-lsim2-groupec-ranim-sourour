<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Panier</title>
    <link rel="stylesheet" href="css/vintage.css">
</head>
<body>
<header>
    <h1>🛒 Votre Panier</h1>
    <nav>
        <a href="index.php">Accueil</a>
    </nav>
</header>
<section class="container">
<?php
$total = 0;
if (!empty($_SESSION['cart'])) {
    echo "<h2>Produits ajoutés</h2>";
    foreach ($_SESSION['cart'] as $index => $item) {
        $nom = $item['nom'];
        $prix = $item['prix'];
        $total += $prix;
        echo "<div class='card'>";
        echo "<h3>$nom</h3>";
        echo "<p class='price'>$prix TND</p>";
        echo "<a class='btn-delete' href='remove.php?id=$index'>Supprimer</a>";
        echo "</div>";
    }
    echo "<div class='total'>";
    echo "<h3>Total : $total TND</h3>";
    echo "</div>";
   

} else {
    echo "<p>🛍️ Votre panier est vide</p>";
}
?>
</section>
</body>
</html>