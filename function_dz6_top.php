<?php
function list_ads($field) {
    if (isset($_GET['list']) && $field === 'private') {
        if ($_SESSION['ads'][$_GET['list']]['private'] == 0) {
            echo "checked=\"\"";
        }
    }
    if (isset($_GET['list']) && $field == 'seller_name') {
        $list_field = $_SESSION['ads'][$_GET['list']]['seller_name'];
        echo $list_field;

    }
    if (isset($_GET['list']) && $field == 'email') {
        $list_field = $_SESSION['ads'][$_GET['list']]['email'];
        echo $list_field;

    }
    if (isset($_GET['list']) && $field == 'phone') {
        $list_field = $_SESSION['ads'][$_GET['list']]['phone'];
        echo $list_field;

    }
    if (isset($_GET['list']) && $field == 'location_id') {
        $list_field = $_SESSION['ads'][$_GET['list']]['location_id'];
        echo $list_field;

    }
    if (isset($_GET['list']) && $field == 'category_id') {
        $list_field = $_SESSION['ads'][$_GET['list']]['category_id'];
        echo $list_field;

    }
    if (isset($_GET['list']) && $field == 'title') {
        $list_field = $_SESSION['ads'][$_GET['list']]['title'];
        echo $list_field;

    }
    if (isset($_GET['list']) && $field == 'description') {
        $list_field = $_SESSION['ads'][$_GET['list']]['description'];
        echo $list_field;

    }
    if (isset($_GET['list']) && $field == 'price') {
        $list_field = $_SESSION['ads'][$_GET['list']]['price'];
        echo $list_field;

    }
}

function list_city() {
    $citys = array(
        "641780" => 'Новосибирск',
        "641490" => 'Барабинск',
        "641510" => 'Бердск',
        "641600" => 'Искитим',
        "641630" => 'Колывань',
        "641680" => 'Краснообск',
        "641710" => 'Куйбышев',
        "641760" => 'Мошково',
        "641790" => 'Обь',
        "641800" => 'Ордынское',
        "641970" => 'Черепаново',
        "1" => 'Другой город');

    if (isset($_GET['list'])) {
        $city_list = $_SESSION['ads'][$_GET['list']]['location_id'];
    }


    foreach ($citys as $city_id => $city_name) {
        if (isset($city_list) && $city_list == $city_id) {
            $city_select = "selected=\"\"";
        } else {
            $city_select = '';
        }
        echo "<option data-coords=\",,\" ".$city_select." value=\"" . $city_id . "\">" . $city_name . "</option>";
    }
}

function list_category (){

            
$cat_trans = array(
    "9" => 'Автомобили с пробегом',
    "109" => 'Новые автомобили',
    "14" => 'Мотоциклы и мототехника',
    "81" => 'Грузовики и спецтехника',
    "11" => 'Водный транспорт',
    "10" => 'Запчасти и аксессуары');
$cat_rent = array(
    "24" => 'Квартиры',
    "23" => 'Комнаты',
    "25" => 'Дома, дачи, коттеджи',
    "26" => 'Земельные участки',
    "85" => 'Гаражи и машиноместа',
    "42" => 'Коммерческая недвижимость',
    "86" => 'Недвижимость за рубежом');
$cat_work = array(
    "111" => 'Вакансии (поиск сотрудников)',
    "112" => 'Резюме (поиск работы)');
$cat_service = array(
    "114" => 'Предложения услуг',
    "115" => 'Запросы на услуги');
$cat_thing = array(
    "27" => 'Одежда, обувь, аксессуары',
    "29" => 'Детская одежда и обувь',
    "30" => 'Товары для детей и игрушки',
    "28" => 'Часы и украшения',
    "88" => 'Красота и здоровье');
$cat_home = array(
    "21" => 'Бытовая техника',
    "20" => 'Мебель и интерьер',
    "87" => 'Посуда и товары для кухни',
    "82" => 'Продукты питания',
    "19" => 'Ремонт и строительство',
    "106" => 'Растения');
$cat_tech = array(
    "32" => 'Аудио и видео',
    "97" => 'Игры, приставки и программы',
    "31" => 'Настольные компьютеры',
    "98" => 'Ноутбуки',
    "99" => 'Оргтехника и расходники',
    "96" => 'Планшеты и электронные книги',
    "84" => 'Телефоны',
    "101" => 'Товары для компьютера',
    "105" => 'Фототехника');
$cat_hobby = array(
    "33" => 'Билеты и путешествия',
    "34" => 'Велосипеды',
    "83" => 'Книги и журналы',
    "36" => 'Коллекционирование',
    "38" => 'Музыкальные инструменты',
    "102" => 'Охота и рыбалка',
    "39" => 'Спорт и отдых',
    "103" => 'Знакомства');
$cat_animal = array(
    "89" => 'Собаки',
    "90" => 'Кошки',
    "91" => 'Птицы',
    "92" => 'Аквариум',
    "93" => 'Другие животные',
    "94" => 'Товары для животных');
$cat_businass = array(
    "116" => 'Готовый бизнес',
    "40" => 'Оборудование для бизнеса');

if (isset($_GET['list'])) {
    $category_list = $_SESSION['ads'][$_GET['list']]['category_id'];
}

echo "<optgroup label=\"Транспорт\">";
foreach ($cat_trans as $category_id => $category_name) {
    if (isset($category_list) && $category_list == $category_id) {
        $category_select = "selected=\"\"";
    } else {
        $category_select = '';
    }
    echo "<option " . $category_select . " value=\"" . $category_id . "\">" . $category_name . "</option>";
}
echo "</optgroup>";
echo "<optgroup label=\"Недвижимость\">";
foreach ($cat_rent as $category_id => $category_name) {
    if (isset($category_list) && $category_list == $category_id) {
        $category_select = "selected=\"\"";
    } else {
        $category_select = '';
    }
    echo "<option " . $category_select . " value=\"" . $category_id . "\">" . $category_name . "</option>";
}
echo "</optgroup>";
echo "<optgroup label=\"Работа\">";
foreach ($cat_work as $category_id => $category_name) {
    if (isset($category_list) && $category_list == $category_id) {
        $category_select = "selected=\"\"";
    } else {
        $category_select = '';
    }
    echo "<option " . $category_select . " value=\"" . $category_id . "\">" . $category_name . "</option>";
}
echo "</optgroup>";
echo "<optgroup label=\"Услуги\">";
foreach ($cat_service as $category_id => $category_name) {
    if (isset($category_list) && $category_list == $category_id) {
        $category_select = "selected=\"\"";
    } else {
        $category_select = '';
    }
    echo "<option " . $category_select . " value=\"" . $category_id . "\">" . $category_name . "</option>";
}
echo "</optgroup>";
echo "<optgroup label=\"Личные вещи\">";
foreach ($cat_thing as $category_id => $category_name) {
    if (isset($category_list) && $category_list == $category_id) {
        $category_select = "selected=\"\"";
    } else {
        $category_select = '';
    }
    echo "<option " . $category_select . " value=\"" . $category_id . "\">" . $category_name . "</option>";
}
echo "</optgroup>";
echo "<optgroup label=\"Для дома и дачи\">";
foreach ($cat_home as $category_id => $category_name) {
    if (isset($category_list) && $category_list == $category_id) {
        $category_select = "selected=\"\"";
    } else {
        $category_select = '';
    }
    echo "<option " . $category_select . " value=\"" . $category_id . "\">" . $category_name . "</option>";
}
echo "</optgroup>";
echo "<optgroup label=\"Бытовая электроника\">";
foreach ($cat_tech as $category_id => $category_name) {
    if (isset($category_list) && $category_list == $category_id) {
        $category_select = "selected=\"\"";
    } else {
        $category_select = '';
    }
    echo "<option " . $category_select . " value=\"" . $category_id . "\">" . $category_name . "</option>";
}
echo "</optgroup>";
echo "<optgroup label=\"Хобби и отдых\">";
foreach ($cat_hobby as $category_id => $category_name) {
    if (isset($category_list) && $category_list == $category_id) {
        $category_select = "selected=\"\"";
    } else {
        $category_select = '';
    }
    echo "<option " . $category_select . " value=\"" . $category_id . "\">" . $category_name . "</option>";
}
echo "</optgroup>";
echo "<optgroup label=\"Животные\">";
foreach ($cat_animal as $category_id => $category_name) {
    if (isset($category_list) && $category_list == $category_id) {
        $category_select = "selected=\"\"";
    } else {
        $category_select = '';
    }
    echo "<option " . $category_select . " value=\"" . $category_id . "\">" . $category_name . "</option>";
}
echo "</optgroup>";
echo "<optgroup label=\"Для бизнеса\">";
foreach ($cat_businass as $category_id => $category_name) {
    if (isset($category_list) && $category_list == $category_id) {
        $category_select = "selected=\"\"";
    } else {
        $category_select = '';
    }
    echo "<option " . $category_select . " value=\"" . $category_id . "\">" . $category_name . "</option>";
}
echo "</optgroup>";

}

?>