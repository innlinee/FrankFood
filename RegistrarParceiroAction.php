<?php
    include('database/connection.php');
    extract($_POST);

    cadastrar($nome, $culi, $descri, $end, $cnpj, $tel, $email);
?> 

<?php
    function cadastrar($nome, $culi, $descri, $end, $cnpj, $tel, $email) {
        include('database/connection.php');

        $query = "INSERT INTO parceiros (nomeRestaurante, tipoCulinaria, descricao, endereco, cnpj, tel, email, exibe)
        VALUES ('$nome', '$culi', '$descri', '$end', '$cnpj', '$tel', '$email', 'N')";
        if (mysqli_query($con, $query)) {
            echo "<script>
                location.replace('RegistrarParceiroMail?nome=$nome&culinaria=$culi&descricao=$descri&endereco=$end&cnpj=$cnpj&telefone=$tel&email=$email');
            </script>";
        } else {
            //echo "Error: " . $query . "<br>" . mysqli_error($con);
            echo "<script>
                alert('CNPJ ou número de telefone já cadastrados! Favor verificar.');
                history.go(-1);
            </script>";
        }
    }
?>