<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Vaisselles antiques</title>
    <link rel="stylesheet" href="../css/vintage.css">
</head>
<body>
<header>
    <h1> Vaisselles Anciennes</h1>
</header>
     <nav>
        <a href="../index.php">Accueil</a>
        <a href="../panier.php">Panier</a>
    </nav>
<h2 class="section-title">Collections de vaisselles anciennes</h2>
<section class="container2">
    <div class="card2">
        <h2 class="product-title">Service en Porcelaine Royale</h2>
        <img src="../images/service.jpg" class="product-img" alt="vaisselle">
        <p class="price">Prix : 450 TND</p>
        <p class="desc">Service complet en porcelaine fine du 19ème siècle.</p>
        <div class="btn-container">
        <button class="heart-btn" onclick="addToCart('vaisselle', 450)">❤️</button>
    </div>
    </div>
    <div class="card2">
        <h2 class="product-title">Assiettes Vintage Dorées</h2>
        <img src="../images/assiette.jpg" class="product-img" alt="assiettes">
        <p class="price">Prix : 180 TND</p>
        <p class="desc">Set d’assiettes anciennes avec bordure dorée élégante.</p>
        <div class="btn-container">
        <button class="heart-btn" onclick="addToCart('assiettes', 180)">❤️</button>
    </div>
    </div>
    <div class="card2">
        <h2 class="product-title">Tasses en Céramique Antique</h2>
        <img src="../images/tasses.jpg" class="product-img" alt="tasses">
        <p class="price">Prix : 120 TND</p>
        <p class="desc">Tasses artisanales peintes à la main.</p>
        <div class="btn-container">
        <button class="heart-btn" onclick="addToCart('tasses', 120)">❤️</button>
    </div>
    </div>
    <div class="card2">
        <h2 class="product-title">Théière Ancienne en Cuivre</h2>
        <img src="../images/vaisselle3.jpg" class="product-img" alt="theiere">
        <p class="price">Prix : 260 TND</p>
        <p class="desc">Théière traditionnelle en cuivre poli, style oriental.</p>
        <div class="btn-container">
        <button class="heart-btn" onclick="addToCart('theiere', 260)">❤️</button>
    </div>
    </div>
</section>
<footer>
    <p>© 2026 Antique Shop</p>
</footer>
<script>
function addToCart(name, price){
    let cart = JSON.parse(localStorage.getItem("cart")) || [];
    cart.push({name: name, price: price});
    localStorage.setItem("cart", JSON.stringify(cart));
    alert(name + " ajouté au panier ❤️");
}
</script>
</body>
</html>