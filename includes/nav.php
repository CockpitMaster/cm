
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
        <!-- Navigation -->
        <nav id="navbar" class="navbar navbar-custom navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                        Menu <i class="fa fa-bars"></i>
                    </button>
                    <?php if($title == "Contact"){?><a href="index.html"><img class="contact-logo-c" src="img/Clara-Logo.png"></a><?php } else {?>
                    <a href="index.php"><img class="logo" src="img/Clara-Logo-W.png"></a>
                    <a href="index.php"><img class="logo-c" src="img/Clara-Logo.png"></a>
                    <?php }?>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse  navbar-main-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                    <li>
                        <a class="page-scroll <?php if($title == "Contact"){?>contact-nav<?php } ?>" href="services.php">Services</a>
                    </li>
                    <li>
                        <a class="page-scroll <?php if($title == "Contact"){?>contact-nav<?php } ?>" href="promos.php">Promos</a>
                    </li>
                    <li>
                        <a class="page-scroll <?php if($title == "Contact"){?>contact-nav<?php } ?>" href="about.php">About</a>
                    </li>
                    <li>
                        <a class="page-scroll <?php if($title == "Contact"){?>contact-nav<?php } ?>" href="contact.php">Contact</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li>
                        <a class="page-scroll font-small <?php if($title == "Contact"){?>contact-nav<?php } ?>" href="#home">Tel. (02) 374-0974 <i class="fa fa-phone"></i></a>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="flag-icon flag-icon-ph"></span>
                            <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                              <li><a href="#"><span class="flag-icon flag-icon-ph"></span></a></li>
                              <li><a><span class="flag-icon flag-icon-ae"></span></a></li>
                              <li><a><span class="flag-icon flag-icon-in"></span></a></li>
                              <li><a><span class="flag-icon flag-icon-my"></span></a></li>
                              <li><a><span class="flag-icon flag-icon-cn"></span></a></li>
                              <li><a><span class="flag-icon flag-icon-mm"></span></a></li>
                              <li><a><span class="flag-icon flag-icon-bn"></span></a></li>
                          </ul>
                      </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>