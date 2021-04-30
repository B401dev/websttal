<?php
require_once("connect.php");
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