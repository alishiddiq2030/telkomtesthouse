<!-- Top Navigation -->
<div class="top_nav">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="top_nav_left">
                    <ul class="row">
                        <li class="col-md-3"><a><i class="fa fa-phone"> (022) 4571145</i></a></li>
                        <li><a><i class="fa fa-envelope"> urelddstelkom@gmail.com</i></a></li>
                </div>
            </div>
            <div class="col-md-6 text-right">
                <div class="top_nav_right">
                    <ul class="top_nav_menu">

                        <!-- Language / My Account -->

                        <li class="language">
                            <a href="#">
                                English
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="language_selection">
                                <li><a href="#">Indonesia</a></li>
                            </ul>
                        </li>

                        <?php if(session('nama') == "Ada"){?>
                        <li class="account">
                            <a href="#">
                                My Account
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="account_selection">
                                <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>Edit</a></li>
                                <li><a href="out"><i class="fa fa-sign-out" aria-hidden="true"></i>Log Out</a></li>
                            </ul>
                        </li>
                        <?php } else {?>
                        <li class="account">
                            <a href="register">
                                <i class="fa fa-user-plus" aria-hidden="false"></i>
                                &ensp;Register
                            </a>
                        </li>
                        <li class="account">
                            <a href="login">
                                <i class="fa fa-sign-in" aria-hidden="false"></i>
                                &ensp;Login
                            </a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Main Navigation -->

<div class="main_nav_container">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-right">
                <div class="logo_container mt-1">
                    <a href="/"><img src="images/logo.png" alt="" /></a>
                </div>
                <nav class="navbar">
                    <ul class="navbar_menu">
                        <li><a href="/">Home</a></li>
                        <li class="profile">
                            <a href="#">
                                Profile
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="profile_selection" style="text-align:left;">
                                <li><a href="about"><i aria-hidden="true"></i>ABOUT US</a></li>
                                <li><a href="certification"><i aria-hidden="true"></i>CERTIFICATION</a></li>
                                <li><a href="contact"><i aria-hidden="true"></i>CONTACT</a></li>
                            </ul>
                        </li>
                        <li class="profile">
                            <a href="#">
                                INFORMATION
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="profile_selection" style="text-align:left;">
                                <li><a href="news"><i aria-hidden="true"></i>NEWS & UPDATES</a></li>
                                <li><a href="procedure"><i aria-hidden="true"></i>PROCEDURE</a></li>
                                <li><a href="tarif"><i aria-hidden="true"></i>TARIF</a></li>
                                <li><a href="tutorial"><i aria-hidden="true"></i>TUTORIAL VIDEO</a></li>
                            </ul>
                        </li>
                        <li><a href="certified">Certified Device</a></li>
                        <li class="profile">
                            <a href="#">
                                References
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="profile_selection" style="text-align:left;">
                                <li><a href="stel"><i aria-hidden="true"></i>STEL</a></li>
                                <br>
                                <li><a href="sstel"><i aria-hidden="true"></i>S-TSEL&emsp;</a></li>
                                <br>
                                <li><a href="#"><i aria-hidden="true"></i>PERDIRJEN</a></li>
                                <br>
                                <li><a href="#"><i aria-hidden="true"></i>PERMENKOMINFO</a></li>
                                <br>
                                <li><a href="#"><i aria-hidden="true"></i>ADDEST</a></li>
                            </ul>
                        </li>
                        <!-- {{Session::get('nama')}} -->
                        <?php if(session('nama') == "Ada"){?>
                        <li class="profile">
                            <a href="#">
                                Testing
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="profile_selection" style="text-align:left;">
                                <li><a href="progress"><i aria-hidden="true"></i>PROGRESS</a></li>
                                <li><a href="process"><i aria-hidden="true"></i>PROCESS</a></li>
                                <li><a href="purchase"><i aria-hidden="true"></i>PURCHASE HISTORY</a></li>
                                <li><a href="buy_stel"><i aria-hidden="true"></i>BUY STEL</a></li>
                            </ul>
                        </li>
                        <?php } ?>
                    </ul>
                    <!-- <ul class="navbar_user">
                        <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                        <li class="checkout">
                            <a href="#">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                <span id="checkout_items" class="checkout_items">2</span>
                            </a>
                        </li>
                    </ul> -->
                    <!-- <ul class="navbar_log">
                        <li><a href="register"><i class="fa fa-user-plus" aria-hidden="true"></i>&ensp;SIGN UP</a></li>
                        <li><a href="login"><i class="fa fa-sign-in" aria-hidden="true"></i>&ensp;LOGIN</a></li>
                    </ul> -->
                    <div class="hamburger_container">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>