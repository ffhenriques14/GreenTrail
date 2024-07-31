<?php
// Include connection file
require "connection.php";



$name = $email = $pass = $cpass = "";
$image = $image_tmp_name = $image_folder = "";

if (isset($_POST['submit'])) {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
    $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
    $image = $_FILES['image']['name'];
    $image_size = $_FILES['image']['size'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_folder = 'uploaded_img/' . $image;

    $select = mysqli_query($conn, "SELECT * FROM `green_users` WHERE email = '$email' AND password = '$pass'") or die('query failed');

    if (mysqli_num_rows($select) > 0) {
        $message[] = 'user already exist';
    } else {
        if ($pass != $cpass) {
            $message[] = 'confirm password not matched!';
        } elseif ($image_size > 2000000) {
            $message[] = 'image size is too large!';
        } else {
            $insert = mysqli_query($conn, "INSERT INTO `green_users`(name, email, password, image) VALUES('$name', '$email', '$pass', '$image')") or die('query failed');

            if ($insert) {
                move_uploaded_file($image_tmp_name, $image_folder);
                $message[] = 'registered successfully!';
                header('location:login.php');
            } else {
                $message[] = 'registeration failed!';
            }
        }
    }

}

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

    <!-- <link rel="stylesheet" href="css/profile.css"> -->
    <link rel="stylesheet" href="css/style.css">


</head>

<body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>

    <!-- Page Content -->
    <!-- NavBar Section -->
    <div class="navbar-body my-auto d-flex align-items-center py-2" style="background-color: white">
        <nav class="navbar col-12">
            <div class="logo-nav d-flex justify-content-start align-items-start col-6 ps-5 ">
                <a href="index.php">
                    <img src="images/logo_color2.svg" alt="" style="height: 50px; " class="logo-nav">
                </a>
            </div>
            <div class="container-fluid d-flex justify-content-end col-12 col-sm-6">
                <div class="row d-flex align-items-center">

                    <!-- Button Search -->
                    <div class="col-2 mx-4 ">
                        <img class="icons_size card-explore-pointer" src="icons/basil--search-outline black.svg" alt=""
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
                    <div class="col-2 mx-4">
                        <input type="checkbox" id="active">
                        <label for="active" class="menu-btn-register col-3">
                            <div id="button">
                                <div id="icon">
                                    <span class="lines-black"></span>
                                </div>
                            </div>
                        </label>
                        <div class="wrapper">
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
    <div class="container-fluid background_sections1 imagem">

        <!-- Registo Section -->
        <div class="container-fluid mb-5">
            <div class="row d-flex justify-content-center align-items-center">
                <form class="col-12  g-3" style="max-width: 1000px;" action="" method="post"
                    enctype="multipart/form-data">

                    <?php
                    if (isset($message)) {
                        foreach ($message as $message) {
                            echo '<div class="message my-3">' . $message . '</div>';
                        }
                    }
                    ?>

                    <h1 class="d-flex justify-content-start my-3">Registo</h1>
                    <div class="col-12 mb-3">
                        <label for="inputAddress" class="form-label fw-bold">Nome de Utilizador*</label>
                        <input class="form-control form-control-lg rounded-0 border-0 placeholder-text" type="text" placeholder="ex.: Francisco Ferreira" name="name"
                             required>

                    </div>
                    <div class="col-12 mb-3">
                        <label for="inputEmail4" class="form-label fw-bold">Endereço de Email*</label>
                        <input type="email" class="form-control form-control-lg rounded-0 border-0 placeholder-text"
                            id="email" placeholder="O seu e-mail" name="email"
                            class="form-control form-control-lg rounded-0 border-0 placeholder-text" required>

                    </div>
                    <div class="col-12 mb-3">
                        <label for="inputPassword4" class="form-label fw-bold">Password*</label>
                        <input type="password" placeholder="Digite uma palavra-chave" name="password"
                            class="form-control form-control-lg rounded-0 border-0 placeholder-text" required>
                    </div>

                    <div class="col-12 mb-3">
                        <label for="inputPassword4" class="form-label fw-bold">Confirme a Password*</label>
                        <input type="password" placeholder="Confirme a palavra-chave" name="cpassword"
                            class="form-control form-control-lg rounded-0 border-0 placeholder-text" required>
                    </div>


                    <style>
                        .file-upload {
                            text-align: center;
                            border: 3px dashed rgb(210, 227, 244);
                            padding: 1.5rem;
                            position: relative;
                            cursor: pointer;
                            }
                            .file-upload p {
                            font-size: 0.87rem;
                            margin-top: 10px;
                            color: #bbcada;
                            }
                            .file-upload input {
                            display: block;
                            height: 100%;
                            width: 100%;
                            position: absolute;
                            top: 0;
                            bottom: 0;
                            left: 0;
                            right: 0;
                            opacity: 0;
                            cursor: pointer;
                        }
                    </style>
                    <div class="col-12 mb-3">
                        <label for="inputPassword4" class="form-label fw-bold">Escolha a sua imagem de perfil</label>
                        <input type="file" name="image"
                            class="placeholder-text box form-control form-control-lg rounded-0 border-0 "
                            accept="image/jpg, image/jpeg, image/png" style="max-width: 500px" >
                    </div>

                    <!-- <div class="col-12 mb-3">
                        <label for="inputPassword5" class="form-label fw-bold">Confirme a Password*</label>
                        <input type="password" 
                             placeholder="Confirme a Password" name="confirm_password" class="form-control form-control-lg rounded-0 border-0 placeholder-text <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>" required>
                            <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
                    </div> -->
                    
                    <p class="col-12 mb-3">Os seus dados pessoais serão usados ​​para apoiar a sua experiência neste
                        site, para gerir o acesso à sua conta e para outros fins descritos no nosso bla bla bla</p>

                    <div class="col-6 d-flex justify-content-md-start buttons-text2 mb-3">
                        <button type="submit" name="submit"
                            class="col-12 col-md-8 fs-6 btn btn-outline-success rounded-0 border-2 px-2 py-3 d-flex justify-content-center align-items-center"
                            value="register now">
                            <span class="me-3 fw-bold">REGISTAR</span>
                        </button>
                    </div>
                    <div class="col-12">
                        <a href="login.php" class="fw-bold text-decoration-none col-6" style="color: #35415A;">Já tem
                            conta? Clique aqui</a>
                        <div class="col-6 d-flex justify-content-end p-0 m-0"></div>
                        <!-- <button type="reset" class="fw-bold text-decoration-none border-0 " style="color: #35415A;"
                            value="Reset">Reset campos</button> -->
                    </div>

                    <!-- <div class="col-6 d-flex justify-content-md-start buttons-text2 mb-3">
                        <button type="reset"
                            class="col-12 col-md-8 fs-6 btn btn-outline-success btn-green rounded-0 border-2 px-2 py-3 d-flex justify-content-center align-items-center" value="Reset">
                            <span class="me-3 fw-bold">Reset</span>
                        </button>
                    </div> -->
                </form>
            </div>
        </div>



        <!-- Junta-teNos2 Section -->
        <div class="container-fluid background_sections2">
            <div class="row text-center text-light mx-lg-5">
                <h1 class="my-5">Junte-se a Nós</h1>
                <div class="container-fluid ">
                    <div class="row row-cols-md-2 row-cols-lg-3">
                        <div class="img-overlay-wrap mb-5">
                            <img class="juntese_img1" src="images/Juntese_img1.jpg"
                                style="width:100%; object-fit: cover;">
                            <img src="icons/ph--play-fill.svg" alt="Icon de Play" class="img-overlay-wrap-svg"
                                style="width: 45px; height: 45px;">
                        </div>
                        <div class="img-overlay-wrap img_dp_none1 mb-5">
                            <img class="juntese_img1" src="images/GettyImages-534978766-e950348.webp"
                                style="width:100%; object-fit: cover;">
                            <img src="icons/ph--play-fill.svg" alt="Icon de Play" class="img-overlay-wrap-svg"
                                style="width: 45px; height: 45px;">
                        </div>
                        <div class="img-overlay-wrap img_dp_none2 mb-5">
                            <img class="juntese_img1" src="images/KW-why-travel-is-important.jpg"
                                style="width:100%; object-fit: cover;">
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
</body>

</html>