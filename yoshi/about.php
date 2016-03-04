<?php include 'partials/header.php'; ?>
<?php
// global variable for highlighted navigation
$currentPage = "about.php";
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
             src="img/about/page-bg.png" 
             alt="slider image 1"/>

        <div>
            <h1 class="about-headline">about us</h1>
        </div>

<!--        <div class="about-cta">
            <button class="main-btn">Book now</button>
            </div>    -->
    </div>


    <section class="yoshi-sec">

        <div class="row row-center">

            <div class="columns large-12 medium-6">

                <h2 id="yoshi" class="sub-headline">Yoshi</h2>

                <p class="yoshi-desc">
                    Stylist, creative director and owner of Yoshi Hair Studio
                </p>
            </div>
        </div>
        <div class="row row-center">

            <div class="columns large-4 medium-2">

                <p class="yoshi-info1">
                    Yoshi is Los Angeles based high-end studio. 
                    Owner Mr. Yoshi moved to L.A. as teenager, 
                    where he finished Art School for 
                    Fasion and Design.
                    His Mother was well know hair stylist from Tokyo, 
                    Japan and Yoshi wanted to follow her footsteps and 
                    build up his reputation as one of the top notch Hair 
                    Studios in America. 

                </p>

            </div>

            <div class="columns large-3 medium-2">
                <a href="img/team/yoshi-big.jpg"
                   class="fancybox"
                   title="Yoshi Natsuaka"
                   rel="gallery">

                <img src="img/about/yoshi-profile.png"
                     alt="yoshi profile image"></a>

            </div>

            <div class="columns large-4 medium-2">

                <p class="yoshi-info2">

                    Yoshi Hair Studio is creative, fun, fresh but high-end. 
                    Most of our clients are celebrities and well 
                    known persona from Fashion industry.<br><br>

                    Yoshi Hair Studio specialize in women stylish,modern hair 
                    styles but do service men as well.

                </p>

            </div>
        </div>



    </section>

    <section class="clients-sec">

        <div class="row row-center">
            <div class="columns large-12 medium-6">
                <h2 class="sub-headline">Clients and Projects</h2>
            </div>
        </div>

        <div class="clients-wrap">
            <div class="row row-center">

                <div class="columns large-12 medium-6">
                    
                    <h3 class="clients-hd">Steve Mclaphine</h3>
                    <h4 class="clients-subhd">Vouge Art Director</h4>
                </div>
            </div>
            <div class="row row-center">
                <!-- <div class="columns large-1 medium-1 arrow-lf">
                    <img 
                         src="img/about/left-arrow.png" 
                         alt="left arrow slide"/>
                </div> -->
                <div class="columns large-3 medium-2">
                    <img src="img/about/steve-mclaphine.png" 
                         alt="steve mclaphine testimonial"/>
                    
                </div>
                <!-- <div class="columns large-1 medium-1 arrow-rg">
                    <img 
                         src="img/about/right-arrow.png" 
                         alt="left arrow slide"/>
                </div> -->
            </div>
            <div class="row row-center">
                <div class="columns large-7 medium-3">
                    
                    <p class="clients-tx">
                        Yoshi Hair studio and their great and professional staff has been 
                        strong supporter to our Spring/Summer 2015 Fashion collection. 
                        Featured in over 10 cover of our world wide magazine. 
                        Vouge Fashion Magazine is strongly recommending Yoshi Hair studio for their excellent work and artistry.
                    </p>
                </div>
            </div>
        </div>

    </section>  
    
    <div class="testimonials-sec">

        <div class="row row-center">

            <h2 class="sub-headline">Testimonials</h2>
            <div class="columns large-3 medium-2 pull-1">
                <img src="img/testimonials-sec/pink.png" 
                     alt="testimonials first image"/>
            </div>
            <div class="columns large-3 medium-2">
                <img src="img/testimonials-sec/roby.png" 
                     alt="testimonials second image"/>
            </div>
            <div class="columns large-3 medium-2 push-1">
                <img src="img/testimonials-sec/july.png" 
                     alt="testimonials third image"/>
            </div>
        </div>
        <div class="row row-center">
            <div class="columns large-3 medium-2 pull-1"> 
                <h3>PINK</h3>

                <p class="testimonials-p">
                    There are many variations of passages of Lorem Ipsum available, 
                    majority have suffered. 
                    Alteration in some effected humor, or random even
                </p>
            </div>
            <div class="columns large-3 medium-2"> 
                <h3>ROBY MCREED</h3>

                <p class="testimonials-p">
                    There are many variations of passages of Lorem Ipsum available, 
                    majority have suffered. 
                    Alteration in some effected humor, or random even
                </p>
            </div>
            <div class="columns large-3 medium-2 push-1"> 
                <h3>JULY GARLAND</h3>

                <p class="testimonials-p">
                    There are many variations of passages of Lorem Ipsum available, 
                    majority have suffered. 
                    Alteration in some effected humor, or random even
                </p>
            </div>
        </div>    
    </div>










    <?php include 'partials/footer.php'; ?>




</body>

</html>

