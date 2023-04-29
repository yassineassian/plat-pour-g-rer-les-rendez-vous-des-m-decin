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
$requete = $db->prepare('SELECT *  FROM annonce  WHERE nm	= :nom ');
$requete->execute(array('nom' =>$_SESSION['nom'] ));
$c = $requete->rowCount();

if($c>0)
{

    $res=$requete->fetchAll();
    foreach($res as $row)
    {
        echo "<div class='container'>
        <div class='profil'>
            <img src='picture1.png' >
            <h3 style='text-align: center;'>".$row['nomutlisateur']."</h3>
        </div>
        <div style='margin-top: 35px;'class='cord'>
       
            <div class='lieu'>
                <img src='picture2.png' >
                <span>A:".$row['lieux']." </span>
            </div>
            
            <div class='phone'>
                <img src='picture4.png' >
                <span>".$row['num']."</span>
            </div>
            <div style='margin-left: 5px' class='phone'>
                
                <span >déscription:".$row['descrip']."</span>
            </div>
    
    
        </div>
        
        <div class='offre'>
            
            <a href=><button>Prendre un rendez-vous</button> </a>
        </div>    
   </div>";
    }
    
}
else {
    echo "<h2 style='color:brown ; position: absolute ; right: 39%; top:5%' >Il n'y a aucun rendez-vous</h2>";
    
}


?>


</body>

</html>