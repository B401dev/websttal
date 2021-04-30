<?php

require_once("init.php");

// validasi register
if(isset($_POST['submit']) ){
    $username = $_POST['username'];
    $password = $_POST['password'];

    // trim - remove spasi
    if( !empty(trim($username)) && !empty(trim($password)) ){
        
        if(register_cek_username($username)){
            // cek register ke database
            if(register_user($username, $password)){
                echo "<script>alert('Berhasil daftar')</script>";
            }
            else{
                echo "<script>alert('Gagal daftar')</script>";
            }
        }
        else{
            echo "<script>alert('Username sudah ada, anda tidak bisa daftar!')</script>";
        }
    }
    else{
        echo "<script>alert('Tidak boleh kosong')</script>";
    }
}