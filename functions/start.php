<?php 
$complete = false;
$counter = 0;
$non_password_chars = [
    34, 44, 58, 59, 60, 62,
    91, 92, 93, 94, 95, 96,
    123, 124, 125, 126
];
if(!empty($_GET["passwordLenght"])){
    while ($counter < $_GET["passwordLenght"] ) {
        $randomNumb = rand(33,125);
    if (!in_array($randomNumb, $non_password_chars)){
        $password[] = chr($randomNumb);
        $counter++;
    }
     }
     $complete = true;
};



/* Descrizione

Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale

Milestone 3 (BONUS)
Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente.
 */
?>