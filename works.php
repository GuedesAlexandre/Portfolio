
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Works</title>
    <meta charset="UTF-8"/>
    <meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link href="css/works.css" rel="stylesheet"/>
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap"
        rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

    <script src="https://unpkg.com/scrollreveal"></script>
      <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
      <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
</head>
<body>

<script src="js/app.js"></script>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<?php
if(isset($_GET["works"])){
    $Nom = $_GET["works"];
    $conn = mysqli_connect("localhost", "aguedes", "0qs;Jzm?cINP", "aguedes_SAE");
    mysqli_set_charset($conn, "utf8mb4");
    $sql = "SELECT * FROM Projets WHERE Nom = '$Nom'";
    $resultat = mysqli_query($conn, $sql);
    if(mysqli_num_rows($resultat)>0){
        $data = mysqli_fetch_assoc($resultat);
        echo '<header id="block">
            <nav class="navbar">
                <div class="navlinks">
                    <ul>
                        <li><a href="index.html#mainAbout">ABOUT ME</a></li>
                        <li><a href="index.html#skills">SKILLS</a></li>
                        <li><a href="index.html#works"> WORKS</a></li>
                        <li class="last"><a href="index.html#foot">CONTACT</a></li>

                    </ul>

                </div>

            </nav>
        </header>
        <div class="container">
            <div class="Title">
                <span class="tit">'.$data["Nom"].'<span>
            </div>
            <div class="box-img">
                <img src="img/'.$data["Images"].'">
        </div>

        </div>
        <div class="container">
        <div class="Title">
            <span class="tit">Description</span>
        </div>

        </div>
        </div>
        <div class="Description">

        <p class="des">'.$data["Description"].'</p>
        </div>
        <div class="m-container">
        <div class="Title">
            <span class="tit">Outils utilisés</span>

        </div>
        </div>
        <div class="icon">          
        '.$data["Icones"].'
        </div>
        <a href="#block">
            <ion-icon name="arrow-up-outline" class="arrow"></ion-icon>
        </a>
        <footer id="foot">
            <div class="contact">
                <a href="https://www.linkedin.com/in/alexandre-guedesmmi/"><ion-icon name="logo-linkedin" class="clinks"></ion-icon></a>
                <a href="https://github.com/GuedesAlexandre"><ion-icon name="logo-github" class="clinks"></ion-icon></a>
                <a href="mailto:alexandre.guedes@edu.univ-eiffel.fr"><ion-icon name="mail-outline" class="clinks"></ion-icon></a>
            </div>
            <div class="mentions">
                <span>©Alexandre Guedes | 2023 | <a href="mentions.html" class="Mentions">Mentions Légales</a></span>
            </div>
        </footer>';

    }
    
    
}
?>


</body>
</html>




