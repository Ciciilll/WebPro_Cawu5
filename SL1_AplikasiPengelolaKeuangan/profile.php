<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
                    <td><b><?php echo $_SESSION['namadepanS']?></b></td>
                    <td></td>
                    <td>Nama Tengah</td>
                    <td><b><?php echo $_SESSION['namatengahS']?></b></td>
                    <td></td>
                    <td>Nama Belakang</td>
                    <td><b><?php echo $_SESSION['namabelakangS']?></b></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td><b><?php echo $_SESSION['tempatlahirS']?></b></td>
                    <td></td>
                    <td>Tanggal Lahir</td>
                    <td><b><?php echo $_SESSION['tanggallahirS']?></b></td>
                    <td></td>
                    <td>NIK</td>
                    <td><b><?php echo $_SESSION['nikS']?></b></td>
                </tr>
                <tr>
                    <td>Warga Negara</td>
                    <td><b><?php echo $_SESSION['warganegaraS']?></b></td>
                    <td></td>
                    <td>Email</td>
                    <td><b><?php echo $_SESSION['emailS']?></b></td>
                    <td></td>
                    <td>No HP</td>
                    <td><b><?php echo $_SESSION['nohpS']?></b></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><b><?php echo $_SESSION['alamatS']?></b></td>
                    <td></td>
                    <td>Kode Pos</td>
                    <td><b><?php echo $_SESSION['kodeposS']?></b></td>
                    <td></td>
                    <td>Foto Profil</td>
                    <td>
                        <div class="profile-image">
                            <?php
                                echo "<img src='".$_SESSION['dirPlace'].$_SESSION['fileName']."'>";
                                // echo "<a href='".$_SESSION['dirPlace'].$_SESSION['fileName']."'>".$_SESSION['fileName']."</a>";
                            ?>
                        </div>
                    </td>
                </tr>
            </table>


        </div>
    </div>
</body>
</html>