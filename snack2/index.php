<?php


if(!empty($_GET)){
    if(!isset($_GET['name']) || strlen($_GET['name']) <= 3 ){
        echo('Il nome deve contenere almeno 3 caratteri');
    }elseif(!isset($_GET['mail']) || strpos($_GET['mail'], '@' )==false || strpos($_GET['mail'], '.' )==false){
        echo('La mail non contiene @ oppure un punto');
    }elseif(!isset($_GET['age']) || is_numeric($_GET['age'])==false){
        echo('L\'età inserita non è un numero');
    }else {
        echo('Accesso riuscito');
    }
}

?>


<form action="index.php" method="get">
    <input type="text" name="name" />
    <input type="text" name="mail" />
    <input type="number" name="age" />
    <input type="submit" />
</form>