<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

include 'db.php';

$sql = "SELECT * FROM orders ORDER BY id DESC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - Elegant Gems</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Elegant Gems - Dashboard</h1>
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
    <h2>Customer Orders</h2>
    
    <?php if ($result && $result->num_rows > 0): ?>
        <table border="1" style="width:100%; border-collapse: collapse; text-align: center; margin-top: 20px;">
            <tr style="background:#f2f2f2;">
                <th>ID</th>
                <th>Customer</th>
                <th>Product</th>
                <th>Qty</th>
                <th>Address</th>
            </tr>
            <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo htmlspecialchars($row['name']); ?></td>
                    <td><?php echo htmlspecialchars($row['product']); ?></td>
                    <td><?php echo $row['quantity']; ?></td>
                    <td><?php echo htmlspecialchars($row['address']); ?></td>
                </tr>
            <?php endwhile; ?>
        </table>
    <?php else: ?>
        <p style="text-align:center; color:red; padding: 20px; border: 1px dashed red; margin-top: 20px;">
            لا توجد طلبات سابقة (No previous orders found)
        </p>
    <?php endif; ?>

    <?php 
    // إغلاق الاتصال
    $conn->close(); 
    ?>
</main>

<footer>
    <p>&copy; 2026 Elegant Gems Luxury Store. All rights reserved.</p>
</footer>
</body>
</html>
