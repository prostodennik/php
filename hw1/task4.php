<?php

$day = (int) $_GET['day'];

switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo "job day";
        break;
    case 6:
    case 7:
        echo "chill";
        break;
    default:
        echo "none day";
}