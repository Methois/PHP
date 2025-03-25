<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekenen met Variabelen</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    
    <?php
    // Variabelen definiëren
    $getal1 = 8;
    $getal2 = 4;

    // Berekeningen
    $som = $getal1 + $getal2;
    $verschil = $getal1 - $getal2;
    $product = $getal1 * $getal2;
    $quotient = $getal1 / $getal2;
    ?>

    <h2>Wiskundige Berekeningen</h2>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Berekening</th>
                <th>Resultaat</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo "$getal1 + $getal2"; ?></td>
                <td><?php echo $som; ?></td>
            </tr>
            <tr>
                <td><?php echo "$getal1 - $getal2"; ?></td>
                <td><?php echo $verschil; ?></td>
            </tr>
            <tr>
                <td><?php echo "$getal1 * $getal2"; ?></td>
                <td><?php echo $product; ?></td>
            </tr>
            <tr>
                <td><?php echo "$getal1 / $getal2"; ?></td>
                <td><?php echo $quotient; ?></td>
            </tr>
        </tbody>
    </table>

    <?php
    // Extra variabelen voor oppervlakte en inhoud
    $lengte = 4;
    $breedte = 3;
    $hoogte = 5;

    $oppervlakte = $lengte * $breedte;
    $inhoud = $lengte * $breedte * $hoogte;
    ?>

    <div class="card shadow bg-light border mt-4">
        <div class="card-body">
            <h4 class="card-title">Oppervlakte en Inhoud</h4>
            <p>Lengte: <?php echo $lengte; ?> meter</p>
            <p>Breedte: <?php echo $breedte; ?> meter</p>
            <p>Hoogte: <?php echo $hoogte; ?> meter</p>
            <p>Oppervlakte: <?php echo $oppervlakte; ?> m²</p>
            <p>Inhoud: <?php echo $inhoud; ?> m³</p>
        </div>
    </div>

</body>
</html>

<?php include 'footer.php'; ?>
