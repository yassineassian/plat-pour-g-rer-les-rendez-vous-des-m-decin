<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ensi project</title>
    <link rel="stylesheet" href="style.css">
    <style>
    .section1 {
        background-color: #0b1131;



    }

    .secontainer {
        display: flex;
        flex-wrap: wrap;
        overflow: hidden;
        justify-content: center;
        padding: 40px 0%;


    }

    .section1 h1 {
        margin: 0px;
        padding: 40px 0px 10px 70px;

        color: white;
        font-family: system-ui;
        font-weight: 900;
        font-size: 2em;
    }

    .box {
        display: flex;
        flex-direction: column;
        margin: 30px 30px;
        width: 300px;
    }

    .image {
        background-color: white;
        width: 80px;
        border-radius: 100px;
        margin: 0px 85px;

    }

    section img {
        width: 60px;
        padding: 10px;
    }

    .box h2 {
        margin: 30px 0px 10px 25px;
        font-family: system-ui;
        font-size: 1.35em;
        color: white;
    }

    .box p {
        font-family: system-ui;
        font-weight: 500;
        font-size: 0.9em;
        color: white;
        margin: 0% 25px;
        margin-right: 50px;
    }

    .section3 {
        height: 400px;
    }

    .container3 {
        display: flex;
        margin: 40px 7%;
    }

    .box3 {
        padding: 10px 20px;
    }

    .box3 img {
        width: 110px;
    }

    .box3 h3 {
        font-weight: 900;
        font-family: system-ui;
    }

    .box3 p {
        font-family: system-ui;
        font-size: 0.9em;
    }

    .section3 h1 {
        margin-top: 50px;
        margin-left: 30px;
        font-family: system-ui;
        font-weight: 900;
    }

    .contacter button:hover .back {
        width: 100%;
    }

    .icons img:hover {
        transform: scale(1.3);
    }
    </style>

</head>

<body>
    <div class="accueil" id="accueil">
        <div class="navbar">
            <div class="logo">
                <img src="logo.png" alt="">
                <div><span>D</span>OCLIB</div>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="#accueil">Accueil</a></li>
                    <li><a href="#apropos">A propos</a></li>

                    <li><a href="#contact">Contact</a></li>


                </ul>

                <img src="menu.png" alt="" class="mbtn">
            </div>
            <div class="conn" style="width:25% ;"><button id="connecter">Se Connecter</button> </div>
            <div class="user">
                <img class="icon" src="user.png" alt="">
                <div class="drop">
                    <ul>
                        <li><a href="profil2.php">Profil</a></li>
                        <li><a href="messagerie2.php">Messagerie</a></li>
                        <li>
                            <form method="POST"><button name="btn" value="btn" class="deconnexion">Deconnexion</button>
                            </form>

                        </li>
                    </ul>
                </div>
                <div class="username">

                </div>

                <div class="pv"><img src="pv.png" alt=""></div>

            </div>
        </div>

        <div class="menuv">
            <img src="close.png" alt="">
            <ul>
                <li><a href="#accueil">Accueil</a></li>
                <li><a href="#apropos">A propos</a></li>

                <li><a href="#contact">Contact</a></li>
                <li><button id="connecterv">Se Connecter</button></li>
            </ul>

        </div>
        <div class="titre">
            <h1>Au Service De Votre Santé</h1>
            <h3>La Meilleur Application pour Les Rendez-vous Médicales</h3>
            <a href=<?php  session_start();    if(isset($_SESSION['id']))
{
    echo 'offres.php';
}else{echo 'login.php';} ?>><button style=" margin-left: 40%; display: none;" class="btn publier">
                    <div class="pbarre"></div>Voir les listes des rendez-vous
                </button></a>

        </div>
    </div>
    <section class="section1" id="apropos">
        <h1>Le service médicales en toute Sérénité</h1>

        <div class="secontainer">
            <div class="box">
                <div class="image"><img src="pres.png" alt=""></div>
                <h2>Prestataires qualifiés</h2>
                <p> Les meilleurs Prestataires dans touts les domaines </p>
            </div>
            <div class="box">
                <div class="image"><img src="assu.png" alt=""></div>
                <h2>communication</h2>
                <p>Envoyez a vos patients des SMS directement depuis Doclib</p>
            </div>
            <div class="box">
                <div class="image"><img src="rapide.png" alt=""></div>
                <h2 class="rea">Reponse en moins de 24h</h2>
                <p>la reponse des médecin en mois de 24hh</p>
            </div>

            <div class="box">
                <div class="image"><img src="prix.png" alt=""></div>
                <h2>Prix transparents</h2>
                <p>Des prix resonnables et bien fixés</p>
            </div>
        </div>


    </section>

    <section style="margin-top: 80px;
    padding-bottom: 70px;" class="section2">
        <div style=" display: flex;" class="container2">
            <img style="width: 400px;
    padding: 10px 50px;" src="m2.jfif" alt="">
            <div style="padding: 0px 30px;" class="contenu2">
                <h2 style=" font-family: system-ui;
    font-weight: 900;
    font-size: 1.8em;">A propos de Nous</h2>
                <p style="font-family: system-ui;
    font-size: 0.95em;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil velit vero explicabo fugiat
                    neque
                    beatae! Dolor deserunt inventore aliquid reiciendis doloribus necessitatibus possimus illo cumque,
                    eos recusandae culpa quisquam nulla nostrum dolorum earum beatae mollitia natus non ipsum
                <div style=" display: flex;
    justify-content: space-evenly;" class="numbers">
                    <span style="padding: 10px 30px;">
                        <div style="font-weight: 900;
    font-size: 2.5em;
    font-family: sans-serif;
    color: #43a047;" class="chiffres" data-value="500">+0</div>
                        <h3 style="font-family: system-ui;
    color: #aed581;">Clients Satisfaits</h3>
                    </span>
                    <span>
                        <div style="font-weight: 900;
    font-size: 2.5em;
    font-family: sans-serif;
    color: #43a047;" class="chiffres" data-value="200">+0</div>
                        <h3 style="font-family: system-ui;
    color: #aed581;">Préstataires qualifiés</h3>
                    </span>
                </div>

                </p>
            </div>
        </div>



    </section>

    <section style="height: 400px;" class="section4">
        <h1 style=" margin-top: 50px;
    margin-left: 30px;
    font-family: system-ui;
    font-weight: 900;">Comment Devenir un Préstataire ?</h1>
        <div style=" display: flex;
    margin: 40px 7%;" class="container4">
            <div style=" padding: 10px 20px;" class="box4">
                <img style=" width: 110px;" src="pic1.png" alt="">
                <h3 style="font-weight: 900;
    font-family: system-ui;">creér un compte</h3>
                <p style="font-family: system-ui;
    font-size: 0.9em;">Il suffit de creér un compte puis se connecter</p>
            </div>
            <div class="box4">
                <img style=" width: 110px;" src="pic2.png" alt="">
                <h3 style="font-weight: 900;
    font-family: system-ui;">faite rendez-vous</h3>
                <p style="font-family: system-ui;
    font-size: 0.9em;">choisir un domaine parmi les domaine proposeés puis faite rendez-vous qui vous plait</p>
            </div>
            <div class="box4">
                <img style=" width: 110px;" src="image3.png" alt="">
                <h3 style="font-weight: 900;
    font-family: system-ui;">Attendre la Répense</h3>
                <p style="font-family: system-ui;
    font-size: 0.9em;">attendre la répense de domaine choisit puis contacter le médecin </p>
            </div>
        </div>

    </section>

    <footer id="contact" style="color: white;
    background-color: #0a0a2e;" id="contact">
        <div style="text-align: center;
    font-weight: 900;
    font-family: sans-serif;
    font-size: 1.5em;
    padding: 50px 0px;" class="rej">Rejoignez-nous sur Nos Reseaux socieaux</div>
        <div style="display: flex;
    justify-content: center;" class="icons">
            <a href="www.facebook.com"><img style=" width: 52px;padding: 10px;" src="facebook.png" alt=""></a>
            <a href="www.facebook.com"><img style=" width: 52px;padding: 10px;" src="instagram.png" alt=""></a>
            <a href="www.facebook.com"><img style=" width: 52px;padding: 10px;" src="skype.png" alt=""></a>
            <a href="www.facebook.com"><img style=" width: 52px;padding: 10px;" src="linkedin.png" alt=""></a>
            <a href="www.facebook.com"><img style=" width: 52px;padding: 10px;" src="whatsapp.png" alt=""></a>
        </div>
        <div style=" display: flex;
    justify-content: center;
    margin-top: 20px;" class="contacter"> <button style=" width: 250px;
    height: 47px;
    font-family: system-ui;
    font-weight: 900;
    font-size: 1.1em;
    letter-spacing: 1px;
    background-color: transparent;
    color: white;
    border: 2px solid;
    border-radius: 5px;
    cursor: pointer;
    position: relative;
    z-index: 1;">Nous-Contacter <div style=" position: absolute;
    top: 0px;
    left: 0px;
    height: 100%;
    width: 0%;
    background-color: #060d55;;
   transition: 0.5s ease-in-out;
    z-index: -1;" class="back"></div></button></div>
        <div style=" height: 3px;
    background-color: white;
    margin: 40px 10%;" class="trait"></div>
        <div style=" padding: 15px;" class="cr">©Touts Les droits sont resérvé Dali Mathlouthi Yassine Assiani</div>
    </footer>
</body>

<?php

if(!empty($_SESSION['offre']))
{
    echo'<div style=" position: fixed;
    right: 40%;
    top: 10px;
    background-color: white;
    padding-top: 40px;
    padding-bottom: 40px;
    padding-left: 20px;
    padding-right: 20px;
    font-family: system-ui;
    font-weight: 500;
    color: #7cb342;
    border: 3px solid;
    border-radius: 5px;
    height: 80 px;"class="msg" >
    Félicitations,votre offre vient d étre envoyée a '.$_SESSION['nomo'].'
</div>';
echo '<script>
mess = document.querySelector(".msg");
let timer = setTimeout(() => {
    mess.style.display = "none"
}, 3000);
</script>';    
$_SESSION['offre']="";
}
if(!empty($_SESSION['ac']))
{
echo'<div style=" position: fixed;
right: 40%;
top: 10px;
background-color: white;
padding-top: 40px;
padding-bottom: 40px;
padding-left: 20px;
padding-right: 20px;
font-family: system-ui;
font-weight: 500;
color: #7cb342;
border: 3px solid;
border-radius: 5px;
height: 80 px;"class="msg">
Votre rendez-vous a été bien envoyée
</div>';
echo '<script>
mess = document.querySelector(".msg");
let timer = setTimeout(() => {mess.style.display = "none"}, 3000);
</script>';
$_SESSION['ac']="";
}
if(isset($_SESSION['nom']))
{   
$n=$_SESSION['nom'];
$c='true';
}
else
{
$n='';
$c='false';
}
?>
<script>
chiffres = document.querySelectorAll(".chiffres");
let started = false;
window.addEventListener("scroll", () => {
    if (window.scrollY > 800) {
        if (!started) {
            console.log("ca marche");
            chiffres.forEach(chiffre => {
                let v = 0;
                let b = parseInt(chiffre.dataset.value) / 50;
                let counter = setInterval(() => {
                    v += b;
                    chiffre.textContent = "+" + v;
                    if (v == chiffre.dataset.value) {
                        clearInterval(counter);
                    }
                }, 40)
            });
        }
        started = true;
    }
});
var name = '<?= $n?>'
var connected = '<?= $c?>'
nav = document.querySelector(".navbar");
window.addEventListener("scroll", () => {
    nav.classList.toggle('navbg', window.scrollY > 0)
})
user = document.querySelector(".user");
conn = document.querySelector(".conn");
username = document.querySelector(".username");
pub = document.querySelector(".publier");
pub.style.display = "none";

decon = document.querySelector(".deconnexion");
if (connected === 'true') {
    user.style.display = "flex";
    conn.style.display = "none";
    pub.style.display = "block";
    username.textContent = name;
}
if (connected === 'false') {
    user.style.display = "none";


}
bouton1 = document.querySelector(".menu img");
bouton2 = document.querySelector(".menuv img ");
menuv = document.querySelector(".menuv");
bouton1.addEventListener('click', () => {
    menuv.classList.add('apparait');
    bouton1.classList.add('disparait')
})
bouton2.addEventListener('click', () => {
    menuv.classList.remove('apparait');
    bouton1.classList.remove('disparait')
})
connecter = document.getElementById('connecter');
connecter.addEventListener("click", () => {
    location.href = 'login.php';
})
drop = document.querySelector(".drop");
username.addEventListener("click", () => {
    drop.classList.toggle('app');
})
</script>
<?php 
if(!empty($_POST['btn']))
{
 echo'<script>
 conn = document.querySelector(".conn");
 user = document.querySelector(".user")
 user.style.display = "none";
 conn.style.display = "block";
 pub.style.display = "none";</script>';
session_unset();
session_destroy();
header('location:login.php');
}

?>




</html>