<?php

include "../variables/variabelen.php";
$dag = 'zondag';

switch ($dag) {
    case 'maandag': echo 'Een schooldag'; break;
    case 'dinsdag': echo 'Een schooldag'; break;

    // TODO:
    // Maak de switch af door de andere dagen ook in te vullen
    // Laat de waarde van de variabele dag eens met een hoofdletter beginnen, wat krijg je voor uitkomst en waarom.

    default: echo 'Deze dag ken ik niet';
}
