<?php

// includo il file della funzione creata
require_once __DIR__ . '/functions.php';


// se il numero che ha inserito è registrato e non è vuoto allora fai la funzione
if(isset($_GET['lunghezza']) && !empty($_GET['lunghezza'])){
    $password = generatePsw($_GET['lunghezza']);
} elseif(isset($_GET['lunghezza']) && strlen($_GET['lunghezza'])=== 0){
    $password = 'Errore. Devi generare una password di lunghezza compresa fra 8 e 32';
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="container my-5">
        <div class="row">
            <div class="col">
                <h1>Strong password generator</h1>
                <h2>Genera una password sicura</h2>
                <div>
                    <?php if(isset($password)): ?>
                        <span><?php echo $password ?></span>
                    <?php else: ?>  
                    <p>Generare una password di lunghezza compresa fra 8 e 32</p>    
                    <?php endif ?>                  
                </div> 

                <form action="index.php" method="GET">
                    <label for="quantity">Lunghezza password:</label>
                    <input type="number" id="quantity" name="lunghezza" min="1" max="50"><br>
                    <button class="btn btn-primary" type="submit">Invia</button>
                </form>
            </div>
        </div>
          
    </div>
<!-- scrittura del form per scegliere il numeri dei caratteri da 8 a 32 -->
    
</body>
</html>