<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>creé un compte</title>
    <link rel="stylesheet" href="stylesignin.css">
</head>

<body>
    <div class="container">
        <form action="" method="POST">
            <input type="text" name="nom" id="nom" placeholder="Nom..."><br>
            <input type="text" name="add" id="ad" placeholder="Adress..."><br>
            <input type="email" name="email" id="mail" placeholder="Email"><br>
            <input type="text" name="tel" id="phone" placeholder="numero de telephone..."><br>
            <input type="password" name="pass" id="mdp" placeholder="Mot de passe..."><br>
            <input type="password" name="pass1" id="mdp" placeholder="Repéter le mot de passe..."><br>
            <input type="submit" name="submit" id="submit" value="submit">
        </form>

    </div>
    <?php 

    if(!empty($_POST["submit"]) && !empty($_POST["nom"] && !empty($_POST["pass"]))&& !empty($_POST['add'])&& !empty($_POST['email'])&&!empty($_POST['tel']))
    {
        
        try {
            $db = new PDO(
                'mysql:host=localhost;dbname=logo;charset=utf8',
                'root',
                ''
            );
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
     if($_POST['pass']==$_POST['pass1'])
        {
            if(strlen($_POST['pass']>7))
            {
                $requete = $db->prepare("INSERT INTO `uti`(`nom`, `pass`,`email` ,`num`,`adress`) VALUES (:c, :nu,:e,:n,:a)");
                $requete->execute(array(
                    'c' => $_POST["nom"], 'nu' => $_POST["pass"],'e'=>$_POST['email'],'n'=>$_POST['tel'],'a'=>$_POST['add']
                    
                ));
                header('location:login.php');
                }
                else 
                {
                    echo "<h4 style='color:brown ; position: absolute ; right: 44%; top:92%' >le password contient au moin 8 caractere</h4>";
    
                }
            }
           
    
        else 
        {
            echo " <h4 style='color:brown ; position: absolute ; right: 45%; top:92%' > Le deusieme password incorect</h4>
            </body>";
           
        }
   
    
}

    if (!empty($_POST["submit"])&&(empty($_POST["pass"])||empty($_POST["nom"])))
   
    {
      echo" <h4 style='color:brown ; position: absolute ; right: 44%; top:92%' >Remplissage des champ obligatoire</h4>";
     
  
      }

?>

</body>

</html>