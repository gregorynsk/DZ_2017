<?php

function itogo ($bd_item1, $bd_item2, $bd_item3){
    static $items = 0;
    echo "<table border= \"1 px\" cellpadding= \"10px\"><tr><th>Всего наменований</th><th>Количесво</th><th>Сумма</th><tr>";
    if ($bd_item1['осталось на складе']>0){
        $items+= 1;
    }if ($bd_item2['осталось на складе']>0){
        $items+= 1;  
    }if ($bd_item3['осталось на складе']>0){
        $items+= 1; 
    }
    if ($items > 0){
        echo "<tr><td>".$items." шт.</td>";    
        echo "<td>".($bd_item1['количество заказано']+$bd_item2['количество заказано']+$bd_item3['количество заказано'])." шт.</td>";
        $summ1 = ($bd_item1['цена']*$bd_item1['количество заказано']);
        $summ1 -= $summ1*$bd_item1['skidka'];
        $summ2 = ($bd_item2['цена']*$bd_item2['количество заказано']);
        $summ2 -= $summ2*$bd_item2['skidka'];
        $summ3 = ($bd_item3['цена']*$bd_item3['количество заказано']);
        $summ3 -= $summ3*$bd_item3['skidka'];
        echo "<td>".($summ1+$summ2+$summ3)." руб.</td></tr></table>";
    }
    }
    
function notice ($bd_items){
    global $bd_item1;
    global $bd_item2;
    global $bd_item3;
    if ($bd_item1['количество заказано']>$bd_item1['осталось на складе']){
        echo "<br><b>Внимание! </b>На складе недостаточно товара <b>".$bd_items[0]."</b>";
        echo "<br>Вы заказали ".$bd_item1['количество заказано']." шт., а на складе есть только ".$bd_item1['осталось на складе']." шт.!<br>";
        echo "Количество в заказе приведено к остатку на складе!<br>";
        $bd_item1['количество заказано'] = $bd_item1['осталось на складе'];
    }if ($bd_item2['количество заказано']>$bd_item2['осталось на складе']){
        echo "<br><b>Внимание! </b>На складе недостаточно товара <b>".$bd_items[1]."</b>";
        echo "<br>Вы заказали ".$bd_item2['количество заказано']." шт., а на складе есть только ".$bd_item2['осталось на складе']." шт.!<br>";
        echo "Количество в заказе приведено к остатку на складе!<br>";
        $bd_item2['количество заказано'] = $bd_item2['осталось на складе'];
    }if ($bd_item3['количество заказано']>$bd_item3['осталось на складе']){
        echo "<br><b>Внимание! </b>На складе недостаточно товара <b>".$bd_items[2]."</b>";
        echo "<br>Вы заказали ".$bd_item3['количество заказано']." шт., а на складе есть только ".$bd_item3['осталось на складе']." шт.!<br>";
        echo "Количество в заказе приведено к остатку на складе!<br>";
        $bd_item3['количество заказано'] = $bd_item3['осталось на складе'];
    }  
}

function sale (){
    global $bd_item3;
    if ($bd_item3['количество заказано'] >= 3 && $bd_item3['осталось на складе'] >= 3){
        $bd_item3['цена']-= $bd_item3['цена']*0.3;
        echo "<h3>Акция</h3> За заказ 3-х и более шт. <b>игрушка детская велосипед</b> вам предоставляется скидка 30%! "
        . "Цена за единицу товара составит <b>".$bd_item3['цена']." руб.</b>";
    }
    return $bd_item3;
}

function diskont1 ($product){
    global $bd_item1;
    global $bd_item2;
    global $bd_item3;
    switch($product){
        case 'игрушка мягкая мишка белый':
            $bd_item1['skidka'] = 0.1;
            echo "<br>Скидка на товар ".$product." 10%";
        break;
        case 'одежда детская куртка синяя синтепон':
            $bd_item2['skidka'] = 0.1;
            echo "<br>Скидка на товар ".$product." 10%";
        break;
        case 'игрушка детская велосипед':
            $bd_item3['skidka'] = 0.1;
            echo "<br>Скидка на товар ".$product." 10%";
        break;
    }
}

function diskont2 ($product){
    global $bd_item1;
    global $bd_item2;
    global $bd_item3;
    switch($product){
        case 'игрушка мягкая мишка белый':
            $bd_item1['skidka'] = 0.2;
            echo "<br>Скидка на товар ".$product." 20%";
        break;
        case 'одежда детская куртка синяя синтепон':
            $bd_item2['skidka'] = 0.2;
            echo "<br>Скидка на товар ".$product." 20%";
        break;
        case 'игрушка детская велосипед':
            $bd_item3['skidka'] = 0.2;
            echo "<br>Скидка на товар ".$product." 20%";
        break;
    }
}

function diskont0 ($product){
    global $bd_item1;
    global $bd_item2;
    global $bd_item3;
    switch($product){
        case 'игрушка мягкая мишка белый':
            $bd_item1['skidka'] = 0;
            echo "<br>Скидок на товар ".$product." нет"; 
        break;
        case 'одежда детская куртка синяя синтепон':
            $bd_item2['skidka'] = 0;
            echo "<br>Скидок на товар ".$product." нет"; 
        break;
        case 'игрушка детская велосипед':
            $bd_item3['skidka'] = 0;
            echo "<br>Скидок на товар ".$product." нет";
        break;
    }
}

//function diskont2 ($bd_items){
//    global $bd_item1;
//    global $bd_item2;
//    global $bd_item3;
//    if ($bd_item1['diskont'] == 'diskont2'){
//        $bd_item1['skidka'] = 0.2; 
//        echo "<br>Скидка на товар ".$bd_items[0]." 20% или ".$bd_item1['skidka'];
//    }if ($bd_item2['diskont'] == 'diskont2'){
//        $bd_item2['skidka'] = 0.2; 
//        echo "<br>Скидка на товар ".$bd_items[1]." 20% или ".$bd_item2['skidka'];
//    }if ($bd_item3['diskont'] == 'diskont2'){
//        $bd_item3['skidka'] = 0.2;   
//        echo "<br>Скидка на товар ".$bd_items[2]." 20% или ".$bd_item3['skidka'];
//    }
//}
//
//function diskont0 ($bd_items){
//    global $bd_item1;
//    global $bd_item2;
//    global $bd_item3;
//    if ($bd_item1['diskont'] == 'diskont0'){
//        $bd_item1['skidka'] = 0;
//        echo "<br>Скидок на товар ".$bd_items[0]." нет";   
//    }if ($bd_item2['diskont'] == 'diskont0'){
//        $bd_item2['skidka'] = 0;
//        echo "<br>Скидок на товар ".$bd_items[1]." нет";   
//    }if ($bd_item3['diskont'] == 'diskont0'){
//        $bd_item3['skidka'] = 0;
//        echo "<br>Скидок на товар ".$bd_items[2]." нет";  
//    }
//}


//function discont_item3 ($bd_item3,$bd_items){
//    if ($bd_item3['diskont'] == 'diskont2'){
//        $d3 = array_pop($bd_item3);
//        $d3();
//    }elseif ($bd_item3['diskont'] == 'diskont1'){
//        $d3 = array_pop($bd_item3);
//        $d3();
//    }else{
//        echo "<br>Скидок на товар ".$bd_items[2]." нет";        
//    }
//}
//function discont1 (){
//    global $bd_item1;
//    switch ($bd_item1['diskont']) {
//        case 'diskont1':
//            return $bd_item1['skidka'] = 0.1;
//            break;
//        case 'diskont2':
//            return $bd_item1['skidka']= 0.2;
//            break;
//        default:
//            break;
//    }
//    
//}
//
//function discont2 (){
//    global $bd_item2;
//    switch ($bd_item2['diskont']) {
//        case 'diskont1':
//            return $bd_item2['skidka'] = 0.1;
//            break;
//        case 'diskont2':
//            return $bd_item2['skidka']= 0.2;
//            break;
//        default:
//            break;
//    }
//    
//}
//
//function discont3 (){
//    global $bd_item3;
//    switch ($bd_item3['diskont']) {
//        case 'diskont1':
//            return $bd_item3['skidka'] = 0.1;
//            break;
//        case 'diskont2':
//            return $bd_item3['skidka']= 0.2;
//            break;
//        default:
//            break;
//    }
//    
//}


?>