<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frankfood || Seja Parceiro</title>
    <link rel="stylesheet" href="../css/parceiro.css">
    <link rel="icon" href="assets/imgs_Frank/android-icon-72x72.png">
</head>
<body>
    
    <section class="area-login">
        <div class="login">
            <button id="btn-inicio" onclick="location.replace('Index')">Voltar</button>
            <div>
                <img src="assets/Logo_FrankFood.png">
            </div>

            <form method="POST" action="RegistrarParceiroAction">
                <input type="text" name="nome" placeholder="Nome Restaurante" required>
                <input type="text" name="culi" placeholder="Tipo de Culinária" required>
                <input type="text" name="descri" placeholder="Descrição" required>
                <input type="text" name="end" placeholder="Endereço" required>
                <input type="text" name="cnpj" placeholder="CNPJ" required>
                <input type="tel" name="tel" placeholder="Telefone" required>
                <input type="mail" name="email" placeholder="E-mail" required>
                <input type="submit" value="Cadastrar">
                <!-- <div class="checkbox">
                    <input type="checkbox" id="remind-pass">
                    <label for="remind-pass">Já sou parceiro</label>
                </div> -->
            </form>
        </div>
    </section>

    <div id="footer">
        <p>Copyright 2022 - Todos os direitos reservados.</p>
        <br>
        <p>Desenvolvido por InLine Softwares.</p>
    </div>

</body>
</html>