<?php
    include 'layouts/header.php';
?>

    <div class="backgroundbody">

        <!-- image haut de page-->
        <div class="imgdevis">
            <img src="images/mix-analo.jpg" alt="imagedevis">
            <h1> devis </h1>
        </div>

        <div class="devis">

            <!-- description de la page contact -->
            <div class="descdevis">
                <h2> Un devis ? </h2> <i class="fal fa-horizontal-rule"></i>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero porro voluptate inventore? Voluptatum
                    alias odio totam tenetur fugit ratione, nobis sequi provident odit est repellat dolor, corporis quo
                    ut explicabo.</p> <br>
                <!-- tableau-->
                <table id="location">
                    <tr>
                        <th>type de location</th>
                        <th>prix</th>
                        <th>caution</th>
                    </tr>
                    <tr>
                        <td>sonorisation 2 speakers</td>
                        <td>100€/journée</td>
                        <td>250€</td>
                    </tr>
                    <tr>
                        <td>sonorisation 4 speakers</td>
                        <td>200€/journée</td>
                        <td>350€</td>
                    </tr>
                    <tr>
                        <td> sonorisation 4 speakers + micro</td>
                        <td>300€/journée</td>
                        <td>450€</td>
                    </tr>
                    <tr>
                        <td>sonorisation 4 speakers + 2 micros + 2 lumières</td>
                        <td>400€/journée</td>
                        <td>600€</td>
                    </tr>
                    <tr>
                        <td>sonorisation 4 speakers + 2 micros + 6 lumières + table de mix</td>
                        <td>600€/journée</td>
                        <td>800€</td>
                    </tr>





                </table>
            </div>

            <!-- formulaire -->
            <div class="formulairedevis">
                <form action="coordonees.php" method="post">


                    <h2> Vos coordonnées&nbsp;</h2><i class="fal fa-horizontal-rule"></i>

                    <div class="formulairearea">

                        <p> <input type="text" name="nom" id="nom" placeholder="&nbsp;Nom & Prénom"> </p>

                        <p> <input type="email" name="email" id="email" placeholder="&nbsp;Votre E-Mail"></p>

                        <p> <input type="text" name=sujet id="sujet" placeholder="&nbsp; Type de location ?"> </p>

                        <textarea name="message" id="message" maxlength="400"
                            placeholder="&nbsp;&nbsp;&nbsp;&nbsp;Vos besoins spécifiques (maximum 400 caractères)"></textarea>

                        <br>

                        <input type="checkbox" id="cdu" name="cdu" unchecked>
                        <label for="cdu"><a href="mentions.html"> En cochant cette case, vous acceptez les conditions
                                générales d'utilisation.</a></label> <br> <br>

                        <input class="envoyerdevis" type="submit" value="envoyer">
                    </div>

                </form>
            </div>
        </div>

    </div>


    <?php
        include 'layouts/footer.php'
    ?>
    
</body>

</html>