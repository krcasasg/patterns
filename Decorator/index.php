<?php
include_once 'Decorator.php';
include_once 'SomeObject.php';

$b = new SomeObject('foo', 5);
$d = new Decorator($b);

$d->getFirstX();
echo '<br>++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++<br>';
$d->getFirstY();
echo '<br>++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++<br>';
