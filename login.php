<?php 
//open session start
session_start(); 
//call connection
include "db_conn.php";

//check if email and pass from form index.php was submit
if (isset($_POST['email']) && isset($_POST['pass'])) {
    //function for validate data, where data is username(email) and pass(pass)
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
    //check username validate with parameter email from form index.php
    $email = validate($_POST['email']);
    //same as username validate
    $pass = validate($_POST['pass']);
    
    //check email, if email is empty thats mean email not assign but submit was clicked
    if (empty($email)) {
        //send error message to index.php attribut error
        header("Location: index.php?error=<i class='fas fa-exclamation-circle'></i> Username is required");
        //terminate the scipt
        exit();
    //check if pass empty
    }else if(empty($pass)){
        //go to index.php and then send message error
        header("Location: index.php?error=<i class='fas fa-exclamation-circle'></i> password is required");
        exit();
    //if email and pass not empty save this session
    }else{
        //call database, select all from table learlogin where username is email and 
        //pass is pass. if data not find sql is null, but if data is ready that will return
        //true and that object 
        $sql = "SELECT * FROM `example_customer` WHERE `email`='$email' AND `password`='$pass'";
        //mysqli_query function 
        //For successful SELECT, SHOW, DESCRIBE, or EXPLAIN queries it will return a mysqli_result object. For other successful queries it will return TRUE. FALSE on failure
        //parameter need mysqli_query(connection to db, sql string(like "SELECT * FROM table"))
        $result = mysqli_query($conn, $sql);
        
        //make sure that result ony have one row
        if (mysqli_num_rows($result) === 1) {
            //fetch row as an associative array
            //like if data structure is : username , pass
            //then if will be fetch like row['your data structure']
            $row = mysqli_fetch_assoc($result);
            //make sure again if that data login is equal value and type
            if ($row['email'] === $email && $row['password'] === $pass) {
                //save to temporary session
                //like $_SESSION['your data structure']
                $_SESSION['email'] = $row['email'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id_customer'] = $row['id_customer'];
                //go to home.php
                header("Location: ../app/");
                //terminate this script
                exit();
            }else{
                //if not equal username and pass that will be return incorect message into index.php
                header("Location: index.php?error=<i class='fas fa-exclamation-circle'></i> Incorect User name or pass");
                exit();
            }
        }else{
            //if username and pass not in db will be return incorect message into index.php
            header("Location: index.php?error=<i class='fas fa-exclamation-circle'></i> Incorect User name or pass");
            exit();
        }
    }
}else{
    //if not login that will login form again
    header("Location: index.php?error=<i class='fas fa-exclamation-circle'></i> not is set");
    exit();
}
?>