<?php
// apro la sessione per accedere alla variabile
session_start();
// se diverso dal messaggio di errore che viene generato nella funzione allora prendi il valore di sessione
if($_SESSION['correct_psw'] !== 'Errore. Devi generare una password di lunghezza compresa fra 8 e 32'){
    $password = $_SESSION['correct_psw'];
} else {
    // altrimenti reindirizzalo alla pagina di errore
    header('Location: ./index.php?lunghezza=');
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
            <div class="col-12">
                <h1>Strong password generator</h1>
                <h2>Genera una password sicura</h2>
                <div>
                    <?php if(isset($password)): ?>
                        <span><?php echo $password ?></span>  
                    <?php endif ?>                  
                </div> 
            </div>
            <div class="col-auto">
                <a href="./index.php" class="btn btn-primary">Torna indetro</a> 
            </div>
            
        </div>
          
    </div>
<!-- scrittura del form per scegliere il numeri dei caratteri da 8 a 32 -->
    
</body>
</html>