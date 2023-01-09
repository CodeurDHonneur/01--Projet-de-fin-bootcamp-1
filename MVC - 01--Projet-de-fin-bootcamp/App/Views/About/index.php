<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="icon" type="image/png" href="../Assets/images/favicon.bmp" />
    <title>EEPI</title>
</head>

<body>

    <header>

        <div class="max-width-1200">

            <div class="container_img_logo">

                <!--logo de l'église -->
                <img src="../Assets/images/logo_eglise21.png" alt="logo de l'église">

                <div class="name_church">
                    <h1>EGLISE EVANGELIQUE DE PENTECOTE INTERNATIONALE (EEPI)</h1>
                    <!-- <p>Assemblée de COCOTOMEY</p> -->
                </div>

            </div>

            <!--Menu des différents li redirigeant vers les différentes pages-->

            <nav>

                <ul>
                    <li><a href="/">ACCUEIL</a></li>
                    <li><a href="menu">MENU</a></li>
                    <li><a href="about">A PROPOS</a></li>
                    <!-- <li><a href="contact.html">CONTACT</a></li> -->
                    <!-- <li><a href="customers">CONTACT</a></li> -->
                    <li><a href="contact">CONTACT</a></li>
                </ul>

            </nav>

            <!--Partie réservée aux versets bibliques (source php exclusif)
                    effet devant permettre un affichage des versets à interval de 15 secondes
                    la partie est dans le hedear afin d'être visible sur chaque page.
                    travailler à y mettre un bakground et spécifier la couleur du texte.
                    la div doit avoir une taille donnée et le pouvoir se démarquer de la div du haut afin de donner l'impression de ne pas appartenir au hedear.
                    h3 : surlignage
                    balises :
                            - h3
                            - div 
                                - blockquote
                                - cite
                -->

        </div>

    </header>

    <main>
        <div class="max-width-1200">
            <!-- 
            trois grandes parties :
                img : avoir une photo par paroisse ave un effet manuel et automatique de défilelement
                p : présentation de l'église
                div : vision de l'église
                        h3
                        p : texte avec effet
         -->
            <div class="retour_lord">

                <div class="div_time_date">
                    <!-- <img src="../Assets/images/img3.jpg" alt="Jésus Sauve"> -->
                    <div class="position_time">
                        <div class="time"></div>
                        <div class="date"></div>
                    </div>
                </div>
                <div class="msg">JESUS REVIENT BIENTOT</div>

                <div class="scripture">
                    <blockquote>Car Dieu a tant aimé le monde qu’il a donné son Fils unique, afin que quiconque croit en
                        lui
                        ne périsse point, mais qu’il ait la vie éternelle.</blockquote>
                    <cite>Jean 3:16 LSG</cite>
                </div>

            </div>

        <div class="slideshow-container">

            <!-- Full-width images with number and caption text -->

            <div class="mySlides fade">
                <img src="../Assets/images/freshly/slider-02.jpg" alt="slider">
            </div>

            <div class="mySlides fade">
                <img src="../Assets/images/freshly/slider-01.jpg" alt="slider">
            </div>

            <div class="mySlides fade">
                <img src="../Assets/images/freshly/slider-03.jpg" alt="slider">
            </div>

            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>

        <div class="dot-container">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
    </main>

    <footer>
        <!-- avoir dans le footer un texte : "Aller partout  dans le monde annoncer la bonne nouvelle" (dépendra de la vision donc peut changer)  -->
        <div>
            <div class="vision">
                NOTRE VISION <br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, temporibus suscipit incidunt fugit nam architecto inventore quia odio 
            </div>
        </div>
        <div>
            NOTRE VISION <br>
            Lorem ipsum  dolor sit amet consectetur adipisicing elit. Praesentium, temporibus suscipit incidunt fugit nam architecto inventore quia odio. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque quisquam officia consectetur dicta nisi dolore saepe nulla deserunt labore, blanditiis incidunt voluptate eaque eius voluptatum obcaecati ratione possimus aperiam excepturi. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum alias dolorem sed at, officia qui corrupti dolor accusantium facere corporis nesciunt impedit laborum fugit quae magnam obcaecati nemo quis cumque!
        </div>

        
    </footer>
    <script src="../JS/script _clock.js"></script>
    <script src="../JS/slide.js"></script>
</body>

</html>