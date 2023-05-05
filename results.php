<?php 
include __DIR__ . '/partials/head.php';
include __DIR__ . '/functions/start.php';
$copied = false;
generatePassword();
?>
<main>


<?php if($_SESSION['complete']): ?>
    <div class="w-100 p-4">
        <img class="img-fluid" aria-hidden="true" src="./images/eccola.png" alt="eccola">
    </div>
        <p id="generatedPassword" class="py-3 px-4 rounded bg-body-tertiary">
        <?php foreach ($_SESSION['password'] as $value)  {
            echo $value;
        } ?>
        <span class="ms-2 d-none d-sm-inline"><i id="copy" class="bi bi-clipboard"></i></span>
        </p>
        <a class="btn btn-warning" href="index.php">Torna alla home</a>
<?php else: ?>
    <?php header('Location: ./index.php') ?>
    <?php endif ?>

    </main>
    <script>
        const password = document.getElementById('generatedPassword');
        const copyButton = document.getElementById('copy');
        const handleCopy = function () {
            navigator.clipboard.writeText(password.innerText);
            copyButton.classList.remove('bi-clipboard');
            copyButton.classList.add('bi-clipboard-check-fill');
            copyButton.classList.add('text-success');
        }
        copyButton.addEventListener('click', handleCopy);
      
    </script>

<?php 
include __DIR__ . '/partials/footer.php';

?>