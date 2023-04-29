<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les offres</title>
    <link rel="stylesheet" href="offres.css">
    <style>
    .d {
        margin-left: 20px;

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
        echo '<form action="" method="POST"> <div class="container">
        <div class="user">
            <img src="user1.png" alt="">
        </div>
        <div class="name">
            <h2>'.$row['nomutlisateur'].'</h2>
            <div class="phone">
                <img src="picture4.png" alt="">
                <span>'.$row['num'].'</span>
            </div>
            <div class="mail">
                <img src="mail.png" alt="">
                <span>'.$row['titre'].'</span>
            </div>
            <div class="stars">
                <img src="star.png" alt="">
                <img src="star.png" alt="">
                <img src="star.png" alt="">
                <img src="star.png" alt="">
                <img src="star.png" alt="">
            </div>
        </div>
        
        
        
       <Div class="submit">
        
            <input style="margin-left: 107px;height: 50px;width: 55.5%;" type="submit" name="a'.$row['nomutlisateur'].'" id="acc" value="Accepter">
            
            </Div>

        
        
            <input type="submit"   style=" 
            align-self: center;
            display: none;
            position: absolute;
            right: 20%;
        "
         name="c'.$row['nomutlisateur'].'" id="con" value="Contacter">
         
         
       
       
    </div> </form>';
   
    if(!empty($_POST['c'.$row['nomutlisateur']]))
    {
        $_SESSION['nomc']=$row['nomutlisateur'];
        header('location:messagerie2.php#message');
    }
   
    if(!empty($_SESSION[$row['nomutlisateur']]))
    {
        echo "<script>
        acc = (document.getElementsByName('a".$row['nomutlisateur']."'))[0];
     
        
        acc.style.display = 'none'
       
        ccc = (document.getElementsByName('c".$row['nomutlisateur']."'))[0];

ccc.style.display = 'block'

        </script>";
    }
    
    if(!empty($_POST['a'.$row['nomutlisateur']]) )
    {
        echo "<script>
        acc = (document.getElementsByName('a".$row['nomutlisateur']."'))[0];
        
        
        acc.style.display = 'none'
       
        ccc = (document.getElementsByName('c".$row['nomutlisateur']."'))[0];

ccc.style.display = 'block'

        </script>";
        $_SESSION[$row['nomutlisateur']]='ido';
        $req = $db->prepare("INSERT INTO `of`(`noa`, `nou`,`email` ,`num`) VALUES (:c, :nu,:e,:n)");
                $req->execute(array(
                    'c' => $row['nomutlisateur'], 'nu' =>$_SESSION['nom'],'e'=>$_SESSION['email'],'n'=>$_SESSION['num']
                     ));
        
    }
        
        
    }

    

}


    ?>





</body>



</html>