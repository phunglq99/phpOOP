<?php
    include('includes/person.inc.php')
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
        $person1 = new Person();
        $person1->setName('Daniel');
        echo $person1->name;

        $person2 = new Person();
        $person2->setName('John');
        echo $person2->name;

    ?>
</body>
</html>