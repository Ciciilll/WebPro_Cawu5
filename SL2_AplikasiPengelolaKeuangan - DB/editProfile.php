<?php
    // session_start();
    include("config.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $str_query = "SELECT * FROM user WHERE username = '".$id."'";
        $query = mysqli_query($connection, $str_query);
        $profileData = mysqli_fetch_array($query);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="home-body">
        <div class="navbar">
            <p>Aplikasi Pengelolaan Keuangan</p>
            <div class="home-menu">
                <a href="home.php">Home</a>
                <a href="profile.php" class="active">Profile</a>
            </div>
            <a href="logout.php">Logout</a>
        </div>
        <div class="home-content">
            <h3>Profil Pribadi</h3>

            <form name = "registerForm" action="editProcess.php" onsubmit="return validateForm()" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Nama Depan</td>
                    <td><input type="text" name="namadepan" value="<?php echo $profileData['namadepan']?>"></td>
                    <td></td>
                    <td>Nama Tengah</td>
                    <td><input type="text" name="namatengah" value="<?php echo $profileData['namatengah']?>"></td>
                    <td></td>
                    <td>Nama Belakang</td>
                    <td><input type="text" name="namabelakang" value="<?php echo $profileData['namabelakang']?>"></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td><input type="text" name="tempatlahir" value="<?php echo $profileData['tempatlahir']?>"></td>
                    <td></td>
                    <td>Tanggal Lahir</td>
                    <td><input type="date" name="tanggallahir" value="<?php echo $profileData['tanggallahir']?>"></td>
                    <td></td>
                    <td>NIK</td>
                    <td><input type="text" name="nik" minlength="16" value="<?php echo $profileData['nik']?>"></td>
                </tr>
                <tr>
                    <td>Warga Negara</td>
                    <td><input type="text" name="warganegara"  value="<?php echo $profileData['warganegara']?>"></td>
                    <td></td>
                    <td>Email</td>
                    <td><input type="email" name="email"  value="<?php echo $profileData['email']?>"></td>
                    <td></td>
                    <td>No HP</td>
                    <td><input type="text" name="nohp" minlength="6"  value="<?php echo $profileData['nohp']?>"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>
                        <textarea type="text" name="alamat" rows="5" style="border: none; padding:none"><?php echo $profileData['alamat']?></textarea>
                    </td>
                    <td></td>
                    <td>Kode Pos</td>
                    <td><input type="text" name="kodepos" minlength="5"  value="<?php echo $profileData['kodepos']?>"></td>
                    <td></td>
                    <td>Foto Profil</td>
                    <td>
                        <input type="file" name = "profile" style="width: 200px;" accept=".jpg, .jpeg, .png" required value="<?php echo $profileData['profile']?>">
                    </td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username"  value="<?php echo $profileData['username']?>" readonly></td>
                    <td></td>
                    <td>Password 1</td>
                    <td><input type="password" name="password1"  value="<?php echo $profileData['password']?>"></td>
                    <td></td>
                    <td>Password 2</td>
                    <td><input type="password" name="password2" value="<?php echo $profileData['password']?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <!-- <a href="editProcess.php" class="kembali-button">Update Data</a> -->
                        <input type="submit" name="submitEdit" value="Update Data" class="kembali-button"><br>
                    </td>
                    <td>

                    </td>
                </tr>
            </table>
        </form>


        </div>
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