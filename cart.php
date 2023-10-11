
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
                                <li>
                                    <a href="shop.php">Shop</a>
                                </li>
                                <li>
                                    <a href="checkout.php">My Account</a>
                                </li>
                                <li class="active">
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
                            <li> cart </li>
                        </ul>
                    </div> <!--col-md-12 End-->
                   
                    <div class="col-md-9" id="cart">
                        <div class="box">
                            <form action="cart.php" method="post" enctype="multipart/form-data">
                            <h1>Shopping Cart</h1>
                            <p class="text-muted">Currently you have 3 item(s) in your cart </p>
                            <div class="table-responsive"> <!--table-responsive start-->
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th colspan="2">product</th>
                                            <th>Quantity</th>
                                            <th>Unit Price</th>
                                            <th>Size</th>
                                            <th colspan="1">Delete</th>
                                            <th colspan="1">Sub Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <img src="admin_area/product_images/1.jpg">
                                            </td>
                                            <td>Stylish yellow striped Tshirt</td>
                                            <td>2</td>
                                            <td>INR 199</td>
                                            <td>Large</td>
                                            <td><input type="checkbox" name="remove[]"></td>
                                            <td>
                                                INR 398
                                            </td>
                                        </tr>

                            <tr>
                                <td>
                                    <img src="admin_area/product_images/1.jpg">
                                </td>
                                <td>Stylish yellow striped Tshirt</td>
                                <td>2</td>
                                <td>INR 199</td>
                                <td>Large</td>
                                <td><input type="checkbox" name="remove[]"></td>
                                <td>
                                    INR 398
                                </td>
                            </tr>

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="6">Total</th>
                                            <th colspan="3">INR 398</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div> <!--table-responsive End-->

                            <div class="box-footer"> <!--box-footer start-->
                                <div class="pull-left"> <!--pull-left start-->
                                    <a href="index.php" class="btn btn-default">
                                        <i class="fa fa-chevron-left"></i>Continue Shopping
                                    </a>
                                </div> <!--pull-left End-->

                            <div class="pull-right">
                                <button class="btn btn-default" type="submit" name="update" value="update cart">
                                    <i class="fa fa-refresh">update cart</i>
                                </button>
                                <a href="checkout.php" class="btn btn-primary">
                                    Proceed to checkout<i class="fa fa-chevron-right"></i>
                                </a>
                        

                            </div>

                            </div> <!--box-footer End-->

                            </form>
                    
                        </div>

                        <div class="row same-height-row">
                            <!--row same-height-row start-->
                            <div class="col-md-3 co-sm-6">
                                <!--col-md-3 co-sm-6 start-->
                                <div class="box same-height headline">
                                    <!--box same-height headline-->
                                    <h3 class="text-center">You will also like these products</h3>
                                </div>
                                <!--box same-height headline End-->
                            </div>
                            <!---->
                        
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
                        
                            </div>
                            <!--center-responsive col-md-3 End-->
                        
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
                        
                        
                        
                        
                        </div>
                        <!--col-md-3 co-sm-6 End-->
                        
                        </div>
                        <!--row same-height-row End-->
                        <div class="col-md-3">
                            <div class="box" id="order-summary">
                                <div class="box-header">
                                    <h3>Order summary</h3>
                                </div>
                                <p class="text-muted">
                                    Shipping and additional costs are calculated based on the values you have entered
                                </p>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    Order Subtotal
                                                </td>
                                                <th>
                                                    INR 398
                                                </th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Shipping and handling
                                                </td>
                                                <td>
                                                    INR 0
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Tax
                                                </td>
                                                <td>
                                                    INR 0
                                                </td>
                                            </tr>
                                            <tr class="total">
                                                <td>
                                                    Total
                                                </td>
                                                <th>
                                                    INR 399
                                                </th>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div> <!--col-md-9 End-->

                    









                    </div> <!--container End-->
                    
                    </div> <!--Content End-->
                    
                    
                    
                    
                    
                    
                    
                    
                    
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