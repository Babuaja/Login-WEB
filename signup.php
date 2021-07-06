<?php
session_start();
include "db_conn.php";

if(isset($_POST['submit']))
{
    //cek connection
    if(!$conn){
        header("Location: index.php?error=<i class='fas fa-exclamation-circle'></i> db not connect");
    }
    function validate($data){
        /* trim method will remove :
        "\0" - NULL
        "\t" - tab
        "\n" - new line
        "\x0B" - vertical tab
        "\r" - carriage return
        " " - ordinary white space
        and if data isnt availabe or undefined thats will return null */
       $data = trim($data);
       //stripslashes will remove \(slashes) in data
       $data = stripslashes($data);
       //htmlspecialchars convert predefined value like:
       // & (ampersand) becomes &amp;
       // " (double quote) becomes &quot;
       // ' (single quote) becomes &#039;
       // < (less than) becomes &lt;
       // > (greater than) becomes &gt;
       $data = htmlspecialchars($data);
       //return clear data string but if data is undefined that will be null
       return $data;
    }
    //get post
    $name = $_POST['name'];
    $email =validate($_POST['mail']);
    if(empty($email)){
        header("Location: registrasi.php?error=<i class='fas fa-exclamation-circle'></i> error email");
    }
    $dateofbirth = $_POST['date'];
    $phonenumber = $_POST['phonenumber'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    //select database for email
    $sql = "SELECT * FROM `example_customer` WHERE `email` = '$email'";
    //search in db
    $result = mysqli_query($conn, $sql);
    //cek email (if same cannt make account)
    if(mysqli_num_rows($result) >= 1){
        header("Location: registrasi.php?error=<i class='fas fa-exclamation-circle'></i> email: $email is ready for login");
        exit();
    } //cek pass and cpass if not same cannt make account
    else if($password != $cpassword){
        header("Location: registrasi.php?error=<i class='fas fa-exclamation-circle'></i> Your password and confirm password not match!");
        exit();
    } //if cek email and pass is passed then create account customer
    else {
        //get for last id
        $arr_id = "SELECT * FROM `example_customer` WHERE 1";
        $id = mysqli_query($conn, $arr_id);
        $id = mysqli_num_rows($id) + 1;

        //insert into table example_customer
        //INSERT INTO `example_customer` (`name`, `date_of_birth`, `phone_number`, `email`, `password`, `id_customer`) VALUES
        $sqlu = "INSERT INTO `example_customer` (`name`, `date_of_birth`, `phone_number`, `email`, `password`, `id_customer`) VALUES ('$name', '$dateofbirth', '$phonenumber', '$email', '$password', '$id')";
        $insert = mysqli_query($conn, $sqlu);
        //cek if insert failed get some error
        if(!$insert){
            header("Location: registrasi.php?error=<i class='fas fa-exclamation-circle'></i> $id");
            exit();
        } 
        //result if sign up succes and dirrect to app
        else{
            //save session
            $_SESSION['id_customer'] = $id;
            $_SESSION['email'] = $email;
            //show doc html
            echo '            
            <!DOCTYPE html>
            <html lang="en">
                <head>
                    <title>Login V2</title>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    <!--Link-->
                    <!-- Bootstrap CSS -->
                    <link
                        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
                        rel="stylesheet"
                        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
                        crossorigin="anonymous">

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

                    <div class="limiter" id="login">
                        <div class="container-login100">
                            <div class="wrap-login100">
                                <!-- Form Login ---->
                                <h1 class="text-center">Welcome Movier!</h1>
                                <p class="text-center">wait you will be direct into application</p>
                                <!-- Form Login ---->
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
                    <script>
                    function redirect(){
                        window.open("../app/", "_self");
                    }
                    setTimeout(redirect, 3000);
                    </script>
                </body>
            </html>
            ';
            exit();
        }
    }   
}
?>