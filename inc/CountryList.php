<?php
    $countryList = array("Jordan", "Germany", "Vietnam", "Ecuador", "Canada", "Australia", "Ethiopia");
    echo "<ul>";
    foreach ($countryList as $countryName) {
        echo "<li>" . $countryName . "</li>";
    }
    echo "</ul>";
