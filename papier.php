<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Objets en papier anciens</title>
    <link rel="stylesheet" href="../css/vintage.css">
</head>
<body>

<header>
    <h1>📜 Objets en Papier Anciens</h1>
</header>
     <nav>
        <a href="../index.php">Accueil</a>
        <a href="../panier.php">Panier</a>
    </nav>

<div class="title-container">
    <h2 class="section-title">Collection d’objets en papier anciens</h2>
</div>

<section class="container2">
    <div class="card2">
        <h2 class="product-title">Envelope Ancien</h2>
        <img src="../images/envelope.jpg" class="product-img" alt="envelope">
        <p class="price">Prix : 150 TND</p>
        <p class="desc">envelope plein de charme.</p>
         <div class="btn-container">
            <button class="heart-btn" onclick="addToCart('Collier Vintage Perlé', 220)">❤️</button>
        </div>
    </div>
    <div class="card2">
        <h2 class="product-title">Livre Vintage</h2>
        <img src="../images/livre.jpg" class="product-img" alt="livre">
        <p class="price">Prix : 120 TND</p>
        <p class="desc">Livre ancien relié en cuir du 19ème siècle.</p>
         <div class="btn-container">
            <button class="heart-btn" onclick="addToCart('Collier Vintage Perlé', 220)">❤️</button>
        </div>
    </div>
    <div class="card2">
        <h2 class="product-title">Journal Ancien</h2>
        <img src="../images/journal.jpg" class="product-img" alt="journal">
        <p class="price">Prix : 80 TND</p>
        <p class="desc">Journal historique avec articles d’époque.</p>
         <div class="btn-container">
            <button class="heart-btn" onclick="addToCart('Collier Vintage Perlé', 220)">❤️</button>
        </div>
    </div>
    <div class="card2">
        <h2 class="product-title">Lettre Ancienne</h2>
        <img src="../images/letter.jpg" class="product-img" alt="lettre">
        <p class="price">Prix : 60 TND</p>
        <p class="desc">Lettre manuscrite ancienne très rare.</p>
         <div class="btn-container">
            <button class="heart-btn" onclick="addToCart('Collier Vintage Perlé', 220)">❤️</button>
        </div>
    </div>
    <div class="card2">
        <h2 class="product-title">Timbres Antique</h2>
        <img src="../images/timbres.jpg" class="product-img" alt="timbres">
        <p class="price">Prix : 200 TND</p>
        <p class="desc">Carte ancienne du monde dessinée à la main.</p>
         <div class="btn-container">
            <button class="heart-btn" onclick="addToCart('Collier Vintage Perlé', 220)">❤️</button>
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