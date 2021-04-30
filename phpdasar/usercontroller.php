<?php

function register_user($username, $password){
    global $conn;
    // mencegah sql injection
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);
    // Encrypt password
    $password = password_hash($password, PASSWORD_DEFAULT);
    $query = "INSERT INTO myguest (username, password) VALUES('$username', '$password')";

    if( mysqli_query($conn, $query) ) return true;
    else return false;
}

// cegah duplikasi username
function register_cek_username($username){
    global $conn;
    // mencegah sql injection
    $username = mysqli_real_escape_string($conn, $username);

    $query = "SELECT * FROM myguest where username = '$username'";

    if($result = mysqli_query($conn, $query)){
        if(mysqli_num_rows($result) == 0) return true;
        else return false;
    }

}

// cek nama terdaftar / belum
function login_cek_nama($username){
    global $conn;

    $username = mysqli_real_escape_string($conn, $username);

    $query = "SELECT username FROM myguest where username = '$username'";

    if($result = mysqli_query($conn, $query)){
        if(mysqli_num_rows($result) > 0) return true;
        else return false;
    }
}

// cek password Login
function cek_data($username, $password){
    global $conn;
    // mencegah sql injection
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    $query = "SELECT password FROM myguest WHERE username = '$username'";

    $result = mysqli_query($conn, $query);
    $hash = mysqli_fetch_assoc($result);

    if( password_verify($password, $hash['password']) ) return true;
    else return false;
}

// clear all session
function logout($session){
    unset($session);
    session_destroy();
}