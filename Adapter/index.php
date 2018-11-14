<?php
include_once 'Adapter.php';
$objectA = new Adapter('any A');
$objectB = new Adapter('any B');

$objectA->AdapterMethod('foo', 'bar', 'baz');
$objectB->AdapterMethod('bar', 'foo');
