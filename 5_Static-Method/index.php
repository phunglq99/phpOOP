<?php
    include('includes/data.inc.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $person1 = new Data('Daniel', 'Blue', 18);
        echo Data::$drinkingAge;
        Data::setDrinkingAge(38);
        echo Data::$drinkingAge;
    ?>
</body>
</html>