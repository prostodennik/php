<?php
$age = 32;

if ($age >= 18 && $age <= 65) {
    echo "job";
} elseif ($age > 65) {
    echo "no job";
} elseif ($age >= 1 && $age < 18) {
    echo "none";
} else {
    echo "undefined";
}