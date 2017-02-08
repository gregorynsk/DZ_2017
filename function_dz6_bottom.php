<?php

//unset($_SESSION['ads']);

//var_dump($_POST);
//
//$_SESSION['ads'][] = $_POST;

//var_dump($_SESSION['ads']);

//Add_ads
if (!empty($_POST['seller_name']) && !empty($_POST['price']) && !empty($_POST['title'])){
    $_SESSION['ads'][] = $_POST;
               
} elseif (empty($_GET)){
    echo "<br><span style=\"color: green;\"><b>Обязательные для ввода поля: Название объявления, Цена, Ваше имя</b></span><br><br>";    
}

//Delete
if (isset($_GET['del'])){
    unset($_SESSION['ads'][$_GET['del']]);
    exit("<meta http-equiv='refresh' content='0; url= $_SERVER[PHP_SELF]'>");
}

//Ads_table
echo "<table border= \"1 px\" cellpadding= \"10px\"><tr><th>Номер объявления</th><th>Название объявления</th><th>Цена</th><th>Имя</th><th>Удалить</th></tr>";

foreach ($_SESSION['ads'] as $ad_number => $ad) {
            echo  "<tr><td>".($ad_number +1)."</td>";
            echo "<td><a href=\"?list=".$ad_number."\">".$ad['title']."</a></td>";            
            echo "<td>".$ad['price']."</td>";
            echo "<td>".$ad['seller_name']."</td>";
            echo "<td><a href = \"?del=".$ad_number."\">удалить</a></td></tr>";
}
echo "</table>";
?>

