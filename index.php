<?php 
include __DIR__ . '/partials/haed.php';
$complete = false;
$counter = 0;
if(!empty($_GET["passwordLenght"])){
    while ($counter < $_GET["passwordLenght"] ) {
        $password[] = chr(rand(32,125));
        $counter++;
     }
     $complete = true;
};

/* Descrizione

Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure.
L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.

Milestone 1
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
Scriviamo tutto (logica e layout) in un unico file index.php

Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale

Milestone 3 (BONUS)
Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente.
 */
?>


<header>
    <h1>Hello</h1>
</header>
<main>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="GET">
        <div class="mb-3">
            <label for="passwordLenght" class="form-label">Inserisci la lunghezza della password</label>
            <input type="number" class="form-control" id="passwordLenght" name="passwordLenght" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <?php if($complete): ?>
        <p>
        <?php foreach ($password as $value)  {
            echo $value;
        } ?>
        </p>
    
    <?php endif ?>
</main>



<?php 
include __DIR__ . '/partials/footer.php';

?>