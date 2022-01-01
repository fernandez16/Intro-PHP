<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['input-name'];
    if (empty($name)) {
        echo "<p>Please enter a country's name</p>";
        return;
    } else {
        echo "<p>" . $name . "</p>";
    }
    if (isset($_POST['prefered-length'])) {
        $length = $_POST['prefered-length'];
        echo "<p>Prefered length: " . $length . "</p>";
    } else {
        echo "<p>Prefered length: Any";
    }
    $season = $_POST['prefered-season'];
    if (empty($season)) {
        echo "<p>Prefered season: Any";
    } else {
        echo "<p>Prefered season: " . $season . "</p>";
    }
}
