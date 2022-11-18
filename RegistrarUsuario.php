
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frankfood || Registrar</title>
    <link rel="stylesheet" href="../css/registrar.css">
</head>
<body>
    
    <section class="area-login">
        <div class="login">
            <button id="btn-inicio" onclick="history.go(-1)">Voltar</button>
            <div>
                <img src="assets/Logo_FrankFood.png">
            </div>

            <form action="RegistrarUsuarioAction" method="POST">
                <input type="text" name="name" placeholder="Nome" autofocus required>
                <input type="text" name="sobrenome" placeholder="Sobrenome" autofocus required>
                <input type="mail" name="email" placeholder="E-mail" autofocus required>
                <input type="date" name="nascimento" placeholder="Data de nascimento" autofocus required>
                <!-- <div class="checkbox">
                    <input type="checkbox" id="remind-pass">
                    <label for="remind-pass">Já sou parceiro</label>
                </div> -->
                <input type="submit" value="Cadastrar">
            </form>
        </div>
    </section>

</body>
</html>