<?php
    session_start();
    include("config.php");

    $id = $_SESSION['username'];
    $str_query = "SELECT * FROM user WHERE username = '".$id."'";
    $query = mysqli_query($connection, $str_query);
    $data = mysqli_fetch_array($query);

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
                <a href="home.php" class="active">Home</a>
                <?php
                    echo "<a href='profile.php?id=".$id."'>Profile</a>";
                ?>
                <!-- <a href="profile.php">Profile</a> -->
            </div>
            <a href="logout.php">Logout</a>
        </div>
        <div class="home-content">
            <p>
                Halo <b><?php echo $data['namadepan']." ".$data['namatengah']." ".$data['namabelakang'] ?></b>, Selamat datang di Aplikasi Pengelolaan Keuangan
            </p>
        </div>
    </div>
</body>
</html>