<div class="top-bar animate-dropdown">
    <div class="container">
        <div class="header-top-inner" style="font-size: 18px">
            <div class="cnt-account">
                <ul class="list-unstyled">

                    <?php if (strlen($_SESSION['login'])) { ?>
                    <li><a href="#"><i class="icon fa fa-user"></i>Welcome
                            -<?php echo htmlentities($_SESSION['username']); ?></a></li>
                    <?php } ?>

                    <li><a href="my-account.php"><i class="icon fa fa-user"></i>My Account</a></li>
                    <li><a href="my-cart.php"><i class="icon fa fa-shopping-cart"></i>My Cart</a></li>
                    <li><a href="#"><i class="icon fa fa-key"></i>Checkout</a></li>
                    <li><a href="my-wishlist.php"><i class="icon fa fa-heart"></i>Wishlist</a></li>
                    <?php if (strlen($_SESSION['login']) == 0) { ?>
                    <li><a href="login.php"><i class="icon fa fa-sign-in"></i>Register/Login</a></li>
                    <?php } else { ?>

                    <li><a href="logout.php"><i class="icon fa fa-sign-out"></i>Logout</a></li>
                    <?php } ?>
                </ul>
            </div><!-- /.cnt-account -->

            <div class="cnt-block">
                <form class="navbar-form navbar-left" name="search" method="post" action="search-result.php">
                    <div class="form-group">
                        <input type="text" class="form-control search-field" placeholder="Search" id="search"
                            placeholder="Search here..." name="product" required="required">
                    </div>
                    <button type="submit" class="btn btn-primary" id="search_btn"><span
                            class="glyphicon glyphicon-search"></span>
                    </button>
                </form>

            </div>

            <div class="clearfix"></div>
        </div>
    </div>
</div>