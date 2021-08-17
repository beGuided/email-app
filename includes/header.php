<?php ob_start()?>
<?php //include_once('../init.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>G-mail</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/stylesheet.css">
</head>

<body>
<div class="container">
    <div class="top-nav">
        <div class="menu">
            <a href="#"><i class="material-icons">menu</i></a>
            <a href="index.php"> <img src="assets/images/gmail.png" class="logo" alt="gmail logo">
        </div>

        <!-- search form -->
        <div class="form">
            <i class="fa fa-search"></i>
            <input type="text" placeholder="search mail"/>
            <i class="fa fa-angle-down push"></i>

        </div> <!-- search form end -->

        <div>
            <div>
                <a href="#"><i class="material-icons push"> circle_notifications</i></a>
                <a href="#"> <i class="material-icons push"> apps</i></a>
            </div>
            <a href="sign-up.php"><button>Sign-up</button></a>
            <a href="logout.php"><button>Sign-out</button></a>

        </div>

    </div>
</div>
<hr>
