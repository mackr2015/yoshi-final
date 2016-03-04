<?php include 'partials/header.php'; ?>
<?php
// global variable for highlighted navigation
$currentPage = "index.php";
?>

<body onload="imageSlider()">


    <div class="page-header">

        <nav class="nav-bar">
            <div class="row">  

                <?php include 'partials/navigation.php'; ?>    

            </div>
        </nav>

    </div>



    <div class="slider-img">
        <img id="myPhoto" 
             src="img/home/home-bg1.png" 
             alt="home background image"/>

        <div class="main-hd">
            <img class="main-img-logo" 
                 src="img/home/logo-main-pg.png" 
                 alt="logo main page background">
        </div>
        <div>
            <h1 class="home-headline">hair studio</h1>
        </div>

        <div class="home-cta">
            <button class="main-btn"><a href="contact.php">Book now</button></a>
        </div>    
    </div>


    <section class="first-sec">
        <div class="row row-center">
            <div class="columns large-12 medium-6">  
                <h2 class="sub-headline">Hair Styles</h2>
            </div> 
        </div>

        <div class="row">

            <div class="columns large-4 medium-2 pad-small2">
                <a class="fancybox"
                   title="Lady Gaga Style"
                   rel="gallery" 
                   href="img/home/gaga.jpg">
                    <img src="img/home/gaga-style.png" 
                         alt="Lady Gaga Hair Style"/></a>
            </div>
            <div class="columns large-4 medium-2 pad-small2">

                <a class="fancybox"
                   title="Pink Hair Style"
                   rel="gallery" 
                   href="img/home/pink.png">
                    <img 
                        src="img/home/pink-style.png" 
                        alt="Pink hair style"/></a>
            </div>
            <div class="columns large-4 medium-2 pad-small2">

                <a class="fancybox"
                   title="Green Hair Style"
                   rel="gallery" 
                   href="img/home/green.png">
                    <img 
                        src="img/home/green-style.png" 
                        alt="green hair style"/></a>
            </div>

        </div>

        <!-- 2 imgs that are offsets and they fit between 1st and 2nd row -->

        <div class="row hair-position">
            <div class="columns large-4 medium-2 pad-small2">

                <a class="fancybox"
                   title="Taylor Swift Style"
                   rel="gallery" 
                   href="img/home/taylor.png">
                    <img src="img/home/taylor-style.png" 
                         alt="Taylor Swift hair style"/></a>
            </div>
            <div class="columns large-4 medium-2 pad-small2">
                <a class="fancybox"
                   title="Blonde Hair Style"
                   rel="gallery" 
                   href="img/home/blonde.png">
                <img src="img/home/blonde-style.png" 
                     alt="Blonde hair style"/></a>
            </div>

        </div>
        <div class="row small-top-margin">
            <div class="columns large-4 medium-2 pad-small2">
                <a class="fancybox"
                   title="Wavy Hair Style"
                   rel="gallery" 
                   href="img/home/wavy.png">
                <img src="img/home/wavy-style.png" 
                     alt="Wavy hair style"/></a>
            </div>
            <div class="columns large-4 medium-2 pad-small2">
                <a class="fancybox"
                   title="Short Hair Style"
                   rel="gallery" 
                   href="img/home/short.png">
                <img src="img/home/short-style.png" 
                     alt="Short hair style"/></a>
            </div>
            <div class="columns large-4 medium-2 pad-small2">
                <a class="fancybox"
                   title="Lavender Hair Style"
                   rel="gallery" 
                   href="img/home/lavender.png">
                <img src="img/home/lavender-style.png" 
                     alt="Lavender hair style"/></a>
            </div>
        </div>    
    </section>

    <div class="second-sec">

        <div class="row-center">
            <div class="columns large-12 medium-6">

                <h2 class="sub-headline">About Us</div>

            <p class="second-p">
                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content 
                here', making it look like readable English.
            </p>

            <button class="main-btn"><a href="about.php">Read more</button></a>
        </div>


    </div>

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




