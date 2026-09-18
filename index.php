<?php
$products = [
 ["name"=>"Classic T-Shirt","price"=>499,"image"=>"https://via.placeholder.com/500x600?text=Classic+T-Shirt"],
 ["name"=>"Denim Jacket","price"=>1499,"image"=>"https://via.placeholder.com/500x600?text=Denim+Jacket"],
 ["name"=>"Floral Dress","price"=>1199,"image"=>"https://via.placeholder.com/500x600?text=Floral+Dress"],
 ["name"=>"Casual Hoodie","price"=>999,"image"=>"https://via.placeholder.com/500x600?text=Casual+Hoodie"]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>StyleHub - Fashion & Apparel</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<header>
  <div class="logo">StyleHub</div>
  <nav><a href="#home">Home</a><a href="#shop">Shop</a><a href="#categories">Categories</a><a href="#contact">Contact</a></nav>
  <a class="cart" href="cart.php">🛒 Cart</a>
</header>

<section class="hero" id="home">
  <div><p class="tag">NEW COLLECTION 2026</p><h1>Style that speaks<br>for you.</h1>
  <p>Discover trendy fashion and everyday essentials at StyleHub.</p>
  <a class="btn" href="#shop">Shop Now</a></div>
</section>

<section id="categories" class="section">
<h2>Shop by Category</h2>
<div class="categories"><div>👕<h3>Men</h3></div><div>👗<h3>Women</h3></div><div>🧥<h3>Outerwear</h3></div><div>👟<h3>Accessories</h3></div></div>
</section>

<section id="shop" class="section">
<h2>Featured Products</h2>
<div class="products">
<?php foreach($products as $p): ?>
<div class="card">
<img src="<?=htmlspecialchars($p['image'])?>" alt="<?=htmlspecialchars($p['name'])?>">
<div class="card-body"><h3><?=htmlspecialchars($p['name'])?></h3><p>₹<?=number_format($p['price'])?></p>
<a class="btn small" href="cart.php?add=<?=urlencode($p['name'])?>&price=<?=$p['price']?>">Add to Cart</a></div>
</div>
<?php endforeach; ?>
</div>
</section>

<footer id="contact"><h2>StyleHub</h2><p>Fashion for every day. © 2026 StyleHub</p></footer>
</body>
</html>
