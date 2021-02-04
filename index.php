<?php
include_once 'Stack.php';

$myList=new Stack();

$myList->push('kamen rider');
$myList->push('super sentai');
$myList->push('cardfight vanguard');
$myList->push('yugioh');
$myList->push('neos');

echo $myList->peek();
echo $myList->peek();
echo $myList->peek();

$myList->push('hello');
$myList->push('bye');

echo $myList->isEmpty();

echo $myList->pop();
echo $myList->pop();
echo $myList->pop();
echo $myList->pop();

echo $myList->isEmpty();
//echo $myList->isEmpty();
/*echo $myList->top();*/
