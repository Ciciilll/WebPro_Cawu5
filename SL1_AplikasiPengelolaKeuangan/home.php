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
                <a href="home.php" class="active">Home</a>
                <a href="profile.php">Profile</a>
            </div>
            <a href="logout.php">Logout</a>
        </div>
        <div class="home-content">
            <p>
                Halo <b><?php echo $_SESSION['namadepanS']." ".$_SESSION['namatengahS']." ".$_SESSION['namabelakangS'] ?></b>, Selamat datang di Aplikasi Pengelolaan Keuangan
            </p>
        </div>
    </div>
</body>
</html>