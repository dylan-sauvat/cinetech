<?php
session_start();

require_once('classes/User.php');
    require_once('classes/Security.php');
    require_once('classes/Verify.php');

    // inscription -------------------------------------------
if(!empty($_POST['login1']) && !empty($_POST['pass1']) && !empty($_POST['pass2']) &&!empty($_POST['mail'])) {
    if ($_POST['pass1'] == $_POST['pass2']) {

        // protection des variables
        $login   = htmlspecialchars($_POST['login']);
        $password = htmlspecialchars($_POST['password']);
        $email    = htmlspecialchars($_POST['email']);

        // doublon login
        if(Verify::loginAlreadyExist($login)) {
            header('location:inscription.php?error=1&message=login déjà existant');
            exit();
        }

        // verifications du mail
        if(!Verify::verifySyntax($email)) {
            header('location:inscription.php?error=1&message=merci de rentrer un email valide !');
            exit();
        }
        // doublon mail
        if(Verify::emailAlreadyExist($email)) {
            header('location:inscription.php?error=1&message= mail déjà utilisé');
            exit();
        }
        
        // on chiffre le mdp
        $password = Security::hash($password);           
        // on ajoute l'utilisateur
        $user = new User($login, $password, $email);
        $user->register();
        $user->baseRole();
    
        // redirection 
        header('location:index.php');
        exit();
       
    } else {
        header('location:login.php?error=1&message=merci de rentrer des mots de passe indentiques');
        exit();
    }
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/defaults.css">
    <link rel="stylesheet" href="./assets/css/scrollbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Connexion/inscription | Cinetech</title>
</head>

<body class="text-bg-dark">

    <?php require_once("./header.php"); ?>
<section class="section_user">
            <div class="wrapper">
                <div class="title_text">
                    <div class="title login">Inscription</div>
                </div>
                <div class="form_container">
                    <div class="form_inner">
                        <form action="" class="signup" method="post" onsubmit="return verifForm()">
                            <div class="field">
                                <input type="text" placeholder="Login" name="login_signup" class="login_signup">
                                
                            </div>
                            <div class="field">
                                <input type="password" placeholder="Mot de passe" name="password_signup" class="password_signup" autocomplete="password">
                                
                            </div>
                            <div class="field">
                                <input type="password" placeholder="Confirmez mot de passe" name="confirm_password_signup" class="confirm_password_signup" autocomplete="valid_password">
                                
                            </div>
                            <div class="regex_signup">
                                <label class="password-check" for="">6 caractères</label>
                                <label class="password-check" for="">1 numéro</label>
                                <label class="password-check" for="">1 majuscule</label>
                                <label class="password-check" for="">1 minuscule</label>
                            </div>
                            <div class="error"></div>
                            <div class="field">
                                <input type="submit" value="signup" name="submit_signup" class="submit_signup">
                                
                            </div>
                            <div class="signup_link">Déjà inscrit ? <a href="login.php">Se connecter</a></div>
                        </form>
                    </div>
                </div>          
            </div>
    </section>
    <?php
    if (isset($_GET['error']) && !empty($_GET['message'])) {
        echo '<p class="alert error">' . htmlspecialchars($_GET['message']) . '</p>';
    }
    ?>
    <footer class="mt-5"></footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="./assets/js/handleFormToggler.js"></script>


</body>
<?php require_once("./footer.php"); ?>
</html>
   