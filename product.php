<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collection - Elegant Gems</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>Elegant Gems</h1>
    <nav>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="product.php">Collection</a></li>
            <li><a href="contact.html">Contact Us</a></li>
            <li><a href="cart.php">Cart</a></li>
            <li><a href="admin.php">Dashboard</a></li>
        </ul>
    </nav>
</header>

<main>
    <h2>Our Complete Luxury Collection</h2>
    <div class="products">

        <div class="card">
            <img src="images/product2.png" alt="Gold Necklace" width="150">
            <h3>Classic Gold Necklace</h3>
            <p>$1,999.99</p>
            <form action="cart.php" method="post">
                <input type="hidden" name="p_name" value="Gold Necklace">
                <input type="hidden" name="p_price" value="1999.99">
                <input type="hidden" name="p_img" value="images/product2.png">
                <input type="number" name="p_qty" value="1" min="1" style="width:50px;">
                <button type="submit" name="add_to_cart">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="images/product1.png" alt="Sapphire Ring" width="150">
            <h3>Royal Sapphire Ring</h3>
            <p>$850.00</p>
            <form action="cart.php" method="post">
                <input type="hidden" name="p_name" value="Sapphire Ring">
                <input type="hidden" name="p_price" value="850.00">
                <input type="hidden" name="p_img" value="images/product1.png">
                <input type="number" name="p_qty" value="1" min="1" style="width:50px;">
                <button type="submit" name="add_to_cart">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="images/Bracelet.png" alt="Silver Bracelet" width="150">
            <h3>Sterling Silver Bracelet</h3>
            <p>$255.00</p>
            <form action="cart.php" method="post">
                <input type="hidden" name="p_name" value="Silver Bracelet">
                <input type="hidden" name="p_price" value="255.00">
                <input type="hidden" name="p_img" value="images/Bracelet.png">
                <input type="number" name="p_qty" value="1" min="1" style="width:50px;">
                <button type="submit" name="add_to_cart">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="images/diamond bracelet.png" alt="Diamond Bracelet" width="150">
            <h3>High-End Diamond Bracelet</h3>
            <p>$60,000.00</p>
            <form action="cart.php" method="post">
                <input type="hidden" name="p_name" value="Diamond Bracelet">
                <input type="hidden" name="p_price" value="60000.00">
                <input type="hidden" name="p_img" value="images/diamond bracelet.png">
                <input type="number" name="p_qty" value="1" min="1" style="width:50px;">
                <button type="submit" name="add_to_cart">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="images/diamond.png" alt="Diamond Ring" width="150">
            <h3>Solitaire Diamond Ring</h3>
            <p>$2,000.00</p>
            <form action="cart.php" method="post">
                <input type="hidden" name="p_name" value="Diamond Ring">
                <input type="hidden" name="p_price" value="2000.00">
                <input type="hidden" name="p_img" value="images/diamond.png">
                <input type="number" name="p_qty" value="1" min="1" style="width:50px;">
                <button type="submit" name="add_to_cart">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="images/Earings.png" alt="Fine Earrings" width="150">
            <h3>Diamond Chandelier Earrings</h3>
            <p>$4,800.00</p>
            <form action="cart.php" method="post">
                <input type="hidden" name="p_name" value="Chandelier Earrings">
                <input type="hidden" name="p_price" value="4800.00">
                <input type="hidden" name="p_img" value="images/Earings.png">
                <input type="number" name="p_qty" value="1" min="1" style="width:50px;">
                <button type="submit" name="add_to_cart">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="images/earings_.png" alt="Gold-plated Earrings" width="150">
            <h3>Gold-Plated Stud Earrings</h3>
            <p>$180.00</p>
            <form action="cart.php" method="post">
                <input type="hidden" name="p_name" value="Plated Earrings">
                <input type="hidden" name="p_price" value="180.00">
                <input type="hidden" name="p_img" value="images/earings_.png">
                <input type="number" name="p_qty" value="1" min="1" style="width:50px;">
                <button type="submit" name="add_to_cart">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="images/necklace.png" alt="Single Diamond Necklace" width="150">
            <h3>Single Diamond Necklace</h3>
            <p>$1,200.00</p>
            <form action="cart.php" method="post">
                <input type="hidden" name="p_name" value="Single Diamond Necklace">
                <input type="hidden" name="p_price" value="1200.00">
                <input type="hidden" name="p_img" value="images/necklace.png">
                <input type="number" name="p_qty" value="1" min="1" style="width:50px;">
                <button type="submit" name="add_to_cart">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="images/pearls .png" alt="Multi-Pearl Earrings" width="150">
            <h3>Natural Multi-Pearl Earrings</h3>
            <p>$450.00</p>
            <form action="cart.php" method="post">
                <input type="hidden" name="p_name" value="Multi-Pearl Earrings">
                <input type="hidden" name="p_price" value="450.00">
                <input type="hidden" name="p_img" value="images/pearls .png">
                <input type="number" name="p_qty" value="1" min="1" style="width:50px;">
                <button type="submit" name="add_to_cart">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="images/pearl.png" alt="Single Pearl Earring" width="150">
            <h3>Single Natural Pearl Earring</h3>
            <p>$150.00</p>
            <form action="cart.php" method="post">
                <input type="hidden" name="p_name" value="Single Pearl Earring">
                <input type="hidden" name="p_price" value="150.00">
                <input type="hidden" name="p_img" value="images/pearl.png">
                <input type="number" name="p_qty" value="1" min="1" style="width:50px;">
                <button type="submit" name="add_to_cart">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="images/product.png" alt="Emerald Necklace" width="150">
            <h3>Luxury Emerald Necklace</h3>
            <p>$3,500.00</p>
            <form action="cart.php" method="post">
                <input type="hidden" name="p_name" value="Emerald Necklace">
                <input type="hidden" name="p_price" value="3500.00">
                <input type="hidden" name="p_img" value="images/product.png">
                <input type="number" name="p_qty" value="1" min="1" style="width:50px;">
                <button type="submit" name="add_to_cart">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="images/rings.png" alt="Plated Rings Set 1" width="150">
            <h3>Trio Gold Plated Rings</h3>
            <p>$280.00</p>
            <form action="cart.php" method="post">
                <input type="hidden" name="p_name" value="Plated Rings Set 1">
                <input type="hidden" name="p_price" value="280.00">
                <input type="hidden" name="p_img" value="images/rings.png">
                <input type="number" name="p_qty" value="1" min="1" style="width:50px;">
                <button type="submit" name="add_to_cart">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="images/rings2.png" alt="Plated Rings Set 2" width="150">
            <h3>Deluxe Plated Rings Set</h3>
            <p>$310.00</p>
            <form action="cart.php" method="post">
                <input type="hidden" name="p_name" value="Plated Rings Set 2">
                <input type="hidden" name="p_price" value="310.00">
                <input type="hidden" name="p_img" value="images/rings2.png">
                <input type="number" name="p_qty" value="1" min="1" style="width:50px;">
                <button type="submit" name="add_to_cart">Add to Cart</button>
            </form>
        </div>

    </div>
</main>

<footer>
    <p>&copy; 2026 Elegant Gems | Excellence in Every Detail</p>
</footer>

</body>
</html>
