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
    $params = session_get_cookie_params();
    setcookie(session_name(), '', 0, $params['path'], $params['domain'], $params['secure'], isset($params['httponly']));
    session_destroy();
    // header('location:login.php');
}
;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- NavBar Section -->
    <div class="navbar-body pt-3 ">
        <nav class="navbar col-12">
            <div class="logo-nav d-flex justify-content-start align-items-start col-6 ps-5 ">
                <a href="index.php"><img src="images/logo_white.svg" alt="" style="height: 50px; " class="logo-nav"></a>
            </div>
            <div class="container-fluid d-flex justify-content-end col-12 col-sm-6">
                <div class="row d-flex align-items-center">

                    <!-- Button Search -->
                    <div class="col-1 mx-3 ">
                        <img class="icons_size card-explore-pointer" src="icons/basil--search-outline-white.svg" alt=""
                            data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        <!-- <button type="button" class="col-12 btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop">
                                    <img src="icons/fluent--arrow-enter-20-filled.svg" alt="" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop">
                                </button> -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <img src="images/logo_color2.svg" alt="" style="height: 50px;" class="mx-auto">

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
                                                <label class="placeholder-text px-5" for="floatingInputGroup1">Search
                                                    here</label>
                                            </div>
                                            <span class="input-group-text rounded-end-5  border-2 border-start-0 pe-4"
                                                style="background-color: white;"><img class="mx-auto icons_size"
                                                    src="icons/basil--search-outline.svg" alt="icon de mapa"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Button Login -->
                    <!-- <div class="col-1 mx-3 ">
                        <img class="icons_size card-explore-pointer" src="icons/fluent--arrow-enter-20-filled.svg"
                            alt="" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
                        <button type="button" class="col-12 btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop2">
                                    Login
                                </button>
                        <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <img src="images/logo_color2.svg" alt="" style="height: 50px;" class="mx-auto">

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
                                                        <label for="inputEmail4" class="form-label fw-bold">Endereço de
                                                            Email*</label>
                                                        <input type="email" name="email"
                                                            class="form-control form-control-lg rounded-0 border-2 placeholder-text"
                                                            id="inputEmail4" placeholder="O seu e-mail" required>
                                                    </div>
                                                    <div class="col-12 mb-4">
                                                        <label for="inputPassword4"
                                                            class="form-label fw-bold">Password*</label>
                                                        <input type="password" name="password"
                                                            class="form-control form-control-lg rounded-0 border-2 placeholder-text"
                                                            id="inputPassword4" placeholder="Digite a sua palavra-chave"
                                                            required>
                                                    </div>
                                                    <div
                                                        class="col-12 d-flex justify-content-md-start buttons-text2 mb-3">
                                                        <div class="col-6 d-flex justify-content-start">
                                                            <button type="submit" name="submit" value="login now"
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
                        echo '<div class="col-3 mx-5  d-flex justify-content-center" ><a href="profile.php"><img src="uploaded_img/' . $fetch['image'] . '" style="width:50px; height: 50px; border-radius: 100px;"></a></div>';
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
</body>

</html>