<?php
// koneksi ke database
    $servername = "localhost";
	$username = "root";
	$password = "";
    $database = "latihan";
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $database);
	
	// Check connection
	if (!$conn) {
	  die("Connection failed: " . $conn->connect_error);
	}
	echo "Connected successfully";

    // ambil data dari tabel myguest
    $sql = "SELECT * FROM myguests";
	$result = mysqli_query( $conn, $sql );

    // ambil data (fetch) user dari object result
    // mysqli_fetch_row() -> mengembalikan array numeric
    // $usr = mysqli_fetch_row($result);
    // var_dump($usr[1]);

    // mysqli_fetch_assoc() -> mengembalikan array associative
    // $usr = mysqli_fetch_assoc($result);
    // var_dump($usr["firstname"]);

    // mysqli_fetch_array() -> mengembalikan array associative dan numeric
    // $usr = mysqli_fetch_array($result);
    // var_dump($usr["firstname"]);
    // var_dump($usr[1]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Database</title>
</head>
<body>
    <h1>Daftar User</h1>
    
    <table border='1' cellpadding="10" cellspacing="0">
        
        <tr>
            <th>Nomor</th>
            <th>Nama Depan</th>
            <th>Nama Belakang</th>
            <th>Email</th>
        </tr>
        <?php 
            $i = 1;
            while( $user = mysqli_fetch_assoc($result) ) : ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $user['firstname']; ?></td>
                <td><?php echo $user['lastname']; ?></td>
                <td><?php echo $user['email']; ?></td>
            </tr>
        <?php 
            $i++;
            endwhile; ?>

    </table>
</body>
</html>