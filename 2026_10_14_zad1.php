<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primjer 1</title>
</head>

<body>
    <p>Master</p>

    <?php
    $n = 3;
    $i = 0;
    while ($i < $n) {
        $k = ($i + 1) . ".]";
        echo "<p> " . ($i + 1) . ".) Master </p>";
        echo "<p> $k Master </p>";
        $i++;
    }

    ?>
    <p>Drugi nacin</p>
    <?php
    for ($i = 0; $i < $n; $i++) {




    ?>

        <p><?php echo ($i+1); ?>.)Blaster</p>

    <?php
    }
    ?>

</body>

</html>