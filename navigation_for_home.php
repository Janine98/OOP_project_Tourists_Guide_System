<!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand animated slideInLeft">
                            <abbr title="Go to my profile">
                            <span class="glyphicon glyphicon-user"></span>&nbsp;Hello, <?php echo $userRow['username']; ?>
                            </abbr>
                        </a>
                    </div>
            
                    <!-- Collect the nav links, forms, and other content for toggling -->
                         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li><a href="home.php" class="animated bounceInDown">About</a></li>
                                <li><a href="hiw_home.php" class="animated bounceInDown">How it Works?</a></li>
                                <li><a href="find_a_tour.php" class="animated bounceInDown">Find a Tour!</a></li>
                            </ul>  
                
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="logout.php?logout=true" class="animated slideInRight"><span class="glyphicon glyphicon-log-out">                                           </span>&nbsp;Sign Out</a></li>
                            </ul>    
                        </div>
                </div>
            </nav>