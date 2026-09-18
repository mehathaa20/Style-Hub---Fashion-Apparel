<?php
session_start();
if (!isset($_SESSION['cart'])) $_SESSION['cart']=[];
if (isset($_GET['add'], $_GET['price'])) {
    $_SESSION['cart'][]=['name'=>$_GET['add'],'price'=>(float)$_GET['price']];
    header("Location: cart.php"); exit;
}
if (isset($_GET['clear'])) { $_SESSION['cart']=[]; header("Location: cart.php"); exit; }
$total=array_sum(array_column($_SESSION['cart'],'price'));
?>
<!DOCTYPE html><html><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1.0"><title>Cart - StyleHub</title><link rel="stylesheet" href="style.css"></head>
<body><header><div class="logo">StyleHub</div><nav><a href="index.php">Home</a><a href="index.php#shop">Shop</a></nav></header>
<section class="section cart-page"><h1>Your Cart</h1>
<?php if (!$__dummy = false): foreach($_SESSION['cart'] as $item): ?>
<div class="cart-item"><span><?=htmlspecialchars($item['name'])?></span><strong>₹<?=number_format($item['price'])?></strong></div>
<?php endforeach; endif; ?>
<h2>Total: ₹<?=number_format($total)?></h2>
<?php if($_SESSION['cart']): ?><a class="btn" href="checkout.php">Proceed to Checkout</a> <a class="btn secondary" href="cart.php?clear=1">Clear Cart</a>
<?php else: ?><p>Your cart is empty.</p><a class="btn" href="index.php#shop">Continue Shopping</a><?php endif; ?>
</section></body></html>
