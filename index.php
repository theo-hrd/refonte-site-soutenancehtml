<?php
    include 'layouts/header.php';
?>

    <!-- présentation de l'entreprise -->

    <main class="content">

        <div class="prezsiteimg">
            <img src="images/imgindex-min.webp" alt="table de mixage">
        </div>

        <div class="prezsite">
            <h1> Darkness Sono <br> votre sonorisation de prestige. </h1>
            <a href="devis.html"><span class="contacteznous">Contactez nous</span></a>
        </div>


        <section class="section3obj">

            <article class="obj1">
                <h2> Que proposons nous ? </h2> <br> <br>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.<br> Commodi eveniet delectus pariatur
                    voluptas sed eos excepturi cum tempora, consectetur ullam? Quis asperiores assumenda inventore
                    doloribus fugit voluptate voluptatem modi totam.</p>
            </article>

            <article class="obj2">
                <h2> Prestige. </h2> <br> <br>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.<br> Quos omnis nihil, illo aperiam
                    dignissimos reiciendis id fugiat suscipit ullam totam architecto dolorum! Et, neque ea.</p>
            </article>

            <article class="obj3">
                <h2> Nos garanties:</h2> <br> <br>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam expedita a aliquam
                    assumenda?<br>
                    Laborum accusantium eaque, unde porro dicta illum nobis sunt esse expedita.<br> Voluptatem eos
                    id
                    vel fuga dignissimos quam temporibus non a molestiae?</p>
            </article>

        </section>

        <div class="competences">
            <h3>Ce que nous pouvons faire pour vous.</h3> <br>
            <p>Nos prestations chez Darkness Sono.</p> <br>
        </div>

        <section class="competencespicto">
            <article> 
                <i class="fas fa-people-carry"></i> <br> <i class="fal fa-horizontal-rule"></i> <br>
                <h4> Lorem ipsum dolor sit.</h4> <br> <br>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis adipisci minus quibusdam non laborum aliquid!</p>
            </article>

            <article> 
                <i class="far fa-handshake"></i> <br> <i class="fal fa-horizontal-rule"></i> <br>
                <h4> Lorem ipsum dolor sit.</h4> <br> <br>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et quasi soluta accusamus amet praesentium voluptatum.</p>
            </article>

            <article> 
                <i class="fas fa-glass-cheers"></i> <br> <i class="fal fa-horizontal-rule"></i> <br>
                <h4> Lorem ipsum dolor sit.</h4> <br> <br>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae earum corporis at quam, explicabo distinctio.</p>
            </article>

            <article> 
                <i class="fas fa-shipping-fast"></i> <br> <i class="fal fa-horizontal-rule"></i> <br>
                <h4> Lorem ipsum dolor sit.</h4> <br> <br>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, deleniti vero? Beatae quisquam iste blanditiis?</p>
            </article>

            <article> 
                <i class="fas fa-route"></i> <br> <i class="fal fa-horizontal-rule"></i> <br>
                <h4> Lorem ipsum dolor sit.</h4> <br> <br>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate animi aliquid numquam fugiat pariatur incidunt.</p>
            </article>

            <article> 
                <i class="fas fa-music"></i> <br> <i class="fal fa-horizontal-rule"></i> <br>
                <h4> Lorem ipsum dolor sit.</h4> <br> <br>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit, assumenda excepturi voluptatum cupiditate dicta alias.</p>
            </article>

        </section>
        <div class="backgroundbody">
            <!-- slider -->
            <div id="content-slider">
                <div class="wrap-slider">	
                
                    <!-- inputs buttons -->			
                        <input type="radio" id="a-1" name="a" >			
                        <input type="radio" id="a-2" name="a" >			
                        <input type="radio" id="a-3" name="a" >
                        <input type="radio" id="a-4" name="a" >
        
                    <!-- button displays -->
                    <nav id="main">
                        <label for="a-1" class="first"></label>
                        <label for="a-2" class="first"></label>
                        <label for="a-3" class="first"></label>
                        <label for="a-4" class="first"></label>
                    </nav>
            
                    <!-- images slider -->							
                    <div class="slider">
                        <div class="inset">
                
                            <figure>
                                <img src="images/mix-analo.jpg" alt="table mixage analogique" id="i-1" class="f">						
                            </figure>
                    
                            <figure>
                                <img src="images/tablemix.jpg" alt="table mixage" id="i-2" class="f">						
                            </figure>
                    
                            <figure>
                                <img src="images/dj.jpg" alt="djsoiree" id="i-3" class="f">						
                            </figure>
                    
                            <figure>
                                <img src="images/sonoconcert.jpg" alt="backstage concert" id="i-4" class="f">						
                            </figure>
                        </div>
                    </div>					
            
                </div>		
            </div>
        </div>
    </main>

    <?php
        include 'layouts/footer.php'
    ?>

</body>

</html>