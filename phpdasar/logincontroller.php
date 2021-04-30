<?php

require_once("init.php");

// validasi register
if(isset($_POST['submit']) ){
    $username = $_POST['username'];
    $password = $_POST['password'];

    // trim - remove spasi
    if( !empty(trim($username)) && !empty(trim($password)) ){
        
        if( login_cek_nama($username) ){
            if( cek_data($username, $password) ){
                $_SESSION['username'] = $username;
                header('Location: index.php');
            }
            else{
                echo "<script>alert('Data ada yang salah')</script>";
            }
        }
        else{
            echo "<script>alert('Nama belum terdaftar di database')</script>";
        }
    }
    else{
        echo "<script>alert('Tidak boleh kosong')</script>";
    }
}