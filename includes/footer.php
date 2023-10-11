<div id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6"> <!--col-md-3 col-sm-6 start-->
                <h4>Pages</h4>
                <ul>
                    <li><a href="cart.php">Shopping cart</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <li><a href="checkout.php">My Account</a></li>
                </ul>
                <hr>
                <h4>User Section</h4>
                <ul>
                    <li><a href="checkout.php">Login</a></li>
                    <li><a href="customer_registration.php">Register</a></li>
                </ul>
                <hr class="hidden-md hidden-lg hidden-sm">
            </div> <!--col-md-3 col-sm-6 End-->

            <div class="col-md-3 col-sm-6"> <!--col-md-3 col-sm-6 start-->
                <h4>Top Product categories</h4>
                <ul>
                    <?php
                    
                    $get_p_cats="select * from product_categories";
                    $run_p_cats=mysqli_query($con,$get_p_cats);
                    while ($row_p_cat=mysqli_fetch_array($run_p_cats)) {
                        $product_cat_id=$row_p_cat['p_cat_id'];
                        $p_cat_title=$row_p_cat['p_cat_title'];
                        echo "<li><a href='shop.php?p_cat=$product_cat_id'> $p_cat_title </a> </li>";
                       }
                        ?>

                </ul>
                <hr class="hidden-md hidden-lg">
            </div> <!--col-md-3 col-sm-6 End-->

            <div class="col-md-3 col-sm-6">
                <h4>Where to find us</h4>
                <p>
                    <strong>nrmall.com</strong>
                    <br>The Oxford college of science
                    <br>HSR Layout
                    <br>Bangalore
                    <br>Karnataka
                    <br>info@nrmall.com
                    <br>+91 8660888602
                </p>
                <a href="contact.php">Goto contact us page</a>
                <hr class="hidden-md hidden-lg">
            
            </div> <!--col-md-3 col-sm-6 End-->

            <div class="col-md-3 col-sm-6"> <!--col-md-3 col-sm-6 start-->
                <h4>Get the news</h4>
                <p class="text-muted">
                    subscribe here for getting news of nrmall.com 
                </p>
                <form action="" method="post">
                    <div class="input-group">
                    <input type="text" name="email" class="form-control">
                    <span class="input-group-btn">
                    <input type="submit" class="btn btn-default" value="subscribe">
                    </span>
                    </div>
                </form> <!---->
                <hr>
                <h4>stay In Touch</h4>
                <p class="social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                    <a href="#"><i class="fa fa-envelope"></i></a>
                </p>
            </div> <!--col-md-3 col-sm-6 End-->
        </div>
    </div>
</div> <!--footer section End-->

<div id="copyright"> <!--Copyright section start-->
<div class="container">
    <div class="col-md-6">
        <p class="pull-left">
            &copy; 2021 Nitish-Rahul
        </p>
    </div>
    <div class="col-md-6">
        <p class="pull-right">
             Visit Us At: <a href="www.nrmall.com"> nrmall.com</a>
        </p>
    </div>
</div>

</div>







  
    