<?php
    include('database/connection.php');
    extract($_POST);

    cadastrar($name, $sobrenome, $nascimento, $email);
?> 

<?php
    function cadastrar($name, $sobrenome, $nascimento, $email) {
        include('database/connection.php');

        $query = "INSERT INTO usuarios (nome, sobrenome, dtNascimento, email)
        VALUES ('$name', '$sobrenome', '$nascimento', '$email')";
        if (mysqli_query($con, $query)) {
            echo "<script>
                location.replace('RegistrarUsuarioMail?name=$name&sobrenome=$sobrenome&nascimento=$nascimento&email=$email');
            </script>";
        } else {
            //echo "Error: " . $query . "<br>" . mysqli_error($con);
            echo "<script>
                alert('Número de telefone já existe!');
                history.go(-1);
            </script>";
        }
    }
?>