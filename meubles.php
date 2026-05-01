<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Meubles antiques</title>
    <link rel="stylesheet" href="../css/vintage.css">
</head>
<body>

<header>
    <h1>🪑 Meubles Anciens</h1>
</header>
<nav>
    <a href="../index.html">Accueil</a>
    <a href="../panier.html">Panier 🛒</a>
</nav>
 <div class="title-container">
    <h2 class="section-title">Collections des bijoux anciens</h2>
</div>

<section class="container2">
    <div class="card2">
        <h2 class="product-title">Chaise Royale en Bois</h2>
        <img src="../images/chaise.jpg" class="product-img" alt="chaise">
        <p class="price">Prix : 220 TND</p>
        <p class="desc">Chaise ancienne sculptée à la main en bois massif.</p>
        <div class="btn-container">
        <button class="heart-btn" onclick="addToCart('chaise', 220)">❤️</button>
    </div>
    </div>
    <div class="card2">
        <h2 class="product-title">Table Vintage en Chêne</h2>
        <img src="../images/table.jpg" class="product-img" alt="table">
        <p class="price">Prix : 650 TND</p>
        <p class="desc">Grande table antique en chêne robuste du 19ème siècle.</p>
        <div class="btn-container">
        <button class="heart-btn" onclick="addToCart('table', 650)">❤️</button>
    </div>
    </div>

    <div class="card2">
        <h2 class="product-title">Armoire Ancienne Sculptée</h2>
        <img src="../images/armoire.jpg" class="product-img" alt="armoire">
        <p class="price">Prix : 1200 TND</p>
        <p class="desc">Armoire massive en bois avec décorations artisanales.</p>
        <div class="btn-container">
        <button class="heart-btn" onclick="addToCart('armoire ancienne', 1200)">❤️</button>
    </div>
    </div>
    <div class="card2">
    <h2 class="product-title">Lit Vintage en Bois</h2>
    <img src="../images/lit.jpg" class="product-img" alt="lit">
    <p class="price">Prix : 900 TND</p>
    <p class="desc">Lit ancien en bois massif, élégant et confortable.</p>
    <div class="btn-container">
        <button class="heart-btn" onclick="addToCart('lit', 900)">❤️</button>
    </div>
</div>
    <div class="card2">
        <h2 class="product-title">Coiffeuse Antique Royale</h2>
        <img src="../images/coiffeusse.jpg" class="product-img" alt="coiffeuse">
        <p class="price">Prix : 750 TND</p>
        <p class="desc">Coiffeuse vintage avec miroir doré style royal.</p>
        <div class="btn-container">
        <button class="heart-btn" onclick="addToCart('coiffeuse', 750)">❤️</button>
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