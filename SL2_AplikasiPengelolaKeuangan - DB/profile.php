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
    <title>Profile</title>
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

            <table>
                <tr>
                    <td>Nama Depan</td>
                    <td><b><?php echo $profileData['namadepan']?></b></td>
                    <td></td>
                    <td>Nama Tengah</td>
                    <td><b><?php echo $profileData['namatengah']?></b></td>
                    <td></td>
                    <td>Nama Belakang</td>
                    <td><b><?php echo $profileData['namabelakang']?></b></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td><b><?php echo $profileData['tempatlahir']?></b></td>
                    <td></td>
                    <td>Tanggal Lahir</td>
                    <td><b><?php echo $profileData['tanggallahir']?></b></td>
                    <td></td>
                    <td>NIK</td>
                    <td><b><?php echo $profileData['nik']?></b></td>
                </tr>
                <tr>
                    <td>Warga Negara</td>
                    <td><b><?php echo $profileData['warganegara']?></b></td>
                    <td></td>
                    <td>Email</td>
                    <td><b><?php echo $profileData['email']?></b></td>
                    <td></td>
                    <td>No HP</td>
                    <td><b><?php echo $profileData['nohp']?></b></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><b><?php echo $profileData['alamat']?></b></td>
                    <td></td>
                    <td>Kode Pos</td>
                    <td><b><?php echo $profileData['kodepos']?></b></td>
                    <td></td>
                    <td>Foto Profil</td>
                    <td>
                        <div class="profile-image">
                            <?php
                                echo "<img src='".$profileData['profile']."'>";
                                // echo "<a href='".$_SESSION['dirPlace'].$_SESSION['fileName']."'>".$_SESSION['fileName']."</a>";
                            ?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <?php
                            echo "<a href='editProfile.php?id=".$id."'><h4>Edit Profile</h4></a>";
                        ?>
                    </td>
                </tr>
            </table>


        </div>
    </div>
</body>
</html>