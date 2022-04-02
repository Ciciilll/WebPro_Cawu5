<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-body">
        <h1>Login</h1>
        <form name = "loginForm" onsubmit="return validateLogin()" action="loginProcess.php" method="post">
            <table>
                <tr>
                    <td>Username</td>
                    <td><input type="text" class="input-form" name="loginusername"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" class="input-form" name="loginpassword"></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <div class="login-buttons">
                            <input type="submit" name="loginSubmit" value="Login" class="login-button">
                            <a href="index.php" class="back-button">Kembali</a>
                        </div>
                    </td>
                </tr>
            </table>
        </form>
    </div> 

    <script>
        function validateLogin(){
            // <?php
            //     if(isset($_POST['usernameS'])==""){
            //         alert("username belum terdaftar!");
            //         return false;
            //     }
            // ?>
            if(document.loginForm.loginusername.value == ""){
                alert("username tidak boleh kosong");
                document.loginForm.loginusername.focus();
                return false;
            }
            if(document.loginForm.loginpassword.value == ""){
                alert("password tidak boleh kosong");
                document.loginForm.loginpassword.focus();
                return false;
            }
        }
    </script>
</body>
</html>