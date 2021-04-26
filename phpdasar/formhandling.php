<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "latihan";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
$fnameErr = $lnameErr = $emailErr = "";

if (isset($_POST["submit"])) {

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];

    if (empty($_POST["fname"])) {
        die("First name is required");
    }

    if (empty($_POST["lname"])) {
        die("Last name is required");
    }

    if (empty($_POST["email"])) {
        die("Email is required");
    }

    $query = "INSERT INTO myguests (firstname, lastname, email) VALUES ('$fname', '$lname', '$email')";
    mysqli_query($conn, $query);

    header("location: ./latihandatabase.php");
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="style.css" type="text/css" rel="stylesheet" />
    <title>Form Handling</title>
</head>

<body>
    <div class="container">
        <section class="welcome">
            <form method="post" action="<?php $_PHP_SELF ?>">
                <div class="mb-3">
                    <label class="form-label">First Name* :</label>
                    <input name="fname" type="text" class="form-control" id="exampleInputFirstName">
                    <span class="error"><?php echo $fnameErr; ?></span>
                </div>
                <div class="mb-3">
                    <label class="form-label">Last Name*:</label>
                    <input name="lname" type="text" class="form-control" id="exampleInputLastName">
                    <span class="error"><?php echo $lnameErr; ?></span>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email*:</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail">
                    <span class="error"><?php echo $emailErr; ?></span>
                </div>
                <button type="submit" name="submit" class="btn">Submit</button>
            </form>
        </section>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>