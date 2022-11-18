<?php
    include('database/connection.php');
    $email = trim($_POST['email']);

    $registro = "SELECT * FROM usuarios WHERE email = '$email'";

    $queryRegistro = mysqli_query($con, $registro);
    $fetchRegistro = mysqli_fetch_array($queryRegistro);
    
    if($fetchRegistro != false) {
        $nome = $fetchRegistro['nome'];
        $sobrenome = $fetchRegistro['sobrenome'];
        $id = $fetchRegistro['idUsuario'];

        echo "<script type=\"text/javascript\">
            location.replace('UsuarioRecuperarIdMail?nome=$nome&id=$id&email=$email');
        </script>";
    }else {
        echo "<script type=\"text/javascript\">
        alert('E-mail não cadastrado!');
            location.replace('Index');
        </script>";
    }


?>