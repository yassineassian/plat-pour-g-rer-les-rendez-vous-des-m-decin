<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes Missions</title>
    <link rel="stylesheet" href="mesmission.css">
</head>

<body>
    <?php
    session_start();
    
    try {
       $db = new PDO(
           'mysql:host=localhost;dbname=logo;charset=utf8',
           'root',
           ''
       );
   } catch (Exception $e) {
       die('Erreur : ' . $e->getMessage());
   }
   $requete = $db->prepare('SELECT *  FROM of  WHERE noa	= :noa');
$requete->execute(array('noa' =>$_SESSION['nom'] ));
$c = $requete->rowCount();
echo $c;
if($c>0)


{
    $res=$requete->fetchAll();
    foreach($res as $row)
    {
    echo'<div class="container">
    <div class="user">
        <img src="user1.png" alt="">
    </div>
    <div class="name">
        <h2>'.$row['nou'].'</h2>
        <div class="phone">
            <img src="picture4.png" alt="">
            <span>'.$row['num'].'</span>
        </div>
        <div class="mail">
            <img src="mail.png" alt="">
            <span>'.$row['email'].'</span>
        </div>
        <div class="stars">
            <img src="star.png" alt="">
            <img src="star.png" alt="">
            <img src="star.png" alt="">
            <img src="star.png" alt="">
            <img src="star.png" alt="">
        </div>
    </div>
    
    <div class="submit">
    <form action="" method="POST">
        <input name="'.$row['num'].'" type="submit" id="ref" value="Contacter">
        </form>
    </div>
</div>';
if(!empty($_POST[$row['num']]))
{
    $_SESSION['nomc']=$row['nou'];
    header('location:messagerie.php#message');
}
    }
}
if(!empty($_POST['btn']))
{
    session_unset();
session_destroy();
header('location:index.php');
}


   ?>
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
                <h2><?php echo $_SESSION['nom'];?></h2>
            </div>
        </div>

        <ul>
            <a href="profil.php">
                <li>Mon compte</li>
            </a>
            <a href="mesannonces.php">
                <li>Mes Rendez-vous</li>
            </a>
            <a href="mesmissions.php">
                <li class="active">Rendez-vous Accepté</li>
            </a>
            <a href="messagerie.php">
                <li>Messagerie</li>
            </a>
        </ul>
        <form action="" method="POST">
            <button name='btn' value='btn'>Deconnexion</button>
        </form>
    </div>
</body>

</html>