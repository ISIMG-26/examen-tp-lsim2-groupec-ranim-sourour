<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Bijoux antiques</title>
    <link rel="stylesheet" href="../css/vintage.css">
</head>
<body>

<header>
    <h1>💍 Bijoux & Accessoires Antiques</h1>
</header>
    <nav>
        <a href="../index.php">Accueil</a>
        <a href="../panier.php">Panier</a>
    </nav>
 
    <h2 class="section-title">Collections des bijoux anciens</h2>


 <section class="container2">
   <div class="card2">
    <h2 class="product-title">Bague Royale en Or</h2>
    <img src="../images/bague.jpg" class="product-img" alt="bague">
    <p class="price">Prix : 350 TND</p>
    <p class="desc">Bague ancienne en or massif du 19ème siècle avec pierre précieuse.</p>   <!-- bouton cœur -->
    <div class="btn-container">
        <button class="heart-btn" onclick="addToCart('Bague Royale en Or', 350)">❤️</button>
    </div>
</div>
    <div class="card2">
        <h2 class="product-title">Collier Vintage Perlé</h2>
        <img src="../images/collier2.jpg" class="product-img" alt="collier">
        <p class="price">Prix : 220 TND</p>
        <p class="desc">Collier élégant en perles naturelles fait main.</p>
        <div class="btn-container">
            <button class="heart-btn" onclick="addToCart('Collier Vintage Perlé', 220)">❤️</button>
        </div>
    </div>
    <div class="card2">
        <h2 class="product-title">Bracelet Antique Argent</h2>
        <img src="../images/bracelet.jpg" class="product-img" alt="bracelet">
        <p class="price">Prix : 180 TND</p>
        <p class="desc">Bracelet ancien en argent gravé à la main.</p>
        <div class="btn-container">
            <button class="heart-btn" onclick="addToCart('bracelet Vintage', 180)">❤️</button>
        </div>
    </div>
    <div class="card2">
        <h2 class="product-title">Broche Vintage Dorée</h2>
        <img src="../images/broche.jpg" class="product-img" alt="broche">
        <p class="price">Prix : 120 TND</p>
        <p class="desc">Broche décorative ancienne style royal.</p>
        <div class="btn-container">
            <button class="heart-btn" onclick="addToCart('broche Vintage', 120)">❤️</button>
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