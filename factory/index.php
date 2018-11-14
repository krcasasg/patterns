<?php
include 'Factory.php';
include 'TypeA.php';
include 'TypeB.php';

$instanceA = Factory::create('TypeA', 'A');
$instanceB = Factory::create('TypeB', 'B');

echo 'instance of $instanceA: ' . $instanceA->getType() . '<br>';
echo 'instance of $instanceB: ' . $instanceB->getType() . '<br>';
