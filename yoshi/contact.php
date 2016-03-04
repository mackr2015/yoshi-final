<?php include 'partials/header.php'; ?>
<?php
// global variable for highlighted navigation
$currentPage = "contact.php";
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
        <img class="about-background" 
             src="img/home/home-bg1.png" 
             alt="rates page background"/>

        <div>
            <h1 class="contact-headline">contact</h1>
        </div>

        <!--        <div class="gallery-cta">
                    <button class="main-btn">Book now</button>
                    </div>    -->
    </div>



    <div class="contact-sec">

        <div class="row row-center">
            <div class="columns large-12 medium-6">
                <h2 class="sub-headline">Contact us</h2>
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
                    <input id="rates-inp" type="text" name="phone" placeholder="Phone number">
                    <input id="rates-inp" type="text" name="email" placeholder="Your email">
                    
                    
                    <textarea class="rates-textarea"></textarea>

                    <button class="rates-btn" type="submit" name="Send" value="submit">Send</button>
                </form>

            </div>

        </div>


    </div>
    
    <div class="contact-map">
        
        <div class="row row-center">
            
            <div class="columns large-12 medium-6">
                
                <iframe class="googlemap" 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2602.667117518559!2d-123.11754558431055!3d49.282704579331316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5486717f2d2c89dd%3A0xcb54d8f90a8671e4!2sVanArts!5e0!3m2!1sen!2sca!4v1447102283953" 
                        width="1150" 
                        height="400" 
                        frameborder="0" 
                        style="border:0" 
                        allowfullscreen=""></iframe>
                
            </div>
            
        </div>
    </div>


    <?php include 'partials/footer.php'; ?>

</body>

</html>    