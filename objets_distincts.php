<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Objets de maison antiques</title>
    <link rel="stylesheet" href="../css/vintage.css">
</head>
<body>
<header>
    <h2 class="page-title">Décoration et objets anciens</h2>
</header>
    <nav>
        <a href="../index.php">Accueil</a>
        <a href="../panier.php">Panier</a>
    </nav>
<section class="container2">
    <div class="card2">
        <h2 class="product-title">Lampe à huile ancienne</h2>
        <img src="../images/lampe.jpg" class="product-img" alt="lampe">
        <p class="price">Prix : 90 TND</p>
        <p class="desc">Lampe traditionnelle en cuivre utilisée autrefois.</p>
        <div class="btn-container">
            <button class="heart-btn" onclick="addToCart('Collier Vintage Perlé', 90)">❤️</button>
        </div>
    </div>
    <div class="card2">
        <h2 class="product-title">Horloge murale vintage</h2>
        <img src="../images/horloge.jpg" class="product-img" alt="horloge">
        <p class="price">Prix : 180 TND</p>
        <p class="desc">Horloge ancienne en bois sculpté.</p>
        <div class="btn-container">
            <button class="heart-btn" onclick="addToCart('horloge', 180)">❤️</button>
        </div>
    </div>
    <div class="card2">
    <h2 class="product-title">Porte-bougies Antique</h2>
    <img src="../images/candle.jpg" class="product-img" alt="porte bougies">
    <p class="price">Prix : 180 TND</p>
    <p class="desc">Porte-bougies ancien en métal sculpté style royal vintage.</p>
    <div class="btn-container">
            <button class="heart-btn" onclick="addToCart('porte bougies', 180)">❤️</button>
    </div>
</div>
    <div class="card2">
    <h2 class="product-title">Tableau Antique</h2>
    <img src="../images/tableau.jpg" class="product-img" alt="tableau antique">
    <p class="price">Prix : 250 TND</p>
    <p class="desc">Tableau ancien peint à la main représentant une scène historique.</p>
    <div class="btn-container">
            <button class="heart-btn" onclick="addToCart('tableau antique', 250)">❤️</button>
    </div>
</div>
    <div class="card2">
    <h2 class="product-title">Vase Antique</h2>
    <img src="../images/vase.jpg" class="product-img" alt="vase">
    <p class="price">Prix : 120 TND</p>
    <p class="desc">Vase ancien en céramique décoré à la main, style classique.</p>
    <div class="btn-container">
            <button class="heart-btn" onclick="addToCart('vase vintage', 120)">❤️</button>
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