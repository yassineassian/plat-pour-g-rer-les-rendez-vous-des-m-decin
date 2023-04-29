<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messagerie</title>
    <link rel="stylesheet" href="messagerie.css">
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
                    <h2><?php session_start(); echo $_SESSION['nom']; ?></h2>
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
                    <li>Rendez-vous Accepté</li>
                </a>
                <a href="messagerie.php">
                    <li class="active">Messagerie</li>
                </a>
            </ul>
            <form action="" method="POST">
                <button name='btn' value='btn' class="dec">Deconnexion</button>
            </form>
            <a href="#message"><button class="env">Envoyer un Message</button></a>

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
   if(!empty($_POST['s'])&&!empty($_POST['des'])&&!empty($_POST['mesg']))
   {
    $requete = $db->prepare("INSERT INTO `message`(`nenvoyeur`, `nacceptrur` ,`message`) VALUES (:c, :e,:n)");
    $requete->execute(array(
        'c' =>$_SESSION['nom'],'e'=>$_POST['des'],'n'=>$_POST['mesg']
        
    ));
   }
   $requet = $db->prepare('SELECT *  FROM `message`  WHERE nenvoyeur =:n or nacceptrur =:n');
   
$requet->execute(array('n' =>$_SESSION['nom'] ));
$c = $requet->rowCount();
if($c>0)
{
$res=$requet->fetchAll();
foreach($res as $row)
{
    $tab[$row['nenvoyeur']]='c';
    $tab[$row['nacceptrur']]='c';
    
}
unset($tab[$_SESSION['nom']]);


}

?>

        <div class="container2">
            <?php
        if($c>0)
        {
    foreach($tab as $k=>$v)
    {
        echo' <form action="conversation.php?nom='.$k.'" method="POST"><div class="conver">
        
        <img src="user1.png" alt="">
        <h2>'.$k.'</h2>
        <input type="submit" value="Voir La conversation">   
    </div></form>';
    }
}
    if(!empty($_POST['btn']))
{
   
    session_unset();
session_destroy();
header('location:index.php');
}

    ?>



            <form action="" class="message" id="message" method="POST">
                <input type="text" name='des' placeholder="Destinataire"
                    value=<?php if(!empty($_SESSION['nomc'])){echo $_SESSION['nomc'] ; $_SESSION['nomc']='';}else{echo '';}?>>
                <textarea cols="30" name='mesg' rows="10" placeholder="Ecrire votre Message"></textarea>
                <input type="submit" name='s' value="Envoyer votre Messsage">
            </form>

        </div>