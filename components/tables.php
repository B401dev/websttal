<?php
include_once "../functions/connect.php";
include_once "../functions/edit.php";
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">

    <title>Hello, world!</title>
</head>

<body>
    <?php
    include "./header.php";
    ?>

    <div class="container mt-5">
        <h2>Input Book</h2>
        <?php
        include "./form.php";
        $getBook = "SELECT * from books;";
        $query_run = mysqli_query($conn, $getBook);
        ?>
        <table class="table table-sm">
            <div class="table-responsive">
                <table class="table align-middle">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Title</th>
                            <th scope="col">Author</th>
                            <th scope="col">Publisher</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>

                    <?php
                    $i = 1;
                    if ($query_run) {
                        foreach ($query_run as $row) {
                    ?>
                            <tbody>
                                <tr>

                                    <th scope="row"><?php echo $i;
                                                    $i++ ?></th>
                                    <td><?php echo $row['title'] ?></td>
                                    <td><?php echo $row['author'] ?></td>
                                    <td><?php echo $row['publisher'] ?></td>
                                    <td><a href="../functions/delete.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger btn-sm" role="button" aria-disabled="true">Delete</a>
                                        <a href="../components/edit.php?id=<?php echo $row["id"]; ?>" class="btn btn-disabled btn-sm" role="button" aria-disabled="true" data-toggle="modal" data-target="#edit">Edit</a>
                                    </td>
                                </tr>
                            </tbody>
                    <?php
                        }
                    } else {
                        echo "No Records Found";
                    }
                    ?>
                </table>
            </div>
        </table>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>