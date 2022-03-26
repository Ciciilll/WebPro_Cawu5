<?php
    session_start();

    if(isset($_POST['loginSubmit'])){
        if($_POST['loginusername'] == $_SESSION['usernameS'] 
            && $_POST['loginpassword']==$_SESSION['passwordS']){
            echo "berhasil login!";
            header("location:home.php");
        } else{
            echo " <script>
                alert ('Username atau password salah!');
                window.location.replace('login.php');
            </script>";
            // header("location:login.php");
        }
        // echo $_SESSION['usernameS'];
        // echo $_SESSION['passwordS'];
    }
?>