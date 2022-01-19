<?php
include "../functions/functions.php";

task1([1,2,3,4,5,6], false);
//echo task3(2, 2);

date_default_timezone_set('Europe/Moscow');
echo date('d.m.Y H:i');
echo '<br>';
echo strtotime('24.02.2016 00:00:00.');
echo '<br>';
echo date('Y-m-d H:i:s', 1456261200);
echo '<br>';

$string = 'Шла саша по Шоссе и сосала сушку';
echo str_replace('Ш', 'ш', $string);
echo '<br>';

file_put_contents('test.txt', 'Hello world, Hello world, Hello world');
my_file('test.txt');
