<?php

require "../App/Views/header.php";

?>

        <div>
            <!-- 
            partie hommage papa AMASSE 
                balises : 
                    - image : un bakground qui sera un cadre photo téléchargée ou fait avec soit pixellab ou photoshop.

                    - paragraphe : nom et prénoms
                    - audio : deux ou trois chansons
                    - paragraphe : biographie de papa AMASSE
        -->
            <section class="faver">
                <h1>Parlons du père</h1>
                <img src="ressources/Assets/images/logo_eglise22.jpg" alt="faver">
                <p>papa AMASSE Hilaire</p>
                <audio controls="controls" preload="auto" loop>
                    <source src="ressources/Assets/multimédia/Abba Pére.mp3">
                    </source>

                </audio>
                <p>-- biographie --
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed ducimus quam, ut cum incidunt
                    accusantium ad eum laudantium, ratione molestias vero eos, temporibus distinctio autem porro alias
                    architecto illum ipsa! Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto placeat et
                    nihil possimus eum harum soluta cumque vero aspernatur omnis architecto, aperiam labore nisi,
                    doloribus beatae accusamus tempore nobis consequatur?</p>
            </section>

        </div>
        <div>
            <!-- 
            Partie réservée aux paroisses
            il y aura trois grandes div avec à l'intérieur des div.
                div bloc : trois div à l'intérieur
                div enfant : - balises :
                                        img
                                        p
                                        address
                                            map
                                            contact
         -->
            <section>

                <h1>Nos Assemblées</h1>

                <div class="container_local_church">

                    <!-- <div class="local_church_time1"> -->

                        <div class="local_church">
                            <h3>Sêtovi</h3>
                            <div>
                                <img src="ressources/Assets/images/test.jpg" alt="Setovi_1">
                           </div>
                           <div>Date d'ouverture</div>
                           <div><a href="tel:002296232807">002296232807</a></div>
                           <div class="localisation"><img src="ressources/Assets/images/map.png" alt="maps"></div>
                        </div>

                        <div class="local_church">
                            <h3>Ouèdo</h3>
                            <div>
                                <img src="ressources/Assets/images/test.jpg" alt="Ouèdo_1">
                           </div>
                           <div>Date d'ouverture</div>
                           <div><a href="tel:002296232807">002296232807</a></div>
                           <div class="localisation"><img src="ressources/Assets/images/map.png" alt="maps"></div>
                        </div>

                    <!-- </div> -->


                    <!-- <div class="local_church_time2"> -->
                    

                        <div class="local_church">
                            <h3>Dogbo Zaphi</h3>
                            <div>
                                <img src="ressources/Assets/images/test.jpg" alt="Dogbo_Zaphi_1">
                           </div>
                           <div>Date d'ouverture</div>
                           <div><a href="tel:002296232807">002296232807</a></div>
                           <div class="localisation"><img src="ressources/Assets/images/map.png" alt="maps"></div>
                        </div>

                        <div class="local_church">
                            <h3>Dogbo Fonkomè</h3>
                            <div>
                                <img src="ressources/Assets/images/test.jpg" alt="Dogbo_Fonkomè_1">
                            </div>
                            <div>Date d'ouverture</div>
                            <div><a href="tel:002296232807">002296232807</a></div>
                            <div class="localisation"><img src="ressources/Assets/images/map.png" alt="maps"></div>
                        </div>

                        <div class="local_church">
                            <h3>Sey Chatêau</h3>
                            <div>
                                <img src="ressources/Assets/images/test.jpg" alt="Sey_Chateau_1">
                           </div>
                           <div>Date d'ouverture</div>
                           <div><a href="tel:002296232807">002296232807</a></div>
                           <div class="localisation"><img src="ressources/Assets/images/map.png" alt="maps"></div>
                        </div>

                    <!-- </div> -->


                    <!-- <div class="local_church_time3"> -->

                        <div class="local_church">
                            <h3>Sey Hougo Agla</h3>
                            <div>
                                <img src="ressources/Assets/images/test.jpg" alt="Sey_Hougo_Agla_1">
                           </div>
                           <div>Date d'ouverture</div>
                           <div><a href="tel:002296232807">002296232807</a></div>
                           <div class="localisation"><img src="ressources/Assets/images/map.png" alt="maps"></div>
                        </div>

                        <div class="local_church">
                            <h3>Helou</h3>
                            <div>
                                <img src="ressources/Assets/images/test.jpg" alt="Helou_1">
                           </div>
                           <div>Date d'ouverture</div>
                           <div><a href="tel:002296232807">002296232807</a></div>
                           <div class="localisation"><img src="ressources/Assets/images/map.png" alt="maps"></div>
                        </div>

                        <div class="local_church">
                            <h3>Akahoué</h3>
                            <div>
                                 <img src="ressources/Assets/images/test.jpg" alt="Akahoué_1">
                            </div>
                            <div>Date d'ouverture</div>
                            <div><a href="tel:002296232807">002296232807</a></div>
                            <div class="localisation"><img src="ressources/Assets/images/map.png" alt="maps"></div>
                        </div>

                    <!-- </div> -->

                </div>

            </section>

            <section>

                <h1>Souvenir du père</h1>

                <blockquote>témoignages -- Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, officia.
                </blockquote>

                <cite>témoin</cite>

            </section>

        </div>

        <div class="tetimony">
            <!-- 

            partie réservée aux témoignages
                div avec bordure contenant à l'intérieur deux balises : 
                        blockquote
                        cite
            
            ici, les témoignages seront affichés après 30 secondes les uns à la suite des autres.
         -->
            <blockquote>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro vitae aspernatur odit corporis
                nulla totam enim distinctio fugiat officiis dolores. Voluptate ut illum dolores rerum deserunt cum,
                inventore mollitia laudantium!</blockquote>

            <cite> Maman Gilles</cite>

        </div>

    </main>

    <?php

require "../App/Views/footer.php";

?>

</body>

</html>