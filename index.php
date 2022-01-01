<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intro to PHP</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

    <h1>Intro to PHP</h1>

    <h2>Countries I'd like to visit:</h2>

    <?php require __DIR__ . '/inc/CountryList.php'; ?>

    <h2>Add a country you'd like to visit:</h2>

    <?php
    require __DIR__ . '/inc/CountryForm.php';
    ?>

    <?php
    require __DIR__ . '/inc/CountryFormPost.php';
    ?>

    <h2>Traveler data:</h2>

    <table id="traveler-table">
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Nationality</th>
        </tr>

        <?php
        require __DIR__ . '/inc/AddUser.php';

        $samRay = array(
            "Name"  => "Sam",
            "Age" => "23",
            "Nationality" => "American",
        );

        addUser($samRay);
        ?>

    </table>

    <h2>Foreign Films:</h2>

    <?php
    require __DIR__ . '/inc/Movie.php';

    require __DIR__ . '/inc/MovieCardsGen.php';

    $sacrifice = new Movie("Offret", "Sweden, United Kingdom, France", "1986", "Andrei Tarkovsky");

    $roma = new Movie("Roma", "Mexico", "2018", "Alfonso Cuarón");

    $theSeventhSeal = new Movie("The Seventh Seal", "Sweden", "1958", "Ingmar Bergman");

    $movies = array($sacrifice, $roma, $theSeventhSeal);

    createMovieCards($movies);

    ?>

</body>

</html>