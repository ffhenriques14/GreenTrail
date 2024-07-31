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
        <div class="backgroundImageHeader-FaqPage">
            <?php
            include "includes/navbar.php";

            ?>
            <!-- Header Section -->
            <div class="container-fluid headerSection-OtherPages  d-flex justify-content-center align-items-center">
                <div class="row mx-md-5 ">
                    <h3 class="text-light">F A Q</h3>
                </div>
            </div>
            <style>
                div>p>span {
                    font-size: 20px;
                    color: white;
                }
            </style>
            <div class="mx-md-5 d-flex justify-content-center align-items-center">
                <p class="text-light mb-3"><span>&middot; &nbsp</span>SCROLL DOWN<span>&nbsp&middot;</span></p>
            </div>
        </div>

        <!-- Guias Section -->
        <div class="container-fluid mb-5">
            <div class="row d-flex justify-content-center align-items-center">
                <form class="col-12 g-3" style="max-width: 1000px;">
                    <div class="col input-group my-5">
                        <div class="form-floating">
                            <input type="text" class="form-control rounded-start-5 border-0 px-5"
                                id="floatingInputGroup1" placeholder="Username">
                            <label class="placeholder-text px-5" for="floatingInputGroup1" style="z-index: 1;">Search here</label>
                        </div>
                        <span class="input-group-text rounded-end-5 border-0 pe-4" style="background-color: white;"><img
                                class="mx-auto icons_size" src="icons/basil--search-outline.svg"
                                alt="icon de mapa"></span>
                    </div>
                    <div class="accordion accordion-flush mb-5" id="accordionFlushExample">
                        <h4 class="" mb-3" style="color: #A3BF6A;">Perguntas Frequentes</h4>
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    O que é uma viagem sustentável?
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                    demonstrate the <code>.accordion-flush</code> class. This is the first item's
                                    accordion body.</div>
                            </div>
                        </div>
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    Por que devo optar por viagens sustentáveis
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                    demonstrate the <code>.accordion-flush</code> class. This is the second item's
                                    accordion body. Let's imagine this being filled with some actual content.</div>
                            </div>
                        </div>
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    Quais são os melhores destinos para viagens sustentáveis?
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                    demonstrate the <code>.accordion-flush</code> class. This is the third item's
                                    accordion body. Nothing more exciting happening here in terms of content, but just
                                    filling up the space to make it look, at least at first glance, a bit more
                                    representative of how this would look in a real-world application.</div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion accordion-flush mb-5" id="accordionFlushExample">
                        <h4 class="mb-3" style="color: #A3BF6A;">Reservas e Ferias</h4>
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFour" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    O que procurar em uma acomodação sustentável?
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                    demonstrate the <code>.accordion-flush</code> class. This is the first item's
                                    accordion body.</div>
                            </div>
                        </div>
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseSix" aria-expanded="false"
                                    aria-controls="flush-collapseFive">
                                    Como encontro acomodações eco-friendly?
                                </button>
                            </h2>
                            <div id="flush-collapseSix" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                    demonstrate the <code>.accordion-flush</code> class. This is the second item's
                                    accordion body. Let's imagine this being filled with some actual content.</div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion accordion-flush mb-5" id="accordionFlushExample">
                        <h4 class="mb-3" style="color: #A3BF6A;">Contacte-nos</h4>
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseSeven" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    Como pode nos contactar?
                                </button>
                            </h2>
                            <div id="flush-collapseSeven" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                    demonstrate the <code>.accordion-flush</code> class. This is the first item's
                                    accordion body.</div>
                            </div>
                        </div>
                    </div>
                </form>
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