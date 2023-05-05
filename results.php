<?php 
include __DIR__ . '/partials/haed.php';
include __DIR__ . '/functions/start.php';
generatePassword();
?>

<?php if($_SESSION['complete']): ?>
    <h1>Ecco la tua bella password.</h1>
        <p>
        <?php foreach ($_SESSION['password'] as $value)  {
            echo $value;
        } ?>
        </p>
        <a href="index.php">Torna alla home</a>
<?php else: ?>
    <?php header('Location: ./index.php') ?>
    <?php endif ?>



<?php 
include __DIR__ . '/partials/footer.php';

?>