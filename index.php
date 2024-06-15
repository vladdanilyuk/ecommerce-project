<?php
include 'db.php';

$products = $db->query("SELECT * FROM products")->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Onepage E-commerce</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<div class="container">
    <div class="header">
        <h1>Product Store</h1>
        <p>The best products at the best prices!</p>
    </div>

    <div class="product-grid">
        <?php foreach ($products as $product): ?>
            <div class="product-card">
                <img src="images/<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>">
                <h2><?php echo htmlspecialchars($product['name']); ?></h2>
                <p><?php echo htmlspecialchars($product['price']); ?> €</p>
                <button onclick="showDetails(<?php echo $product['id']; ?>)">Details</button>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<div id="productModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <div id="modal-details"></div>
    </div>
</div>

<script src="js/scripts.js"></script>
</body>
</html>
