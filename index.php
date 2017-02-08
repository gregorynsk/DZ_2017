<?
error_reporting(E_ERROR|E_WARNING|E_PARSE|E_NOTICE);
ini_set('display_errors',1);

$colors = array('red', 'green', 'blue', 'yellow','white');
print_r($colors);
foreach ($colors as $key => &$value) {
    $value = $value .':yes';
    echo "Значение элемента массива является $value. ($key) <br> ";
    
}

print_r($colors);