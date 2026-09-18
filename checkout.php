<?php
session_start();
if(empty($_SESSION['cart'])) { header("Location: index.php"); exit; }
$total=array_sum(array_column($_SESSION['cart'],'price'));
if($_SERVER['REQUEST_METHOD']==='POST'){
 $name=trim($_POST['name']??''); $email=trim($_POST['email']??'');
 if($name && filter_var($email,FILTER_VALIDATE_EMAIL)){
   $_SESSION['cart']=[]; $success=true;
 }
}
?>
<!DOCTYPE html><html><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1.0"><title>Checkout - StyleHub</title><link rel="stylesheet" href="style.css"></head>
<body><header><div class="logo">StyleHub</div><nav><a href="index.php">Home</a><a href="cart.php">Cart</a></nav></header>
<section class="section checkout"><h1>Checkout</h1>
<?php if(!empty($success)): ?><div class="success">Order placed successfully! Thank you for shopping with StyleHub.</div><a class="btn" href="index.php">Back to Home</a>
<?php else: ?><p>Order Total: <strong>₹<?=number_format($total)?></strong></p>
<form method="post"><input name="name" placeholder="Full Name" required><input type="email" name="email" placeholder="Email Address" required><input name="address" placeholder="Delivery Address" required><select name="payment"><option>Cash on Delivery</option><option>UPI</option><option>Card</option></select><button class="btn" type="submit">Place Order</button></form><?php endif; ?>
</section></body></html>
