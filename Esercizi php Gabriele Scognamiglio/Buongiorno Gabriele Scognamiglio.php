<!-- Dato un array di utenti con nome, cognome e genere, per ogni utente stampare “Buongiorno Sig. Nome Cognome” o “Buongiorno Sig.ra Nome Cognome” a seconda del genere -->


<?php
$utenti=[
    ["nome"=>"Gabriele",
    "cognome"=>"Scogna",
    "gender"=>"M"],
    ["nome"=>"Erika",
    "cognome"=>"Sereni",
    "gender"=>"F"],
    ["nome"=>"Gabriella",
    "cognome"=>"Sibilla",
    "gender"=>"F"],
    ["nome"=>"Gianluca",
    "cognome"=>"Giangi",
    "gender"=>"M"],
    ["nome"=>"Federica",
    "cognome"=>"Spippa",
    "gender"=>"F"],


    
];
$utente="";
foreach($utenti as $utente){
    if ($utente ["gender"]=="M"){
        echo "Buongiorno Sig.". " " .$utente["nome"]." ".$utente["cognome"]."\n";}
    else {echo"Buongiorno Sig.ra"." ". $utente["nome"]." ". $utente["cognome"]."\n";};
}















?>