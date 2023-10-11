<?php
include("includes/db.php");
include("functions/functions.php");
?>



<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <title>Ecommerce store</title>
    <!--bootstrap cdn-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="styles/style.css">
    
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!--font awesome-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>
<body>
        <div id="top">   <!--Top Bar Start-->
            <div class="container"> <!--container start-->
                <div class="col-md-6 offer"> <!--col-md-6 offer start-->
                    <a href="#" class="btn btn-success btn-sm">
                        Welcome Guest
                    </a>
                    
                    <a href="#" >Shopping Cart Total Price: INR 100, Total Items 2</a>

                </div> <!--col-md-6 offer start-->
                
                <div class="col-md-6">
                    <ul class="menu">
                        <li>
                            <a href="customer_registration.php"> Register</a>
                        </li>

                        <li>
                            <a href="checkout.php"> My Account</a>
                        </li>

                        <li>
                            <a href="cart.php"> Goto Cart</a>                       
                        </li>
                        
                        <li>
                            <a href="login.php"> Login </a>
                        </li>

                    </ul>
                </div>

            </div> <!--container end-->
        
        
            </div> <!--Top bar End-->

            <div class="navbar navbar-default" id="navbar">  <!--navbar default start-->
                <div class="container">  <!--navbar container start-->
                    <div class="navbar-header"> <!--navbar header start-->
                        <a class="navbar-brand home" href="index.php"> <img src="images/nrmalllogo.PNG" alt="nrmalllogo" class="hidden-xs">
                        
                        <img src="images/nr;logosmall.PNG" alt="nrmalllogosmall" class="visible-xs">     
                        </a>

                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                            <span class="sr-only"></span>
                            <i class="fa fa-align-justify"> </i>
                        </button>

                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search"> 
                            <span class="sr-only"></span>
                            <i class="fa fa-search"></i>
                        </button> 
                    </div> <!--navbar header end-->

                    <div class="navbar-collapse collapse" id="navigation"> <!--navbar-collapse collapse start-->
                        <div class="padding-nav"> <!--padding nav start-->
                            <ul class="nav navbar-nav navbar-left">
                                <li class="active">
                                    <a href="index.php">Home</a>
                                </li>
                                <li>
                                    <a href="shop.php">Shop</a>
                                </li>
                                <li>
                                    <a href="checkout.php">My Account</a>
                                </li>
                                <li>
                                    <a href="cart.php">Shopping Cart</a>
                                </li>
                                <li>
                                    <a href="about.php">About Us</a>
                                </li>
                                <li>
                                    <a href="services.php">Services</a>
                                </li>
                                <li>
                                    <a href="contact.php">Contact Us</a>
                                </li>
                            </ul>
                        
                        </div> <!--padding nav End-->
                    <a href="cart.php" class="btn btn-primary navbar-btn right">
                        <i class="fa fa-shopping-cart"></i>
                        <span>4 items in cart</span>
                    </a>

                    <div class="navbar-collapse collapse right"> <!--navbar-collapse collapse-right start-->
                        <button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="search">
                            <span class="sr-only">Toggle Search</span>
                            <i class="fa fa-search"></i>
                     </button>
                    </div> <!---navbar-collapse collapse-right End-->

                <div class="collapse clearfix" id="search">

                            <form class="navbar-form" method="get" action="result.php">
                        
                                <div class="input-group">
                            <input type="text" name="user_query" placeholder="search" class="form-control" required="">
        
                    <span>
                        <button type="submit" value="search" name="search" class="btn btn-primary" >
                        <i class="fa fa-search"></i>
                        </button>
                    </span>
            
                        </div>

                    </form>

                    </div>


                    </div>  <!--navbar-collapse collspse-End-->
                    

                </div>

            </div>  <!--navbar navbar default End-->  

            <div id="content"> <!--Content start-->
                <div class="container">  <!--container start-->
                    <div class="col-md-12"> <!--col-md-12 start-->
                        <ul class="breadcrumb">
                            <li> <a href="home.php">Home</a> </li>
                            <li> Registration </li>
                        </ul>
                    </div> <!--col-md-12 End-->
                    <div class="col-md-3">  <!--col-md-3 start-->
                        <?php
                        include("includes/sidebar.php")
                        ?>
                    </div> <!--col-md-3 End-->

                    <div class="col-md-9"> <!--cl-md-9 start-->
                        <div class="box"> <!--box start-->
                            <div class="box-header">
                                <center>
                                    <h2>
                                    customer Registration
                                    </h2>
                                </center>
                            
                            </div> <!--box-header End-->
                    <form action="customer_registration.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label> Customer Name</label>
                            <input type="text" name="c_name" required="" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Customer Email</label>
                            <input type="text" name="c_email" class="form-control" required="">
                        </div>

                        <div class="form-group">
                            <label>Customer Password</label>
                            <input type="password" name="c_password" class="form-control" required="">
                        </div>

                        <div class="form-group">
                            <label>Country</label>
                            <input type="text" name="c_country" class="form-control" required="">
                        </div>

                        <div class="form-group">
                            <label>City</label>
                            <input type="text" name="c_city" class="form-control" required="">
                        </div>

                        <div class="form-group">
                            <label>Contact Number</label>
                            <input type="text" name="c_contact" class="form-control" required="">
                        </div>

                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" name="c_address" class="form-control" required="">
                        </div>

                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="c_image" class="form-control" required="">
                        </div>

                        <div class="text-center">
                            <button type="submit" name="submit" class="btn btn-primary">
                                <i class="fa fa-user-md"></i>Register
                            </button>
                        </div>
                        </form>    
                        </div>
                    </div>





                    </div>  <!--container End-->
            </div>     <!--Content End-->

            






              <!--footer start -->
    <?php
           include("includes/footer.php");
           ?>
    <!--footer End-->
    
    
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
    </body>
    
    </html>


