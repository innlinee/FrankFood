<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frankfood</title>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"> -->
    <link rel="stylesheet" href="../css/pgRestaurante.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <link rel="icon" href="assets/imgs_Frank/android-icon-72x72.png">
</head>

<body>

    <button id="btn-inicio" onclick="history.go(-1)">Voltar</button>
    <div class="inform">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="assets/Restaurante - MUN SUSHI/MUN3.jpeg" alt="Primeiro Slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Mun Sushi - Culinária Japonesa - Rua Itinguçu, 1902 – São Paulo</h5>
                        <p>O restaurante Mun Sushi localizado na região da Vila Ré é um dos melhores restaurantes de culinária japonesa da região.</p>
                    </div>
    
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/Restaurante - MUN SUSHI/MUN1.jpeg" alt="Segundo Slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Mun Sushi - Culinária Japonesa - Rua Itinguçu, 1902 – São Paulo</h5>
                        <p>Com um espaço extremamente confortante, o restaurante conta com comodidade e requinte além de uma equipe técnica excepcional e um cardápio de deixar água na boca.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/Restaurante - MUN SUSHI/MUN2.jpeg" alt="Terceiro Slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Mun Sushi - Culinária Japonesa - Rua Itinguçu, 1902 – São Paulo</h5>
                        <p>Você pode encontrar informações sobre o restaurante Mun Sushi no site www.munsushi.com.br ou pelo telefone (11) 2791-4296</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Próximo</span>
            </a>
        </div>
    
        <div class="botoesrest">
            <a href=""><button id="btn-rest">Foto</button></a>
            <a href="assets/Restaurante - MUN SUSHI/MUN-Video.mp4"><button id="btn-rest">Vídeo</button></a>
            <a href=""><button id="btn-rest">Mapa</button></a>
        </div>
    </div>
    
    <div id="footer">
        <p>Copyright 2022 - Todos os direitos reservados.</p>
        <br>
        <p>Desenvolvido por InLine Softwares.</p>
      </div>

</body>

</html>