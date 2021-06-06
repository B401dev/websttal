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
    <title>Latihan Pagination</title>
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
        $batas = 5;
        // mengambil data dari fungsi GET php
        // klo g ada data, maka halaman = 1
        $halaman    = isset($_GET["batas"]) ? (int)$_GET["batas"] : 1;
        // kalau halaman lebih besar dari 1 maka mulainya halaman * 5 - 5
        // misal halaman = 2, mulai = 10 - 5 = 5
        $mulai    = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

        $total = mysqli_num_rows($result);
        $pages = ceil($total / $batas);

        // normal
        $data = mysqli_query($conn,"SELECT * FROM myguests");
		$nomor = 1;

        // pagination
        // sql query mulai dari no $mulai dan mengembalikan sebanyak $batas
        $sql_2 = "SELECT * FROM myguests LIMIT $mulai, $batas";
        $resultPage = mysqli_query($conn, $sql_2);
        // increment
        $no    = $mulai + 1;

        while ($user = mysqli_fetch_assoc($resultPage)) : ?>
        <!-- while ($user = mysqli_fetch_assoc($data)) : ?> -->
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $user['firstname']; ?></td>
                <td><?php echo $user['lastname']; ?></td>
                <td><?php echo $user['email']; ?></td>
            </tr>
        <?php
        endwhile; ?>

    </table>
    <br />
    <div style="font-weight:bold;">
        Paging
        <?php
        for ($i = 1; $i <= $pages; $i++) {
        ?>
            <a href="latihanpagination.php?batas=<?php echo $i; ?>" style="text-decoration:none"> <u><?php echo $i; ?></u></a>
        <?php
        }
        ?>
    </div>
</body>

</html>