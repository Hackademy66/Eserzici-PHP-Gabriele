<!-- Dato un array di numeri, scrivere un programma che mi permetta di avere la media SOLO dei numeri pari contenuti all’interno dell’array -->

<?php
$numeri=[1,2,3,4,5,6,7,8,9];
$somma=0;
$counter=0;

 foreach($numeri as $numero){
    if($numero %2 == 0){
      $somma=$somma + $numero;
      $counter++;
    }
}
echo $somma."\n";
echo $counter."\n";
$media= $somma /$counter;

echo $media;
?>