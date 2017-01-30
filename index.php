<?
error_reporting(E_ERROR|E_WARNING|E_PARSE|E_NOTICE);
ini_set('display_errors',1);

$test='anton';

function test_ok (&$par,$gender='man'){
   $par = $par.' 28 '.$gender; 
   return $par.'<br>';
}

echo test_ok ($test);

echo $test;