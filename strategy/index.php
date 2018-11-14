<?php
include 'ClassA.php';
include 'ClassB.php';
include 'ClassC.php';
include 'Strategy.php';

$est = new Strategy(new ClassA());
$est->setStrategy(new ClassA());
echo 'call dosomething()<br>';
echo $est->dosomething();
$est->setStrategy(new ClassB());
echo 'call dosomething()<br>';
echo $est->dosomething();
$est->setStrategy(new ClassC());
echo 'call dosomething()<br>';
echo  $est->dosomething();
