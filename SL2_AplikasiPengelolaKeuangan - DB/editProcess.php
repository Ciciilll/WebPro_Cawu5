<?php   
    include("config.php");

    if(isset($_POST['submitEdit'])){
        //insert image to Uploaded folder
        $fileName = $_FILES['profile']['name'];
        $tempName = $_FILES['profile']['tmp_name'];

        $directory = "Uploaded/";
        $toStore = $directory.$fileName;
        $upload = move_uploaded_file($tempName, $toStore);

        //update to database
        $str_query = "update user set namadepan='".$_POST['namadepan']."', 
            namatengah='".$_POST['namatengah']."', 
            namabelakang='".$_POST['namabelakang']."', 
            tempatlahir='".$_POST['tempatlahir']."', 
            tanggallahir='".$_POST['tanggallahir']."', 
            nik='".$_POST['nik']."',
            warganegara='".$_POST['warganegara']."',
            email='".$_POST['email']."',
            nohp='".$_POST['nohp']."', 
            alamat='".$_POST['alamat']."', 
            kodepos='".$_POST['kodepos']."', 
            password='".$_POST['password1']."', 
            profile='$toStore' 
            WHERE username='".$_POST['username']."'";
        $query = mysqli_query($connection, $str_query);

        // echo "<script>";
        // echo "alert('$str_query')";
        // echo "</script>";

        // $id = $_POST['username'];

        if($query){
            echo "<script>";
            echo "alert('data berhasil diupdate')";
            echo "</script>";

            echo "<script>";
            echo "window.location='index.php'";
            echo "</script>";

            // header("location:profile.php?id='".$id."'");
        } else{
            echo "<script>";
            echo "alert('data gagal diupdate')";
            echo "</script>";

            echo "<script>";
            echo "window.location='index.php'";
            echo "</script>";
        }
    }

?>