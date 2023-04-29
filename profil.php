<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon profil</title>
    <link rel="stylesheet" href="profil.css">
    <style>
    form {
        width: 100%;
    }
    </style>
</head>

<body>
    <?php
    try {
        $db = new PDO(
            'mysql:host=localhost;dbname=logo;charset=utf8',
            'root',
            ''
        );
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    session_start();
    if(!empty($_POST['b1']))
    {
        
    $req = $db->prepare('UPDATE uti SET nom= :nom WHERE
    id= :id ');
     $req->execute(array('nom' => $_POST['nom'],'id' => $_SESSION['id'],
     ));
       $_SESSION['nom']=$_POST['nom'];
       
    }
    if(!empty($_POST['b2']))
    {
        
    $req = $db->prepare('UPDATE uti SET adress= :adress WHERE
    id= :id ');
     $req->execute(array('adress' => $_POST['add'],'id' => $_SESSION['id'],
     ));
       $_SESSION['adress']=$_POST['add'];
       echo $_SESSION['id'];
    }
    if(!empty($_POST['b3']))
    {
        
    $req = $db->prepare('UPDATE uti SET num= :num WHERE
    id= :id ');
     $req->execute(array('num' => $_POST['num'],'id' => $_SESSION['id'],
     ));
       $_SESSION['num']=$_POST['num'];
      
    }
    if(!empty($_POST['b4']))
    {
        
    $req = $db->prepare('UPDATE uti SET email= :email WHERE
    id= :id ');
     $req->execute(array('email' => $_POST['email'],'id' => $_SESSION['id'],
     ));
       $_SESSION['email']=$_POST['email'];
      
    }
    if(!empty($_POST['btn']))
{
    session_unset();
session_destroy();
header('location:index.php');
}
    ?>
    <header>

        <div class="container1">
            <div class="entete">
                <div class="profil">
                    <img src="picture1.png" alt="">
                    <div class="stars">
                        <img src="star.png" alt="">
                        <img src="star.png" alt="">
                        <img src="star.png" alt="">
                        <img src="star.png" alt="">
                        <img src="star.png" alt="">
                    </div>


                </div>
                <div class="name">
                    <h2><?php  echo $_SESSION['nom'] ;?></h2>
                </div>
            </div>

            <ul>
                <a href="profil.php">
                    <li class="active">Mon compte</li>
                </a>
                <a href="mesannonces.php">
                    <li>Mes Rendez-vous</li>
                </a>
                <a href="mesmissions.php">
                    <li>Rendez-Vous Accepté</li>
                </a>
                <a href="messagerie.php">
                    <li>Messagerie</li>
                </a>
            </ul>
            <form action="" method="POST">
                <button name='btn' value='btn'>Deconnexion</button>


        </div>

        <div class="container2">
            <div class="nom">
                <h3> Nom d'utilisateur ::</h3>
                <span><?php  echo $_SESSION['nom'] ;?></span>
                <div class="changer"><input name='nom' type="text" id="nom">
                    <button name="b1" value="b1">Modifier</button>
                </div>


            </div>
            <div class="trait"></div>
            <div class="lieu">
                <h3>Adress Postale:</h3>
                <span> <?php  echo $_SESSION['adress'] ;?></span>
                <div class="changer"><input name='add' type="text" id="lieu">


                    <button name="b2" value="b2">Modifie</button>
                </div>
            </div>
            <div class="trait"></div>
            <div class="phone">
                <h3>Numéro De Téléphone:</h3>
                <span><?php  echo $_SESSION['num'] ;?></span>
                <div class="changer"><input name="num" type="text" id="phone">
                    <button name="b3" value="b3">Modifie</button>
                </div>

            </div>

            <div class="trait"></div>
            <div class="mail">
                <h3>Adress Email:</h3>
                <span><?php  echo $_SESSION['email'] ;?></span>
                <div class="changer"><input name="email" type="email" id="mail">
                    <button name="b4" value="b4" id="changer">Modifie</button>
                </div>
            </div>


        </div>
        </form>

    </header>
</body>
<script src="profi.js"></script>

</html>