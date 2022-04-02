<?php
    // session_start();
    include("config.php");

    if(isset($_POST['submit'])){
        //cek username unique
        $temp_username = $_POST['username'];
        $str_query_name = "SELECT * FROM user";
        $queryName = mysqli_query($connection, $str_query_name);
        $flag = 0;
        while($data = mysqli_fetch_array($queryName)){
            if($data['username'] == $temp_username){
                echo "<script> 
                    alert('Username $temp_username sudah digunakan, silahkan coba username lain');
                    </script>";
                }
                $flag = -1;
            }
        }
        if($flag != -1){
            //input image to Uploaded folder
            $fileName = $_FILES['profile']['name'];
            $tempName = $_FILES['profile']['tmp_name'];
    
            $directory = "Uploaded/";
            $toStore = $directory.$fileName;
            $upload = move_uploaded_file($tempName, $toStore);
            
            $str_query = "insert into user values(
                '".$_POST['namadepan']."',
                '".$_POST['namatengah']."',
                '".$_POST['namabelakang']."',
                '".$_POST['tempatlahir']."',
                '".$_POST['tanggallahir']."',
                '".$_POST['nik']."',
                '".$_POST['warganegara']."',
                '".$_POST['email']."',
                '".$_POST['nohp']."',
                '".$_POST['alamat']."',
                '".$_POST['kodepos']."',
                '".$_POST['username']."',
                '".$_POST['password1']."', 
                '".$toStore."'
            )";
    
            $query = mysqli_query($connection, $str_query);
    
            if($query){
                echo "<script> 
                    alert('Register Berhasil');
                    window.location.replace('index.php');
                    </script>";
            } else{
                echo "<script> 
                    alert('Register Gagal');
                    window.location.replace('index.php');
                    </script>";
            }
        }
?>
<!-- 
        // $fileName = $_FILES['profile']['name'];
        // $tempName = $_FILES['profile']['tmp_name'];

        // $directory = "Uploaded/";

        // $upload = move_uploaded_file($tempName, $directory.$fileName);

        // $image = $_FILES['profile']['tmp_name'];
        // $img = file_get_contents($image);
        // $sql = "insert into user (profile) values(?)";

        // $stmt = mysqli_prepare($connection, $sql);

        // mysqli_stmt_bind_param($stmt, "s",$img);
        // mysqli_stmt_execute($stmt);

        // $check = mysqli_stmt_affected_rows($stmt);
        // if($check==1){
        //     $msg = 'Image Successfullly UPloaded';
        // }else{
        //     $msg = 'Error uploading image';
        // }
        // mysqli_close($connection);
        // $fileName = $_FILES['profile']['name'];
        // $tempName = $_FILES['profile']['tmp_name'];
        // $fileType = $_FILES['profile']['type'];
        // $data = addslashes(file_get_contents($tempName));
        // $profileProp = getImageSize($tempName);

        // $sql = "INSERT INTO output_images(imageType, imageData) VALUES('{$profileProp['mime']}', '{$data}')";
        // $db = new PDO("mysql:host=localhost; dbname=aplikasipengelolakeuangan", "root", "");

        // $profileFile = $db->prepare("insert into myblob values('', ?, ?, ?)");
        // $profileFile->bindParam(1, $fileName);
        // $profileFile->bindParam(2, $fileType);
        // $profileFile->bindParam(3, $data);
        // $profileFile->execute();

        //------
        // $validExtension = ['jpg', 'jpeg', 'png'];
        // $imageExtension = explode('.', $fileName);
        // $imageExtension = strtolower(end($imageExtension));

        // if(in_array($imageExtension, $validExtension)){
        //     $directory = "Uploaded/";
        //     $upload = move_uploaded_file($tempName, $directory.$fileName);
        // } else{
        //     echo "<script> 
        //         alert('Tipe file tidak valid atau ukuran file terlalu besar');
        //         window.location.replace('register.php');
        //         </script>";
        // }
 -->
