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

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div>
            <label for="input-name">
                Country: <input type="text" id="input-name" name="input-name">
            </label>
        </div>

        <div>
            <label for="input-length">length of your trip:</label>
            <div>
                <label for="input-length">
                    <input type="radio" id="input-length" name="prefered-length" value="Up to a week"> Up to a week
                </label>

                <label for="input-length">
                    <input type="radio" id="input-length" name="prefered-length" value="Up to two weeks"> Up to 2 weeks
                </label>

                <label for="input-length">
                    <input type="radio" id="input-length" name="prefered-length" value="Up to a month"> Up to a month
                </label>

                <label for="input-length">
                    <input type="radio" id="input-length" name="prefered-length" value="Longer than a month"> Longer than a month
                </label>
            </div>
        </div>

        <div>
            <label for="input-season">
            Season of your trip: <select id="input-season" name="prefered-season">
                <option value="Winter">Winter</option>
                <option value="Spring">Spring</option>
                <option value="Summer">Summer</option>
                <option value="Autumn">Autumn</option>
                <option value="Any" selected>Any</option>
            </select>
            </label>
        </div>

        <div>
            <input type="submit" value="Submit">
        </div>
    </form>

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
    require __DIR__ . '/inc/MovieList.php';

    $sacrifice = new Movie("Offret", "Sweden, United Kingdom, France", "1986", "Andrei Tarkovsky");

    $roma = new Movie("Roma", "Mexico", "2018", "Alfonso Cuarón");

    $theSeventhSeal = new Movie("The Seventh Seal", "Sweden", "1958", "Ingmar Bergman");

    $movies = array($sacrifice, $roma, $theSeventhSeal);

    createMovieCards($movies);
    ?>

</body>

</html>