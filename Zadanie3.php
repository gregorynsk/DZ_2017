<?

$date = array((mktime(rand(0, 24), rand(0, 60), rand(0, 60), rand(1, 12), rand(0, 31), rand(1970, 2017))),
    (mktime(rand(0, 24), rand(0, 60), rand(0, 60), rand(1, 12), rand(0, 31), rand(1970, 2017))),
    (mktime(rand(0, 24), rand(0, 60), rand(0, 60), rand(1, 12), rand(0, 31), rand(1970, 2017))),
    (mktime(rand(0, 24), rand(0, 60), rand(0, 60), rand(1, 12), rand(0, 31), rand(1970, 2017))),
    (mktime(rand(0, 24), rand(0, 60), rand(0, 60), rand(1, 12), rand(0, 31), rand(1970, 2017))));

echo date('l d.m.Y H:i:s', $date[0])."<br>";
echo date('l d.m.Y H:i:s', $date[1])."<br>";
echo date('l d.m.Y H:i:s', $date[2])."<br>";
echo date('l d.m.Y H:i:s', $date[3])."<br>";
echo date('l d.m.Y H:i:s', $date[4])."<br>";

echo "<br>";
echo "<br>";

echo "Min day ".min(date('d', $date[0]),date('d', $date[1]),date('d', $date[2]),date('d', $date[3]),date('d', $date[4])).
        " i max month ".max(date('m', $date[0]),date('m', $date[1]),date('m', $date[2]),date('m', $date[3]),date('m', $date[4]))."<br>";

sort($date);

print_r($date);

echo "<br>";
echo "<br>";

$selected = array_pop($date);

echo $selected;

echo "<br>";
echo "<br>";

echo date('l d.m.Y H:i:s', $selected);

echo "<br>";
echo "<br>";

date_default_timezone_set('America/New_York');

echo date('l d.m.Y H:i:s', $selected);





?>



