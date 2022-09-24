<?php
   session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Sign up Page </title>

    <!-- <link rel="stylesheet" type="text/css" href="./signup.css"> -->
    <!-- Font Awesome CDN link -->

    <style>
        <?php echo include './signup.css' ?>
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <div class="gif-icon-sec">
            <object data="gif-img-1.svg" type="image/svg+xml" width="300" height="300"></object>
        </div>
        <div class="form-sec">
            <section id="heading">
                <h2>.... Sign Up ....</h2>
                <p>Create a new Account</p>
            </section>
            <section id="sign-form">
                <form action="" method="POST">
                    <div class="sub-sec">
                        <div class="input-sec">
                            <label>Enter Your Full Name <br>
                                <input type="text" placeholder="First Name" name="name" value="" oninput="invalidfirst()" id="name" required>
                            </label>
                        </div>
                        <div class="mess-sec" id="fname"></div>
                    </div>

                    <div class="sub-sec">
                        <div class="sub-sec">
                            <div class="input-sec">
                                <label> Enter Active Email Id <br>
                                    <input type="email" name="email" value="" id="email" oninput="invalidsecond()" placeholder="Email" required>
                                </label>
                            </div>
                            <div class="mess-sec" id="ename"></div>
                        </div>
                        <div class="input-sec">
                            <label>Enter User Name <br>
                                <input type="text" name="username" value="" id="usrname" oninput="invalidthird()" placeholder="User Name" required>
                            </label>
                        </div>
                        <div class="mess-sec" id="uname"></div>
                    </div>
                    <div class="sub-sec">
                        <div class="input-sec">
                            <label>Enter Strong Password <br>
                                <input type="password" value="" name="pass" id="pass" oninput="invalidforth()" placeholder="Password" required>
                            </label>
                        </div>
                        <div class="mess-sec" id="pname"></div>
                    </div>
                    <div class="sub-sec">
                        <div class="input-sec">
                            <label> Confirm Password <br>
                                <input type="password" value="" name="cpass" id="cpass" oninput="invalidfifth()" placeholder="Confirm password" required>
                            </label>
                        </div>
                        <div class="mess-sec" id="cpname"></div>
                    </div>

                    <div class="sub-sec">
                        <button type="submit" name="signup" value="signup">
                            <i class="fa-solid fa-lock"></i> Create Account
                        </button>
                        <button type="submit" name="login" value="login">
                           <a href="./Login.php"><i class="fa-solid fa-right-to-bracket"></i> Login </a>
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

    if(isset($_POST["login"])){
        header('location:Login.php');
    }
   


    if (isset($_POST["signup"])) 
    {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $username = $_POST["username"];
        $password = $_POST["pass"];


        $query = "INSERT INTO `users` (`name`, `email`, `username`, `password`) VALUES ( '$name', '$email', '$username', '$password')";

        $check_email = mysqli_query($conn, "SELECT email FROM users where email = '$email' ");

        if (mysqli_num_rows($check_email) > 0) {
            echo "<div id='popup'> <p> User Already Exists! </p> <button><a href=''> Login Into Your Account </a></button> </div>";
        } else {
            if (mysqli_query($conn, $query)) {
                echo "<div id='popup'> <p> Registered successfully </p><p><button><a href='./Login.php'>Login</a></button> <button><a href='Signup.php'>Ok</a></button></p>";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }

        mysqli_close($conn);
    }

   

    ?>



    <script src="./script.js"></script>
</body>

</html>