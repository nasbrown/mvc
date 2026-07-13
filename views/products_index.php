<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC Practice</title>
</head>
<body>
    <?php foreach($products as $merch): ?>
        <h1><?= htmlspecialchars($merch['name']) ?></h1>
        <p><?= htmlspecialchars($merch['description']) ?></p>
    <?php endforeach; ?>
</body>
</html>