<?php
session_start();
if(isset($_POST['add_to_cart'])){
    $item = [
        'name' => $_POST['p_name'],
        'price' => $_POST['p_price'],
        'img' => $_POST['p_img'],
        'qty' => $_POST['p_qty']
    ];
    $_SESSION['cart'][] = $item;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Your Cart - Elegant Gems</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Elegant Gems</h1>
    <nav><ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="product.php">Collection</a></li>
        <li><a href="contact.html">Contact Us</a></li>
        <li><a href="cart.php">Cart</a></li>
        <li><a href="admin.php">Dashboard</a></li>
    </ul></nav>
</header>

<main>
    <h2>Shopping Cart</h2>
    <table border="1" style="width:100%; text-align:center; border-collapse:collapse;">
        <tr>
            <th>Image</th><th>Product</th><th>Price</th><th>Qty</th><th>Subtotal</th>
        </tr>
        <?php
        $total = 0;
        if(!empty($_SESSION['cart'])){
            foreach($_SESSION['cart'] as $product){
                $subtotal = $product['price'] * $product['qty'];
                $total += $subtotal;
                echo "<tr>
                    <td><img src='".$product['img']."' width='50'></td>
                    <td>".$product['name']."</td>
                    <td>$".$product['price']."</td>
                    <td>".$product['qty']."</td>
                    <td>$".$subtotal."</td>
                </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>Cart is empty</td></tr>";
        }
        ?>
        <tr><td colspan="4"><strong>Total</strong></td><td><strong>$<?php echo $total; ?></strong></td></tr>
    </table>

    <?php if(!empty($_SESSION['cart'])): ?>
    <form action="orders.php" method="post" style="margin-top:20px;">
        <h3>Checkout Details</h3>
        <input type="text" name="name" placeholder="Your Name" required><br><br>
        <input type="email" name="email" placeholder="Your Email" required><br><br>
        <textarea name="address" placeholder="Shipping Address" required></textarea><br><br>
        <button type="submit" name="submit_order">Submit Order</button>
    </form>
    <?php endif; ?>
</main>
</body>
</html>
