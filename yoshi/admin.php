<?php include 'partials/header.php'; ?>





<?php
// global variable for highlighted navigation
$currentPage = "admin.php";
?>



<body>


    <div class="admin-header">

        <div class="row row-center">

            <?php include 'partials/admin-navigation.php'; ?>    


        </div>

    </div>

    <div class="upload-sec">
        <div class="row row-center upload-bg">

            <div class="columns large-12 medium-6">

                <h3 class="sub-headline">Updating info for Team Page</h3>
            </div>



            <div class="columns large-4 medium-3">
                <form enctype="multipart/form-data" 
                      method="POST" 
                      action="admin.php">

                    
                    <input type="file" name="imageUploaded">
            </div>


            <div class="columns large-12 medium-6">    
                        <button type="submit" 
                                name="submit" 
                                value="Upload">Upload</button>
                </form>
            </div>


                
            </div>    

        </div>

        <?php
        if (isset($_POST['submit'])) {
            
            

            $targetDirectory = "img/img_upload/";
            $targetFile = $targetDirectory . basename($_FILES['imageUploaded']['name']);
            $imageFileType = pathinfo($targetFile, PATHINFO_EXTENSION);

            $uploadOk = true;

            $host = "localhost";
            $username = "mackraic_maki_yo";
            $password = "testeri";
            $database = "mackraic_yoshi_db";

            $connection = mysqli_connect($host, $username, $password, $database);

            $uploadMes = "";
            if (!$connection) {
                die("Connection has failed: " . mysqli_connect_error());
            } else {
                // img name
                $imageName = mysqli_real_escape_string($connection, $targetFile);

                // if upload wasn't succesul message will appear
                if ($uploadOk == false) {
                    echo "<br><p class='error'>File was not uploaded.</p>";
                } else {

                    if (move_uploaded_file($_FILES['imageUploaded']['tmp_name'], $targetFile)) {
//                        $uploadMes .= "<br><p class='true'>
//			     The File ". basename($_FILES['imageUploaded']['name']) . 
//			     " has been uploaded and submitted to directory</p> ";

                        $insert = "INSERT INTO image_tb (name)
                                  VALUES ('$imageName')";
                        $resultInsert = mysqli_query($connection, $insert);
                    }
                }
            }
        }
        ?>








</body>

</html>