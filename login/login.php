<?php
session_start();
include('connect.php'); 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password_input = $_POST['password']; // Ambil nilai password yang dimasukkan pengguna

    $password_md5 = md5($password_input);

    // Lakukan query untuk mencocokkan username dan password yang di-MD5
    $query = $conn->prepare("SELECT * FROM users WHERE username = ? AND PASSWORD = ?");
    $query->execute([$username, $password_md5]);

    if ($query->rowCount() > 0) {
        $_SESSION['username'] = $username;
        header('Location: dashboard.php'); 
        exit();
    } else {       
        $error_message = "Username atau password salah!";
    }
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>


    <?php
    if (isset($error_message)) {
        echo "<p style='color: red;'>$error_message</p>";
    }
    ?>

<!-- login section starts  -->
<section class="account-form">
    <form action="" method="post" enctype="multipart/form-data">
        <h3>welcome back!</h3>
        <p class="placeholder">username <span>*</span></p>
        <input type="text" name="username" required maxlength="50" placeholder="enter your username" class="box">
        <p class="placeholder">password <span>*</span></p>
        <input type="password" name="password" required maxlength="50" placeholder="enter your password" class="box">
        <input type="submit" value="login now" name="submit" class="btn">
    </form>
</section>
<!-- login section ends -->

<!-- sweetalert cdn link  -->

<!-- custom js file link  -->

</body>
</html>
