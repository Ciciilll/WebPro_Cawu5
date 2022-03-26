<?php
    session_start();

    if(isset($_POST['submit'])){
        $namadepan = $_POST['namadepan'];
        $namatengah = $_POST['namatengah'];
        $namabelakang = $_POST['namabelakang'];
        $tempatlahir = $_POST['tempatlahir'];
        $tanggallahir = $_POST['tanggallahir'];
        $nik = $_POST['nik'];
        $warganegara = $_POST['warganegara'];
        $email = $_POST['email'];
        $nohp = $_POST['nohp'];
        $alamat = $_POST['alamat'];
        $kodepos = $_POST['kodepos'];
        $username = $_POST['username'];
        $password1 = $_POST['password1'];
        $password2 = $_POST['password2'];

        // echo $namadepan."-".$namatengah;
        // echo $username;

        $fileName = $_FILES['profile']['name'];
        $tempName = $_FILES['profile']['tmp_name'];

        $directory = "Uploaded/";

        $upload = move_uploaded_file($tempName, $directory.$fileName);

        if($upload){
            $_SESSION['namadepanS'] = $namadepan;
            $_SESSION['namatengahS'] = $namatengah;
            $_SESSION['namabelakangS'] = $namabelakang;
            $_SESSION['tempatlahirS'] = $tempatlahir;
            $_SESSION['tanggallahirS'] = $tanggallahir;
            $_SESSION['nikS'] = $nik;
            $_SESSION['warganegaraS'] = $warganegara;
            $_SESSION['emailS'] = $email;
            $_SESSION['nohpS'] = $nohp;
            $_SESSION['alamatS'] = $alamat;
            $_SESSION['kodeposS'] = $kodepos;
            $_SESSION['usernameS'] = $username;
            $_SESSION['passwordS'] = $password1;

            $_SESSION['dirPlace'] = $directory;
            $_SESSION['fileName'] = $fileName;

            // echo $_SESSION['namadepanS'];
            // echo "File successfully uploaded!";

            // echo "<a href='".$directory.$fileName."'>".$fileName."</a>";
            echo "<script> 
                alert('Register Berhasil');
                window.location.replace('index.php');
            </script>";

            // header("location:index.php");
        } else{
            echo " <script>
                alert ('Register process failed');
            </script>";
        }
        
    }
?>
