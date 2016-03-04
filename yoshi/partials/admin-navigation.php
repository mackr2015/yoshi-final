


<div class="columns large-12 medium-6 admin-logo">
    
    <a href="about.php"><img src="img/logo.png" alt="yoshi logo"/></a>
</div>
<div class = "columns large-6 medium-3 push-1">
    <ul class = "navigation-lf cf">
        <li class = "link-box">
            <a class = "nav-links
               <?php echo ($currentPage === "admin.php") ? "active-page" : "";
               ?>" href = "admin.php">team</a>
        </li>
        <li class = "link-box">
            <a class = "nav-links
               <?php echo ($currentPage === "admin-trend.php") ? "active-page" : "";
               ?>" href = "admin-trend.php">trend</a>
        </li>
        
        
    </ul>

</div>
<div class="columns large-2 medium-1 log-out push-1">
    
    <a href="admin_logout.php"><input class="test-inp" type="submit" name="logout" value="logout"></a>
    
</div>






