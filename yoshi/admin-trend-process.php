<?php 
	date_default_timezone_set('Canada/Pacific');
	
	if((isset($_POST['title']) AND isset($_POST['content']))|| isset($_POST['delete'])){

		$host = "localhost";
		$username = "mackraic_maki_yo";
		$password = "testeri";
		$database = "mackraic_yoshi_db";
		$connection = mysqli_connect($host, $username, $password, $database);

		if(!$connection) {
			die('Connection Failed: ' . mysqli_connect_error());
		}
		else {

			// deleting post from database
		    if(isset($_POST['delete'])){

		     	// $id = $_POST['id'];
		     	$delete = "DELETE FROM trend_tb WHERE id = $_POST[delete]";
		     	$deleteResult = mysqli_query($connection, $delete);
		     	if(!$deleteResult){
		     		echo $connection->error;
		     		exit;
		     	}
		     	
		    }
			
			
		    else{
			
                        $target_directory = "img/trend/";
                        $target_file = $target_directory . basename($_FILES["imageUploaded"]["name"]);
                        $uploadOk = true;
                        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
                       

                        
                        move_uploaded_file($_FILES["imageUploaded"]["tmp_name"], $target_file);
		        
                        
                        
                        
                        
			$title =  mysqli_real_escape_string($connection,$_POST['title']);
			$content =  mysqli_real_escape_string($connection,$_POST['content']);
                        $image =  mysqli_real_escape_string($connection,$_POST['content']);
				

		        //inserting data into database
		        $insert = "INSERT INTO trend_tb (title, content, image) 
				   VALUES ('$title', '$content', '$target_file')";

		        $insertResult = mysqli_query($connection, $insert);
				
		    }
		    
		    header("location: admin-trend.php");

		}
	}
?>





<?php include 'partials/header.php'; ?>
<?php
// global variable for highlighted navigation
$currentPage = "admin-trend.php";
?>

<body>


    <div class="admin-header">

        <div class="row row-center">
            <?php include 'partials/admin-navigation.php'; ?>    

        </div>

    </div>


    <div class="admin-edit">



    </div>




</body>

</html>
