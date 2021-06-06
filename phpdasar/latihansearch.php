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
$result = mysqli_query($conn, $sql)

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Search</title>
</head>

<body>
    <h1>Daftar User</h1>
    <form action="latihansearch.php" method="get">
        <label>Cari :</label>
        <input type="text" name="cari">
        <input type="submit" value="Cari">
    </form>
    <table border='1' cellpadding="10" cellspacing="0">

        <tr>
            <th>Nomor</th>
            <th>Nama Depan</th>
            <th>Nama Belakang</th>
            <th>Email</th>
        </tr>
        <?php
        $no = 1;
        if(isset($_GET['cari'])){
            $cari = $_GET['cari'];
            // "%" adalah wildcard, misal "%a" artinya kata apa saja yang berakhiran a
            $data = mysqli_query($conn, "SELECT * FROM myguests WHERE lastname LIKE '%".$cari."%'");				
        }else{
            $data = mysqli_query($conn, "SELECT * FROM myguests");		
        }

        while ($user = mysqli_fetch_assoc($data)) : ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $user['firstname']; ?></td>
                <td><?php echo $user['lastname']; ?></td>
                <td><?php echo $user['email']; ?></td>
            </tr>
        <?php
        endwhile; ?>

    </table>
</body>

</html>