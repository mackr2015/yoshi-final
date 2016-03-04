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

        <div class="row row-center">

            <div class="columns large-5 medium-6 space">

                <form id="trend-form" action="admin-trend-process.php" method="post" enctype="multipart/form-data">
                    <label>Title</label>
                    <input class="admin-inputs"
                           id="title"
                           type="text" 
                           name="title">
                    <label>Upload file </label><br>
                    <input id="file-choose" type="file" name="imageUploaded">

                    <label>Content</label>
                    <textarea class="admin-con"
                              id="content"
                              name="content"></textarea>

                    <button class="rates-btn" type="submit" name="submit" value="submit">Submit</button>
                </form>

            </div>

        </div>

        <div class="row row-center">

            <div class="columns large-12 medium-6">

                <?php
                    $host = "localhost";
                    $username = "mackraic_maki_yo";
                    $password = "testeri";
                    $database = "mackraic_yoshi_db";


                    $connection = mysqli_connect($host, $username, $password, $database);
                    
                    if(!$connection){
                        die('Connection Failed:'. mysqli_connect_error());
                    }
                    
                    else{
                        
//                        date_default_timezone_set("Canada/Pacific");
                        
                        $query = "SELECT * FROM trend_tb";
			$queryResult = mysqli_query( $connection, $query );
			$numberOfRows = mysqli_num_rows( $queryResult );
                        
                        $limit = 5;
                        $numberOfPages = ceil($numberOfRows/$limit);
                        
                        if(isset($_POST['pageNumber'])){
                            $start = ($_POST['pageNumber'] * $limit) - $limit;
                            $query = "SELECT * FROM trend_tb LIMIT $start, $limit";
                            // sending this data to database
                            $queryResult = mysqli_query($connection, $query);
                            $numberOfRows = mysqli_query($queryResult);
                        }
                        else{
                            //show first 4 pages if pagination has not been pressed
                            $query = "SELECT * FROM trend_tb LIMIT 0, $limit";
			    $queryResult = mysqli_query($connection, $query);
			    $numberOfRows = mysqli_num_rows($queryResult);
                        }
                        
                        if($numberOfRows > 0){
                            echo '<form action="admin-trend-process.php" method="post">';
			    echo "<table>";
			    echo "<tr style='background-color:purple; 
				      color:white; font-family:verdana;'>
				      <th>ID</th>
				      <th>Title</th>
				      <th>Content</th>
				      <th>Image</th>
                                      <th>Delete</th></tr>";
                            
                            while($row = mysqli_fetch_assoc($queryResult)){
                                $id = $row['id'];
                                $title = $row['title'];
                                $content = $row['content'];
                                $image = $row['image'];
                    
                                echo "<tr>";
                                echo "<td>$id</td>
                                      <td>$title</td>
                                      <td>$content</td>
                                      <td><img style='width: 150px;height:170px;' src='$image'></td>
                                      <td><button class='form-btn' name='delete' value='".$id."'>Delete</button></td>";
                                echo "</tr>";
                                
                            }
                            echo "</table>";    
			    echo '</form>'; 
                        }
                        else{
                            echo "Table is empty";
                        }
                    }
                    
                    mysqli_close($connection);
			
			// Showing pagination if there is more than 1 page
			if($numberOfPages > 1){
				echo "<h3 style='text-align: center;color: blue;'>Number of pages</h3>";
				echo "<form class='tbl-display' action='' method='get'>";

				// loop for every page
				for($i = 1; $i <= $numberOfPages; $i++){
						echo "<input class='inp-display' type='submit' name='pageNum' value='$i'/>";
				}
				echo "</form>";

			}
                    
                ?> 

            </div>

        </div>


    </div>






</body>

</html>

