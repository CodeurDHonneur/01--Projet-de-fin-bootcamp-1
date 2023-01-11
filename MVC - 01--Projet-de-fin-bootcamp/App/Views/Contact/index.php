<?php
require "../App/Views/header.php";

?>

<div class="container_form">

    <form action="" method="post">

        <fieldset>

            <legend>Remettons ensemble les pandules à l'heure</legend>

            <div>
                <input type="text" placeholder="Nom" name="lastName">
            </div>

            <div>
                <input type="text" placeholder="Prénoms" name="firstName">
            </div>

            <div>
                <input type="text" placeholder="Adresse" name="address">
            </div>

            <div>
                <input type="email" placeholder="Email" name="email">
            </div>

            <div>
                <input type="tel" placeholder="Numéro de téléphone" name="tel">
            </div>

            <div>
                <textarea name="request" id="request" placeholder="Vous pouvez ici mettre le sujet qui vous porte à coeur et nous vous soutiendrons dans la prière pour voir votre exaucement et rendre grâce à Dieu." cols="40" rows="10"></textarea>
            </div>

            <div>
                <input type="submit" value="Envoyer">
                <input type="reset" value="Rafraîchir">
            </div>

        </fieldset>

    </form>

</div>

 <?php

require "../App/Views/footer.php";

?>

</body>

</html>