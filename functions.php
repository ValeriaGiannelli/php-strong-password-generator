<?php

// creo 4 array diversi per lettere minuscolo, lettere maiuscolo numeri e caratteri speciali
$lowerCase = range('a', 'z');
$upperCase = range('A', 'Z');
$numbers = range(0, 9);
$specials = str_split('!?&%$<>^+-*/()[]{}@#_='); //crea un array con la stringa passata

$elements = array_merge($lowerCase, $upperCase, $numbers, $specials); //unisco tutti gli array in uno unico

// $lunghezza = count($elements);
// var_dump($_GET['lunghezza']);
// die();

// scrittura della funzione che prende il numero inserito dalla persona -> se è compreso tra 8 e 32 allora genera una psw
function generatePsw($number){
    // per accedere al mio array generato globalmente
    global $elements;
    if($number >= 8 && $number <= 32){
        // creo una stringa vuota
        $pswElement = '';

        // finchè i è minore del numero prende un elemento random dell'array e lo inserisce nella stringa
        for($i = 0; $i < $number; $i++){
            // prendere elemento random dall'array
            // genero un random numero dalla posizione 0 al numero max di elementi nell'array
            $element = $elements[rand(0, count($elements)-1)];
            // inserirlo nella stringa
            $pswElement .= $element;
        }  
    } else {
        $pswElement = 'Errore. Devi generare una password di lunghezza compresa fra 8 e 32';
    }

    return $pswElement;
}