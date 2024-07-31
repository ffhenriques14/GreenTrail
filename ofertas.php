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
        <div class="backgroundImageHeader-OfertasPage">
            
            <?php
            include "includes/navbar.php";
            ?>
            <!-- Header Section -->
            <div
                class="container-fluid headerSection-OtherPages  d-flex justify-content-center align-items-center">
                <div class="row mx-md-5 ">
                    <h3 class="text-light">A Sua Viagem</h3>
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

        <!-- Ofertas de Alojamento Section -->
        <div class="container-fluid mt-md-5">
            <div class="row mx-lg-5 my-5 d-flex justify-content-start">
                <span class="col-3 col-lg-2 btn-filter"><img class="me-1" src="icons/lets-icons--sort-arrow-light.svg"
                        alt="">Ordenar</span>
                <span class="col-2 col-lg-2 mb-5 btn-filter"><img class="me-1" src="icons/iconoir--filter.svg"
                        alt="">Filtrar</span>

                <p class="fw-bold fs-5 d-flex justify-content-center">7 alojamentos verdes encontrados</p>
            </div>
            <div class="row row-cols-1 row-cols-xl-3 mx-lg-5 ofertas-section-mobile">
                <?php
                $select_data = "SELECT * FROM `ofertas`";
                $select_query = mysqli_query($conn, $select_data);
                $rows = mysqli_num_rows($select_query);
                if (mysqli_num_rows($select_query) > 0) {
                    $sno = 1;
                    while ($row_data = mysqli_fetch_array($select_query)) {
                        ?>
                        <div class="col guia1_margins mb-5">
                            <div class="card rounded-0 border-0">
                                <img src="<?php echo $row_data['image'] ?>" class="card-img-top rounded-0 "
                                    alt="imagem de pedalada pelas montanhas de Minasota"
                                    style="height: 200px; object-fit: cover;">
                                <div class="card-body col-12 d-flex">
                                    <div class="col-8">
                                        <h5 class="card-title"><?php echo $row_data['hotel'] ?></h5>
                                        <p class="card-text my-2"><?php echo $row_data['descricao'] ?></p>
                                    </div>
                                    <div class="col-4 d-flex justify-content-end align-items-start">
                                        <div
                                            class=" rectangle_green-otherscard2 d-flex justify-content-center align-items-center">
                                            <h5 class="m-0 p-0" style="color: white;"><?php echo $row_data['avaliacao'] ?></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 card-body d-flex">
                                    <div class="col-5 col-md-6 d-flex align-items-center justify-content-start">
                                        <span class="me-2 fw-bold fs-5"><?php echo $row_data['custo'] ?>€</span>
                                        <span>5 noites, 2 adultos</span>
                                    </div>
                                    <div class="col-7 col-md-6 d-flex align-items-end justify-content-end">
                                        <a href="<?php echo $row_data['link'] ?>" target="_blank" type="button"
                                            style="background-color: #5C7345; color: white;      min-width: 133px;"
                                            class="btn border-2 rounded-5 px-5 py-2 text-center fw-bold">
                                            Ver disponiblidade
                                        </a>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
                <!-- <div class="col guia1_margins mb-5">
                    <div class="card rounded-0 border-0">
                        <img src="images/bird-nest-hotel-standard-1200x800.jpg" class="card-img-top rounded-0 "
                            alt="imagem de pedalada pelas montanhas de Minasota"
                            style="height: 200px; object-fit: cover;">
                        <div class="card-body col-12 d-flex">
                            <div class="col-8">
                                <h5 class="card-title">Amazon Malpique</h5>
                                <p class="card-text my-2">Contrary to popular belief, Lorem Ipsum is not simply
                                    random
                                    text.
                                    It has roots in a piece of classical Latin literature from 45 BC</p>
                            </div>
                            <div class="col-4 d-flex justify-content-end align-items-start">
                                <div
                                    class=" rectangle_green-otherscard2 d-flex justify-content-center align-items-center">
                                    <h5 class="m-0 p-0" style="color: white;">8.5</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 card-body d-flex">
                            <div class="col-5 col-md-6 d-flex align-items-center justify-content-start">
                                <span class="me-2 fw-bold fs-5">999€</span>
                                <span>5 noites, 2 adultos</span>
                            </div>
                            <div class="col-7 col-md-6 d-flex align-items-end justify-content-end">
                                <a href="https://www.naypaladhideaway.com/bird-nest/" target="_blank" type="button"
                                    style="background-color: #5C7345; color: white;      min-width: 133px;"
                                    class="btn border-2 rounded-5 px-5 py-2 text-center fw-bold">
                                    Ver disponiblidade
                                </a>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="col guia1_margins mb-5">
                    <div class="card rounded-0 border-0">
                        <img src="images/un-hotel-circulaire-1201x650.webp" class="card-img-top rounded-0 "
                            alt="imagem de pedalada pelas montanhas de Minasota"
                            style="height: 200px; object-fit: cover;">
                        <div class="card-body col-12 d-flex">
                            <div class="col-8">
                                <h5 class="card-title">Ocean Drive</h5>
                                <p class="card-text my-2">Contrary to popular belief, Lorem Ipsum is not simply
                                    random
                                    text.
                                    It has roots in a piece of classical Latin literature from 45 BC</p>
                            </div>
                            <div class="col-4 d-flex justify-content-end align-items-start">
                                <div
                                    class=" rectangle_green-otherscard2 d-flex justify-content-center align-items-center">
                                    <h5 class="m-0 p-0" style="color: white;">9.0</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 card-body d-flex">
                            <div class="col-5 col-md-6 d-flex align-items-center justify-content-start">
                                <span class="me-2 fw-bold fs-5">799€</span>
                                <span>5 noites, 2 adultos</span>
                            </div>
                            <div class="col-7 col-md-6 d-flex align-items-end justify-content-end">
                                <a href="https://svart.no" target="_blank" type="button"
                                    style="background-color: #5C7345; color: white;      min-width: 133px;"
                                    class="btn border-2 rounded-5 px-5 py-2 text-center fw-bold">
                                    Ver disponiblidade
                                </a>
                            </div>

                        </div>

                    </div>
                </div> -->
            </div>
            <!-- Desktop, width:1200px view -->
            <div class="container-fluid ofertas-section-desktop mb-5">
                <div class="row mx-lg-5">
                    <!-- Filtros -->
                    <div class="col-4 d-flex">
                        <div class="card mb-3 rounded-0 px-5" style="height: 98%; width: 100%;">
                            <div class="card-body col-12 d-flex ">
                                <div class="col-8">
                                    <h3 class="mt-5">Filtros</h3>
                                    <div class="mt-5">
                                        <h5 class="mb-3">Filtros Populares</h5>
                                        <div class="col-12  rounded-0 mb-3" role="group"
                                            aria-label="Basic checkbox toggle button group">

                                            <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
                                            <label class="btn btn-outline-success btncheck-edit rounded-0"
                                                for="btncheck1"></label>
                                            <span class="fw-bold ms-3 my-auto">com vista mar</span>
                                        </div>

                                        <div class="col-12  rounded-0 mb-3" role="group"
                                            aria-label="Basic checkbox toggle button group">

                                            <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
                                            <label class="btn btn-outline-success btncheck-edit rounded-0"
                                                for="btncheck2"></label>
                                            <span class="fw-bold ms-3 my-auto">com piscina</span>
                                        </div>

                                        <div class="col-12 rounded-0 mb-3" role="group"
                                            aria-label="Basic checkbox toggle button group">

                                            <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
                                            <label class="btn btn-outline-success btncheck-edit rounded-0"
                                                for="btncheck3"></label>
                                            <span class="fw-bold ms-3 my-auto">com pequeno-almoço</span>
                                        </div>

                                    </div>
                                    <div class="mt-5">
                                        <h5 class="mb-3">Por Região</h5>
                                        <div class="col-12  rounded-0 mb-3" role="group"
                                            aria-label="Basic checkbox toggle button group">

                                            <input type="checkbox" class="btn-check" id="btncheck4" autocomplete="off">
                                            <label class="btn btn-outline-success btncheck-edit rounded-0"
                                                for="btncheck4"></label>
                                            <span class="fw-bold ms-3 my-auto">Asia Norte</span>
                                        </div>

                                        <div class="col-12  rounded-0 mb-3" role="group"
                                            aria-label="Basic checkbox toggle button group">

                                            <input type="checkbox" class="btn-check" id="btncheck5" autocomplete="off">
                                            <label class="btn btn-outline-success btncheck-edit rounded-0"
                                                for="btncheck5"></label>
                                            <span class="fw-bold ms-3 my-auto">Oceania</span>
                                        </div>

                                        <div class="col-12 rounded-0 mb-3" role="group"
                                            aria-label="Basic checkbox toggle button group">

                                            <input type="checkbox" class="btn-check" id="btncheck6" autocomplete="off">
                                            <label class="btn btn-outline-success btncheck-edit rounded-0"
                                                for="btncheck6"></label>
                                            <span class="fw-bold ms-3 my-auto">America</span>
                                        </div>

                                    </div>
                                    <div class="mt-5">
                                        <h5 class="mb-3">Tipo de Férias</h5>
                                        <div class="col-12  rounded-0 mb-3" role="group"
                                            aria-label="Basic checkbox toggle button group">

                                            <input type="checkbox" class="btn-check" id="btncheck7" autocomplete="off">
                                            <label class="btn btn-outline-success btncheck-edit rounded-0"
                                                for="btncheck7"></label>
                                            <span class="fw-bold ms-3 my-auto">Luxuosa</span>
                                        </div>

                                        <div class="col-12  rounded-0 mb-3" role="group"
                                            aria-label="Basic checkbox toggle button group">

                                            <input type="checkbox" class="btn-check" id="btncheck8" autocomplete="off">
                                            <label class="btn btn-outline-success btncheck-edit rounded-0"
                                                for="btncheck8"></label>
                                            <span class="fw-bold ms-3 my-auto">Aventuras</span>
                                        </div>

                                        <div class="col-12 rounded-0 mb-3" role="group"
                                            aria-label="Basic checkbox toggle button group">

                                            <input type="checkbox" class="btn-check" id="btncheck9" autocomplete="off">
                                            <label class="btn btn-outline-success btncheck-edit rounded-0"
                                                for="btncheck9"></label>
                                            <span class="fw-bold ms-3 my-auto">Relaxante</span>
                                        </div>

                                    </div>


                                </div>
                                <div class="col-4">
                                    <form class=" form-floating" style="max-width: 230px;">
                                        <div class="col form-floating mt-5 placeholder-text">
                                            <select class="form-select py-0 p-3 rounded-0 border-2" id="floatingSelect"
                                                aria-label="Floating label select example"
                                                style="color: rgb(0, 0, 0, 50%); border-color: #5C7345;">
                                                <option selected>Ordenar por</option>
                                                <option value="1" class="placeholder-text">One</option>
                                                <option value="2" class="placeholder-text">Two</option>
                                                <option value="3" class="placeholder-text">Three</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                            </div>


                        </div>
                    </div>
                    <!-- Cards de alojamentos -->
                    <div class="col-8">
                        <?php
                        $select_data = "SELECT * FROM `ofertas`";
                        $select_query = mysqli_query($conn, $select_data);
                        $rows = mysqli_num_rows($select_query);
                        if (mysqli_num_rows($select_query) > 0) {
                            $sno = 1;
                            while ($row_data = mysqli_fetch_array($select_query)) {
                                ?>
                                <div class="card mb-3">
                                    <div class="row g-0">
                                        <div class="col-md-5">
                                            <img src="<?php echo $row_data['image'] ?>" class="img-fluid " alt="..."
                                                style="height: 100%; width: 100%; object-fit: cover;">
                                        </div>
                                        <div class="col-md-7">
                                            <div class="card-body col-12 d-flex">
                                                <div class="col-8">
                                                    <h5 class="card-title"><?php echo $row_data['hotel'] ?></h5>
                                                    <p class="card-text my-2"><?php echo $row_data['descricao'] ?></p>
                                                </div>
                                                <div class="col-4 d-flex justify-content-end align-items-start">
                                                    <div
                                                        class=" rectangle_green-otherscard2 d-flex justify-content-center align-items-center">
                                                        <h5 class="m-0 p-0" style="color: white;">
                                                            <?php echo $row_data['avaliacao'] ?></h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 card-body d-flex">
                                                <div class="col-5 col-md-6 d-flex align-items-center justify-content-start">
                                                    <span class="me-2 fw-bold fs-5"><?php echo $row_data['custo'] ?>€</span>
                                                    <span>5 noites, 2 adultos</span>
                                                </div>
                                                <div class="col-7 col-md-6 d-flex align-items-end justify-content-end">
                                                    <a href="<?php echo $row_data['link'] ?>" target="_blank" type="button"
                                                        style="background-color: #5C7345; color: white;      min-width: 133px;"
                                                        class="btn border-2 rounded-5 px-2 px-xxl-4 py-2 text-center fw-bold">
                                                        Ver disponiblidade
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        ?>
                        <!-- <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-5">
                                    <img src="images/bird-nest-hotel-standard-1200x800.jpg" class="img-fluid " alt="..."
                                        style="height: 100%; width: 100%; object-fit: cover;">
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body col-12 d-flex">
                                        <div class="col-8">
                                            <h5 class="card-title">Amazon Malpique</h5>
                                            <p class="card-text my-2">Contrary to popular belief, Lorem Ipsum is not
                                                simply
                                                random
                                                text.
                                                It has roots in a piece of classical Latin literature from 45 BC</p>
                                        </div>
                                        <div class="col-4 d-flex justify-content-end align-items-start">
                                            <div
                                                class=" rectangle_green-otherscard2 d-flex justify-content-center align-items-center">
                                                <h5 class="m-0 p-0" style="color: white;">8.5</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 card-body d-flex">
                                        <div class="col-5 col-md-6 d-flex align-items-center justify-content-start">
                                            <span class="me-2 fw-bold fs-5">999€</span>
                                            <span>5 noites, 2 adultos</span>
                                        </div>
                                        <div class="col-7 col-md-6 d-flex align-items-end justify-content-end">
                                            <a href="https://www.naypaladhideaway.com/bird-nest/" target="_blank"
                                                type="button"
                                                style="background-color: #5C7345; color: white;      min-width: 133px;"
                                                class="btn border-2 rounded-5 px-2 px-xxl-4 py-2 text-center fw-bold">
                                                Ver disponiblidade
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-5">
                                    <img src="images/un-hotel-circulaire-1201x650.webp" class="img-fluid " alt="..."
                                        style="height: 100%; width: 100%; object-fit: cover;">
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body col-12 d-flex">
                                        <div class="col-8">
                                            <h5 class="card-title">Ocean Drive</h5>
                                            <p class="card-text my-2">Contrary to popular belief, Lorem Ipsum is not
                                                simply
                                                random
                                                text.
                                                It has roots in a piece of classical Latin literature from 45 BC</p>
                                        </div>
                                        <div class="col-4 d-flex justify-content-end align-items-start">
                                            <div
                                                class=" rectangle_green-otherscard2 d-flex justify-content-center align-items-center">
                                                <h5 class="m-0 p-0" style="color: white;">9.0</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 card-body d-flex">
                                        <div class="col-5 col-md-6 d-flex align-items-center justify-content-start">
                                            <span class="me-2 fw-bold fs-5">799€</span>
                                            <span>5 noites, 2 adultos</span>
                                        </div>
                                        <div class="col-7 col-md-6 d-flex align-items-end justify-content-end">
                                            <a href="https://svart.no" target="_blank" type="button"
                                                style="background-color: #5C7345; color: white;      min-width: 133px;"
                                                class="btn border-2 rounded-5 px-2 px-xxl-4 py-2 text-center fw-bold">
                                                Ver disponiblidade
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>

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