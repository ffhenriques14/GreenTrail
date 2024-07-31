<?php

include 'connection.php';

session_start();
$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
   header('location:login.php');
};

if (isset($_GET['logout'])) {
   unset($user_id);
   $params = session_get_cookie_params();
   setcookie(session_name(), '', 0, $params['path'], $params['domain'], $params['secure'], isset($params['httponly']));
   session_destroy();
   header('location:login.php');
}
;

// if (isset($_GET['logout'])) {
//    unset($user_id);
//    $params = session_get_cookie_params();
//     setcookie(session_name(), '', time() - 42000,
//         $params["path"], $params["domain"],
//         $params["secure"], $params["httponly"]
//     );
//    header('location:login.php');
// }
// ;
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Green Trail - perfil</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/profile.css">


</head>

<body>

   <div class="container rounded-0">

      <div class="profile">
         <?php
         $select = mysqli_query($conn, "SELECT * FROM `green_users` WHERE id = '$user_id'") or die('query failed');
         if (mysqli_num_rows($select) > 0) {
            $fetch = mysqli_fetch_assoc($select);
         }
         if ($fetch['image'] == '') {
            echo '<img src="images/default-avatar.png">';
         } else {
            echo '<img src="uploaded_img/' . $fetch['image'] . '">';
         }
         ?>
         <h3><?php echo $fetch['name']; ?></h3>
         <a href="update_profile.php" class="btn">atualizar perfil</a>
         <a href="index.php" class="btn">página inicial</a>

         <form action="logout.php" method="post"> 
            <input class="delete-btn btn" type="submit" value="logout" style="background-color: white;"> 
         </form> 
         <p>novo <a href="login.php">login</a> ou <a href="registo.php">registo</a></p>
      </div>
   </div>

   <!-- <div class="container-fluid">
      <div class="row container-login">
         <div class="card profile" style="width: 18rem;">
            <div class="col-6 d-flex justify-content-md-start buttons-text2 mb-3">
               <button type="submit" name="submit"
                  class="col-12 col-md-8 fs-6 btn btn-outline-success btn-green rounded-0 border-2 px-2 py-3 d-flex justify-content-center align-items-center"
                  value="login now">
                  <span class="me-3 fw-bold">atualize o perfil </span>
               </button>
            </div>
            <div class="col-6 d-flex justify-content-md-start buttons-text2 mb-3">
               <button type="submit" name="submit"
                  class="col-12 col-md-8 fs-6 btn btn-outline-success btn-green rounded-0 border-2 px-2 py-3 d-flex justify-content-center align-items-center"
                  value="login now">
                  <span class="me-3 fw-bold">pagina inicial</span>
               </button>
            </div>
            <div class="col-6 d-flex justify-content-md-start buttons-text2 mb-3">
               <a href="index.php?logout=<?php echo $user_id; ?>" type="submit" name="submit"
                  class="col-12 col-md-8 fs-6 btn btn-outline-success btn-green rounded-0 border-2 px-2 py-3 d-flex justify-content-center align-items-center"
                  value="login now">
                  <span class="me-3 fw-bold">logout</span>
               </a>
            </div>
            <p>new <a href="login.php">login</a> or <a href="register.php">register</a></p>
         </div>
      </div>
   </div> -->

</body>

</html>