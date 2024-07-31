<?php

// Include connection file
require_once "connection.php";
ini_set('display_errors', 0);
session_start();

// $user_id = $_SESSION['user_id'];

// if (!isset($user_id)==true) {
//     header('location:login.php');
// }else{
//     header('location:index.php');
// };
$user_id = $_SESSION['user_id'];

if (isset($_GET['logout'])) {
    unset($user_id);
    session_destroy();
    header('location:login.php');
}
;


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
        <div class=" backgroundImageHeader">
            <!-- NavBar Section -->
            <div class="navbar-body pt-3 d-flex justify-content-end">
                <nav class="navbar">
                    <div class="container-fluid">
                        <div class="row d-flex align-items-center">
                            <!-- Button Search -->
                            <div class="col-1 mx-3 ">
                                <img class="icons_size card-explore-pointer" src="icons/basil--search-outline-white.svg"
                                    alt="" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                <!-- <button type="button" class="col-12 btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop">
                                    <img src="icons/fluent--arrow-enter-20-filled.svg" alt="" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop">
                                </button> -->
                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <img src="images/logo_color2.svg" alt="" style="height: 50px;"
                                                    class="mx-auto">

                                                <button type="button" class="btn-close mx-0" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="col-12 modal-body text-center">
                                                <h3 class="" id="staticBackdropLabel">O que gostaria de pesquisar?</h3>
                                                <div class="col input-group my-4">
                                                    <div class="form-floating">
                                                        <input type="text"
                                                            class="form-control rounded-start-5 border-2 border-end-0 px-5"
                                                            id="floatingInputGroup1" placeholder="Username">
                                                        <label class="placeholder-text px-5"
                                                            for="floatingInputGroup1">Search
                                                            here</label>
                                                    </div>
                                                    <span
                                                        class="input-group-text rounded-end-5  border-2 border-start-0 pe-4"
                                                        style="background-color: white;"><img class="mx-auto icons_size"
                                                            src="icons/basil--search-outline.svg"
                                                            alt="icon de mapa"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Button Login -->
                            <!-- <div class="col-1 mx-3 ">
                                <img class="icons_size card-explore-pointer"
                                    src="icons/fluent--arrow-enter-20-filled.svg" alt="" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop2">
                                <button type="button" class="col-12 btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop2">
                                    Login
                                </button>
                                <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <img src="images/logo_color2.svg" alt="" style="height: 50px;"
                                                    class="mx-auto">

                                                <button type="button" class="btn-close   mx-0" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-header backgroundImageHeader-popUp" style="height:150px;">
                                            </div>
                                            <div class="modal-body">
                                                <div class="container-fluid mb-5">
                                                    <div class="row d-flex justify-content-center align-items-center">

                                                        <form action="" method="post" class="col-12  g-3"
                                                            style="max-width: 1000px; action="" method=" post"
                                                            enctype="multipart/form-data"">
                                                            <h1 class=" d-flex justify-content-start my-3">Login</h1>

                                                            <?php
                                                            if (isset($message)) {
                                                                foreach ($message as $message) {
                                                                    echo '<div class="message">' . $message . '</div>';
                                                                }
                                                            }
                                                            ?>
                                                            <div class="col-12 mb-3">
                                                                <label for="inputEmail4"
                                                                    class="form-label fw-bold">Endereço de
                                                                    Email*</label>
                                                                <input type="email" name="email"
                                                                    class="form-control form-control-lg rounded-0 border-2 placeholder-text"
                                                                    id="inputEmail4" placeholder="O seu e-mail"
                                                                    required>
                                                            </div>
                                                            <div class="col-12 mb-4">
                                                                <label for="inputPassword4"
                                                                    class="form-label fw-bold">Password*</label>
                                                                <input type="password" name="password"
                                                                    class="form-control form-control-lg rounded-0 border-2 placeholder-text"
                                                                    id="inputPassword4"
                                                                    placeholder="Digite a sua palavra-chave" required>
                                                            </div>
                                                            <div
                                                                class="col-12 d-flex justify-content-md-start buttons-text2 mb-3">
                                                                <div class="col-6 d-flex justify-content-start">
                                                                    <button type="submit" name="submit"
                                                                        value="login now"
                                                                        class="fs-6 btn btn-outline-success btn-green rounded-0 border-2 px-5 py-3 d-flex justify-content-center align-items-center">
                                                                        <span class="fw-bold">LOGIN</span>
                                                                    </button>
                                                                </div>

                                                                <div class="col-6 d-flex justify-content-end">
                                                                    <a type="submit" href="registo.php"
                                                                        class="fs-6 btn btn-outline-success btn-green rounded-0 border-2 px-5 py-3 d-flex justify-content-center align-items-center">
                                                                        <span class="fw-bold">RESGISTE-SE</span>
                                                                    </a>
                                                                </div>


                                                            </div>

                                                            <a href="" class="fw-bold text-decoration-none"
                                                                style="color: #35415A;">Perdeu a
                                                                sua
                                                                password?</a>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <?php
                            $select = mysqli_query($conn, "SELECT * FROM `green_users` WHERE id = '$user_id'") or die('query failed');
                            if (mysqli_num_rows($select) > 0) {
                                $fetch = mysqli_fetch_assoc($select);
                            }
                            if ($fetch['image'] == '') {
                                echo ' <div class="col-3 mx-5 d-flex justify-content-center" ><a href="profile.php"><img src="images/default-avatar.png" style="width:50px; height: 50px; border-radius: 100px;"></a></div>';
                            } else {
                                echo '<div class="col-3 mx-5 d-flex justify-content-center" ><a href="profile.php"><img src="uploaded_img/' . $fetch['image'] . '" style="width:50px; height: 50px; border-radius: 100px;"></a></div>';
                            }
                            ?>
                            <div>
                                <input type="checkbox" id="active">
                                <label for="active" class="menu-btn col-3">
                                    <div id="button">
                                        <div id="icon">
                                            <span class="lines"></span>
                                        </div>
                                    </div>
                                </label>
                                <div class="wrapper ">
                                    <ul class="mx-0 px-0">
                                        <li><a href="index.php" target="_top">Home</a></li>
                                        <li><a href="sobre.php" target="_top">Sobre Nós</a></li>
                                        <li><a href="error404.php" target="_top">Destinos</a></li>
                                        <li><a href="ofertas.php" target="_top">Ofertas</a></li>
                                        <li><a href="guias.php" target="_top">Guias de Viagem</a></li>
                                        <li><a href="contacto.php" target="_top">Contacte</a></li>
                                        <li><a href="faq.php" target="_top">F A Q</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>



                    </div>
                </nav>
            </div>
            <!-- Header Section -->
            <div class="container-fluid headerSection  d-flex justify-content-center align-items-center">
                <div class="row mx-md-5 ">
                    <img style="max-width: 450px; max-height: 150px; min-height: 95px;" class="«col-12 mx-auto mb-5"
                        src="images/logo_main.svg" alt="logo da marca, 'Green Trail' ">
                    <div class="text-center">
                        <div class="row col">
                            <div class="col-6 d-flex justify-content-md-end">
                                <a type="button" href="sobre.php"
                                    class="col-12 col-md-8 fs-6 btn btn-outline-light rounded-0 border-white border-2 px-2 py-3 d-flex justify-content-center align-items-center">
                                    <span class="me-3 buttons-text2">SOBRE NÓS</span> <img class="btn_seta_icon"
                                        src="icons/bitcoin-icons--arrow-right-outline.svg" alt="seta para a direita">
                                </a>
                            </div>

                            <div class="col-6 d-flex justify-content-md-start">
                                <a type="button" href="registo.php"
                                    class="col-12 col-md-8 fs-6 btn btn-outline-light rounded-0 border-white border-2 px-2 py-3 d-flex justify-content-center align-items-center">
                                    <span class="me-3 buttons-text2">REGISTE-SE</span>
                                    <img class="btn_seta_icon" src="icons/bitcoin-icons--arrow-right-outline.svg"
                                        alt="seta para a direita">
                                </a>
                            </div>
                        </div>
                    </div>

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
        <!-- MarqueViagem Section -->
        <div class="container-fluid my-5 ">
            <div class="row d-flex justify-content-center align-items-center">
                <h1 class="mb-5">Marque a Sua Viagem</h1>
                <form class="col-12 form-floating" style="max-width: 1000px;">
                    <div class="col input-group mb-3 mb-md-5">
                        <div class="form-floating">
                            <input type="text" class="form-control rounded-0 border-0" id="floatingInputGroup1"
                                placeholder="Username">
                            <!-- <label class="placeholder-text" for="floatingInputGroup1"   >Região, Pais, Cidade</label> -->
                            <label class="placeholder-text " for="floatingInputGroup1" style="z-index: 1;">Região, Pais,
                                Cidade</label>
                        </div>
                        <span class="input-group-text rounded-0 map_div"><img class="mx-auto" src="icons/uiw--map.svg"
                                alt="icon de mapa"></span>
                    </div>

                    <div class="col form-floating mb-4 placeholder-text">
                        <select class="form-select py-0 p-3 rounded-0 border-0" id="floatingSelect"
                            aria-label="Floating label select example" style="color: rgb(0, 0, 0, 50%);">
                            <option selected>Escolha o tipo de Viagem</option>
                            <option value="1" class="placeholder-text">One</option>
                            <option value="2" class="placeholder-text">Two</option>
                            <option value="3" class="placeholder-text">Three</option>
                        </select>
                    </div>
                    <div class="col mt-3 d-flex justify-content-center buttons-text ">
                        <a type="button" href="ofertas.php"
                            style="background-color: #5C7345; color: white; min-width: 133px;"
                            class="col-5 fs-6 btn border-2 rounded-5 px-2 py-3 text-center fw-bold">
                            Pesquisar
                        </a>
                    </div>
                </form>
            </div>
        </div>
        <!-- Explore Section -->
        <div class="container-fluid selectors mt-5 mb-3">
            <h1 class="d-flex justify-content-center justify-content-md-start mb-4 ms-md-5 ps-md-5">Explore</h1>
            <div class="row row-cols-2 row-cols-lg-4 g-3 mx-lg-5">
                <div class="col">
                    <div class="card div-explore-selectores card-explore-pointer tab-link rounded-0 border-0"
                        data-div="div-one" tabindex="1">
                        <div class="explore-cards-image">
                            <img src="images/explor_select_1.jpg" class="card-img-top rounded-0"
                                alt="Opção 'Green Trail' imagem" style="width:100%; 
                                height:100%; 
                                object-fit: cover; ">
                            <div class="icons ps-3"><img class="icons_size" src="icons/GT.svg"
                                    alt="icon de seleção 'Green Trail'"></div>
                        </div>
                        <div id="box" class="card-body py-2">
                            <p class="card-title fw-bold m-0 p-0">Green Trail</p>
                        </div>
                    </div>
                </div>
                <div class="col explore-cards">
                    <div class="card div-explore-selectores card-explore-pointer tab-link rounded-0 border-0"
                        data-div="div-two" tabindex="2">
                        <div class="explore-cards-image">
                            <img src="images/explor_select_2.jpg" class="card-img-top rounded-0 explore-cards-image"
                                alt="Opção 'Responsible Travel' imagem" style="width:100%; 
                            height:100%; 
                            object-fit: cover; ">
                            <div class="icons ps-3"><img class="icons_size"
                                    src="icons/streamline--travel-places-camping-tent-outdoor-recreation-camping-tent-teepee-tipi.svg"
                                    alt="icon de seleção 'Green Trail'"></div>
                        </div>

                        <div class="card-body py-2">
                            <p class="card-title fw-bold m-0 p-0">Responsible Travel</p>
                        </div>
                    </div>
                </div>
                <div class="col explore-cards">
                    <div class="card div-explore-selectores card-explore-pointer tab-link rounded-0 border-0"
                        data-div="div-three" tabindex="3">
                        <div class="explore-cards-image">
                            <img src="images/explor_select_3.jpg" class="card-img-top rounded-0 explore-cards-image"
                                alt="Opção 'Curb Your Carbon' imagem" style="width:100%; 
                                height:100%; 
                                object-fit: cover; ">
                            <div class="icons ps-3"><img class="icons_size" src="icons/raphael--green.svg"
                                    alt="icon de seleção 'Green Trail'"></div>
                        </div>

                        <div class="card-body py-2">
                            <p class="card-title fw-bold m-0 p-0">Curb Your Carbon</p>
                        </div>
                    </div>
                </div>
                <div class="col explore-cards">
                    <div class="card  card-explore-pointer div-explore-selectores tab-link rounded-0 border-0"
                        data-div="div-four" tabindex="4">
                        <div class="explore-cards-image">
                            <img src="images/explor_select_4.jpg" class="card-img-top rounded-0 explore-cards-image"
                                alt="Opção 'Marque a Sua Viagem" style="width:100%; 
                                height:100%; 
                                object-fit: cover; ">
                            <div class="icons ps-3"><img class="icons_size"
                                    src="icons/material-symbols--travel-luggage-and-bags-rounded.svg"
                                    alt="icon de seleção 'Green Trail'"></div>
                        </div>

                        <div class="card-body py-2">
                            <p class="card-title fw-bold m-0 p-0">Marque a Sua Viagem</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Explore secção de desktop -->
        <div class="container-fluid imagem cards-selected explore_selected_card_desktop">
            <div class="div-one content-selected">
                <img src="images/explore_selected_1.jpg" class="card-img-top rounded-0 img_card_sectionExplore "
                    alt="Imagem Green Trail">
                <div class="col">
                    <div class="card border-0 rounded-0 explore_selected_card">
                        <div class="rectangle_green icons d-flex justify-content-center align-items-center"><img
                                class="icons_size " src="icons/GT.svg" alt="icon de seleção 'Green Trail'">
                        </div>
                        <div class="card-body px-5">
                            <h3 class="card-title">Green Trail</h3>
                            <p class="card-text">Contrary to popular belief, Lorem Ipsum is not simply random
                                text.
                                It has roots in a piece of classical Latin literature from 45 BC</p>

                            <div class="my-3">
                                <a href="sobre.php" class="text-decoration-none d-flex justify-content-end"
                                    class="d-flex justify-content-end link-offset-2 link-underline link-underline-opacity-0">
                                    Conheça-nos <img class="ps-2"
                                        src="icons/bitcoin-icons--arrow-right-outline-green.svg"
                                        alt="icon seta direita">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="div-two content-selected div-hide">
                <img src="images/explore_selected_2.jpg" class="card-img-top rounded-0 img_card_sectionExplore "
                    alt="...">
                <div class="col">
                    <div class="card border-0 rounded-0 explore_selected_card">
                        <div class="rectangle_green icons d-flex justify-content-center align-items-center"><img
                                class="icons_size "
                                src="icons/streamline--travel-places-camping-tent-outdoor-recreation-camping-tent-teepee-tipi.svg"
                                alt="icon de seleção 'Green Trail'"></div>
                        <div class="card-body px-5">
                            <h3 class="card-title">Responsible Travel</h3>
                            <p class="card-text">Contrary to popular belief, Lorem Ipsum is not simply random
                                text.
                                It has roots in a piece of classical Latin literature from 45 BC</p>
                            <div class="my-3">
                                <a href="error404.php"
                                    class="d-flex justify-content-end link-offset-2 link-underline link-underline-opacity-0">
                                    Saiba mais <img class="ps-2"
                                        src="icons/bitcoin-icons--arrow-right-outline-green.svg"
                                        alt="icon seta direita">
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="div-three content-selected div-hide">
                <img src="images/explore_selected_3.jpg" class="card-img-top rounded-0 img_card_sectionExplore "
                    alt="...">
                <div class="col">
                    <div class="card border-0 rounded-0 explore_selected_card">
                        <div class="rectangle_green icons d-flex justify-content-center align-items-center"><img
                                class="icons_size " src="icons/raphael--green.svg" alt="icon de seleção 'Green Trail'">
                        </div>
                        <div class="card-body px-5">
                            <h3 class="card-title">Curb Your Carbon</h3>
                            <p class="card-text">This is a wider card with supporting text below as a natural
                                lead-in to additional content. This content is a little bit longer.</p>
                            <div class="my-3"><a href="error404.php"
                                    class="d-flex justify-content-end link-offset-2 link-underline link-underline-opacity-0">
                                    Saiba mais <img class="ps-2"
                                        src="icons/bitcoin-icons--arrow-right-outline-green.svg"
                                        alt="icon seta direita">
                                </a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="div-four content-selected div-hide">
                <img src="images/explore_selected_4.jpg" class="card-img-top rounded-0 img_card_sectionExplore "
                    alt="...">
                <div class="col">
                    <div class="card border-0 rounded-0 explore_selected_card">
                        <div class="rectangle_green icons d-flex justify-content-center align-items-center"><img
                                class="icons_size " src="icons/material-symbols--travel-luggage-and-bags-rounded.svg"
                                alt="icon de seleção 'Green Trail'"></div>
                        <div class="card-body px-5">
                            <h3 class="card-title">As melhores Férias</h3>
                            <p class="card-text">This is a wider card with supporting text below as a natural
                                lead-in to additional content. This content is a little bit longer.</p>
                            <div class="my-3"><a href="ofertas.php"
                                    class="text-decoration-none d-flex justify-content-end"
                                    class="d-flex justify-content-end link-offset-2 link-underline link-underline-opacity-0">
                                    Marque já <img class="ps-2" src="icons/bitcoin-icons--arrow-right-outline-green.svg"
                                        alt="icon seta direita">
                                </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Explore secção mobile -->
        <div class="container-fluid imagem explore_selected_card_phone">
            <div class="row mt-4 gx-0">
                <div class="card div-one content-selected rounded-0 border-0 ">
                    <img src="images/explore_selected_1.jpg" class="card-img-top rounded-0 img_card_sectionExplore"
                        alt="...">
                    <div class="card-body mx-3 my-3">
                        <h3 class="card-title">Green Trail</h3>
                        <p class="card-text mt-2">Contrary to popular belief, Lorem Ipsum is not simply random text.
                            It has roots in a piece of classical Latin literature from 45 BC</p>
                        <a href="#"
                            class="d-flex justify-content-end link-offset-2 link-underline link-underline-opacity-0">Conheça-nos
                            <img class="ps-2" src="icons/bitcoin-icons--arrow-right-outline-green.svg"
                                alt="icon seta direita"></a>
                    </div>
                </div>
                <div class="card div-two content-selected rounded-0 border-0 div-hide">
                    <img src="images/explore_selected_2.jpg" class="card-img-top rounded-0" alt="...">
                    <div class="card-body mx-3 my-3">
                        <h3 class="card-title">Responsible Travel</h3>
                        <p class="card-text mt-2">Contrary to popular belief, Lorem Ipsum is not simply random text.
                            It has roots in a piece of classical Latin literature from 45 BC</p>
                        <a href="#"
                            class="d-flex justify-content-end link-offset-2 link-underline link-underline-opacity-0">Veja
                            mais <img class="ps-2" src="icons/bitcoin-icons--arrow-right-outline-green.svg"
                                alt="icon seta direita"></a>
                    </div>
                </div>
                <div class="card div-three content-selected rounded-0 border-0 div-hide">
                    <img src="images/explore_selected_3.jpg" class="card-img-top rounded-0" alt="...">
                    <div class="card-body mx-3 my-3">
                        <h3 class="card-title">Curb Your Carbon</h3>
                        <p class="card-text mt-2">Contrary to popular belief, Lorem Ipsum is not simply random text.
                            It has roots in a piece of classical Latin literature from 45 BC</p>
                        <a href="#"
                            class="d-flex justify-content-end link-offset-2 link-underline link-underline-opacity-0">Veja
                            mais <img class="ps-2" src="icons/bitcoin-icons--arrow-right-outline-green.svg"
                                alt="icon seta direita"></a>
                    </div>
                </div>
                <div class="card div-four content-selected rounded-0 border-0 div-hide">
                    <img src="images/explore_selected_4.jpg" class="card-img-top rounded-0" alt="...">
                    <div class="card-body mx-3 my-3">
                        <h3 class="card-title">Marque a Sua Viagem</h3>
                        <p class="card-text mt-2">Contrary to popular belief, Lorem Ipsum is not simply random text.
                            It has roots in a piece of classical Latin literature from 45 BC</p>
                        <a href="#"
                            class="d-flex justify-content-end link-offset-2 link-underline link-underline-opacity-0">Marque
                            já <img class="ps-2" src="icons/bitcoin-icons--arrow-right-outline-green.svg"
                                alt="icon seta direita"></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Junta-teNos Section -->
        <div class="container-fluid background_sections2">
            <div class="row text-center text-light mx-lg-5">
                <h1 class="my-5">Junte-se a Nós</h1>
                <div class="container-fluid ">
                    <div class="row row-cols-md-2 row-cols-lg-3">
                        <!-- <div class="mb-5 px-4">
                                <img src="icons/ph--play-fill.svg" alt="Icon de Play" style="position: absolute;
                                top: 2600px;
                                left: 100px;" class="d-flex justify-content-center ">
                                <img class="juntese_img1" src="images/Juntese_img1.jpg" alt="Imagem de Instagram 1"
                                    style="width:100%; object-fit: cover; ">
                            </div> 
                            <div class="mb-5 px-4 img_dp_none1">
                                <img class="juntese_img1" src="images/Juntese_img1.jpg" alt=""
                                    style="width:100%; object-fit: cover; ">
                            </div>
                            <div class="mb-5 px-4 img_dp_none2">
                                <img class="juntese_img1" src="images/Juntese_img1.jpg" alt=""
                                    style="width:100%; object-fit: cover; ">
                            </div>-->
                        <div class="img-overlay-wrap mb-5">
                            <img class="juntese_img1" src="images/Juntese_img1.jpg"
                                style="width:100%; object-fit: cover;">
                            <!-- <svg viewBox="0 0 200 200">
                                  <circle cx="75" cy="75" r="50" fill="rebeccapurple"/>
                                </svg> -->
                            <img src="icons/ph--play-fill.svg" alt="Icon de Play" class="img-overlay-wrap-svg"
                                style="width: 45px; height: 45px;">
                        </div>
                        <div class="img-overlay-wrap img_dp_none1 mb-5">
                            <img class="juntese_img1" src="images/GettyImages-534978766-e950348.webp"
                                style="width:100%; object-fit: cover;">
                            <!-- <svg viewBox="0 0 200 200">
                                  <circle cx="75" cy="75" r="50" fill="rebeccapurple"/>
                                </svg> -->
                            <img src="icons/ph--play-fill.svg" alt="Icon de Play" class="img-overlay-wrap-svg"
                                style="width: 45px; height: 45px;">
                        </div>
                        <div class="img-overlay-wrap img_dp_none2 mb-5">
                            <img class="juntese_img1" src="images/KW-why-travel-is-important.jpg"
                                style="width:100%; object-fit: cover;">
                            <!-- <svg viewBox="0 0 200 200">
                                  <circle cx="75" cy="75" r="50" fill="rebeccapurple"/>
                                </svg> -->
                            <img src="icons/ph--play-fill.svg" alt="Icon de Play" class="img-overlay-wrap-svg"
                                style="width: 45px; height: 45px;">
                        </div>

                    </div>
                </div>

                <span class="mb-5 d-flex justify-content-center align-items-center"><img class="me-3 icons_size"
                        src="icons/hugeicons--instagram.svg" alt="instagram icon">
                    SIGA-NOS NO INSTAGRAM
                </span>
            </div>
        </div>
        <!-- Guias Section -->
        <div class="container-fluid bg_guias_section ">
            <div class="row ">
                <div class="my-5 col-12">
                    <h1>Guias de Viagem</h1>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 mx-lg-5">
                <div class="col guia1_margins">
                    <div class="card rounded-0 border-0">
                        <img src="images/pedaladaMinasota.jpg" class="card-img-top rounded-0"
                            alt="imagem de pedalada pelas montanhas de Minasota">
                        <div class="rectangle_green-otherscard icons d-flex justify-content-center align-items-center">
                            <img class="icons_size " src="icons/ph--bicycle.svg" alt="icon de seleção 'Green Trail'">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Pedalada em Minasota</h5>
                            <p class="card-text mt-2">Contrary to popular belief, Lorem Ipsum is not simply
                                random
                                text.
                                It has roots in a piece of classical Latin literature from 45 BC</p>
                            <a href="guias.php"
                                class="d-flex justify-content-end link-offset-2 link-underline link-underline-opacity-0 my-3">Veja
                                mais guias <img class="ms-2"
                                    src="icons/bitcoin-icons--arrow-right-outline-green.svg"></img></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card rounded-0 border-0 img_dp_none1">
                        <img src="images/Valdez__Kayak__Alaska__USA_Shutterstock__1_.webp"
                            class="card-img-top rounded-0" alt="...">
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
                            <a href="guias.php"
                                class="d-flex justify-content-end link-offset-2 link-underline link-underline-opacity-0 my-3">Veja
                                mais guias <img class="ms-2"
                                    src="icons/bitcoin-icons--arrow-right-outline-green.svg"></img></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card rounded-0 border-0 img_dp_none2">
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
                            <a href="guias.php"
                                class="d-flex justify-content-end link-offset-2 link-underline link-underline-opacity-0 my-3">Veja
                                mais guias <img class="ms-2"
                                    src="icons/bitcoin-icons--arrow-right-outline-green.svg"></img></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ConfiarGreenTrail Section -->
        <div class="container-fluid my-5">
            <div class="my-5">
                <h1>Porque Confiar em Nós</h1>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4 d-flex justify-content-center align-items-center mx-lg-5">
                <div class="col mt-5">
                    <div class="card border-0 rounded-0 h-100">
                        <div class="rectangle_green icons d-flex justify-content-center align-items-center"><img
                                class="icons_size " src="icons/lucide--heart-handshake.svg"
                                alt="icon de seleção 'Green Trail'">
                        </div>
                        <div class="card-body mt-0 pt-0">
                            <h5 class="card-title">As melhores Férias</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural
                                lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
                <div class="col mt-5">
                    <div class="card border-0 rounded-0 h-100">
                        <div class="rectangle_green icons d-flex justify-content-center align-items-center"><img
                                class="icons_size " src="icons/carbon--review.svg" alt="icon de seleção 'Green Trail'">
                        </div>
                        <div class="card-body mt-0 pt-0">
                            <h5 class="card-title">Reviews de “Travel Experts”</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural
                                lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
                <div class="col mt-5">
                    <div class="card border-0 rounded-0 h-100">
                        <div class="rectangle_green icons d-flex justify-content-center align-items-center"><img
                                class="icons_size " src="icons/mdi--seal.svg" alt="icon de seleção 'Green Trail'">
                        </div>
                        <div class="card-body mt-0 pt-0">
                            <h5 class="card-title">Aprovados e Certificados</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural
                                lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- usar col (col-4 e col-8) para alinhar-->

        <style>

        </style>

        <!-- SejaMembro Section -->
        <div class="container-fluid my-5 hiker_section_mobile ">
            <div class="row my-5 ms-lg-5 ">
                <div class="ms-3 hiker_section align_hiker_mobile" style="width: fit-content;">
                    <h1 class="d-flex justify-content-start">Seja um "Green Hiker"</h1>
                    <div class="d-flex justify-content-start mt-4 buttons-text2">
                        <a type="button" href="registo.php"
                            class="fs-6 btn btn-outline-dark rounded-0 border-dark border-2 px-5 py-3">
                            <span class="me-3 buttons-text2">REGISTE-SE</span>
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
                            <span class="me-3 buttons-text2">REGISTE-SE</span>
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


        <style>
            .img-overlay-wrap {
                position: relative;
                /* display: inline-block; <= shrinks container to image size */
                transition: transform 150ms ease-in-out;
            }

            .img-overlay-wrap img {
                /* <= optional, for responsiveness */
                /* display: block; */
                max-width: 100%;

            }

            .img-overlay-wrap-svg {
                position: absolute;
                top: 45%;
                left: 45%;
            }
        </style>

        <!-- usar absolute para posicionar o svg do PlayButton em cima das imagens -->
        <!-- Junta-teNos2 Section -->
        <div class="container-fluid background_sections2">
            <div class="row text-center text-light mx-lg-5">
                <h1 class="my-5">Junte-se a Nós</h1>
                <div class="container-fluid ">
                    <div class="row row-cols-md-2 row-cols-lg-3">
                        <!-- <div class="mb-5 px-4">
                                <img src="icons/ph--play-fill.svg" alt="Icon de Play" style="position: absolute;
                                top: 2600px;
                                left: 100px;" class="d-flex justify-content-center ">
                                <img class="juntese_img1" src="images/Juntese_img1.jpg" alt="Imagem de Instagram 1"
                                    style="width:100%; object-fit: cover; ">
                            </div> 
                            <div class="mb-5 px-4 img_dp_none1">
                                <img class="juntese_img1" src="images/Juntese_img1.jpg" alt=""
                                    style="width:100%; object-fit: cover; ">
                            </div>
                            <div class="mb-5 px-4 img_dp_none2">
                                <img class="juntese_img1" src="images/Juntese_img1.jpg" alt=""
                                    style="width:100%; object-fit: cover; ">
                            </div>-->
                        <div class="img-overlay-wrap mb-5">
                            <img class="juntese_img1" src="images/Juntese_img1.jpg"
                                style="width:100%; object-fit: cover;">
                            <!-- <svg viewBox="0 0 200 200">
                                      <circle cx="75" cy="75" r="50" fill="rebeccapurple"/>
                                    </svg> -->
                            <img src="icons/ph--play-fill.svg" alt="Icon de Play" class="img-overlay-wrap-svg"
                                style="width: 45px; height: 45px;">
                        </div>
                        <div class="img-overlay-wrap img_dp_none1 mb-5">
                            <img class="juntese_img1" src="images/GettyImages-534978766-e950348.webp"
                                style="width:100%; object-fit: cover;">
                            <!-- <svg viewBox="0 0 200 200">
                                      <circle cx="75" cy="75" r="50" fill="rebeccapurple"/>
                                    </svg> -->
                            <img src="icons/ph--play-fill.svg" alt="Icon de Play" class="img-overlay-wrap-svg"
                                style="width: 45px; height: 45px;">
                        </div>
                        <div class="img-overlay-wrap img_dp_none2 mb-5">
                            <img class="juntese_img1" src="images/KW-why-travel-is-important.jpg"
                                style="width:100%; object-fit: cover;">
                            <!-- <svg viewBox="0 0 200 200">
                                      <circle cx="75" cy="75" r="50" fill="rebeccapurple"/>
                                    </svg> -->
                            <img src="icons/ph--play-fill.svg" alt="Icon de Play" class="img-overlay-wrap-svg"
                                style="width: 45px; height: 45px;">
                        </div>

                    </div>
                </div>

                <span class="mb-5 d-flex justify-content-center align-items-center"><img class="me-3 icons_size"
                        src="icons/hugeicons--instagram.svg" alt="instagram icon">
                    SIGA-NOS NO INSTAGRAM
                </span>
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