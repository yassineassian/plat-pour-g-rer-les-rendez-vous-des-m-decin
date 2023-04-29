<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remplir le formulaire</title>
    <link rel="stylesheet" href="formulaire.css">
</head>
<style>

</style>

<body>

    <form action="" method="POST" enctype="multipart/form-data">
        <div class="container">
            <label for="">Email</label>
            <input type="text" name="titre" id="titre">


            <label for="dt">choisissez un date qui vous plait</label>
            <input type="date" name="date" id="dt"><br>
            <label for="lieu">votre lieu</label>
            <input type="text" name="lieu" id="lieu"><br>
            <label for="phone">votre numero de telephone</label>
            <input type="phone" name="tel" id="phone"><br>

            <label for="des">Description de votre Malade</label>
            <textarea id="des" name="t" cols="30" rows="10"></textarea><br>
            <input style='margin-bottom: 15px;' type="submit" name="s" id="sub" value="faite le rendez-vous">
            <input style='background-color: #65f664;' type="submit" name="ta" id="sub" value="voir profil de médécin">


        </div>
    </form>



    <?php 
    session_start();
    if ( !empty($_POST["titre"]) &&!empty($_POST["s"]) && !empty($_POST["t"]) && !empty($_POST["date"]) && !empty($_POST["lieu"]) && !empty($_POST["tel"])) {
        try {
            $db = new PDO(
                'mysql:host=localhost;dbname=logo;charset=utf8',
                'root',
                ''
            );
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
        echo $_GET['id'];
        
        $requete = $db->prepare("INSERT INTO `annonce` (`date`,`descrip`,`lieux`,`nomutlisateur`,`num`,`titre`,`nm`,`nmm`,`m`) VALUES (:d,:s,:l,:n,:nu,:t,:m,:nm,:mm)");
        $requete->execute(array(
             'd' => $_POST['date'],'s' => $_POST['t'],'l' => $_POST['lieu'],'n' => $_SESSION['nom'],'nu' => $_POST['tel'],'t' => $_POST['titre'] ,'m' => $_GET['id'],'nm' =>$_GET['num'],'mm' =>$_GET['l']
            
        ));
        $_SESSION['ac']='ac';
        header('location:index.php');
      
    
    }
    elseif(!empty($_POST["s"]))
    {
        echo "<h4 style='color:red ; position: absolute ; right: 44%; top:3%' >  Remplire les champ obligatoire! </h4 ";
    }
    if(!empty($_POST["ta"]))
    {
        header("location:tem.php?idd=".$_SESSION['nom']."&id=".$_GET['id'].'&email='.$_GET['em'].'&num='.$_GET['num']);
    }

    ?>

</body>

</html>