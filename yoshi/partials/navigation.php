

<div class = "columns large-5 medium-2 nav-left">

    <!--from http://purecss.io/forms/ -->

    <ul class = "navigation-lf cf">
        <li class = "link-box">
            <a class = "nav-links
               <?php 
               
               echo ($currentPage === "index.php") ? "active-page" : "";
               
               ?>
               
               " href = "index.php">home</a>
        </li>
        <li class = "link-box">
            <a class = "nav-links
               
               <?php 
               
               echo ($currentPage === "about.php") ? "active-page" : "";
               
               ?>
               
               
               " href = "about.php">about</a>
        </li>
        <li class = "link-box">
            <a class = "nav-links
               <?php 
               
               echo ($currentPage === "team.php") ? "active-page" : "";
               
               ?>"href = "team.php">team</a>
        </li>
        <li class = "link-box">
            <a class = "nav-links
               <?php 
               
               echo ($currentPage === "gallery.php") ? "active-page" : "";
               
               ?>" href = "gallery.php">gallery</a>
        </li>
    </ul>

</div>
<div class="columns large-2 medium-1 logo-position">
    
    <a href="about.php"><img src="img/logo.png" alt="yoshi logo"/></a>
</div>

<div class="columns large-5 medium-3 nav-right">
    
    <ul class = "navigation-rg cf">
        <li class = "link-box">
            <a class = "nav-links
               <?php 
               
               echo ($currentPage === "rates.php")? "active-page": "";
               ?>" href = "rates.php">rates</a>
        </li>
        <li class = "link-box">
            <a class = "nav-links
               <?php 
               
               echo ($currentPage === "press.php") ? "active-page" : "";
               
               ?>" href = "press.php">press</a>
        </li>
        <li class = "link-box">
            <a class = "nav-links
               <?php 
               
               echo ($currentPage === "trend.php") ? "active-page" : "";
               
               ?>"href = "trend.php">trend</a>
        </li>
        <li class = "link-box">
            <a class = "nav-links
               <?php 
               
               echo ($currentPage === "contact.php") ? "active-page" : "";
               
               ?>" href = "contact.php">contact</a>
        </li>
    </ul>
    
</div>


