<?php
include 'connection.php';
?>
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
        <div class="backgroundImageHeader-GuiasPage">
            <?php
            include "includes/navbar.php";

            ?>

            <!-- Header Section -->
            <div class="container-fluid headerSection-OtherPages  d-flex justify-content-center align-items-center">

                <div class="row mx-md-5 ">
                    <h3 class="text-light">Guias de Viagem</h3>
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
        <div class="container-fluid my-5 ">
            <div class="row d-flex justify-content-center align-items-center">
                <h1 class="mb-5">Guias de Viagem</h1>
                <form class="row col-12 form-floating mx-auto" style="max-width: 1000px;">
                    <div class="col-12 col-md-8 form-floating mb-4 placeholder-text">
                        <select class="form-select py-0 p-3 rounded-0 border-0 "
                            id="floatingSelect" aria-label="Floating label select example"
                            style="color: rgb(0, 0, 0, 50%);">
                            <option selected>Escolha o tipo de Viagem</option>
                            <option value="1" class="placeholder-text">One</option>
                            <option value="2" class="placeholder-text">Two</option>
                            <option value="3" class="placeholder-text">Three</option>
                        </select>
                    </div>
                    <!-- <div class="btn-group rounded-0" role="group" aria-label="Basic checkbox toggle button group">
                        <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
                        <label class="btn btn-outline-success btncheck-edit rounded-0" for="btncheck1"></label>
                        <span class="fw-bold ms-3 my-auto">Feito por green Hikers</span>
                    </div> -->
                    <div class="col-12 col-md-4 d-flex justify-content-end justify-content-lg-start buttons-text2 mb-3"
                        style="height: 58px">
                        <a type="submit" name="submit" href="add_guias.php"
                            class="fs-6 btn btn-outline-success btn-green rounded-0 border-2 px-3 py-3 "
                            value="login now">
                            <span class=" fw-bold">ADICIONAR GUIA</span>
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 guia1_margins mx-lg-5">
            <?php
            $select_data = "SELECT * FROM `guiasviagem`";
            $select_query = mysqli_query($conn, $select_data);
            $rows = mysqli_num_rows($select_query);
            if (mysqli_num_rows($select_query) > 0) {
                $sno = 1;
                while ($row_data = mysqli_fetch_array($select_query)) {
                    ?>
                    <div class="col guia1_margins mb-5 pb-5">
                        <div class="card rounded-0 border-0">
                            <img src="<?php echo "uploaded_img_guias/" . $row_data['image'] ?>" class="card-img-top rounded-0"
                                alt="imagem de pedalada pelas montanhas de Minasota"
                                style="max-height: 400px;  object-fit: cover;">
                            <div class="rectangle_green-otherscard icons d-flex justify-content-center align-items-center">
                                <img class="icons_size " src="<?php echo "uploaded_icon/" . $row_data['icon'] ?>"
                                    alt="icon de seleção 'Green Trail'">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row_data['titulo'] ?></h5>
                                <p class="card-text mt-2"><?php echo $row_data['descricao'] ?></p>
                                <a href="#"
                                    class="d-flex justify-content-end link-offset-2 link-underline link-underline-opacity-0">Veja
                                    mais guias -></a>
                            </div>
                        </div>
                    </div>
                    <?php

                }
            }
            ?>
            <!-- <div class="col guia1_margins mb-5">
                <div class="card rounded-0 border-0">
                    <img src="images/Valdez__Kayak__Alaska__USA_Shutterstock__1_.webp" class="card-img-top rounded-0"
                        alt="...">
                    <div class="rectangle_green-otherscard icons d-flex justify-content-center align-items-center">
                        <img class="icons_size " src="icons/material-symbols--kayaking.svg"
                            alt="icon de seleção 'Green Trail'">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Kayak pelo Gelo da Gronelândia</h5>
                        <p class="card-text mt-2">Contrary to popular belief, Lorem Ipsum is not simply
                            random
                            text.
                            It has roots in a piece of classical Latin literature from 45 BC</p>
                        <a href="#"
                            class="d-flex justify-content-end link-offset-2 link-underline link-underline-opacity-0">Veja
                            mais guias -></a>
                    </div>
                </div>
            </div>
            <div class="col guia1_margins "> -->
            <!-- <div class="card rounded-0 border-0">
                    <img src="images/GettyImages-992515854-18d0d89fd5f249709eb40b68e2f72273.jpg"
                        class="card-img-top rounded-0" alt="...">
                    <div class="rectangle_green-otherscard icons d-flex justify-content-center align-items-center">
                        <img class="icons_size " src="icons/gis--hiker.svg" alt="icon de seleção 'Green Trail'">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Caminhada pelas Montanhas Azuis</h5>
                        <p class="card-text mt-2">Contrary to popular belief, Lorem Ipsum is not simply
                            random
                            text.
                            It has roots in a piece of classical Latin literature from 45 BC</p>
                        <a href="#"
                            class="d-flex justify-content-end link-offset-2 link-underline link-underline-opacity-0">Veja
                            mais guias -></a>
                    </div>
                </div> -->
        </div>
    </div>
    
    <!-- Footer Section -->
    <?php
    require_once "includes/footer.php";
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
</body>

</html>