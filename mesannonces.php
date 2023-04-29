<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon profil</title>
    <link rel="stylesheet" href="mesannonce.css">
    <style>
    .btn button:hover {
        transform: scale(1.06);
    }

    .btn {
        align-self: center;
    }

    .btn button {
        height: 40px;
        width: 120px;
        margin: 5px;
        font-family: system-ui;
        font-weight: 900;
        background-color: red;
        color: white;
        border: 2px solid;
        border-radius: 10px;
    }
    </style>
</head>

<body>
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
                    <h2><?php  session_start(); echo $_SESSION['nom'];   ?></h2>
                </div>
            </div>

            <ul>
                <a href="profil.php">
                    <li>Mon compte</li>
                </a>
                <a href="mesannonces.php">
                    <li class="active">Mes Rendez-vous</li>
                </a>
                <a href="mesmissions.php">
                    <li>Rendez-vous Accepté</li>
                </a>
                <a href="messagerie.php">
                    <li>Messagerie</li>
                </a>
            </ul>
            <form action="" method='POST'>
                <button name='btnn' value='btn'>Deconnexion</button>
            </form>

        </div>

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
$requete = $db->prepare('SELECT *  FROM annonce  WHERE nomutlisateur	= :nom ');
$requete->execute(array('nom' =>$_SESSION['nom'] ));
$c = $requete->rowCount();
if($c>0)


{
    $res=$requete->fetchAll();
    foreach($res as $row)
    {
    echo '<div class="container2">
    <div class="profile">
        <img src="picture1.png" alt="">

    </div>
    <div class="cord">
        <h2>'.$row['nm'].'</h2>
        <div class="lieu">
            <img src="picture2.png" alt="">
            <span>A:'.$row['m'].' </span>
        </div>
        <div class="date">
            <img src="picture3.png" alt="">
            <span>Avant le: '.$row['date'].'</span>
        </div>
        <div class="phone">
            <img src="picture4.png" alt="">
            <span>'.$row['nmm'].'</span>
        </div>

    </div>
    <form class="btn" action="" method="POST">
   
   
            <button name="'.$row['id'].'" value="btn">Supprimer</button>
           
       
        </form>
   
</div>';
if(!empty($_POST[$row['id']]))
{
    $requet = $db->prepare('DELETE FROM annonce   WHERE id= :id');
    $requet->execute(array('id' => $row['id']));
    echo '<script>
    location.reload()
    </script>';
}

}

}

if(!empty($_POST['btnn']))
{
    session_unset();
session_destroy();
header('location:index.php');
}

?>



    </header>
</body>


</html>