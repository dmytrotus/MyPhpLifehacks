<?php

$id = 25;

$myvarNr25 = 'This is 25';

echo ${'myvarNr' . $id};

$text = 'Hello World';
$dynamicText = 'text';
echo 'The dynamic '.$dynamicText. ' is '.${$dynamicText};