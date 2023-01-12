<?php

require "../App/Views/header.php";

?>
        <section>

            <h1>Assemblée de Cocotomey</h1>

            <div class="slideshow-container">

                <!-- Full-width images with number and caption text -->

                <div class="mySlides fade">
                    <img src="ressources/Assets/images/freshly/slider-02.jpg" alt="slider">
                </div>

                <div class="mySlides fade">
                    <img src="ressources/Assets/images/freshly/slider-01.jpg" alt="slider">
                </div>

                <div class="mySlides fade">
                    <img src="ressources/Assets/images/freshly/slider-03.jpg" alt="slider">
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

        </section>

        <section>

            <h1>Allons plus loin</h1>
            
            <div>
           
                <article class="article_parole">
                    <h1>Manne Quotidienne</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora fuga, minima consequuntur voluptas neque fugit fugiat at cum suscipit quasi repudiandae obcaecati in facilis quae natus et facere deserunt dolorem?
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque soluta voluptate illo blanditiis quae, minus adipisci ratione quibusdam dignissimos provident qui, culpa molestiae recusandae. Modi odio eius quod dolorum dicta!
                    </p>
                    <div><a href="about/archive">Voir plus</a></div>
                </article>

                <article class="article_parole">
                    <h1>Parole en vidéo pour toi</h1>
                    <video  width="320" height="320"controls>
                        <source src="ressources/Assets/multimédia/Vidéos/video1.mp4"></source>
                    </video>
                    <div><a href="about/archive">Voir plus</a></div>
                </article>

                <article class="article_parole">
                    <h1>Parole pour toi</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora fuga, minima consequuntur voluptas neque fugit fugiat at cum suscipit quasi repudiandae obcaecati in facilis quae natus et facere deserunt dolorem?
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque soluta voluptate illo blanditiis quae, minus adipisci ratione quibusdam dignissimos provident qui, culpa molestiae recusandae. Modi odio eius quod dolorum dicta!
                    </p>
                    <div><a href="about/archive">Voir plus</a></div>
                </article>

            </div>

            <article>

                <h1>Nos programmes</h1>

                <div class="container_programme">

                    <div class="div_programme">
                        <h3>A l'école de Sara</h3>
                        <img src="" alt="">
                        <p>Lundi : 10h - 12h</p>
                        <p>Parceque la Parole est le fondement de tout, nos mamans viennent apprendre à bâtir le leur sur elle.</p>
                    </div>

                    <div class="div_programme">
                        <h3>Aux pieds du Maître</h3>
                        <img src="" alt="">
                        <p>Mardi : 19h 30 - 21h</p>
                        <p>Sa vie, nous la recevons lorsque à ses pieds, nous prenons le temps de l'écouter.</p>
                    </div>

                    <div class="div_programme">
                        <h3>Combat de destinée</h3>
                        <img src="" alt="">
                        <p>Vendredi : 19h 30 - 21h</p>
                        <p>La destinée ne se ramasse pas, elle se construit et a besoin de notre engagement.</p>
                    </div>

                    <div class="div_programme">
                        <h3>Dans sa Présence</h3>
                        <img src="" alt="">
                        <p>Dimanche : 9h - 11h 30</p>
                        <p>Il est bon pour des frères et soeurs de demeurer ensemble, surtout dans Sa Présence</p>
                    </div>

                </div>

            </article>

            <article class="event">
                <h1>Evènement à venir</h1>
                <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo obcaecati dolorem alias ea, labore temporibus, minus excepturi libero perferendis reprehenderit dolor porro enim officia quibusdam tenetur maxime? Voluptates, laboriosam iste.</div>
            </article>

        </section>
    </main>

    <?php

require "../App/Views/footer.php";

?>
   <script src="ressources/JS/slide.js"></script>
</body>

</html>