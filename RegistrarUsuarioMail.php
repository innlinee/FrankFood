<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    require('PHPMailer/src/Exception.php');
    require('PHPMailer/src/PHPMailer.php');
    require('PHPMailer/src/SMTP.php');

    include('database/connection.php');
    extract($_GET);

    $registro = "SELECT * FROM usuarios WHERE nome = '$name' AND sobrenome = '$sobrenome' AND email = '$email'";

    $queryRegistro = mysqli_query($con, $registro);
    $fetchRegistro = mysqli_fetch_array($queryRegistro);
    
    if($fetchRegistro != false) {
        $id = $fetchRegistro['idUsuario'];
        
        $msgMail = "<html>";
        $msgMail = $msgMail."<head>";
        $msgMail = $msgMail."<title>::: FrankFood - Cadastro :::</title>";

        $msgMail = $msgMail."<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1'>";
        $msgMail = $msgMail."<style type='text/css'>";
        $msgMail = $msgMail."body {margin-left: 0px;margin-top: 0px;margin-right: 0px;margin-bottom: 0px;}";
        $msgMail = $msgMail."td {font-family: Arial, Helvetica, sans-serif; font-size: 12px;font-style: normal;color: #000000;	border: 1px none #eaeaea;}";
        $msgMail = $msgMail.".Semborda {	border: none;}";
        $msgMail = $msgMail."</style></head>";

        $msgMail = $msgMail."<body>";
        $msgMail = $msgMail."<table width='100%' border='0' cellspacing='0'><tr><td align='center'>";
        $msgMail = $msgMail."<table>";
        $msgMail = $msgMail."  <tr>";
        $msgMail = $msgMail."    <td colspan='2' align='center'><b>Registro realizado com sucesso!</b></td>";
        $msgMail = $msgMail."  </tr>";
        $msgMail = $msgMail."  <tr><td colspan='2'>&nbsp;</td></tr>";
        $msgMail = $msgMail."  <tr>";
        $msgMail = $msgMail."    <td align='right' valign='middle'><b>Recebemos o seu cadastro no FrankFood, ficamos felizes por ter nos escolhido!</b></td>";
        $msgMail = $msgMail."  </tr>";
        $msgMail = $msgMail."  <tr>";
        $msgMail = $msgMail."    <td colspan='3'>&nbsp;</td>";
        $msgMail = $msgMail."  </tr>";

        $msgMail = $msgMail."  <tr>";
        $msgMail = $msgMail."    <td align='right' valign='middle'><b>Esse ?? o seu ID, para realizar login basta utilizar apenas o seu nome (sem sobrenome) e o c??digo abaixo.</b></td><br>";
        $msgMail = $msgMail."  </tr>";

        $msgMail = $msgMail."  <tr>";
        $msgMail = $msgMail."    <td colspan='2' align='center'><h1>$id</h1></td>";
        $msgMail = $msgMail."  </tr>";

        $msgMail = $msgMail."  <tr>";
        $msgMail = $msgMail."    <td align='right' valign='middle'><b>Encaminhado por: </b></td>";
        $msgMail = $msgMail."    <td align='left' valign='middle'>Equipe FrankFood</td>";
        $msgMail = $msgMail."  </tr>";

        $msgMail = $msgMail."</table>";
        $msgMail = $msgMail."</td></tr></table>";
        $msgMail = utf8_decode($msgMail);

        try {
            // Configura????es do servidor
            $mail = new PHPMailer(true);
            $mail->isSMTP();        //Devine o uso de SMTP no envio
            $mail->SMTPAuth = true; //Habilita a autentica????o SMTP
            $mail->Username   = 'richard.lima25@etec.sp.gov.br';
            $mail->Password   = 'Tcheskiro1!';
            // Criptografia do envio SSL tamb??m ?? aceito
            $mail->SMTPSecure = 'tls';
            // Informa????es espec??ficadas pela Microsoft
            $mail->Host = 'smtp.office365.com';
            $mail->Port = 587;
            // Define o remetente
            $mail->setFrom('richard.lima25@etec.sp.gov.br', 'FrankFood');
        
            // Define o destinat??rio
            $mail->addAddress("$email", "");
            // Conte??do da mensagem
            $mail->isHTML(true);  // Seta o formato do e-mail para aceitar conte??do HTML
            $mail->Subject = utf8_decode("Hey, aqui ?? da FrankFood!");
            $mail->Body    = "$msgMail";
            //$mail->AltBody = 'Este ?? o cortpo da mensagem para clientes de e-mail que n??o reconhecem HTML';
            // Enviar
            $mail->send();
            echo "<script type=\"text/javascript\">
                alert('Cadastro realizado com sucesso! Verifique seu e-mail para obter o ID de acesso.');
            location.replace('Login');
        </script>";

        }catch (Exception $e) {
            echo "<script type=\"text/javascript\">
                alert('Mensagem n??o pode ser enviada! Erro: {$mail->ErrorInfo}');
                location.replace('Index');
            </script>";
        }  
    }else {
        echo "<script type=\"text/javascript\">
            alert('Ocorreu um problema, favor contatar os administradores.');
            location.replace('Index');
        </script>";
    }
?> 
