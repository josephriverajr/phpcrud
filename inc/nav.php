<style type="text/css">
body{
    background:#FAFDF6;
}
.login_form{
    padding:8% 0;
}
a,.btn{
    text-transform:uppercase;
}
</style>


<nav class="navbar navbar-expand-md navbar-dark bg-primary">
    <div class="container">
	    <div class="d-flex w-50 order-0">
	        <a class="navbar-brand mr-1" href="#">LOGO</a>
	        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
	            <span class="navbar-toggler-icon"></span>
	        </button>
	    </div>

	    <?php 
	    if($username1 != " ") { ?>
		    <div class="navbar-collapse collapse justify-content-center order-2" id="collapsingNavbar">
		        <ul class="navbar-nav">
		            <li class="nav-item">
		                <a class="nav-link" href="#">Home</a>
		            </li>
		            <li class="nav-item">
		                <a class="nav-link" href="register.php?userID=">Add</a>
		            </li>
		        </ul>
		    </div>
		    <a class="nav-link navbar-text small text-truncate mt-1 w-50 text-right order-1 order-md-last" href="logout.php">Logout</a>
		<?php } else { ?>
		    <div class="navbar-collapse collapse justify-content-center order-2" id="collapsingNavbar">

		    </div>
		<?php } ?>
	    
	</div>    
</nav>

e