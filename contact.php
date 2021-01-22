<?php
    include 'layouts/header.php';
?>

<body>

    <div class="backgroundbody">
        
        <!-- image haut de page-->
        <div class="imgcontact">
            <img src="images/contact-min.jpg" alt="imagecontact">
            <h1> contact </h1>
        </div>







        <div class="contact">

            <!-- description de la page contact -->
            <div class="desccontact">
                <h2> Contactez nous. </h2> <i class="fal fa-horizontal-rule"></i>
                <p> Une demande ? Une suggestion ? <br> <br>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere eius aspernatur libero doloribus!
                    Nisi, consequuntur, praesentium aut repudiandae qui aperiam dignissimos saepe beatae harum
                    distinctio veritatis blanditiis est dolore quos id? Eligendi totam tempora, delectus molestias vero
                    vitae sed voluptatem? Ipsa distinctio, necessitatibus eos id dolore atque in suscipit culpa! Quam,
                    laborum. Suscipit accusantium nisi ipsam placeat consectetur provident ullam.
                </p> <br> <br>

                <div class="map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2687.47825854858!2d-2.761325484171314!3d47.655704792577296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48101e9c8c5b8907%3A0x3a4d6c17a356c34a!2s3%20Place%20de%20la%20R%C3%A9publique%2C%2056000%20Vannes!5e0!3m2!1sfr!2sfr!4v1605618596140!5m2!1sfr!2sfr"
                        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                        aria-hidden="false" tabindex="0"></iframe>
                </div>


            </div>

            <!-- formulaire -->
            <div class="formulaire">
                <form action="coordonees.php" method="post">


                    <h2> Vos coordonnées&nbsp;</h2><i class="fal fa-horizontal-rule"></i>

                    <div class="formulairearea">

                        <p> <input type="text" name="nom" id="nom" placeholder="&nbsp;Nom & Prénom"> </p>

                        <p> <input type="email" name="email" id="email" placeholder="&nbsp;Votre E-Mail"></p>

                        <p> <input type="text" name=sujet id="sujet" placeholder="&nbsp;Quel est le sujet ?"> </p>

                        <textarea name="message" id="message" maxlength="200"
                            placeholder="&nbsp;&nbsp;&nbsp;&nbsp;Votre messsage (maximum 200 caractères)"></textarea>

                        <br>

                        <input type="checkbox" id="cdu" name="cdu" unchecked>
                        <label for="cdu"><a href="mentions.html"> En cochant cette case, vous acceptez les conditions
                                générales d'utilisation.</a></label> <br> <br>

                        <input class="envoyer" type="submit" value="envoyer">
                    </div>

                </form>
            </div>
        </div>



    <?php
        include 'layouts/footer.php'
    ?>
    
</html>