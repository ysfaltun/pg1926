<body>
  <form action="set_4.php" method="post">
  Para üstünüzü yazınız:<input type="text"name="sayi"><br><br>
  <input type="submit" value="Gönder">
    </form>
<br><br>
<?php
 $kontrol=0;
$paraüstü= $_POST["sayi"];

$bolumyuz = $paraüstü/100;
$yuzdenkalan = $paraüstü - (intval($bolumyuz)*100);

$bolumelli = $yuzdenkalan/50;
$ellidenkalan = $yuzdenkalan - (intval($bolumelli)*50);

$bolumyirmibes = $ellidenkalan/25;
$yirmibesdenkalan = $ellidenkalan - (intval($bolumyirmibes)*25);

$bolumon = $yirmibesdenkalan/10;
$ondankalan = $yirmibesdenkalan - (intval($bolumon)*10);

$bolumbes = $ondankalan/5;
$besdenkalan = $ondankalan - (intval($bolumbes)*5);

$bolumbir = $besdenkalan/1;
$birdenkalan = $besdenkalan - (intval($bolumbir)*1);

echo ("100 kr: ".intval($bolumyuz). "<br>");
echo ("50 kr: ".intval($bolumelli). "<br>");
echo ("25 kr: ".intval($bolumyirmibes). "<br>");
echo ("10 kr: ".intval($bolumon). "<br>");
echo ("5 kr: ".intval($bolumbes). "<br>");
echo ("1 kr: ".intval($bolumbir). "<br>");

?>



