document.getElementById("registerForm").addEventListener("submit", function(e) {
    let email = document.querySelector("input[name='email']").value;
    let password = document.querySelector("input[name='password']").value;

    if (!email.includes("@")) {
        document.getElementById("error").innerText = "Email invalide";
        e.preventDefault();
    }

    if (password.length < 6) {
        document.getElementById("error").innerText = "Mot de passe trop court";
        e.preventDefault();
    }
});
function loadProducts() {
    fetch("php/fetch_products.php")
    .then(res => res.text())
    .then(data => {
        document.getElementById("products").innerHTML = data;
    });
    function addToCart(name, price){
    let cart = JSON.parse(localStorage.getItem("cart")) || [];
    cart.push({
        name: name,
        price: price
    });

    localStorage.setItem("cart", JSON.stringify(cart));

    alert(name + " ajouté au panier ❤️");
}
function toggleHeart(btn){
    btn.classList.toggle("active");
}
}