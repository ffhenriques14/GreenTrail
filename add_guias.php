<?php
// Include connection file
require "connection.php";

// $name = $email = $pass = $cpass = "";
// $image = $image_tmp_name = $image_folder = "";

if (isset($_POST['submit'])) {

    $titulo = mysqli_real_escape_string($conn, $_POST['titulo']);
    $descricao = mysqli_real_escape_string($conn, $_POST['descricao']);
    // $image = $_FILES['image']['name'];
    // $image = 'images/' . $image;
    // $image_size = $_FILES['image']['size'];
    // $image_tmp_name = $_FILES['image']['tmp_name'];
    // $image_folder = 'images/' . $image;
    $image = $_FILES['image']['name'];
    $image_size = $_FILES['image']['size'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_folder = 'uploaded_img_guias/' . $image;
    $icon = $_FILES['icon']['name'];
    $icon_size = $_FILES['icon']['size'];
    $icon_tmp_name = $_FILES['icon']['tmp_name'];
    $icon_folder = 'uploaded_icon/' . $icon;


    

    $select = mysqli_query($conn, "SELECT * FROM `guiasviagem` WHERE titulo = '$titulo'") or die('query failed');

    if (mysqli_num_rows($select) > 0) {
        $message[] = 'guia com os mesmo titulo já existe';
    } else {
        if ($image_size > 2000000) {
            $message[] = 'imagem com tamanho muito grande!';
        } elseif ($icon_size > 2000000) {
            $message[] = 'icon com tamanho muito grande!';
        } else {
            $insert = mysqli_query($conn, "INSERT INTO `guiasviagem`(titulo, descricao, image, icon) VALUES('$titulo', '$descricao',  '$image', '$icon')") or die('query failed');

            if ($insert) {
                move_uploaded_file($image_tmp_name, $image_folder);
                move_uploaded_file($icon_tmp_name, $icon_folder);
                $message[] = 'guia adicionado com sucesso!';
                header('location:guias.php');
            } else {
                $message[] = 'algum erro surgiu guia não adicionado!';
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

    <link rel="stylesheet" href="css/profile.css">
</head>

<body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>

    <!-- Page Content -->
    <div class="update-profile">
        <form action="" method="post" enctype="multipart/form-data">
            <?php
                if(isset($message)){
                    foreach($message as $message){
                    echo '<div class="message">'.$message.'</div>';
                    }
                }
            ?>
            <h1 class="mb-3 ">Adicione o seu Guia</h1>
            <div class="flex">
                <div class="inputBox">
                    <span>Titulo do guia de viagem :</span>
                    <input type="text" name="titulo" class="box" required>
                    <span>Descrição :</span>
                    <textarea ctype="text" name="descricao" class="box" required></textarea>
                    <span>Insira uma Imagem :</span>
                    <input type="file" name="image" accept="image/jpg, image/jpeg, image/png" class="box" required>
                    <span>Insira um Icon :</span>
                    <input type="file" name="icon" accept="icon/jpg, icon/jpeg, icon/png, icon/svg" class="box" required>
                </div>
            </div>
            <input type="submit" value="adicionar guia" name="submit" class="btn rounded-0">
            <a href="guias.php" class="delete-btn text-decoration-none">voltar</a>
        </form>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
</body>

</html>