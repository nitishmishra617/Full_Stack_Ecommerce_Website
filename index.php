
<?php
include("includes/db.php");
include("functions/functions.php");
?>



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
                            <a href="customer/my_account.php"> My Account</a>
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
                        <a class="navbar-brand home" href="index.php"> 
                            <img src="images/nrlogo1.PNG" alt="nrmalllogo" class="hidden-xs">
                        
                        <img src="images/nrlogo2.PNG" alt="nrmalllogosmall" class="visible-xs">     
                        </a>

                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                            <span class="sr-only">Toggle Navigation</span>
                            <i class="fa fa-align-justify"></i>
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
                                    <a href="cart.php">My Account</a>
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
                        <button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="#search">
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

    <div class="container" id="slider"> <!--container start-->
        <div class="col-md-12"> <!--col-md-12 start-->
            <div class="carousel slide" id="myCarousel" data-ride="carousel"> <!--carousel slide star-->
                <ol class="carousel-indicators">
                    <li data-target="myCarousel" data-slide-to="0" class="active"><li>
                    <li data-target="myCarousel" data-slide-to="1" ></li>
                    <li data-target="myCarousel" data-slide-to="2" ></li>
                    <li data-target="myCarousel" data-slide-to="3" ></li>
                </ol>
                <div class="carousel-inner"> <!--carousel-inner start-->
                      
                    <?php
                    $get_slider= "select * from slider LIMIT 0,1";
                    $run_slider= mysqli_query($con,$get_slider);
                    while ($row=mysqli_fetch_array($run_slider)) {
                        $slider_name=$row['slider_name'];
                        $slider_image=$row['slider_image'];
                        echo "<div class='item active'>
                        <img src='slider_images/$slider_image'>
                    </div>
                    ";
                    }
                    ?>

                    <?php
                    $get_slider= "select * from slider LIMIT 1,3";
                    $run_slider= mysqli_query($con,$get_slider);
                    while ($row=mysqli_fetch_array($run_slider)) {
                        $slider_name=$row['slider_name'];
                        $slider_image=$row['slider_image'];
                        echo "<div class='item'>
                        <img src='slider_images/$slider_image'>
                    </div>
                    ";
                    }
                    ?>

                </div>    <!--carousel-inner End-->
                <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">previous</span>
                
                </a>

                <a href="#myCarousel" class="right carousel-control" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">next</span>
                </a>

            </div>    <!--carousel slide End-->
        </div>    <!--col-md-12 End-->
    </div>        <!--container End-->

    <div> <!--container End-->
    <div id="advantage"> <!--advantage start-->
        <div class="container"> <!--container start-->
            <div class="same-height-row"> <!--same-height-row start-->
                <div class="col-sm-4"> <!--col-sm-4 start-->
                    <div class="box same-height"> <!--box same-height start-->
                        <div class="icon">
                            <i class="fa fa-heart"></i>
                        </div>
                        <h3><a href="#"> BEST PRICES</a></h3>
                            <p>you can check on all others sites about the prices and than compare with us.</p>
                    </div> <!--box same-height End-->
                </div> <!--col-sm-4 End-->

                <div class="col-sm-4">
                    <!--col-sm-4 start-->
                    <div class="box same-height">
                        <!--box same-height start-->
                        <div class="icon">
                            <i class="fa fa-heart"></i>
                        </div>
                        <h3><a href="#"> 100% SATISFACTION GUARANTEED FROM US</a></h3>
                        <p>Free returns on everything for 3 months.</p>
                    </div>
                    <!--box same-height End-->
                </div>
                <!--col-sm-4 End-->

                <div class="col-sm-4">
                    <!--col-sm-4 start-->
                    <div class="box same-height">
                        <!--box same-height start-->
                        <div class="icon">
                            <i class="fa fa-heart"></i>
                        </div>
                        <h3><a href="#"> WE LOVE OUR CUSTOMERS</a></h3>
                        <p>we are known to provide the best possile service ever </p>
                    </div>
                    <!--box same-height End-->
                </div>
                <!--col-sm-4 End-->

            </div> <!--same-height-row End-->
        
        </div>  <!--container End-->
        </div>  <!--advantage End-->

        <div id="hotbox">  <!--hotbox start-->
            <div class="box">
                <div class="container">
                    <div class="col-md-12">
                        <h2>Latest this week</h2>
                    </div>
                </div>
            </div>
        </div> <!--hotbox end-->

        <div id="content" class="container">
            <div class="row">
                <?php
                getpro();
                ?>

            </div>
        </div>

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