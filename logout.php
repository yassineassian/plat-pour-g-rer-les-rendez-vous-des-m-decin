<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</head>

<body>
    <form action="" method="POST" enctype="multipart/form-data">
        description de lannonce<textarea name="t" id="" cols="30" rows="10"></textarea><br>
        choisie une date <input type="date" name="date"><br>
        prix min <input type="text" name="pmn"> prix max <input type="text" name="pmx"><br>
        lieu <input type="text" name="lieu"><br>
        num tele <input type="text" name="tel"><br>
        <input type="file" name="img"> <br>

        <input type="submit" name="s" value="publier lannonce">




    </form>

    <?php

    if (!empty($_POST["s"]) && !empty($_POST["t"]) && !empty($_POST["date"]) && !empty($_POST["pmn"]) && !empty($_POST["pmx"]) && !empty($_POST["lieu"]) && !empty($_POST["tel"])) {
        try {
            $db = new PDO(
                'mysql:host=localhost;dbname=logo;charset=utf8',
                'root',
                ''
            );
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
        $requete = $db->prepare("INSERT INTO `annonc`(`categ`,  `nomutlisateur`, `descrip`, `date`, `imag`, `prixmax`, `prixmin`, `lieux`, `num` ) VALUES (:c, :nu,:h,:d,:i,:px,:pm,:l,:n)");
        $requete->execute(array(
            'c' => 'y', 'nu' => 'y','h'=>'false', 'd' => 'y', 'i' => 'y','px'=>'false' ,'pm' => 'y', 'l' => 'y','n'=>'false'
            
        ));
    }

    ?>

</body>


</html>