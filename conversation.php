<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>conversation</title>
    <link rel="stylesheet" href="conversation.css">
</head>

<body>

    <div class="conver">
        <img src="user1.png" alt="">
        <h2><?php echo $_GET['nom'] ?></h2>

    </div>
    <div class="box">
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
if(!empty($_POST['s'])&&!empty($_POST['mesg']))
{
$requete = $db->prepare("INSERT INTO `message`(`nenvoyeur`, `nacceptrur` ,`message`) VALUES (:c, :e,:n)");
$requete->execute(array(
 'c' =>$_SESSION['nom'],'e'=>$_GET['nom'],'n'=>$_POST['mesg']
 
));
}
$requet = $db->prepare('SELECT *  FROM `message`  WHERE (nenvoyeur =:n and nacceptrur =:a)or(nenvoyeur =:a and nacceptrur =:n)');
   
 $requet->execute(array('n' =>$_SESSION['nom'] ,'a'=>$_GET['nom']));
 $c = $requet->rowCount();
 $res=$requet->fetchAll();
 foreach($res as $row)
 {
    if($row['nenvoyeur']==$_SESSION['nom'])
    {
        echo '<div class="message recu">
        <p>'.$row['message'].'</p>
    </div>';
    }
    else
    echo'
    <div class="message env">
    <p>'.$row['message'].'</p>
    </div>';
 }
?>
    </div>



    <form action="" method="POST" id='f'>
        <textarea name='mesg' cols="50" rows="3" placeholder="Ecrire votre message..."></textarea>
        <input name='s' type="submit" value="Envoyer un message">
    </form>

</body>

</html>