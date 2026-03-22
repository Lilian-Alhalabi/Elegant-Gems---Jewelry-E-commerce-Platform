<?php
include 'db.php';

$message_sent = false;
$error_msg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $msg = $conn->real_escape_string($_POST['message']);

    $sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$msg')";
    
    if ($conn->query($sql) === TRUE) {
        $message_sent = true;
    } else {
        $error_msg = "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us - Elegant Gems</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
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

<main style="text-align: center; padding: 50px;">
    <?php if ($message_sent): ?>
    <div style="max-width: 600px; margin: 40px auto; background: #fffdf5; border: 2px solid #D4AF37; padding: 40px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); text-align: center;">
        
        <div style="font-size: 4.5rem; color: #D4AF37; margin-bottom: 20px;">
            <i class="fa-solid fa-envelope-circle-check"></i>
        </div>

        <h2 style="color: #043927; font-size: 2em; font-family: 'Playfair Display', serif; margin-bottom: 15px;">
            Message Received!
        </h2>
        
        <p style="font-size: 1.15em; color: #4a5568; line-height: 1.8; margin-bottom: 25px;">
            Thank you, <span style="color: #cd7f32; font-weight: bold;"><?php echo htmlspecialchars($name); ?></span>. <br>
            We appreciate you reaching out to <strong>Elegant Gems</strong>. Our team will review your inquiry and get back to you shortly.
        </p>

        <div style="width: 60px; height: 2px; background: #D4AF37; margin: 20px auto;"></div>

        <a href="index.html" style="display: inline-block; background: #043927; color: #fffdf5; padding: 14px 30px; text-decoration: none; border-radius: 8px; font-weight: bold; text-transform: uppercase; letter-spacing: 1px; transition: 0.3s;">
            Return to Home
        </a>
    </div>

<?php elseif (!empty($error_msg)): ?>
    <div style="max-width: 600px; margin: 40px auto; background: #fffcfc; border: 2px solid #cd7f32; padding: 40px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); text-align: center;">
        
        <div style="font-size: 4.5rem; color: #cd7f32; margin-bottom: 20px;">
            <i class="fa-solid fa-triangle-exclamation"></i>
        </div>

        <h2 style="color: #043927; font-size: 1.8em; font-family: 'Playfair Display', serif; margin-bottom: 15px;">
            Oops! Something went wrong.
        </h2>
        
        <p style="color: #718096; font-size: 1.1em; line-height: 1.6; margin-bottom: 25px;">
            <?php echo $error_msg; ?>
        </p>

        <a href="contact.html" style="display: inline-block; background: transparent; color: #cd7f32; padding: 12px 30px; text-decoration: none; border: 2px solid #cd7f32; border-radius: 8px; font-weight: bold; transition: 0.3s;">
             Try Again
        </a>
    </div>

<?php else: ?>
    <div style="text-align: center; padding: 50px; color: #7f8c8d;">
        <i class="fa-solid fa-paper-plane" style="font-size: 2rem; margin-bottom: 15px; color: #D4AF37;"></i>
        <p>No message submitted. <a href="contact.html" style="color: #cd7f32; font-weight: bold; text-decoration: none;">Go to Contact Page</a></p>
    </div>
<?php endif; ?>
</main>

<footer>
    <p>&copy; 2026 Elegant Gems Luxury Store. All rights reserved.</p>
</footer>

</body>
</html>
