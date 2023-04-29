<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>se connecter</title>
    <link rel="stylesheet" href="stylelogin.css">
</head>

<body>
    <div class="container">
        <form action="" method="GET">
            <input type="text" name="u" id="nom" placeholder="Nom..."><br>
            <input type="password" name="pass" id="mdp" placeholder="Mot de passe..."><br>
            <input type="submit" id="submit" name="login" value="Se Connecter">

        </form>
        <div class="cree"><a href="signin2.php">creé un compte pour un médécin</a></div>
        <div class="cree"><a href="signin.php">creé un compte pour un client</a></div>



    </div>
    <script>
    alert
    </script>







    <?php
    session_start();
   
    
    
    
    if (!empty($_GET['u']) && !empty($_GET['pass']) && !empty($_GET['login'])) {
        try {
            $db = new PDO(
                'mysql:host=localhost;dbname=logo;charset=utf8',
                'root',
                ''
            );
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
        $requete = $db->prepare('SELECT *  FROM uti WHERE nom = :n ');
        $requete->execute(array('n' => $_GET['u'] ));
        $c = $requete->rowCount();
        $entree=$requete->fetch();
        $requet = $db->prepare('SELECT *  FROM m WHERE nom = :n ');
        $requet->execute(array('n' => $_GET['u'] ));
        $m = $requet->rowCount();
        $entre=$requet->fetch();
        echo $m;
        echo $c;
        if ($m > 0) {
            $_SESSION['id']=$entre['id'];
            $_SESSION['nom']=$entre['nom'];
            $_SESSION['num']=$entre['num'];
            $_SESSION['email']=$entre['email'];
            $_SESSION['adress']=$entre['adress'];
           
            header(('location:index2.php'));
           
            
           

         
    
            

}
        else
        {
            echo "<h4 style='color:brown ; position: absolute ; right: 47%; top:63%' >ce compte n'exsite pas</h4 ";
    
        }
      
        if ($c > 0) {
            $_SESSION['id']=$entree['id'];
            $_SESSION['nom']=$entree['nom'];
            $_SESSION['num']=$entree['num'];
            $_SESSION['email']=$entree['email'];
            $_SESSION['adress']=$entree['adress'];
           
            header(('location:index.php'));
           
            
           

         
    
            

}
        else
        {
            echo "<h4 style='color:brown ; position: absolute ; right: 47%; top:63%' >ce compte n'exsite pas</h4 ";
    
        }
      

        

        
        
        
        
    }
    
       ?>

</body>

</html>