<?php
    session_start();
    include("config.php");
    
    if(isset($_POST['loginSubmit'])){
        $str_query = "SELECT * FROM user";
        $query = mysqli_query($connection, $str_query);

        //search username in database
        while($data = mysqli_fetch_array($query)){
            if($data['username'] == $_POST['loginusername']){
                if($data['password'] == $_POST['loginpassword']){
                    $_SESSION['username'] = $data['username'];
                   echo "berhasil login!";
                   header("location:home.php?id='".$data['username']."'");
               } else {
                    echo " <script>
                            alert ('Username atau password salah!');
                            window.location.replace('login.php');
                        </script>";
               }
            }
        }
        //if username not found
        echo " <script>
            alert ('Username belum terdaftar!');
            window.location.replace('login.php');
        </script>";
    }
?>