     <!-- Main Box -->
    	<div class="main-box">
        	<div class="auto-container">
            	<div class="outer-container clearfix">
                    <!--Logo Box-->
                    <div class="logo-box">
                        <div class="logo"><a href="index-2.html"><img src="images/logo.png" alt=""></a></div>
                    </div>

                    <!--Nav Outer-->
                    <div class="nav-outer clearfix">
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <!-- Toggle Button -->
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                <li><a href="/home">Home</a></li>
                                    <li class="dropdown"><a href="#">Blog</a>
                                    	<ul>
                                            <li><a href="/blog">Our Blog</a></li>
                                            <li><a href="blog-single.html">Blog Single</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Shop</a>
                                    	<ul>
                                            <li><a href="/shop">Our Shop</a></li>
                                            <li><a href="shop-single.html">Shop Single</a></li>
                                            <li><a href="/shopping_cart">Shopping Cart</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                        </ul>
                                    </li>
                                    <?php
                                    if(Auth::check())
                                    {
                                    ?>
                               <li><a href="/shopping_cart"><i class="fa fa-cart-plus fa-2x"></i>
                                     <span class="badge badge-success" style="background-color:lightgreen">Items :  ( {{ count(session()->get('items')) }} )
                                         </span> </a>
                               </li>
                                    <?php
                                    }else {
                                        ?>

                            <li><a href="/shopping_cart"><i class="fa fa-cart-plus fa-2x"></i>
                                     <span class="badge badge-danger" style="background-color:red">Items : {{ "Empty" }}
                                         </span> </a>
                               </li>
                                    <?php
                                    }


                                    ?>

                                    <?php
                                      if(Auth::user()){
                                    ?>
                                    <li><a href="/logout">Logout</a></li>
                                    <?php
                                      }
                                    else {
                                    ?>
                                    <li><a href="/custom_login">Login</a></li>
                                    <li><a href="/custom_register">Register</a></li>
                                  <?php
                                    }
                                    ?>


                                 </ul>
                            </div>
                        </nav><!-- Main Menu End-->

                    </div><!--Nav Outer End-->

                    <!-- Hidden Nav Toggler -->
                    <div class="nav-toggler">
                    <button class="hidden-bar-opener"><span class="icon fa fa-bars"></span></button>
                    </div><!-- / Hidden Nav Toggler -->

            	</div>
            </div>
        </div>
