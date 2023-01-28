<?php 

session_start(); 

include "config.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $uname = validate($_POST['uname']);

    $pass = validate($_POST['password']);

    if (empty($uname)) {

        header("Location: login.html?error=User Name is required");

        exit();

    }else if(empty($pass)){

        header("Location: login.html?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM users WHERE username='$uname' AND password='$pass'";

        $result = mysqli_query($cser, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['username'] === $uname && $row['password'] === $pass) {

                echo "Logged in!";

                $_SESSION['username'] = $row['user_name'];

                $_SESSION['nickname'] = $row['nickname'];

                $_SESSION['uid'] = $row['uid'];

                header("Location: i.html");

                exit();

            }else{

                header("Location: login.html?error=Incorect User name or password1");

                exit();

            }

        }else{

            header("Location: login.html?error=Incorect User name or password2");

            exit();

        }

    }

}else{

    header("Location: login.html");

    exit();

}