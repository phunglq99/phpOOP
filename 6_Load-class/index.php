<?php
    spl_autoload_register('myAutoloader');


    function myAutoloader($className) {
        $path= "classes";
        $extension = ".classes.php";
        $fullPath = $path . $className . $extension;

        include_once($fullPath);
    }
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