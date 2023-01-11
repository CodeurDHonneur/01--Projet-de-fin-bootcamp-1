<?php

require "../App/Views/header.php";

?>


            <article>
                <h1>PORTES OUVERTES</h1>
                <!-- photos églises -->
                <div class="slideshow-container">

                    <!-- Full-width images with number and caption text -->

                    <div class="mySlides fade">
                        <img src="ressources/Assets/images/test.jpg" alt="slider">
                    </div>

                    <div class="mySlides fade">
                        <img src="ressources/Assets/images/fabrice.jpg" alt="slider">
                    </div>

                    <div class="mySlides fade">
                        <img src="ressources/Assets/images/freshly/slider-02.jpg" alt="slider">
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

            </article>
            <article>
                <h1>DECOUVERTE</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, dolor. Unde, tenetur necessitatibus
                    numquam blanditiis sed est error eaque perferendis totam in amet sapiente harum nam, suscipit
                    eveniet.
                    Perferendis, expedita?</p>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam omnis iste commodi, sint ipsa
                    accusantium cumque laborum. Optio culpa, ducimus nesciunt possimus vitae enim quia suscipit animi
                    pariatur. Cum, quae? Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, deleniti!
                    Fugiat voluptatem nulla nam accusantium quidem rerum neque sunt tempore totam exercitationem
                    officiis
                    facilis, provident numquam asperiores dolore odit quod.</p>
            </article>
            <article>
                <h1>A VOTRE SERVICE</h1>

                <div class="service">
                    <div>
                        <figure>
                            <img src="ressources/Assets/images/logo_eglise22.jpg" alt="maman AMASSE">
                            <figcaption>maman AMASSE</figcaption>
                        </figure>
                    </div>
                    <div>
                        <figure>
                            <img src="ressources/Assets/images/logo_eglise22.jpg" alt="Pasteur ACATCHA Spéro">
                            <figcaption>Pasteur ACATCHA Spéro</figcaption>
                        </figure>
                        <figure>
                            <img src="ressources/Assets/images/logo_eglise22.jpg" alt="Pasteur HOUNSA Rodrigue">
                            <figcaption>Pasteur HOUNSA Rodrigue</figcaption>
                        </figure>
                        <figure>
                            <img src="ressources/Assets/images/logo_eglise22.jpg" alt="Pasteur SOSSA Narcisse">
                            <figcaption>Pasteur SOSSA Narcisse</figcaption>
                        </figure>
                        <figure>
                            <img src="ressources/Assets/images/logo_eglise22.jpg" alt="Pasteur AGASSOUSSI Ernest">
                            <figcaption>Pasteur AGASSOUSSI Ernest</figcaption>
                        </figure>
                        <figure>
                            <img src="ressources/Assets/images/logo_eglise22.jpg" alt="Pasteur Elisha Sévérine epse. AKPO">
                            <figcaption>Pasteur Elisha Sévérine (epse. AKPO) </figcaption>
                        </figure>
                        <figure>
                            <img src="ressources/Assets/images/logo_eglise22.jpg" alt="Pasteur Céline epse.">
                            <figcaption>Pasteur Céline (epse.)</figcaption>
                        </figure>
                        <figure>
                            <img src="ressources/Assets/images/logo_eglise22.jpg" alt="Pasteur ADONON Daniel">
                            <figcaption>Pasteur ADONON Daniel</figcaption>
                        </figure>
                        <figure>
                            <img src="ressources/Assets/images/logo_eglise22.jpg" alt="Pasteur Raymond">
                            <figcaption>Pasteur Raymond</figcaption>
                        </figure>
                        <figure>
                            <img src="ressources/Assets/images/logo_eglise22.jpg" alt="Ancien AKPO Eloge">
                            <figcaption>Ancien AKPO Eloge</figcaption>
                        </figure>
                    </div>
                    <div>
                        <figure>
                            <img src="ressources/Assets/images/logo_eglise22.jpg" alt="Coordonnateur AMASSE Carlos">
                            <figcaption>Coordonnateur AMASSE Carlos</figcaption>
                        </figure>
                    </div>
                </div>
            </article>

        </div>

    </main>

    <?php

    require "../App/Views/footer.php";

    ?>

    <script src="ressources/JS/slide.js"></script>
</body>

</html>