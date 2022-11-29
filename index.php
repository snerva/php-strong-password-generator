<?php
/*Milestone 1
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente. Scriviamo tutto (logica e layout) in un unico file index.php
Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale
Milestone 3 (BONUS)
Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli.
Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme). Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali.
Milestone 4 (BONUS - OPZIONALE)
Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION (documentazione) recupererà la password da mostrare all’utente.*/


$passwordLength = $_GET['passwordlength'];
//var_dump($passwordLength);

$background;
$text;

if ($passwordLength != 0 && !$passwordLength) {
    $background = 'bg-info';
    $text = 'Nessun parametro valido inserito! Inserire parametri.';
}

$password = generatePassword($passwordLength);

function generatePassword($length)
{
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*';
    return substr(str_shuffle($characters), 0, $length);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body class="bg-dark">
    <header></header>

    <main>
        <div class="container">
            <section class="title text-center m-5">
                <span class="fs-3 fw-semibold text-secondary">Strong Password Generator</span>
                <h1 class="text-white">Genera una password sicura</h1>
            </section>

            <section class="info <?php echo $background ?> bg-opacity-50 p-4 mb-3 text-white rounded-2">
                <p class="m-0"><?php echo $text ?></p>
            </section>

            <section class="password_generated p-4 text-center bg-light">
                <h2>La password che hai generato é: <?php echo $password ?> </h2>
            </section>

            <section class="generator bg-white p-3 rounded-2">
                <form action="index.php" method="get">
                    <div class="mb-3 d-flex">
                        <label for="passwordlength">Lunghezza password:</label>
                        <input type="number" class="form-control w-25 mx-5" name="passwordlength" id="passwordlength">
                    </div>
                    <!--/.input text-->

                    <button class="btn btn-primary" type="submit">Invia</button>
                    <button class="btn btn-secondary" type="reset">Annulla</button>
                </form>
            </section>
        </div>
    </main>

    <footer></footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>