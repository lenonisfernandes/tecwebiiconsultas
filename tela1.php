    <?php

 $login = $_GET['login'];
 $senha = $_GET['senha'];
 $senhanova=123;

if($login=="admin" && $senha=="admin"){
    header('Location: caixa.php');
}
else{
    header('Location: prin.php');
}
