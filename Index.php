<?php
    session_start();
    $logado = $_SESSION['logado'] ?? false;
    $nome = $_SESSION['nome'] ?? "";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frankfood</title>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"> -->
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="assets/swiper-bundle.min.css">
    <link rel="icon" href="assets/imgs_Frank/android-icon-72x72.png">
</head>
<body>  

    <div class="container-principal">
        <nav class="navbar">
            <img id="logo" src="assets/Logo_FrankFood.png" alt="">
              <div class="botoes">
              <?php
                    if($logado != true) {
                        echo "<a href=\"RegistrarUsuario\"><button id=\"btn-cadastro\">Registre-se</button></a>
                        <a href=\"RegistrarParceiro\"><button id=\"btn-parceiro\">Seja parceiro</button></a>
                        <a href=\"Login\"><button id=\"btn-login\">Login</button></a>";
                    }else {
                        echo "<a href=\"UsuarioSair\"><button id=\"btn-login\" >Sair</button></a>";    
                    }
                    
                ?>
                </div>

              <div class="settings">
                <?php 
                    if($logado == true) echo "<a href=\"ContaAlterar\" ><img src=\"assets/setting_verde.png\" alt=\"icon Setting\"></a>";
                ?>
              </div>
        </nav>

       <div class="story-card">
            <h1 class="story-card-title"><?php if($nome != "") echo "Olá, $nome! "; ?>Nós temos o restaurante que você procura.</h1>
            <h2 class="story-card-subtitle">Um vasto cardápio dos melhores restaurantes para você e sua família.</h2>

            <form class="form-container">
                <div class="form-container-restaurant"></div>
            </form>
       </div>
    </div>

    <div class="slide-container swiper">
      <div class="slide-content">
          <div class="card-wrapper swiper-wrapper">

              <div class="card swiper-slide">
                  <div class="image-content">
                      <span class="overlay"></span>
                      <div class="card-image">
                          <img src="assets/arabe.png" alt="" class="card-img">
                      </div>
                  </div>

                  <div class="card-content">
                      <h2 class="name">Arabia</h2>
                      <br>
                      <p class="description">O melhor da culinária árabe reservado para você.</p>
                      <a class="button" href="RestaurantePagina">Ver mais</a>
                  </div>
              </div>

              <div class="card swiper-slide">
                  <div class="image-content">
                      <span class="overlay"></span>
                      <div class="card-image">
                          <img src="assets/chinesa.jpg" alt="" class="card-img">
                      </div>
                  </div>

                  <div class="card-content">
                      <h2 class="name">China</h2>
                      <br>
                      <p class="description">O melhor da culinária chinesa reservado para você.</p>
                      <a class="button" href="#">Ver mais</a>
                  </div>
              </div>

              <div class="card swiper-slide">
                  <div class="image-content">
                      <span class="overlay"></span>
                      <div class="card-image">
                          <img src="assets/comidabrasileira.jpg" alt="" class="card-img">
                      </div>
                  </div>

                  <div class="card-content">
                      <h2 class="name">Brasil</h2>
                      <br>
                      <p class="description">O melhor da culinária brasileira reservado para você.</p>
                      <a class="button" href="#">Ver mais</a>
                  </div>
              </div>

              <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay"></span>
                    <div class="card-image">
                        <img src="assets/italiana.jpg" alt="" class="card-img">
                    </div>
                </div>

                <div class="card-content">
                    <h2 class="name">Itália</h2>
                    <br>
                    <p class="description">O melhor da culinária italiana reservado para você.</p>
                    <a class="button" href="#">Ver mais</a>
                </div>
            </div>

              <div class="card swiper-slide">
                  <div class="image-content">
                      <span class="overlay"></span>
                      <div class="card-image">
                          <img src="assets/arabe.png" alt="" class="card-img">
                      </div>
                  </div>

                  <div class="card-content">
                      <h2 class="name">Arabia</h2>
                      <br>
                      <p class="description">O melhor da culinária árabe reservado para você.</p>
                      <a class="button" href="#">Ver mais</a>
                  </div>
              </div>

              <div class="card swiper-slide">
                  <div class="image-content">
                      <span class="overlay"></span>
                      <div class="card-image">
                          <img src="assets/chinesa.jpg" alt="" class="card-img">
                      </div>
                  </div>

                  <div class="card-content">
                      <h2 class="name">China</h2>
                      <br>
                      <p class="description">O melhor da culinária chinesa reservado para você.</p>
                      <a class="button" href="#">Ver mais</a>
                  </div>
              </div>

              <div class="card swiper-slide">
                  <div class="image-content">
                      <span class="overlay"></span>
                      <div class="card-image">
                          <img src="assets/comidabrasileira.jpg" alt="" class="card-img">
                      </div>
                  </div>

                  <div class="card-content">
                      <h2 class="name">Brasil</h2>
                      <br>
                      <p class="description">O melhor da culinária brasileira reservado para você.</p>
                      <a class="button" href="#">Ver mais</a>
                  </div>
              </div>

              <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay"></span>
                    <div class="card-image">
                        <img src="assets/italiana.jpg" alt="" class="card-img">
                    </div>
                </div>

                <div class="card-content">
                    <h2 class="name">Itália</h2>
                    <br>
                    <p class="description">O melhor da culinária italiana reservado para você.</p>
                    <a class="button" href="#">Ver mais</a>
                </div>
            </div>
          </div>
      </div>

      <div class="swiper-button-next swiper-navBtn"></div>
      <div class="swiper-button-prev swiper-navBtn"></div>
      <div class="swiper-pagination"></div>
  </div>

    <div id="footer">
      <p>Copyright 2022 - Todos os direitos reservados.</p>
      <br>
      <p>Desenvolvido por InLine Softwares.</p>
    </div>
    
</body>

  <script src="assets/swiper-bundle.min.js"></script>
  <script src="../js/index.js"></script>

</html>