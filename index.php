<!doctype html>
<html lang="en">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="style.css" rel="stylesheet">
    <script type="text/javascript" src="main.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <script src="https://smtpjs.com/v3/smtp.js"></script>

    <link rel="icon" href="Images/Site-Icon/site-icon.webp">
    <title>Margil Granitos</title>

    <body class="page-index">

        <?php 
        include 'php/navbar.html';
        include 'php/whatsapp.html';
        ?>

        <!--top-carousel-->
        <div id="top-carousel" class="carousel vert slide" data-ride="carousel" data-interval="5000" data-pause="false">
            <ol class="carousel-indicators">
                <li data-target="#top-carousel" data-slide-to="0" id="0" class="active"></li>
                <li data-target="#top-carousel" data-slide-to="1" id="1"></li>
                <li data-target="#top-carousel" data-slide-to="2" id="2"></li>
                <li data-target="#top-carousel" data-slide-to="3" id="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block mx-auto img-fluid" src="Images/Index/Carousel-Top/banner1.webp">
                </div>
                <div class="carousel-item">
                    <img class="d-block mx-auto img-fluid" src="Images/Index/Carousel-Top/banner2.webp">
                </div>
                <div class="carousel-item">
                    <img class="d-block mx-auto img-fluid" src="Images/Index/Carousel-Top/banner3.webp">
                </div>
                <div class="carousel-item">
                    <img class="d-block mx-auto img-fluid" src="Images/Index/Carousel-Top/banner5.webp">
                </div>
            </div>
        </div>

        <div id="top-carousel-info" class="carousel vert slide" data-ride="carousel" data-interval="5000" data-pause="false">
            <ol class="carousel-indicators">
                <li data-target="#top-carousel-info" data-slide-to="0" id="0" class="active"></li>
                <li data-target="#top-carousel-info" data-slide-to="1" id="1"></li>
                <li data-target="#top-carousel-info" data-slide-to="2" id="2"></li>
                <li data-target="#top-carousel-info" data-slide-to="3" id="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="box">
                        <div>
                            <img src="Images/Index/Carousel-Top-Lower/banner2-1.webp">
                        </div>
                        <div>
                            <img src="Images/Index/Carousel-Top-Lower/banner2-2.webp">
                        </div>
                        <p>
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="box">
                        <div>
                            <img src="Images/Index/Carousel-Top-Lower/banner1-1.webp">
                        </div>
                        <div>
                            <img src="Images/Index/Carousel-Top-Lower/banner1-2.webp">
                        </div>
                        <p>
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="box">
                        <div>
                            <img src="Images/Index/Carousel-Top-Lower/banner2-1.webp">
                        </div>
                        <div>
                            <img src="Images/Index/Carousel-Top-Lower/banner2-2.webp">
                        </div>
                        <p>
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="box">
                        <div>
                            <img src="Images/Index/Carousel-Top-Lower/banner3-1.webp">
                        </div>
                        <div>
                            <img src="Images/Index/Carousel-Top-Lower/banner3-2.webp">
                        </div>
                        <p>
                        </p>
                    </div>
                </div>
            </div>
            <p class="text">
                TALENTO E COMPETÊNCIA SE TORNARAM CARACTERÍSTICAS DO NOSSO TRABALHO, ATESTADO PELOS NOSSOS CLIENTES QUE SE TORNARAM FIÉIS, DESENVOLVENDO UMA RELAÇÃO DE PARCERIA E AMIZADE. CONQUISTAMOS A CONFIANÇA DO MERCADO DEVIDO A NOSSA HISTÓRIA DE RESPONSABILIDADE E COMPETÊNCIA NOS PRODUTOS ENTREGUES AOS NOSSOS CLIENTES.
            </p>
        </div>

        <div class="destaques" id="destaques">
            <h2 class="title">
                DESTAQUES
            </h2>
            <div class="row d-flex justify-content-center">
                <div class="box col-12 col-sm-6 col-lg-3" id="Aqua-Marine-White">
                    <div class="image">
                        <img src="Images/Index/Destaques/Aqua-Marine-White.webp">
                    </div>
                    <p>Acqua Marine White</p>
                </div>
                <div class="box col-12 col-sm-6 col-lg-3" id="Atacama">
                    <div class="image">
                        <img src="Images/Index/Destaques/Atacama.webp">
                    </div>
                    <p>Atacama White</p>
                </div>
                <div class="box col-12 col-sm-6 col-lg-3" id="Preto-Sao-Rafael">
                    <div class="image">
                        <img src="Images/Index/Destaques/Preto-Sao-Rafael.webp">
                    </div>
                    <p>Preto São Rafael</p>
                </div>
                <div class="box col-12 col-sm-6 col-lg-3" id="Travertino">
                    <div class="image">
                        <img src="Images/Index/Destaques/Travertino.webp">
                    </div>
                    <p>Travertino</p>
                </div>
                <div class="box col-12 col-sm-6 col-lg-3" id="White-Persa">
                    <div class="image">
                        <img src="Images/Index/Destaques/White-Persa.webp">
                    </div>
                    <p>White Persa</p>
                </div>
            </div>

        </div>

        <!--materiais-->
        <div class="materiais" id="materiais">
            <h2 class="title">
                MATERIAIS
            </h2>
            <div class="swiper-container gallery-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide gallery-banner" id="Amarelo-Capri">
                        <img src="Images/Index/Swiper/Amarelo-Capri.webp">
                        <p>Amarelo Capri</p>
                    </div>

                    <div class="swiper-slide gallery-banner" id="Amarelo-Maracuja">
                        <img src="Images/Index/Swiper/Amarelo-Maracuja.webp">
                        <p>Amarelo Maracujá</p>
                    </div>

                    <div class="swiper-slide gallery-banner" id="Amarelo-Ornamental-G">
                        <img src="Images/Index/Swiper/Amarelo-Ornamental-G.webp">
                        <p>Amarelo Ornamental G</p>
                    </div>

                    <div class="swiper-slide gallery-banner" id="Amarelo-Ornamental-VL">
                        <img src="Images/Index/Swiper/Amarelo-Ornamental-VL.webp">
                        <p>Amarelo Ornamental VL</p>
                    </div>
                    <div class="swiper-slide gallery-banner" id="Aqua-Marine-White">
                        <img src="Images/Index/Swiper/Aqua-Marine-White.webp">
                        <p>Acqua Marine White</p>
                    </div>
                    <div class="swiper-slide gallery-banner" id="Atacama">
                        <img src="Images/Index/Swiper/Atacama.webp">
                        <p>Atacama White</p>
                    </div>
                    <div class="swiper-slide gallery-banner" id="Branco-Dallas">
                        <img src="Images/Index/Swiper/Branco-Dallas.webp">
                        <p>Branco Dallas</p>
                    </div>
                    <div class="swiper-slide gallery-banner" id="Branco-Itaunas">
                        <img src="Images/Index/Swiper/Branco-Itaunas.webp">
                        <p>Branco Itaunas</p>
                    </div>
                    <div class="swiper-slide gallery-banner" id="Branco-Siena">
                        <img src="Images/Index/Swiper/Branco-Siena.webp">
                        <p>Branco Siena</p>
                    </div>
                    <div class="swiper-slide gallery-banner" id="Cinza-Andorinha">
                        <img src="Images/Index/Swiper/Cinza-Andorinha.webp">
                        <p>Cinza Andorinha</p>
                    </div>
                    <div class="swiper-slide gallery-banner" id="Cinza-Corumba">
                        <img src="Images/Index/Swiper/Cinza-Corumba.webp">
                        <p>Cinza Corumba</p>
                    </div>
                    <div class="swiper-slide gallery-banner" id="Cinza-Corumbazinho">
                        <img src="Images/Index/Swiper/Cinza-Corumbazinho.webp">
                        <p>Cinza Corumbazinho</p>
                    </div>
                    <div class="swiper-slide gallery-banner" id="Preto-Sao-Rafael">
                        <img src="Images/Index/Swiper/Preto-Sao-Rafael.webp">
                        <p>Preto Sao Rafael</p>
                    </div>
                    <div class="swiper-slide gallery-banner" id="Preto-Via-Lactea">
                        <img src="Images/Index/Swiper/Preto-Via-Lactea.webp">
                        <p>Preto Via Lactea</p>
                    </div>
                    <div class="swiper-slide gallery-banner" id="Travertino">
                        <img src="Images/Index/Swiper/Travertino.webp">
                        <p>Travertino</p>
                    </div>
                    <div class="swiper-slide gallery-banner" id="Verde-Ubatuba">
                        <img src="Images/Index/Swiper/Verde-Ubatuba.webp">
                        <p>Verde Ubatuba</p>
                    </div>
                    <div class="swiper-slide gallery-banner" id="White-Persa">
                        <img src="Images/Index/Swiper/White-Persa.webp">
                        <p>White Persa</p>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>

        <!--jazidas-->
        <div class="jazidas" id="jazidas">
            <h2 class="title">
                JAZIDAS
            </h2>
            <div id="jazida-carousel" class="carousel vert slide" data-ride="carousel" data-interval="5000" data-pause="false">
                <ol class="carousel-indicators">
                    <li data-target="#jazida-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#jazida-carousel" data-slide-to="1"></li>
                    <li data-target="#jazida-carousel" data-slide-to="2"></li>
                    <li data-target="#jazida-carousel" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="box">
                            <div>
                            </div>
                            <div>
                                <h3>
                                    Acque Marine White
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="box">
                            <div>
                            </div>
                            <div>
                                <h3>
                                    Preto São Rafael
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="box">
                            <div>
                            </div>
                            <div>
                                <h3>
                                    Atacama White
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="box">
                            <div>
                                <img src="Images/Index/Carousel-Jazidas/banner3.webp">
                            </div>
                            <div>
                                <h3>
                                    White Persa
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="static-image">
                    <img src="Images/Index/Carousel-Jazidas/banner1.webp">
                </div>
                <p class="text">
                    INVESTIMENTOS CONTÍNUOS, NA QUALIDADE E SEGURANÇA DA EXTRAÇÃO DE NOSSOS PRINCIPAIS MATERIAIS, ACQUA MARINE WHITE, ATACAMA WHITE, WHITE PERSA E PRETO SÃO RAFAEL, TEM SIDO DETERMINANTE PARA NOSSA GARANTIA DE SUPRIMENTO E A BASE DO NOSSO SUCESSO.
                </p>
            </div>
        </div>
        <?php
        include 'php/form.html';
        include 'php/maps.html';
        include 'php/footer.html';
        ?>

    </body>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</html>