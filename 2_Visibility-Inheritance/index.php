<?php
    include("person.php")
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
        $person = new Person();
        echo $person->first;

        // $pet01 = new Pet();
        // echo $pet01->owner();
    ?>
</body>
</html>