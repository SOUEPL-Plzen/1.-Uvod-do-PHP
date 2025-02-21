<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include "../../components/header.php"?>
    <?php 
        $name = "Petr"; // $ - Pravý alt + ů
        $text = "Uživatel";
    ?>
    <h1>Náš první projekt v PHP</h1>

    <p>Zde je jméno účastníka zájezdu: <?php echo "$name Breit";?>
    </p>

    <a href="page.php">Další stránka</a>

    <?php echo "<h3> Proměnná: $name </h3>" ?>

    <?php 
        $i = 1;

        while($i <= 6){
            echo "<h3> $text $i </h3>";
            $i++;
        }

        for ($j = 0; $j <= 10; $j++) {
            echo "The number is: $j <br>";
          }
    ?>

</body>
</html>