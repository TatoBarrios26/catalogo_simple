<?php
$productos = [
    ["nombre" => "Camisa", "precio" => 15],
    ["nombre" => "Pantalón", "precio" => 25],
    ["nombre" => "Zapatos", "precio" => 40]
];
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Catálogo</title>
</head>
<body>
<h1>Catálogo de Productos</h1>
<div class="grid">
<?php foreach ($productos as $p): ?>
    <div class="item">
        <h2><?= $p["nombre"] ?></h2>
        <p>Precio: $<?= $p["precio"] ?></p>
    </div>
<?php endforeach; ?>
</div>
</body>
</html>