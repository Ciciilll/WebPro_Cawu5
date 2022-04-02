<?php
    include("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="register-body">
        <p>Register</p>
        <form name = "registerForm" action="registerProcess.php" onsubmit="return validateForm()" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Nama Depan</td>
                    <td><input type="text" name="namadepan"></td>
                    <td></td>
                    <td>Nama Tengah</td>
                    <td><input type="text" name="namatengah"></td>
                    <td></td>
                    <td>Nama Belakang</td>
                    <td><input type="text" name="namabelakang"></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td><input type="text" name="tempatlahir"></td>
                    <td></td>
                    <td>Tanggal Lahir</td>
                    <td><input type="date" name="tanggallahir"></td>
                    <td></td>
                    <td>NIK</td>
                    <td><input type="text" name="nik" minlength="16"></td>
                </tr>
                <tr>
                    <td>Warga Negara</td>
                    <td><input type="text" name="warganegara"></td>
                    <td></td>
                    <td>Email</td>
                    <td><input type="email" name="email"></td>
                    <td></td>
                    <td>No HP</td>
                    <td><input type="text" name="nohp" minlength="6"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>
                        <textarea type="text" name="alamat" rows="5" style="border: none; padding:none"></textarea>
                    </td>
                    <td></td>
                    <td>Kode Pos</td>
                    <td><input type="text" name="kodepos" minlength="5"></td>
                    <td></td>
                    <td>Foto Profil</td>
                    <td>
                        <input type="file" name = "profile" style="width: 200px;" accept=".jpg, .jpeg, .png" required>
                    </td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username"></td>
                    <td></td>
                    <td>Password 1</td>
                    <td><input type="password" name="password1"></td>
                    <td></td>
                    <td>Password 2</td>
                    <td><input type="password" name="password2"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><a href="index.php" class="kembali-button">Kembali</a></td>
                    <td>
                        <div  class="register-button">
                        <input type="submit" name="submit" value="Register" style="background-color: transparent; width: inherit;">
                        </div>
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <script>
        function validateForm(){
            if(document.registerForm.namadepan.value == ""){
                alert("nama depan tidak boleh kosong");
                document.registerForm.namadepan.focus();
                return false;
            }
            if(document.registerForm.namatengah.value == ""){
                alert("nama tengah tidak boleh kosong");
                document.registerForm.namatengah.focus();
                return false;
            }
            if(document.registerForm.namabelakang.value == ""){
                alert("nama belakang tidak boleh kosong");
                document.registerForm.namabelakang.focus();
                return false;
            }
            if(document.registerForm.tempatlahir.value == ""){
                alert("tempat lahir tidak boleh kosong");
                document.registerForm.tempatlahir.focus();
                return false;
            }
            if(document.registerForm.tanggallahir.value == ""){
                alert("tanggal lahir tidak boleh kosong");
                document.registerForm.tanggallahir.focus();
                return false;
            }
            if(document.registerForm.nik.value == ""){
                alert("nik tidak boleh kosong");
                document.registerForm.nik.focus();
                return false;
            } 
            if (isNaN(document.registerForm.nik.value)){
                alert("nik harus berupa angka");
                document.registerForm.nik.focus();
                return false;
            }
            if(document.registerForm.warganegara.value == ""){
                alert("warga negara tidak boleh kosong");
                document.registerForm.warganegara.focus();
                return false;
            } 
            if(document.registerForm.email.value == ""){
                alert("email tidak boleh kosong");
                document.registerForm.email.focus();
                return false;
            } 
            if(document.registerForm.email.value.endsWith(".com")==false){
                alert("format email salah");
                document.registerForm.email.focus();
                return false;
            } 
            if(document.registerForm.nohp.value == ""){
                alert("no HP tidak boleh kosong");
                document.registerForm.nohp.focus();
                return false;
            }
            if (isNaN(document.registerForm.nohp.value)){
                alert("no HP harus berupa angka");
                document.registerForm.nohp.focus();
                return false;
            }
            if(document.registerForm.alamat.value == ""){
                alert("alamat tidak boleh kosong");
                document.registerForm.alamat.focus();
                return false;
            }
            if(document.registerForm.kodepos.value == ""){
                alert("kode pos tidak boleh kosong");
                document.registerForm.kodepos.focus();
                return false;
            }
            // foto profil?
            if(document.registerForm.username.value == ""){
                alert("username tidak boleh kosong");
                document.registerForm.username.focus();
                return false;
            }
            if(document.registerForm.password1.value == ""){
                alert("password1 tidak boleh kosong");
                document.registerForm.password1.focus();
                return false;
            }
            if(document.registerForm.password2.value == ""){
                alert("password2 tidak boleh kosong");
                document.registerForm.password2.focus();
                return false;
            }
            if(document.registerForm.password2.value != document.registerForm.password1.value){
                alert("password 1 dan 2 harus sama");
                return false;
            }
        }
    </script>

</body>
</html>