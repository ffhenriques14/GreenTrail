<?php
// Include connection file
include "connection.php";

session_start();

if (isset($_POST['submit'])) {

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

    $select = mysqli_query($conn, "SELECT * FROM `green_users` WHERE email = '$email' AND password = '$pass'") or die('query failed');

    if (mysqli_num_rows($select) > 0) {
        $row = mysqli_fetch_assoc($select);
        $_SESSION['user_id'] = $row['id'];
        header('location:index.php');
    } else {
        $message[] = 'incorrect email or password!';
    }

}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/gif/png" href="images/logo_title_bar.png">
    <title>Green Trail</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/profile.css">
</head>

<body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <!-- Page Content -->
    <!-- Login Section -->
    <div class="update-profile">
        <form action="" method="post" enctype="multipart/form-data" class="px-0">
            <?php
            if (isset($message)) {
                foreach ($message as $message) {
                    echo '<div class="message">' . $message . '</div>';
                }
            }
            ?>
            <h1 class="d-flex justify-content-start  px-3">Login</h1>
            <div class="backgroundImageHeader-popUp " style="height:150px;"> </div>
            <div class="flex px-3">
                <div class="inputBox">
                    <span for="inputEmail4" class="form-label fw-bold">Endereço de Email*</span>
                    <input type="email" name="email" placeholder="O seu e-mail"
                        class="form-control form-control-lg rounded-0 border-2 placeholder-text" required>
                    <span for="inputpass" class="form-label fw-bold">Password*</span>
                    <input type="password" name="password" placeholder="Digite a sua palavra-chave"
                        class="form-control form-control-lg rounded-0 border-2 placeholder-text" required>
                </div>
            </div>
            <div class="col-6 px-3 py-2">
                <input type="submit" value="login" name="submit" class="btn rounded-0 col-6">
            </div>
            <div class="row row-cols-2 px-3">
                <div class="col-6">
                    <a href="registo.php" class="fw-bold text-decoration-none d-flex justify-content-start mt-3"
                        style="color: #35415A;">Não tem
                        conta? Clique aqui
                    </a>
                </div>
                <div class="col-6">
                    <a href="index.php" class="fw-bold text-decoration-none d-flex justify-content-end mt-3"
                        style="color: #35415A;"><- Voltar para o inicio</a>
                </div>

            </div>


        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
</body>

</html>