<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/gif/png" href="images/logo_title_bar.png">
    <title>Green Trail</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>

    <!-- Page Content -->
    <div class="container-fluid background_sections1 imagem">

        <div class="backgroundImageHeader-SobreNosPage">
            <?php
                include "includes/navbar.php";

            ?>
            <!-- Header Section -->
            <div
                class="container-fluid headerSection-OtherPages  d-flex justify-content-center align-items-center">
                <div class="row mx-md-5 ">
                    <h3 class="text-light">Sobre Nós</h3>
                </div>
                
            </div>

            <style>
                div>p>span {
                    font-size: 20px;
                    color: white;
                }
            </style>
            <div class="mx-md-5 d-flex justify-content-center align-items-center">
                <p class="text-light mb-3" ><span>&middot; &nbsp</span>SCROLL DOWN<span>&nbsp&middot;</span></p>
            </div>
        </div>
        
        <!-- Guias Section -->
        <div class="container-fluid mt-md-5">
            <div class="my-5 text-center mx-lg-5 ">
                <h1>O Nosso Proposito</h1>
                <div class="d-flex justify-content-center">
                <p class="my-3 " style="max-width:1000px">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                    piece of classical Latin literature from 45 BC. Contrary to popular belief, Lorem Ipsum is not
                    simply random text. It has roots in a piece of classical Latin literature from 45 BC</p>
                </div>
                <p class="fw-bold fs-5">As nossas férias são as melhores ​​porque fazem o bem</p>

                
            </div>
            <div class="row row-cols-1 row-cols-lg-3 mx-lg-5">
                <div class="col guia1_margins ">
                    <div class="card rounded-0 border-0">
                        <img src="images/travel-carbon-footprint-1.jpg" class="card-img-top rounded-0 "
                            alt="imagem de pedalada pelas montanhas de Minasota"
                            style="height: 200px; object-fit: cover;">

                            <div class="rectangle_green-otherscard icons d-flex justify-content-center align-items-center"><img
                                class="icons_size " src="icons/streamline--travel-places-camping-tent-outdoor-recreation-camping-tent-teepee-tipi.svg" alt="icon de seleção 'Green Trail'">
                            </div>
                        <div class="card-body">
                            <h5 class="card-title">Viaje sendo responsável</h5>
                            <p class="card-text mb-2">Contrary to popular belief, Lorem Ipsum is not simply
                                random
                                text.
                                It has roots in a piece of classical Latin literature from 45 BC</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col guia1_margins ">
                    <div class="card rounded-0 border-0">
                        
                        <img src="images/explore_selected_3.jpg" class="card-img-top rounded-0 img_card_sobrenos"
                            alt="..." style="height: 200px; object-fit: cover;">
                        <div class="rectangle_green-otherscard icons d-flex justify-content-center align-items-center"><img
                            class="icons_size " src="icons/raphael--green.svg" alt="icon de seleção 'Green Trail'">
                        </div>
                        <div class="card-body">
                            
                            <h5 class="card-title">Curb Your Carbon</h5>
                            <p class="card-text mb-2">Contrary to popular belief, Lorem Ipsum is not simply
                                random
                                text.
                                It has roots in a piece of classical Latin literature from 45 BC</p>
                        </div>
                    </div>
                </div>
                <div class="col guia1_margins ">
                    <div class="card rounded-0 border-0">
                        <img src="images/explor_select_3.jpg" class="card-img-top rounded-0" alt="..."
                            style="height: 200px; object-fit: cover;">
                            <div class="rectangle_green-otherscard icons d-flex justify-content-center align-items-center"><img
                                class="icons_size " src="icons/material-symbols--travel-luggage-and-bags-rounded.svg" alt="icon de seleção 'Green Trail'">
                            </div>
                        <div class="card-body">
                            <h5 class="card-title">Marque a sua  viagem</h5>
                            <p class="card-text mb-2">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC</p>
                            <a href="ofertas.php"
                                class="d-flex justify-content-end link-offset-2 link-underline link-underline-opacity-0">Veja
                                mais guias <img class="ps-2" src="icons/bitcoin-icons--arrow-right-outline-green.svg"
                                alt="icon seta direita"> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- SejaMembro Section -->
         <!-- mobile section -->
        <div class="container-fluid my-5 hiker_section_mobile ">
            <div class="row my-5 ms-lg-5 ">
                <div class="ms-3 hiker_section align_hiker_mobile" style="width: fit-content;">
                    <h1 class="d-flex justify-content-start">Seja um "Green Hiker"</h1>
                    <div class="d-flex justify-content-start mt-4 buttons-text2">
                        <a type="button" href="registo.php"
                            class="fs-6 btn btn-outline-dark rounded-0 border-dark border-2 px-5 py-3">
                            <span class="me-3">REGISTE-SE</span>
                            <img class="btn_seta_icon" src="icons/bitcoin-icons--arrow-right-outline-black.svg"
                                alt="seta para a direita">
                        </a>
                    </div>
                </div>
                <div class="d-flex justify-content-end align-items-center g-0">
                    <img src="images/green_hiker.jpg" class="rounded-circle hiker_img" alt="..."
                        style="filter: brightness(70%); opacity: 0.7;">
                </div>
            </div>

        </div>
        <!-- desktop section -->
        <div class="container-fluid my-5 hiker_section_desktop">
            <div class="row mt-5 ms-lg-5 hiker_section_desktop">
                <div class="col hiker_section align_hiker">
                    <h1 class="d-flex justify-content-start mb-3">Seja um "Green Hiker"</h1>
                    <p><strong>Viaje com responsabilidade, seja consciente das suas <br> decisões e ajude-nos a
                            melhorar o nosso futuro.</strong></p>
                    <p><strong>As nossa viagens são melhores porque fazem o bem!<br> Seja um “Green Hiker” junte-se
                            à Green Trail</strong></p>
                    <div class="col-12 d-flex justify-content-start mt-3">
                        <a type="button" href="registo.php"
                            class="fs-6 btn btn-outline-dark rounded-0 border-dark border-2 px-5 py-3">
                            <span class="me-3">REGISTE-SE</span>
                            <img class="btn_seta_icon" src="icons/bitcoin-icons--arrow-right-outline-black.svg"
                                alt="seta para a direita">
                        </a>
                    </div>

                </div>
                <div class="col mx-0 px-0 m-0" style="position: relative;">
                    <figure class="figure d-flex justify-content-end m-0">
                        <img src="images/green_hiker.jpg" class="figure-img img-fluid rounded-start-5 " alt="..."
                            style="max-height: 385px; width: 80%; object-fit: cover;  filter: brightness(70%); opacity: 0.7;">
                    </figure>
                </div>
            </div>
        </div>

        <!-- Footer Section -->
        <?php
            require_once "includes/footer.php";
        ?>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>

    <script>
        $('.div-hide').hide();

        $('.tab-link').click(function () {
            var contClass = $(this).data('div');
            $('.content-selected').hide().filter('.' + contClass).show("slow")
        })
    </script>
</body>

</html>