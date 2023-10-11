<?php
include("includes/db.php");
include_once("functions/functions.php");
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
                            <li> Shop </li>
                        </ul>
                    </div> <!--col-md-12 End-->
                <div class="col-md-3">  <!--col-md-3 start-->
                        <?php
                        include("includes/sidebar.php")
                        ?>
            </div> <!--col-md-3 End-->

<div class="col-md-9">
    <div class="row" id="productmain">
            <div class="col-sm-6"> <!--col-sm-6-slider-start-->
                <div id="mainimage">
                    <div id="mycarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#mycarousel" data-slide-to="0" class="active">
                            </li>
                            <li data-target="#mycarousel" data-slide-to="1" >
                            </li>
                            <li data-target="#mycarousel" data-slide-to="2" >
                            </li>
                        </ol>
                        <div class="carousel-inner">  <!--carousel inner start-->
                            <div class="item active">
                                <center>
                <img src="admin_area/product_images/2.jpg" class="img-responsive">
                                </center>
                            </div>

                            <div class="item">
                                <center>
                                    <img src="admin_area/product_images/2.2.jpg" class="img-responsive">
                                </center>
                            </div>

                            <div class="item">
                                <center>
                                    <img src="admin_area/product_images/2.3.jpg" class="img-responsive">
                                </center>
                            </div>

                        <a href="#mycarousel" class="left carousel-control" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>

                        <a href="#mycarousel" class="right carousel-control" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div> <!--col-sm-6 slider End-->
       
        </div>
        <div class="col-sm-6">
            <div class="box">
            <h1 class="text-center">Black Full sleeves T-shirt</h1>
            <form action="details.php" method="post" class="form-horizontal">
                <div class="form-group">
                    <!--form-group start-->
                    <label class="col-md-5 control-label">Product Quantity</label>
                    <div class="col-md-7">
                        <!--col-md-7-->
                        <select name="product_qty" class="form-control">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <!--col-md-7 End-->
                </div>
                <!--form-group End-->
                <div class="form-group">
                    <label class="col-md-5 control-label">Product Size</label>
                    <div class="col-md-7">
                        <select name="product_size" class="form-control">
                            <option>Select a size</option>
                            <option>Small</option>
                            <option>Medium</option>
                            <option>Large</option>
                            <option>Extra Large</option>
                        </select>
                    </div> 
                </div>
                <p class="price">INR 200</p>
                <p class="text-center buttons">
                    <button class="btn btn-primary" type="submit">
                        <i class="fa fa-shopping-cart"></i>Add to cart
                    </button>
                </p>  
            </form> <!--form-group end-->
            </div>  <!--box End-->
            <div class="col-xs-4">
                <a href="#" class="thumb">
                    <img src="admin_area/product_images/2.1.jpg" class="img-responsive">
                </a>
            </div>

            <div class="col-xs-4">
                <a href="#" class="thumb">
                    <img src="admin_area/product_images/2.2.jpg" class="img-responsive">
                </a>
            </div>

            <div class="col-xs-4">
                <a href="#" class="thumb">
                    <img src="admin_area/product_images/2.3.jpg" class="img-responsive">
                </a>
            </div>
        </div>
    </div>

    <div class="box" id="details">
        <h4> Product Details</h4>
        <p>
            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature
            from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia,
            looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of
            the word in classical literature, discovered the undoubtable source. 
        </p>
        <h4>Size</h4>
        <ul>
            <li>Small </li>
            <li>Medium</li>
            <li>Large</li>
            <li>Extra Large

            </li>
        </ul>

        
    </div>

    <div class="row same-height-row"> <!--row same-height-row start-->
        <div class="col-md-3 co-sm-6"> <!--col-md-3 co-sm-6 start-->
            <div class="box same-height headline"> <!--box same-height headline-->
                <h3 class="text-center">You will also like these products</h3>
            </div> <!--box same-height headline End-->
        </div> <!---->

        <div class="center-responsive col-md-3">
            <!--center-responsive col-md-3 start-->
            <div class="product same-height">
                <a href="">
                    <img src="admin_area/product_images/9.jpg">
                </a>
                <div class="text">
                    <h3><a href="details.php">
                            Red and Black Stylish Tshirt
                        </a></h3>
        
                    <p class="price">INR 199</p>
        
                </div>
            </div>
        
        </div> <!--center-responsive col-md-3 End-->

        <div class="center-responsive col-md-3">
            <!--center-responsive col-md-3 start-->
            <div class="product same-height">
                <a href="">
                    <img src="admin_area/product_images/3.jpg">
                </a>
                <div class="text">
                    <h3><a href="details.php">
                            HRX yellow T-shirt
                        </a></h3>
        
                    <p class="price">INR 199</p>
        
                </div>
            </div>
        
        </div>
        <!--center-responsive col-md-3 End-->

        <div class="center-responsive col-md-3">
            <!--center-responsive col-md-3 start-->
            <div class="product same-height">
                <a href="">
                    <img src="admin_area/product_images/6.jpg">
                </a>
                <div class="text">
                    <h3><a href="details.php">
                            Stylish Blue Polo T-shirt
                        </a></h3>
        
                    <p class="price">INR 199</p>
        
                </div>
            </div>
        
        </div>
        <!--center-responsive col-md-3 End-->

        
        

    </div> <!--col-md-3 co-sm-6 End-->
    
</div> <!--row same-height-row End-->





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