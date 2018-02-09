<!-- Side Navbar -->
<nav class="side-navbar">
    <div class="side-navbar-wrapper">
        <div class="sidenav-header d-flex align-items-center justify-content-center">
            <div class="sidenav-header-inner text-center"><img src="img/user.png" alt="person" class="img-fluid rounded-circle">
                <h2 class="h5 text-uppercase"><?= $fn->user['name_lastname'] ?></h2><span class="text-uppercase"><?= $fn->user['user_type'] ?></span>
            </div>
            <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong>3</strong><strong class="text-primary">C</strong><strong>X</strong></a></div>
        </div>

        <div class="admin-menu">
            <ul id="side-admin-menu" class="side-menu list-unstyled">
                <li id="Activehome"  > <a href="index.php"> <i class="icon-screen"> </i><span>Home</span></a></li>
                <li id="Activecallback"> <a href="callback.php"> <i class="icon-rss-feed"> </i><span>Call Back Reports</span></a></li>
                <li id="Activeendcall"> <a href="endcall.php"> <i class="icon-rss-feed"> </i><span>End call survey Reports</span></a></li> 
                <li id="Activeendcall"> <a href="endcall_1.php"> <i class="icon-rss-feed"> </i><span>End call Reports 2 </span></a></li> 
                <li id="ActiveAuxtime"> <a href="auxtime.php"> <i class="icon-rss-feed">  </i><span>Auxilary Time Report</span></a></li> 
                <li id="ActiveAuxtime2"> <a href="auxtimeSummary.php"> <i class="icon-rss-feed">  </i><span>Auxilary Time Report 2</span></a></li> 

                <?php
                if ($fn->user['user_type'] == 'admin' || $fn->user['user_type'] == 'outsource') {
                    ?>
                    <li id="Activeproject"> <a href="manage_project.php"> <i class="fa fa-cog"> </i><span>Project Management</span></a></li> 	
                    <?php
                }
                if ($fn->user['user_type'] == 'admin') {
                    ?>
                    <li id="Activeuser"> <a href="user_management.php"> <i class="fa fa-user-secret"> </i><span>User Management</span></a></li> 	 				 
                    <?php } ?>
            </ul>
        </div>
    </div>
</nav>