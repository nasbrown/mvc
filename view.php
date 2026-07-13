<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC Practice</title>
</head>
<body>
    <?php foreach($products as $product): ?>
        <h1><?= htmlspecialchars($product['name']) ?></h1>
        <p><?= htmlspecialchars($product['description']) ?></p>
    <?php endforeach; ?>
</body>
</html>