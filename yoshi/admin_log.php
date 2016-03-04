<?php
// Start the session
session_start();
?>
<?php include 'partials/header.php'; ?>

<?php
// global variable for highlighted navigation
$currentPage = "admin_log.php";
?>
<body>


    <div class="page-header">

        <nav class="nav-bar">
            <div class="row">  

                <?php include 'partials/navigation.php'; ?>    

            </div>
        </nav>

    </div>


    <div class="admin-sec">

        <div class="row row-center">
            <div class="columns large-12 medium-6">
                <h3 class="sub-headline adm">Yoshi</h3>
                <h3 class="admin-h3">Admin page</h3>
                <br><br>
            </div> 

            <div class="columns large-4 medium-3">
                <form action="admin_log_process.php" method="post">  
                    <input class="admin-input"
                           name="username"
                           type="text" 
                           placeholder="username"
                           required>

                    </div>
                    <div class="columns large-4 medium-3">
                        <input class="admin-input"
                               name="password"
                               type="password" 
                               placeholder="password"
                               required>
                    </div>
                    <div class="columns large-4 medium-3">

                        <button class="main-btn admin-btn"
                                name="submit"
                                type="submit">login</button>

                    </div>
<!--                    <div class="columns large-4 medium-3">
                        <button class="main-btn admin-btn"><a href="#">Signup</button></a>

                    </div>-->
                </form>

            </div>

        </div>



        



</body>

</html>

