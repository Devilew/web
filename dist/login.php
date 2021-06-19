<?php
    if(isset($_POST['login'])){

        session_start();
        include 'koneksi.php';

        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = mysqli_query($koneksi, "SELECT * FROM admin WHERE USERNAME = '$username' AND PASSWORD = '$password'");
        $hasil = mysqli_fetch_assoc($query);
        if($hasil != NULL){
            $_SESSION['username'] = $username;
            echo '<script language="javascript">alert("Login Berhasil");document.location="cobalogin.php";</script>'; 
        }else{
			echo '<script language="javascript">alert("Username/Password salah!"); document.location="index.php";</script>';
        }
    }
?>