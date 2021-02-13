<body>
  <form action="set_2.php" method="post">
  Sayıyı yazınız:<input type="text"name="sayi"><br><br>
  <input type="submit" value="Gönder">
    </form>
<br><br>
<?php
 function MukemmelSayi($sayi) {
    if(!is_numeric($sayi)) {
       print "sayi";
       return false;
    }
    for($a=1; $a<$sayi; $a++) {
       $sonuc = $sayi%$a;
       if($sonuc==0) {
          $dizi[]=$a;
       }
    }
    if(array_sum($dizi)==$sayi) {
        return $sayi." icin sonuc olumlu!";   
    }
    else {
       return $sayi." icin sonuc olumsuz!";
    }
    
 }

 $sayi = $_POST["sayi"];
 $message = MukemmelSayi($sayi) ;


echo '<script type="text/javascript"> alert("' . $message . '"); </script>';



