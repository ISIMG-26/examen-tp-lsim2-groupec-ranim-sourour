<?php
session_start();
?>
<h2>
    Bienvenue 
    <?php 
    if(isset($_SESSION['user'])) {
        echo $_SESSION['user'];
    } else {
        echo "Visiteur";
    }
    ?>
</h2>
<!DOCTYPE html>
<html>
<head>
   
    <link rel="stylesheet" href="css/vintage.css">
</head>
<body>

<header>
   <h1 class="title"> Antique Shop</h1>
</header>

<section class="menu">
    <h2>catégorie</h2>
     <div class="grid">
        <a href="produits/objets_distincts.php" class="cat-card">
            <img src="images/miroir.jpg">
            <h3>objets dstincts</h3>
        </a>
        <a href="produits/papier.php" class="cat-card">
            <img src="images/livre.jpg">
            <h3> Objets en papier</h3>
        </a>
        <a href="produits/bijoux.php" class="cat-card">
            <img src="images/bijoux.jpg">
            <h3> Bijoux & Accessoires</h3>
        </a>
        <a href="produits/meubles.php" class="cat-card">
            <img src="images/meubles.jpg">
            <h3> Meubles</h3>
        </a>
        <a href="produits/vaisselle.php" class="cat-card">
            <img src="images/vaisselle2.jpg">
            <h3> Vaisselles</h3>
        </a>
    </div>
</section>
<footer>
    <p>© 2026 Antique Shop</p>
</footer>
</body>
</html>