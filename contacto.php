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

        <div class="backgroundImageHeader-ContactoPage">
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
                <p class="text-light mb-3"><span>&middot; &nbsp</span>SCROLL DOWN<span>&nbsp&middot;</span></p>
            </div>
        </div>

        <!-- Guias Section -->
        <div class="container-fluid mb-5">
            <div class="row d-flex justify-content-center align-items-center mx-md-5">
                <form class="col-12 g-3" style="max-width: 1000px;" id="contact" action="mail.php" method="post">
                    <h1 class="d-flex justify-content-start my-5">Contacto</h1>
                    <div class="col-12 mb-3">
                        <label for="name" class="form-label fw-bold">Nome de Utilizador*</label>
                        <input type="text" class="form-control form-control-lg rounded-0 border-0 placeholder-text"
                        id="name" name="name" placeholder="ex.: Francisco Ferreira">
                    </div>
                    <div class="col-12 mb-3">
                        <label for="email" class="form-label fw-bold">Endereço de Email*</label>
                        <input type="email" class="form-control form-control-lg rounded-0 border-0 placeholder-text"
                        id="email" name="email" placeholder="O seu e-mail">
                    </div>
                    <div class="col-12 mb-3">
                        <label for="subject" class="form-label fw-bold">Assunto*</label>
                        <input type="text" class="form-control form-control-lg rounded-0 border-0 placeholder-text"
                        id="subject" name="subject" placeholder="Assunto da messagem">
                    </div>
                    <div class="col-12 mb-3">
                        <label for="message" class="form-label fw-bold">A sua Mensagem*</label>
                        <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                    </div>

                    <p class="col-12 mb-3">Os seus dados pessoais serão usados ​​para apoiar a sua experiência neste
                        site, para gerir o acesso à sua conta e para outros fins descritos no nosso bla bla bla</p>

                    <div class="col-12 d-flex justify-content-end buttons-text2 mb-3">
                        <button type="submit" name="send" id="contact-submit"
                            class="col-12 col-md-8 fs-6 btn btn-outline-success btn-green rounded-0 border-2 px-2 py-3 d-flex justify-content-center align-items-center"
                            style="max-width: 150px;" >
                            <span class="fw-bold">ENVIAR</span>
                        </button>
                        <!-- <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header border-0">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-header border-0">
                                        <img src="icons/sucesso.svg" style="height:200px;" alt="" class="mx-auto">
                                    </div>
                                    <div class="col-12 modal-body text-center border-0 ">
                                        <h3 id="staticBackdropLabel">Enviada com Sucesso!</h3>
                                        <p>Mensagem enviada com sucesso, iremos responder brevemente, obrigado pelo seu
                                            contacto!</p>
                                        <button type="button"
                                            class="col-12 mx-auto my-4 fs-6 btn btn-outline-success btn-green rounded-5 border-2 px-2 py-3 d-flex justify-content-center align-items-center"
                                            style="max-width: 150px;">
                                            <span class="fw-bold">Voltar ao inicio</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div> -->
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