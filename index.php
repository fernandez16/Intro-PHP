<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intro to PHP</title>
</head>

<body>
    <?php
    $countryList = array("Jordan", "Germany", "Vietnam", "Ecuador", "Canada", "Australia", "Ethiopia");
    echo "<ul>";
    foreach ($countryList as $countryName) {
        echo "<li>" . $countryName . "</li>";
    }
    echo "</ul>";
    ?>
</body>

</html>