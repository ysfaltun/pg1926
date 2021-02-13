<?php

$saat = date( format: "h");
echo date( format:"d/m/Y H:i");
echo '<br>';

if ($saat>06.00 && $saat<=10.00) {
    echo "Günaydın";
}

if ($saat>10.00 && $saat<=17.00) {
    echo "İyi Günler";
}

if ($saat>17.00 && $saat<=20.00) {
    echo "İyi Akşamlar";
}

if ($saat>20.00 && $saat<=00.00) {
    echo "İyi Geceler";
}

if ($saat>00.00 && $saat<=06.00) {
    echo "Esenlikler dilerim";
}

?>