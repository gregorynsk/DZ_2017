<?
// Zad1

$name = 'Greg';
$age = 28;

echo "Меня зовут ".$name."<br>"; 
echo "Мне ".$age." лет";
unset($name,$age);

//Zad2
echo '<br>';

define('CITY', 'Novosibirsk');
if (CITY) {
    echo 'da';
}

echo '<br>';
print_r(CITY);

define('CITY', 'Omsk');

//Zad3
echo '<br>';

$book = array('title'=>'Букварь','author'=>'Unknow','pages'=>50);

echo "Недавно я прочитал книгу ".$book['title'].", написанную автором ".$book['author'].
        ", я осилил все ".$book['pages']." страниц, мне она очень понравилась";


//Zad4
echo '<br><br><br>';

$book1 = array ('title'=>'Букварь','author'=>'Unknow','pages'=>50);
$book2 = array ('title'=>'Синяя','author'=>'Хз','pages'=>55);

$books = array ($book1,$book2);

//var_dump($books);

echo "Недавно я прочитал книги ".$books[0]['title']." и ".$books[1]['title'].
        ", написанные соответственно авторами ".$books[0]['author']." и ".$books[1]['author'].
        ", я осилил в сумме ".($books[0]['pages'] + $books[1]['pages'])." страниц, не ожидал от себя подобного";


?>

