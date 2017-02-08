<?

include ('function_dz4.php');

$ini_string='
[игрушка мягкая мишка белый]
цена = '.  mt_rand(1, 10).';
количество заказано = '.  mt_rand(1, 10).';
осталось на складе = '.  mt_rand(0, 10).';
diskont = diskont'.  mt_rand(0, 2).';
    
[одежда детская куртка синяя синтепон]
цена = '.  mt_rand(1, 10).';
количество заказано = '.  mt_rand(1, 10).';
осталось на складе = '.  mt_rand(0, 10).';
diskont = diskont'.  mt_rand(0, 2).';
    
[игрушка детская велосипед]
цена = '.  mt_rand(1, 10).';
количество заказано = '.  mt_rand(1, 10).';
осталось на складе = '.  mt_rand(0, 10).';
diskont = diskont'.  mt_rand(0, 2).';

';
$bd=  parse_ini_string($ini_string, true);
//var_dump($bd);

$bd_items = array_keys($bd);
$bd_item1 = array_slice($bd['игрушка мягкая мишка белый'], '0', '4', true);
$bd_item2 = array_slice($bd['одежда детская куртка синяя синтепон'], '0', '4', true);
$bd_item3 = array_slice($bd['игрушка детская велосипед'], '0', '4', true);

echo "<h2>Корзина</h2>";
notice($bd_items);


echo "<h3>Ваш заказ:</h3>";
echo "<table border= \"1 px\" cellpadding= \"10px\"><tr><th>Наименование</th><th>Цена</th><th>Количество заказано</th><th>Остаток</th><th>Дисконт</th>";
echo "<tr><td>".$bd_items[0]."</td><td>".$bd_item1['цена']." руб</td><td>".$bd_item1['количество заказано']."</td><td>".$bd_item1['осталось на складе']."</td><td>".$bd_item1['diskont']."</td>";
echo "<tr><td>".$bd_items[1]."</td><td>".$bd_item2['цена']." руб</td><td>".$bd_item2['количество заказано']."</td><td>".$bd_item2['осталось на складе']."</td><td>".$bd_item2['diskont']."</td>";
echo "<tr><td>".$bd_items[2]."</td><td>".$bd_item3['цена']." руб</td><td>".$bd_item3['количество заказано']."</td><td>".$bd_item3['осталось на складе']."</td><td>".$bd_item3['diskont']."</td></table>";

sale();

$discont_func = $bd['игрушка мягкая мишка белый']['diskont'];
$discont_func('игрушка мягкая мишка белый');
$discont_func = $bd['одежда детская куртка синяя синтепон']['diskont'];
$discont_func('одежда детская куртка синяя синтепон');
$discont_func = $bd['игрушка детская велосипед']['diskont'];
$discont_func('игрушка детская велосипед');

//if ($bd_item1['diskont'] == 'diskont2' || $bd_item2['diskont'] == 'diskont2' || $bd_item3['diskont'] == 'diskont2'){
//    diskont2($bd_items);
//}
//if ($bd_item1['diskont'] == 'diskont1' || $bd_item2['diskont'] == 'diskont1' || $bd_item3['diskont'] == 'diskont1'){
//    diskont1 ($bd_items);
//}
//if ($bd_item1['diskont'] == 'diskont0' || $bd_item2['diskont'] == 'diskont0' || $bd_item3['diskont'] == 'diskont0'){
//    diskont0($bd_items);
//}

echo "<h3>Итого:</h3>";
itogo($bd_item1,$bd_item2,$bd_item3);











?>


