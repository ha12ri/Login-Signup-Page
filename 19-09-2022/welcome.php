<?php
session_start();

if (!(isset($_SESSION['email']))) {
    header('location:Login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Welcome Page </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        <?php echo include './signup.css' ?>
    </style>
    <!-- <link rel="stylesheet" href="./signup.css"> -->
</head>

<body>

    <div class="container-box">
        <nav>
            <div class="logo">
                <h2> Microsoft Technical Club </h2>
            </div>
            <div class="nav-btns">
                <ul>
                    <li><i class="fas fa-globe"></i> English</li>
                    <li><a href="./Login.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                </ul>
            </div>
        </nav>
        <main>
            <div class="box">
                <h2>
                    Microsoft <span> Technical </span>
                    <br> Club <p> VIT Bhopal University </p>
                </h2>
                <h4>
                    Technology is making people's lives easier.
                    We, here at MTC are, constantly
                    Innovating, Inventing and Improvising.
                </h4>
                <button id="about_mtc" ><a href="https://mstcvitbhopal.live/#hero" > About MTC </a></button>
            </div>
        </main>
    </div>

</body>

</html>