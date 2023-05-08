<?php 
session_start();
$_SESSION['complete']=false;
function generatePassword() {
    $counter = 0;
    $non_password_chars = [
        34, 44, 58, 59, 60, 62,
        91, 92, 93, 94, 95, 96,
        123, 124, 125, 126
    ];
    if(!empty($_GET["passwordLenght"])){

        while ($counter < $_GET["passwordLenght"] &&  $counter < 32) {
            $randomNumb = rand(33,125);
        if (!in_array($randomNumb, $non_password_chars)){
            $password[] = chr($randomNumb);
            $counter++;
        }
         }
        $_SESSION['complete']=true;
        $_SESSION['password'] =  $password;
    };
};
?>