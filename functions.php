<?php


// $lunghezza = count($elements);
// var_dump($_GET['lunghezza']);
// die();

// scrittura della funzione che prende il numero inserito dalla persona -> se è compreso tra 8 e 32 allora genera una psw
function generatePsw($number, $array){
    
    if($number >= 8 && $number <= 32){
        // creo una stringa vuota
        $pswElement = '';

        // finchè i è minore del numero prende un elemento random dell'array e lo inserisce nella stringa
        for($i = 0; $i < $number; $i++){
            // prendere elemento random dall'array
            // genero un random numero dalla posizione 0 al numero max di elementi nell'array
            $element = $array[rand(0, count($array)-1)];
            // inserirlo nella stringa
            $pswElement .= $element;
        }  
    } else {
        $pswElement = 'Errore. Devi generare una password di lunghezza compresa fra 8 e 32';
    }

    return $pswElement;
}