<?php 
include __DIR__ . '/partials/head.php';
?>


<header>
    <h1 class="text-white">Il magico generatore di</h1>
    <div class="">
    <img class="img-fluid p-2" src="./images/password.png" alt="password">
    </div>
</header>
<main>
    <form action="results.php" method="GET">
        <div class="mb-3">
            <label for="passwordLenght" class="form-label text-white">Inserisci la lunghezza della password (max 30)</label>
            <input type="number" class="form-control" id="passwordLenght" name="passwordLenght" required>
        </div>
        <button type="submit" class="btn btn-warning">Submit</button>
    </form>
   
</main>



<?php 
include __DIR__ . '/partials/footer.php';

?>