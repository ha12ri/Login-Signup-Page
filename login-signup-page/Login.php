<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="./signup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <div class="gif-icon-sec">
            <object data="gif-img-1.svg" type="image/svg+xml" width="300" height="300"></object>
        </div>
        <div class="form-sec">
            <section id="heading">
                <h2>.... Sign In ....</h2>
                <p>Login into Your Account</p>
            </section>
            <section id="sign-form">
                <form action="" method="POST">


                    <div class="sub-sec">
                        <div class="sub-sec">
                            <div class="input-sec">
                                <label> Enter Your Registered Email Address<br>
                                    <input type="email" name="email" value="" id="email" oninput="invalidsecond()" placeholder="Email" required>
                                </label>
                            </div>
                            <div class="mess-sec" id="ename"></div>
                        </div>

                        <div class="sub-sec">
                            <div class="input-sec">
                                <label>Enter Your Password <br>
                                    <input type="password" value="" name="pass" id="pass" oninput="invalidforth()" placeholder="Password" required>
                                </label>
                            </div>
                            <div class="mess-sec" id="pname"></div>
                        </div>


                        <div class="sub-sec">
                            <button type="submit" name="login" value="login">
                                <i class="fa-solid fa-right-to-bracket"></i> Login
                            </button>
                            <button type="submit" name="signup" value="signup">
                                <a href="./Signup.php"><i class="fa-solid fa-lock"></i> Create Account</a>
                            </button>
                        </div>

                </form>
            </section>
        </div>
    </div>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "registration";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $db);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }



    if (isset($_POST["login"])) {

        $email = $_POST["email"];
        $password = $_POST["pass"];

        $query = "SELECT * FROM users WHERE email = '$email' && password = '$password' ";

        $result = mysqli_query($conn, $query);
        $num = mysqli_num_rows($result);

        if ($num == 1) {
            $_SESSION['email'] = $email;
            header('location:welcome.php');
        } else {
            header('location:login.php');
        }
    }
    ?>

    <script src="./script.js"></script>
</body>

</html>