<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/scrollbar.css">
    <link rel="stylesheet" href="./assets/css/defaults.css">
    <title>Accueil | Cinetech</title>
</head>

<body class="text-bg-darkblue scroller wk-scroller" >

    <?php require_once("./header.php"); ?>
<?php
session_start();
require 'login.php';
?>

<main>

<br>
<br>
<br>
<br>

    <section class="section_user">
        <div class="wrapper">
            
            <div class="title login">Connexion</div>

            <div class="form_container">

                <div class="form_inner">
                    <form action="" class="login" method="post">
                        <div class="field">
                            <input type="text" placeholder="Login" name="login_login" class="login_login">
                        </div>
                        <div class="field">
                            <input type="password" placeholder="Mot de passe" name="password_login" class="password_login">
                        </div>
                        <div class="field">
                            <input type="submit" value="login" name="submit_login">
                        </div>
                        <div class="signup_link">Pas inscrit ? <a href="inscription.php">S'inscrire</a></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
<script src="js/user.js"></script>
<footer>
        <div class="content">
            <div class="top">
                <div class="logo-details">
                    <a href="index.php"><img src="style/images/cinetech.jpg" alt=""></a>
                </div>
                <div class="media-icons">
                    <a href="https://github.com/dylan-sauvat"><i class="fab fa-github"></i></a>
                    <a href="https://www.linkedin.com/in/dylan-sauvat-b0732b26a/"><i class="fab fa-linkedin-in"></i></a>
                    
                </div>
            </div>
            <div class="link-boxes">
                <ul class="box">
                    <li class="link_name">Navigation</li>
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="movies.php">Films</a></li>
                    <li><a href="series.php">Séries</a></li>
                </ul>
                <ul class="box">
                    <li class="link_name">Nous rejoindre</li>
                    <li><a href="inscription.php">Inscription</a></li>
                    <li><a href="connexion.php">Connexion</a></li>
                    <li><a href="https://www.themoviedb.org" target="_blank">Partenaires</a></li>
                </ul>
                <ul class="box">
                    <li class="link_name">A propos</li>
                    <li><a href="https://www.themoviedb.org/about" target="_blank">The Movie DB</a></li>
                    <li><a href="https://www.themoviedb.org/documentation/api" target="_blank">API</a></li>
                </ul>
                
            </div>
        </div>
        <div class="bottom-details">
            <div class="bottom_text">
                <span class="copyright_text">Dylan Sauvat © 2023 | Tous droits réservés</span>
                </span>
            </div>
        </div>
    </footer>

