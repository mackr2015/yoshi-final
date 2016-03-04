<?php include 'partials/header.php'; ?>
<?php
// global variable for highlighted navigation
$currentPage = "gallery.php";
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
             src="img/gallery/gallery-bg.png" 
             alt="gallery page background"/>

        <div>
            <h1 class="gallery-headline">our gallery</h1>
        </div>

        <!--        <div class="gallery-cta">
                    <button class="main-btn">Book now</button>
                    </div>    -->
    </div>  


    <div class="gallery-sec">

        <div class="row row-center">
            <div class="columns large-3 medium-2">

                <i class="fa fa-bolt fa-3x"></i>

                <h3>Edgy Modern look</h3>
                <p class="modern-p">
                    This style will bring most current 
                    look of some of the Entertainment 
                    favorites. Experiment and Dare to break all boundaries
                </p>
            </div>
            <div class="columns large-3 medium-2">
                <i class="fa fa-diamond fa-3x"></i>
                <h3>Contemporary look</h3>
                <p class="contemporary-p">
                    This style will is highlighting 
                    some of the natural shapes and lines. 
                    Making it stand out, wear it for any 
                    special occasion
                </p>
            </div>
            <div class="columns large-3 medium-2">
                <i class="fa fa-pagelines fa-3x"></i>
                <h3>Freestyle look</h3>
                <p class="freestyle-p">
                    Short, long, side-up or down, it doesn’t 
                    matter as long as it feel like you. 
                    This Hair style will bring sense of freedom and confidence.
                </p>
            </div>
        </div>

    </div>

    <div class="gallery-slide">

        <div class="row row-center">
            
            <div class="columns large-7 medium-4">
            
                <div class="slide"> 

                    <img src="img/gallery/gallery1.png" 
                         alt="pink hair signature look"/>
                    
                    <img src="img/gallery/gallery2.png" 
                         alt="gallery hair style 2"/>
                    
                    <img src="img/gallery/gallery3.png" 
                         alt="gallery style 3"/>
                    
                    <img src="img/gallery/gallery4.png" 
                         alt="gallery style 4"/>
                    
                    <img src="img/gallery/gallery5.png" 
                         alt="gallery style 5"/>

                    
                    <!--<div class="columns large-1 medium-1 arrow-left">-->
                        <a href="#" class="slidesjs-previous slidesjs-navigation slidejs-previous-icon">
                            </a>

                    <!--</div>-->
                    <!--<div class="columns large-1 medium-1 arrow-right">-->
                        <a href="#" class="slidesjs-next slidesjs-navigation slidejs-next-icon">
                            </a>
                    <!--</div>-->


               </div>
        </div>
        </div>
    </div> 
      



<?php include 'partials/footer.php'; ?>

</body>

</html>


