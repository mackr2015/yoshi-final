<?php include 'partials/header.php';

    $host = "localhost";
    $username = "mackraic_maki_yo";
    $password = "testeri";
    $database = "mackraic_yoshi_db";

    $connection = mysqli_connect($host, $username, $password, $database);

    $dataUpdate = "";
    
    if (!$connection) {
        die("Connection has failed: " . mysqli_connect_error());
    } 
    else {

        $query = "SELECT * FROM trend_tb";

        $resultQuery = mysqli_query($connection, $query);

        while ($row = mysqli_fetch_assoc($resultQuery)) {

            $dataUpdate.= '<div class="columns large-12 medium-6 trend-tx">
                        
                        <h3>'.$row["title"].'</h3>
                        <p>'.$row["content"].'</p> 
                        <img src="'.$row["image"].'"/>    
                       
                        </div>';
            
            
            
           
                    
        
        }
        mysqli_close($connection);
    }



// global variable for highlighted navigation
$currentPage = "trend.php";
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

    <div class="trend-sec">
        <div class="row">

            <?php 
                    
                echo $dataUpdate;
                  
                  
            ?>

            
            

            
        </div>

    </div>    







    <?php include 'partials/footer.php'; ?>



</body>

</html>

