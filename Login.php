<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frankfood || Login</title>
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="Index">
    <link rel="icon" href="assets/imgs_Frank/android-icon-72x72.png">
</head>
<body>
    <section class="area-login">
        <div class="login">
            <button id="btn-inicio" onclick="location.replace('Index')">Voltar</button>
            <div>
                <img src="assets/Logo_FrankFood.png">
            </div>

            <form method="POST" action="LoginValidar">
                <input type="text" name="name" placeholder="Usuário" autofocus>
                <input type="password" name="id" placeholder="ID" autofocus>
                <div class="checkbox">
                    <input type="checkbox" checked id="remind-pass">
                    <!-- <label for="remind-pass">Lembrar ID</label> -->
                </div>
                <input type="submit" value="entrar">
            </form>
            <footer>
                <span><a href="UsuarioRecuperarID">Recuperar acesso</a></span>
                <a href="RegistrarUsuario">Criar conta</a>
            </footer>
            <!-- <p>Esqueceu sua senha?<a href="recuperar.php">Recuperar Senha</a></p> -->
        </div>
    </section>

    <div id="footer">
        <p>Copyright 2022 - Todos os direitos reservados.</p>
        <br>
        <p>Desenvolvido por InLine Softwares.</p>
    </div>

</body>
</html>