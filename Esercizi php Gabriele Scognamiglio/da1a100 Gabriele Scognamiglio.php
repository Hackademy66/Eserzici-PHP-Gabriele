<!-- Scrivere un programma che stampi in console tutti i numeri da uno a cento. Se il numero è multiplo di 3, stampare “PHP” al posto del numero; se multiplo di 5 deve stampare “JAVASCRIPT”; se multiplo di 3 e 5 (15) deve stampare “HACKADEMY66". -->

<?php
$numero=0;
for($i=1;$i<=100; $i++){
    if($i % 3 == 0) echo ("PHP")."\n";
    
    elseif($i % 5 == 0) echo ("JAVASCRIPT")."\n";
    
    
    elseif($i % 15 == 0) echo ("HACKADEMY66")."\n";
    
    else echo("$i")."\n"; 
}
?>


