<?php include 'partials/header.php'; ?>
<?php
// global variable for highlighted navigation
$currentPage = "rates.php";
?>

<body>

    <div class="page-header">

        <nav class="nav-bar">
            <div class="row">  

                <?php include 'partials/navigation.php'; ?>    

            </div>
        </nav>

    </div>

    <div class="slider-img">
        
        <img src="img/rates/rates-bg.png" 
             alt="rates background image"/>

        <div>
            <h1 class="rates-headline">rates</h1>
        </div>

        <!--        <div class="gallery-cta">
                    <button class="main-btn">Book now</button>
                    </div>    -->
    </div>

    <div class="rates-hd">

        <div class="row row-center">

            <div class="columns large-7 medium-6">

                <h2 class="sub-headline">Yoshi</h2>
                <h3>Hair Studio</h3>
            </div>
        </div>
    </div>

    <div class="rates-sec">
        <div class="row row-center">
            
            <div class="logo-image">
                <img src="img/home/logo-main-pg.png" 
                     alt="main logo image"/>
            </div>
            <div class="columns large-7 medium-3"> 
                <div class="rates-content">
                    <div class="rates-p">
                        <h4>Signature Style</h4>
                        <p>
                            Trendy and hip hair styles.<br>
                            Celebrity signature.
                        </p>
                        <p class="price-p">
                            &#36;100/h
                        </p>
                    </div>
                </div>    
            </div>

            <div class="columns large-2 medium-3">
                <div class="rates-img">
                    <img src="img/rates/taylor.jpg" 
                         alt="taylor image for rates display"/>
                </div> 

            </div>
            <div class="columns large-7 medium-3"> 
                <div class="rates-content">
                    <div class="rates-p">
                        <h4>Texture Up-Do Design</h4>
                        <p>
                            Add a slick texture to your hair design. 
                            Outline and bring full gloss.
                        </p>
                        <p class="price-p">
                            &#36;80/h
                        </p>
                    </div>
                </div>    
            </div>

            <div class="columns large-2 medium-3">
                <div class="rates-img">
                    <img src="img/rates/curly.jpg" 
                         alt="texture hair"/>
                </div> 

            </div>

            <div class="columns large-7 medium-3"> 
                <div class="rates-content">
                    <div class="rates-p">
                        <h4>Artsy-Edgy Coloring</h4>
                        <p>
                            Mix of colors, express your inner artist. Dare to amaze?
                        </p>
                        <p class="price-p">
                            &#36;85/h
                        </p>
                    </div>
                </div>    
            </div>

            <div class="columns large-2 medium-3">
                <div class="rates-img">
                    <img src="img/rates/artsy.jpg" 
                         alt="artcy hair purple color"/>
                </div> 

            </div>  
            <div class="columns large-7 medium-3"> 
                <div class="rates-content">
                    <div class="rates-p">
                        <h4>Trendy Look</h4>
                        <p>
                            Current and trendy look.Modern/cool hair styles.
                        </p>
                        <p class="price-p">
                            &#36;120/h
                        </p>
                    </div>
                </div>    
            </div>

            <div class="columns large-2 medium-3">
                <div class="rates-img">
                    <img src="img/rates/long.jpg" 
                         alt="long colorful hair"/>
                </div> 

            </div> 



        </div>
        <div class="row row-center">
            <div class="columns large-12 medium-6">
                <div class="rates-book">
                    <a href="contact.php"<button class="main-btn">Book now</button></a>
                </div>
            </div>    
        </div>
    </div>


    <div class="rates-contact">
        <div class="row row-center">
            <div class="columns large-12 medium-6">
                <h2 class="sub-headline">Stay in Touch</h2>
            </div>
            <div class="columns large-1 medium-1">
                <a href="https://facebook.com"><i class="fa fa-facebook fb-f"></i></a>
            </div>
            <div class="columns large-1 medium-1">
                <a href="https://twitter.com"><i class="fa fa-twitter tw-f"></i></a>
            </div>
            <div class="columns large-1 medium-1">
                <a href="https://www.linkedin.com"><i class="fa fa-linkedin-square li-f"></i></a>
            </div>
            <div class="columns large-12 medium-6">
                <h4 class="rates-mes">Leave us a message</h4>
            </div>

            <div class="columns large-5 medium-6">

                <form id="rates-form" action="#" method="post">

                    <input id="rates-inp" type="text" name="name" placeholder="Your name">
                    <input id="rates-inp" type="text" name="email" placeholder="Your email">

                    <textarea class="rates-textarea"></textarea>

                    <button class="rates-btn" type="submit" name="Send" value="submit">Send</button>
                </form>

            </div>

        </div>    

    </div>    



    <?php include 'partials/footer.php'; ?>

</body>

</html>
