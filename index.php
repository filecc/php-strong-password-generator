<?php 
include __DIR__ . '/partials/haed.php';
?>


<header>
    <h1>Hello</h1>
</header>
<main>
    <form action="results.php" method="GET">
        <div class="mb-3">
            <label for="passwordLenght" class="form-label">Inserisci la lunghezza della password (max 30)</label>
            <input type="number" class="form-control" id="passwordLenght" name="passwordLenght" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
   
</main>



<?php 
include __DIR__ . '/partials/footer.php';

?>