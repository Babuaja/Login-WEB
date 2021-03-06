<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login V2</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Link-->
        <!--Logo-->
        <link rel="icon" type="image/png" href="images/icons/BabuAja.png"/>
        <!--Vendor-->
        <link
            rel="stylesheet"
            type="text/css"
            href="vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
        <link
            rel="stylesheet"
            type="text/css"
            href="vendor/css-hamburgers/hamburgers.min.css">
        <link
            rel="stylesheet"
            type="text/css"
            href="vendor/animsition/css/animsition.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
        <link
            rel="stylesheet"
            type="text/css"
            href="vendor/daterangepicker/daterangepicker.css">
        <!--Font-->
        <link
            rel="stylesheet"
            type="text/css"
            href="fonts/iconic/css/material-design-iconic-font.min.css">
        <!-- LInk Font Awesome -->
        <script src="https://kit.fontawesome.com/566fc9c974.js" crossorigin="anonymous"></script>

        <!--CSS-->
        <link rel="stylesheet" type="text/css" href="css/main.css">
    </head>
    <body>
        <!-- Background yutub trailer -->
        <div style="position: fixed;z-index: -99;width: 150%;height: 150%;top: -25%;left:-25%">
            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/9qH-mWfTMm0?autoplay=1&mute=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; mute" allowfullscreen></iframe>
          </div>
        <div class="limiter" id="login">
            <div class="container-login100">
                <div class="wrap-login100">
                    <!-- Form Login ---->
                    <form class="login100-form validate-form" action="login.php" method="POST">
                        <!-- Header --->
                        <span class="login100-form-title p-b-26">
                            Welcome
                        </span>
                        <span class="login100-form-title p-b-48">
                            <img src="images/icons/BabuAja.png" alt="BabuAja">
                        </span>
                        <!--- End Header--->
                        <!-- Input email -->
                        <div class="wrap-input100">
                            <input class="input100" type="email" name="email" required>
                            <span class="focus-input100" data-placeholder="E-mail"></span>
                        </div>
                        <!--- End Input email -->
                        <!--- Input pass -->
                        <div class="wrap-input100" style="margin-bottom: 20px;">
                            <span class="btn-show-pass">
                                <i class="zmdi zmdi-eye"></i>
                            </span>
                            <input class="input100" type="password" name="pass" required>
                            <span class="focus-input100" data-placeholder="Password"></span>
                        </div>
                        <!---- End input pass -->
						<!-- Error message -->
                        <div class="row justify-content-center">
                            <?php if (isset($_GET['error'])) { $str ="<i class='fas fa-exclamation-circle'></i> incorrect pass"?>
                            <!-- show data with $_GET['data structure'] -->
                            <p class="text-danger text-center error"><?php echo $_GET['error']; ?></p>
                            <?php } ?>
                        </div>
                        <!-- End Error message -->
                        <!-- Button Submit -->
                        <div class="container-login100-form-btn">
                            <div class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>
                                <button class="login100-form-btn" type="submit">
                                    Login
                                </button>
                            </div>
                        </div>
                        <!-- End Button Submit -->
                        <!-- Footer form -->
                        <div class="foot text-center p-t-115" style="margin-top: 20px;">
                            <span class="limiter">
                                Don???t have an account?
                            </span>
                            <a href="registrasi.php">
                                Sign Up
                            </a>
                        </div>
                        <!-- End Footer form -->
                    </form>
                    <!-- Form Login ---->
                </div>
            </div>
        </div>
        <!--===============================================================================================-->
        <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/animsition/js/animsition.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/bootstrap/js/popper.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/select2/select2.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/daterangepicker/moment.min.js"></script>
        <script src="vendor/daterangepicker/daterangepicker.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/countdowntime/countdowntime.js"></script>
        <!--===============================================================================================-->
        <script src="js/login.js"></script>

    </body>
</html>