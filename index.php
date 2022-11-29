<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kintamieji ir sąlygos, Stringai</title>
</head>
<body>
  <?php
echo "1. KINTAMIEJI IR SĄLYGOS"."<br>";
echo "<br>";

//1.1 Sukurkite 4 kintamuosius, kurie saugotų jūsų vardą, pavardę, gimimo metus ir šiuos metus (nebūtinai tikrus). Parašykite kodą, kuris pagal gimimo metus paskaičiuotų jūsų amžių ir naudodamas vardo ir pavardės kintamuosius atspausdintų tokį sakinį :
// "Aš esu Vardenis Pavardenis. Man yra XX metai(ų)".
echo "1.1 uzduotis"."<br>";

$txt1 = "Loreta";
$txt2 = "Šutinienė";
$birth = 1975;
$year = 2022;

echo "Aš esu " . $txt1 . " " . $txt2 . ". Man yra " .  $year - $birth . " metai(ų)."."<br>";

//1.2 Naudokite funkcija rand(). Sukurkite du kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 4. Didesnę reikšmę padalinkite iš mažesnės. Atspausdinkite rezultatą jį suapvalinę iki 2 skaičių po kablelio.
echo "<br>";
echo "1.2 uzduotis"."<br>";

$num1 = rand(0, 4);
$num2 = rand(0, 4);

echo $num1 . " ir " . $num2 ."<br>";

if ($num1 != 0 && $num2 != 0) {
   if ($num1 > $num2) {
     echo "pirmas is antro " .(round($num1 / $num2, 2))."<br>";
} else {
     echo "antras is pirmo  ".(round($num2 / $num1, 2))."<br>";
}
}
else {
    echo "dalyba is nulio negalima"."<br>";
}

//1.4 Įvedami skaičiai -a, b, c –kraštinių ilgiai, trys kintamieji (naudokite ​rand()​ funkcija nuo 1 iki 10). Parašykite PHP programą, kuri nustatytų, ar galima sudaryti trikampį ir atsakymą atspausdintų. 
echo "<br>";
echo "1.4 uzduotis"."<br>";

$a = rand(0, 10);
$b = rand(0, 10);
$c = rand(0, 10);

if (($a + $b > $c) && ($b + $c > $a) && ($c +$a > $b)) {
    echo "Trikampis"."<br>";
}else {
    echo "Nesigauna"."<br>";
}

echo "<br>";
echo "2. STRINGAI"."<br>";

// 2.1 Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus (Jonas Jonaitis). Atspausdinti trumpesnį stringą.
echo "<br>";
echo "2.1 uzduotis"."<br>";

$textone = "Jonas Jonaitis";
$texttwo = "Petras Petraitis";

echo strlen($textone)."<br>";
echo strlen($texttwo)."<br>";

if (strlen($textone) > strlen($texttwo)) {
    echo $texttwo."<br>";
}else {
    echo $textone."<br>";
}

// 2.2 Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Vardą atspausdinti tik didžiosiom raidėm, o pavardę tik mažosioms.
echo "<br>";
echo "2.2 uzduotis"."<br>";

$name = "Jonas";
$surname = "Petraitis";

echo strtoupper($name) . " " . strtolower($surname)."<br>";

//2.3 Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš pirmų vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.
echo "<br>";
echo "2.3 uzduotis"."<br>";

echo $all = substr($name, 0, 1) . substr($surname, 0, 1)."<br>";

//2.4 Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš trijų paskutinių vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.
echo "<br>";
echo "2.4 uzduotis"."<br>";

echo $alltwo = substr($name, -3) . substr($surname, -3)."<br>";

//2.5 Sukurti kintamąjį su stringu: “An American in Paris”. Jame visas “a” (didžiąsias ir mažąsias) pakeisti žvaigždutėm “*”.  Rezultatą atspausdinti.
echo "<br>";
echo "2.5 uzduotis"."<br>";

$film = "An American in Paris";

echo str_ireplace("a", "*", $film)."<br>";

//2.6 Sukurti kintamąjį su stringu: “An American in Paris”. Suskaičiuoti visas “a” (didžiąsias ir mažąsias) raides. Rezultatą atspausdinti.
echo "<br>";
echo "2.6 uzduotis"."<br>";

$letter = strtolower($film);
echo substr_count($letter, "a")."<br>";

//2.7 Sukurti kintamąjį su stringu: “An American in Paris”. Jame ištrinti visas balses. Rezultatą atspausdinti. Kodą pakartoti su stringais: “Breakfast at Tiffany's”, “2001: A Space Odyssey” ir “It's a Wonderful Life”.
echo "<br>";
echo "2.7 uzduotis"."<br>";

$vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
echo str_ireplace($vowels, "", $film)."<br>";

$film1 = "Breakfast at Tiffany's";
echo str_ireplace($vowels, "", $film1)."<br>";

$film2 = "2001: A Space Odyssey";
echo str_ireplace($vowels, "", $film2)."<br>";

$film3 = "It's a Wonderful Life";
echo str_ireplace($vowels, "", $film3)."<br>";

//2.8 Stringe, kurį generuoja toks kodas: 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope'; Surasti ir atspausdinti epizodo numerį.
echo "<br>";
echo "2.8 uzduotis"."<br>";

$starWars = 'Star Wars: Episode '.  str_repeat(' ', rand(0,5))   . rand(1,9) . ' - A New Hope';
echo "<p>".$starWars. "</p>";
echo substr($starWars, -14, 1);
echo "<br>";

//2.9 Suskaičiuoti kiek stringe “Don't Be a Menace to South Central While Drinking Your Juice in the Hood” yra žodžių trumpesnių arba lygių nei 5 raidės. Pakartokite kodą su stringu “Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale”.
echo "<br>";
echo "2.9 uzduotis"."<br>";

$string1 = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$explString = explode(" ", $string1);
$count = 0;
for($i = 0; $i < count($explString); $i++){
   if(strlen($explString[$i]) <= 5){
       $count++;
   }
}
echo $count."<br>";


$x = 0;
foreach ($explString as $key => $word) {
    if (strlen($word) <= 5) {
       $x++;
    }
}
echo $x++;
echo "<br>";


$string2 = "Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale";
$exString = explode(" ", $string2);
$count = 0;
for ($i=0; $i < count($exString); $i++) { 
    if (strlen($exString[$i]) <= 5) {
        $count++;
    }
}
echo $count."<br>";

//2.10 Parašyti kodą, kuris generuotų atsitiktinį stringą iš lotyniškų mažųjų raidžių. Stringo ilgis 3 simboliai.
echo "<br>";
echo "2.10 uzduotis"."<br>";

$length = 3;    
echo substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),1,$length)."<br>";

//2.11 Parašykite kodą, kuris generuotų atsitiktinį stringą su 10 atsitiktine tvarka išdėliotų žodžių, o žodžius generavimui imtų iš 9-me uždavinyje pateiktų dviejų stringų. Žodžiai neturi kartotis. (reikės masyvo)
echo "<br>";
echo "2.11 uzduotis"."<br>";



echo "<br>";

?>
<script>
    console.log("<?=$starWars?>");
</script>

<script src="./js/script.js"></script>

</body>
</html>