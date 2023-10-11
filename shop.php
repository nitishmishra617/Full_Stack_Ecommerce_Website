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
                                <li>
                                    <a href="index.php">Home</a>
                                </li>
                                <li class="active">
                                    <a href="shop.php">Shop</a>
                                </li>
                                <li>
                                    <a href="customer/my_account.php">My Account</a>
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
                            <li> Shop </li>
                        </ul>
                    </div> <!--col-md-12 End-->
                    <div class="col-md-3">  <!--col-md-3 start-->
                        <?php
                        include("includes/sidebar.php")
                        ?>
                    </div> <!--col-md-3 End-->
                    <div class="col-md-9"> <!--col-md-9 start-->
                        <div class="box">  <!--box start-->
                            <h1>shop</h1>
                        <p>this theme is created by Er.Anvesh tiwary, who is the instructor of institute of computer science &research</p>
                        </div>  <!--box End-->
                        <div class="row"> <!--row start-->
                            <div class="col-md-4 col-sm-6 center responsive"> <!--col-md-4 col-sm-6 center responsive start-->
                                <div class="product">
                                    <a href="details.php">
                                        <img src="admin_area/product_images/2.jpg" class="img-responsive">
                                    </a>
                                    <div class="text">
                                        <h3><a href="details.php">Black Full sleeves T-shirt</a></h3>
                                        <p class="price">INR 200</p>
                                        <p class="buttons">
                        <a href="details.php" class="btn btn-default">View          details<a>      
                        <a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart">Add to Cart</i></a>
                                        </p>
                                    </div>
                                </div>
                            </div> <!--col-md-4 col-sm-6 center responsive End-->

                            <div class="col-md-4 col-sm-6 center responsive">
                                <!--col-md-4 col-sm-6 center responsive start-->
                                <div class="product">
                                    <a href="details.php">
                                        <img src="admin_area/product_images/2.jpg" class="img-responsive">
                                    </a>
                                    <div class="text">
                                        <h3><a href="details.php">Black Full sleeves T-shirt</a></h3>
                                        <p class="price">INR 200</p>
                                        <p class="buttons">
                                            <a href="details.php" class="btn btn-default">View details<a>
                                                    <a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart">Add to Cart</i></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!--col-md-4 col-sm-6 center responsive End-->

                            <div class="col-md-4 col-sm-6 center responsive">
                                <!--col-md-4 col-sm-6 center responsive start-->
                                <div class="product">
                                    <a href="details.php">
                                        <img src="admin_area/product_images/2.jpg" class="img-responsive">
                                    </a>
                                    <div class="text">
                                        <h3><a href="details.php">Black Full sleeves T-shirt</a></h3>
                                        <p class="price">INR 200</p>
                                        <p class="buttons">
                                            <a href="details.php" class="btn btn-default">View details<a>
                                                    <a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart">Add to Cart</i></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!--col-md-4 col-sm-6 center responsive End-->

                            <div class="col-md-4 col-sm-6 center responsive">
                                <!--col-md-4 col-sm-6 center responsive start-->
                                <div class="product">
                                    <a href="details.php">
                                        <img src="admin_area/product_images/2.jpg" class="img-responsive">
                                    </a>
                                    <div class="text">
                                        <h3><a href="details.php">Black Full sleeves T-shirt</a></h3>
                                        <p class="price">INR 200</p>
                                        <p class="buttons">
                                            <a href="details.php" class="btn btn-default">View details<a>
                                                    <a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart">Add to Cart</i></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!--col-md-4 col-sm-6 center responsive End-->

                            <div class="col-md-4 col-sm-6 center responsive">
                                <!--col-md-4 col-sm-6 center responsive start-->
                                <div class="product">
                                    <a href="details.php">
                                        <img src="admin_area/product_images/2.jpg" class="img-responsive">
                                    </a>
                                    <div class="text">
                                        <h3><a href="details.php">Black Full sleeves T-shirt</a></h3>
                                        <p class="price">INR 200</p>
                                        <p class="buttons">
                                            <a href="details.php" class="btn btn-default">View details<a>
                                                    <a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart">Add to Cart</i></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!--col-md-4 col-sm-6 center responsive End-->

                            <div class="col-md-4 col-sm-6 center responsive">
                                <!--col-md-4 col-sm-6 center responsive start-->
                                <div class="product">
                                    <a href="details.php">
                                        <img src="admin_area/product_images/2.jpg" class="img-responsive">
                                    </a>
                                    <div class="text">
                                        <h3><a href="details.php">Black Full sleeves T-shirt</a></h3>
                                        <p class="price">INR 200</p>
                                        <p class="buttons">
                                            <a href="details.php" class="btn btn-default">View details<a>
                                                    <a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart">Add to Cart</i></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!--col-md-4 col-sm-6 center responsive End-->

                        </div> <!--row End-->
                        <center>
                            <ul class="pagination">
                                <li><a href="shop.php"></a></li>
                                <li><a href="shop.php"></a></li>
                                <li><a href="shop.php"></a></li>
                                <li><a href="shop.php"></a></li>
                                


                            </ul>
                        </center>
                    </div> <!--col-md-9 End-->
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


