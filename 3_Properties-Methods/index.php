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
        $person1 = new Person('Daniel', 'Blue', 18);
        $person1->setName('John');
        echo $person1->getName();
    ?>
</body>
</html>