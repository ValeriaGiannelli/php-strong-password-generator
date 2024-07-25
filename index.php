<?php
// prende l'elemento inserito dalla persona



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
                    <p>Generare una password di lunghezza compresa fra 8 e 32</p>
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