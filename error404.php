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
        <div class="backgroundImageHeader-Error404Page">
            <?php
            include "includes/navbar.php";

            ?>
            <!-- Header Section -->
        <div class="container-fluid headerSection-OtherPages  d-flex justify-content-center align-items-center">
            <div class="row mx-md-5 ">
                <h3 class="text-light">Page Not Found</h3>
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
        <div class="container-fluid my-5">
            <div class="row d-flex justify-content-center align-items-center my-5">

                <h3 class="col-12 d-flex justify-content-center mt-5"><span><img class="icon-monkey"
                            src="icons/emojione--see-no-evil-monkey.svg" alt=""></span>
                    &nbsp ooops! Erro &nbsp<span style="color: #5C7345;"> 404</span>.</h3>
                <h3 class="col-12 d-flex justify-content-center">Você tropeçou em território inexplorado</h3>

                <div class="col mt-3 mb-5 d-flex justify-content-center buttons-text ">
                    <a href="index.php" type="button"
                        style="background-color: #5C7345; color: white; min-width: 133px; max-width: 300px;"
                        class="col-5 fs-6 btn border-2 rounded-5 px-2 py-3 text-center fw-bold">
                        Voltar ao Inicio
                    </a>
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