<?php include 'session.php'; ?>

<div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <a href="#"><img src="../img/h1.jpg" alt="" /></a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="header-top-menu">
                        <ul class="nav navbar-nav notika-top-nav">
                            <li class="nav-item dropdown">
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-search"></i></span></a>
                                <div role="menu" class="dropdown-menu search-dd animated flipInX">
                                    <div class="search-input">
                                        <i class="notika-icon notika-left-arrow"></i>
                                        <input type="text" />
                                        <button class="btn search-ib">Search</button>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <?php
                                
                                if(!$res)
                                {
                                    ?>


                                <p >

                                    <a id="headr" href="login.php"  class="nav-link dropdown-toggle"><span><i class="fa fa-sign-in">&nbsp;</i>Login |</span></a> 
                                    <a id="headr" href="reg.php" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="fa fa-user">&nbsp;</i>Register |</span> </a>
                                    <a id="headr" href="pass.php" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"> <span><i class="fa fa-question">&nbsp;</i>Forget password</span> </a>
                                </p> 
                                    <?php
                                }
                                else 
                                    ?>
                                <p >
                                    <a id="headr" href=""  class="nav-link dropdown-toggle"><span><i class="fa fa-user">&nbsp;</i>
                                    <?php echo $d['name'] ?> |&nbsp; </span></a> 
                                    <a id="headr" href="../logout.php"  class="nav-link dropdown-toggle"><span>  <i class="fa fa-sign-out">&nbsp;</i>Logout </span> </a>
                                    
                                </p> 
                                <?php ?>
                                 
                                
                                </li>
                            </ul>

                            <span class="pull-right"><img  height="400" src="../img/h2.gif"></span>
                        </div>
                        </div>
                </div>
            </div>
        </div>