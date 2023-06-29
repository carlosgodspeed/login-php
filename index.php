<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

    <?php

        if(!isset($_SESSION['login'])){

            if(isset($_POST['acao'])){
                $login = 'carlos';
                $senha = '45854585';

                $loginform = $_POST['login'];
                $senhaform = $_POST['senha'];

                if($login == $loginform && $senha == $senhaform){
                    $_SESSION['login'] = true;
                    header('location: index.php');
                }else{
                    echo 'Erro de login';
                }
            }



            include('login.php');
        }else{
            if(isset($_GET['logout'])){
                unset ($_SESSION['login']);
                session_destroy();
                header('location: index.php');
            }
            include('home.php');
        }
     
    ?>

</body>
</html>
