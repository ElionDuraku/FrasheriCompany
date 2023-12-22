<?php

include "inc/header.php";

?>


<!--== Start Page Header Area ==-->
    <div class="page-header-wrap bg-img" data-bg="assets/img/bg/page-header-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="page-header-content">
                        <div class="page-header-content-inner">
                            <h1>Register</h1>

                            <ul class="breadcrumb">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="shop.html">Pages</a></li>
                                <li class="current"><a href="#">Register</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Page Header Area ==-->

    <!--== Start Page Content Wrapper ==-->
    <div class="page-content-wrapper sp-y">
        <div class="login-page-content-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 ml-auto mr-auto">
                        <div class="register-form-style">
                            <form action="#" method="post">
                                <input type="text" name="user-name" placeholder="Username">
                                <input name="user-email" placeholder="Email" type="email">
                                <input type="password" name="user-password" placeholder="Password">
                                <div class="login-toggle-btn">
                                    <input id="register-check" type="checkbox">
                                    <label for="register-check">Remember me</label>
                                    <a href="#">Forgot Password?</a>
                                </div>
                                <div class="login-btn">
                                    <button type="submit">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Page Content Wrapper ==-->

    <?php

include "inc/footer.php";

?>

