<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les Annonces dans cette catégorie</title>
    <link rel="stylesheet" href="annonce.css">
    <style>
    .prix {
        margin-left: 35px;
    }
    </style>
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
$requete = $db->prepare('SELECT *  FROM m  WHERE domaine = :n ');
$requete->execute(array('n' => $_GET['categ'] ));
$c = $requete->rowCount();

if($c>0)
{

    $res=$requete->fetchAll();
    foreach($res as $row)
    {
        echo "<div class='container'>
        <div class='profil'>
            <img src='picture1.png' >
            <h3 style='text-align: center;'>".$row['nom']."</h3>
        </div>
        <div class='cord'>
        <h2 style='padding-left: 8px;'>".$_GET['categ']."</h2>
            <div class='lieu'>
                <img src='picture2.png' >
                <span>A:".$row['adress']." </span>
            </div>
            
            <div class='phone'>
                <img src='picture4.png' >
                <span>".$row['num']."</span>
            </div>
    
        </div>
        
        <div class='offre'>
            <div  class='prix'>Prix est:".$row['prix']." DT </div>
            <a href='formulaire.php?l=".$row['adress']."&id=".$row['nom']."&num=".$row['num']."&em=".$row['email']."'><button>Prendre un rendez-vous</button> </a>
        </div>    
   </div>";
    }
    
}
else {
    echo "<h2 style='color:brown ; position: absolute ; right: 39%; top:5%' >Il n'y a aucun annonce dans cette catégorie</h2>";
    
}


?>


</body>

</html>