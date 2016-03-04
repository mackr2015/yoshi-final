
<?php include 'partials/header.php'; ?>

<?php
    $host = "localhost";
    $username = "mackraic_maki_yo";
    $password = "testeri";
    $database = "mackraic_yoshi_db";

    $connection = mysqli_connect($host, $username, $password, $database);

    $data = "";    
    if (!$connection) {
        die("Connection has failed: " . mysqli_connect_error());
    } 
    else {

        $query = "SELECT * FROM image_tb";

        $resultQuery = mysqli_query($connection, $query);

        while ($row = mysqli_fetch_assoc($resultQuery)) {

            $data .= '<div class="columns large-3 medium-2">
                        <img src="'.$row["name"].'"/> 
                      </div> ';   
        
        }
        mysqli_close($connection);
    }
?>

<?php
// global variable for highlighted navigation
$currentPage = "team.php";
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
             src="img/team/team-bg.png" 
             alt="team background image"/>

        <div>
            <h1 class="team-headline">meet our<br>team</h1>
        </div>

        <div class="team-cta">
            <button class="main-btn"><a href="contact.php">Book now</button></a>
        </div>    
    </div>    



    <section class="team-sec">

        <div class="row row-center">

            <div class="columns large-8 medium-6">

                <h2 class="team-subheadline">Yoshi's Team</h2>

                <p class="team-desc">
                    Our team of professionals are here to help you look great no matter what!!<br>Modern, trendy and artsy hair styles are our specials. 
                    Follow us via social media and find out why Yoshi Hair Studio is one of the top names in Fashion and Hair Design Industry.
                </p>
            </div>
        </div>
        <div class="row team-gallery">

            <?php 
            
            echo $data;
            
            ?>
            
        </div>



    </section>

<?php include 'partials/footer.php'; ?>


</body>

</html>