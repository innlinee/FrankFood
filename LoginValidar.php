<?php
    session_start();
    include('database/connection.php');
    extract($_POST);

    $registro = "SELECT * FROM usuarios WHERE nome = '$name' AND idUsuario = '$id'";

    $queryRegistro = mysqli_query($con, $registro);
    $fetchRegistro = mysqli_fetch_array($queryRegistro);
    
    if($fetchRegistro != false) {
        $_SESSION['logado'] = true;
        $_SESSION['nome'] = $name;  
        $_SESSION['id'] = $id;
        echo "<script type=\"text/javascript\">
            location.replace('Index');
        </script>";
    }else {
        $_SESSION['logado'] = false;

        echo "<script type=\"text/javascript\">
            alert('Usuário ou ID inválidos!');
            location.replace('Login');
        </script>";
    }
?>