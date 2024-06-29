
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>CAR RENTAL</title>
    <script type="text/javascript">
        window.history.forward();
        function noBack() {
            window.history.forward();
        }
    </script>
    <link  rel="stylesheet" href="css/style.css">
    <script type="text/javascript">
        function preventBack() {
            window.history.forward(); 
        }
          
        setTimeout("preventBack()", 0);
          
        window.onunload = function () { null };
    </script>
</head>
<body>



<?php
require_once('connection.php');
    if(isset($_POST['login']))
    {
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        
        
        if(empty($email)|| empty($pass))
        {
            echo '<script>alert("sil vous plaît remplissez les blancs")</script>';
        }

        else{
            $query="select *from users where EMAIL='$email'";
            $res=mysqli_query($con,$query);
            if($row=mysqli_fetch_assoc($res)){
                $db_password = $row['PASSWORD'];
                if(md5($pass)  == $db_password)
                {
                    header("location: cardetails.php");
                    session_start();
                    $_SESSION['email'] = $email;
                    
                }
                else{
                    echo '<script>alert("Entrez un mot de passe approprié")</script>';
                }



                



            }
            else{
                echo '<script>alert("entrez un email approprié")</script>';
            }
        }
    }







?>
    <div class="hai">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">Voitures</h2>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="#">MAISON</a></li>
                    <li><a href="aboutus.html">À PROPOS</a></li>
                    <li><a href="#">PRESTATIONS DE SERVICE</a></li>
                    
                    <li><a href="contactus.html">CONTACT</a></li>
                  <li> <button class="adminbtn"><a href="adminlogin.php">CONNEXION ADMINISTRATEUR</a></button></li>
                </ul>
            </div>
            
          
        </div>
        <div class="content">
            <h1>Louez votre <br><span>Voiture de rêve</span></h1>
            <p class="par">Vivez la vie du luxe.<br>
            Louez simplement la voiture de votre choix parmi notre vaste collection.<br>Profitez de chaque instant en famille<br>
            Rejoignez-nous pour agrandir cette famille.  </p>
            <button class="cn"><a href="register.php">REJOIGNEZ-NOUS</a></button>
            <div class="form">
                <h2>Connectez-vous ici</h2>
                <form method="POST"> 
                <input type="email" name="email" placeholder="Entrez votre e-mail ici">
                <input type="password" name="pass" placeholder="Entrez le mot de passe ici">
                <input class="btnn" type="submit" value="Se connecter" name="login"></input>
                </form>
                <p class="link">Vous n'avez pas de compte ?<br>
                <a href="register.php">S'inscrire</a> ici</a></p>
                <!-- <p class="liw">or<br>Log in with</p>
                <div class="icon">
                    &emsp;&emsp;&emsp;&ensp;<a href="https://www.facebook.com/"><ion-icon name="logo-facebook"></ion-icon> </a>&nbsp;&nbsp;
                    <a href="https://www.instagram.com/"><ion-icon name="logo-instagram"></ion-icon> </a>&ensp;
                    <a href="https://myaccount.google.com/"><ion-icon name="logo-google"></ion-icon> </a>&ensp;
                    
                </div> -->
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>
