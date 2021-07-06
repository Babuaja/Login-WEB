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
        <!-- LInk Font Awesome -->
        <script src="https://kit.fontawesome.com/566fc9c974.js" crossorigin="anonymous"></script>
        <link
            rel="stylesheet"
            type="text/css"
            href="fonts/iconic/css/material-design-iconic-font.min.css">
        <!--CSS-->
        <link rel="stylesheet" type="text/css" href="css/main.css">
    </head>
    <body>
        <!-- Background yutub trailer -->
        <div style="position: fixed;z-index: -99;width: 150%;height: 150%;top: -25%;left:-25%">
            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/9qH-mWfTMm0?autoplay=1&mute=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; mute" allowfullscreen></iframe>
        </div>
        <!--REGISTER-->
        <div class="limiters" id="register">
            <div class="container-login100">
                <div class="wrap-login100">
                    <form class="login100-form validate-form" action="signup.php" method="POST">
                        <span class="login100-form-title p-b-26">
                            REGISTER YOUR ACCOUNT
                        </span>
                        <span class="login100-form-title p-b-48">
                            <img src="images/icons/BabuAja.png" alt="BabuAja">
                        </span>

                        <div class="wrap-input100">
                            <input class="input100" type="text" name="name" required>
                            <span class="focus-input100" data-placeholder="Name"></span>
                        </div>

                        <div
                            class="wrap-input100"
                            >
                            <input class="input100" class="textbox-n" type="text" onfocus="(this.type='date')" name="date" onblur="(this.type='text')" max="2030-01-01" required>
                            <span class="focus-input100" data-placeholder="Date of Birth"></span>
                        </div>

                        <div
                            class="wrap-input100">
                            <input class="input100" type="text" name="phonenumber" required>
                            <span class="focus-input100" data-placeholder="Phone Number"></span>
                        </div>

                        <div class="wrap-input100">
                            <input class="input100" type="email" name="mail" required>
                            <span class="focus-input100" data-placeholder="Email"></span>
                        </div>

                        <div class="wrap-input100">
                            <span class="btn-show-pass">
                                <i class="zmdi zmdi-eye"></i>
                            </span>
                            <input class="input100" type="password" name="password" required>
                            <span class="focus-input100" data-placeholder="Password"></span>
                        </div>
						<div class="wrap-input100" style="margin-bottom: 20px;">
                            <span class="btn-show-pass">
                                <i class="zmdi zmdi-eye"></i>
                            </span>
                            <input class="input100" type="password" name="cpassword" required>
                            <span class="focus-input100" data-placeholder="Confirm Password"></span>
                        </div>
						<!-- Error message -->
                        <div class="row justify-content-center">
                            <?php if (isset($_GET['error'])) { $str ="<i class='fas fa-exclamation-circle'></i> incorrect pass"?>
                            <!-- show data with $_GET['data structure'] -->
                            <p class="text-danger text-center error"><?php echo $_GET['error']; ?></p>
                            <?php } ?>
                        </div>
                        <!-- End Error message -->
                        <div class="container-login100-form-btn">
                            <div class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>
                                <button class="login100-form-btn" type="submit" name="submit">
                                        Sign Up
                                </button>
                            </div>
                        </div>
					
                        <div class="text-center p-t-115">
                            <span class="txt1">
                                Don’t have an email?
                            </span>

                            <a class="txt2" href="#">
                                Take your knife and kill yourself
                            </a>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        <div id="dropDownSelect1"></div>

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