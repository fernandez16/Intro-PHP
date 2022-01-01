<?php
function addUser($user)
{
    echo "<tr>";
    foreach ($user as $key => $value) {
        echo "<td>" . $value . "</td>";
    }
    echo "</tr>";
}
