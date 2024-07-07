<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan Gaji</title>
    <link rel="stylesheet" href="style.css">
   
</head>
<body>
    <div class="container">
        <h1>Perhitungan Gaji</h1>
        <?php
            $gaji = 1000000;
            $tapera = 0.03; // 3% TAPERA
            $tapera_deduction = $gaji * $tapera;
            $thp = $gaji - $tapera_deduction;

            echo "<p>Gaji sebelum TAPERA = RP. " . number_format($gaji, 0, ',', '.') . "</p>";
            echo "<p>TAPERA = RP. " . number_format($tapera_deduction, 0, ',', '.') . " (3%)</p>";
            echo "<p>Gaji yang dibawa pulang = RP. " . number_format($thp, 0, ',', '.') . "</p>";
        ?>
    </div>
</body>
</html>
