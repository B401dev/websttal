<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Belajar Dasar PHP</title>
</head>
<body>

    <?php
        // echo "Kelas Web Design";

        // ini komentar jadi tidak akan muncul di web
        /* ini juga komentar
        tapi bisa banyak baris*/

        // Menyimpan dalam variable
        $name = "Adhisti";
        // $x = 5;
        // $y = 10;

        /*-------------------------------------------------TIPE DATA-------------------------------------------------*/
        // string
        // $x = "Hello world!";

        // // integers : angka, minimal 1 digit, tidak boleh desimal
        // $x = 5985;

        // // float : desimal
        // $x = 10.365;

        // // boolean : memiliki 2 nilai TRUE or FALSE.
        // // digunakan untuk conditional testing
        // $x = true;
        // $y = false;

        // // array : menyimpan banyak nilai dalam satu variable
        // $cars = array("Volvo","BMW","Toyota");

        // // object
        // // class dan object adalah bagian dalam OOP. 
        // // class merupakan template dari object sedangkan object adalah bagian dari class
        // // semua properti dan fungsi dalam class akan diturunkan ke object
        // class Car {
        // public $color;
        // public $model;
        // public function __construct($color, $model) {
        //     $this->color = $color;
        //     $this->model = $model;
        // }
        // public function message() {
        //     return "My car is a " . $this->color . " " . $this->model . "!";
        // }
        // }

        // $myCar = new Car("black", "Volvo");
        // echo $myCar -> message();
        // echo "<br>";
        // $myCar = new Car("red", "Toyota");
        // echo $myCar -> message();

        // // null : tidak memiliki nilai
        // $x = "Hello world!";
        // $x = null;
        // var_dump($x);

        /*-------------------------------------------------OPERATOR-------------------------------------------------*/
        // Penggunaan operasi matematika + - / * %
        // echo $x * $y;

        // Menghubungkan string menggunakan .
        // echo "Umur adik saya" . " " . $x . " tahun dan umur saya" . " " . $y . " tahun"

        // Perbandingan
        // <, >, <=, >=, ==, !=
        // var_dump($x > $y);
        // var_dump(1 == "1")

        // Identitas
        // ===, !==
        // var_dump(1 === "1")

        // Logika
        // &&, ||, !
        // var_dump($y < 20 && $y % 2 == 0)

        /*-------------------------------------------------PENGULANGAN-------------------------------------------------*/
        // for
        // for( $i = 0; $i < 5; $i++) {
        //     echo $i;
        // }

        // while
        // $x = 1;
        // while($x <= 5) {
        //     echo "The number is: $x <br>";
        //     $x++;
        // }

        // do while
        // $x = 6;
        // do {
        //     echo "The number is: $x <br>";
        //     $x++;
        // } while ($x <= 5);

        // foreach
        // $colors = array("red", "green", "blue", "yellow");
        // foreach ($colors as $value) {
        //     echo "$value <br>";
        // }

        /*-------------------------------------------------PERCABANGAN-------------------------------------------------*/
        //if else
        // $t = 20;
        // if ($t == 20) {
        //     echo "Ini angka 20";
        // } else {
        //     echo "Ini bukan angka 20";
        // }

        //if..elseif..else
        // $t = 30;
        // if ($t < 20) {
        //     echo "Ini lebih kecil dari 20";
        // } elseif ($t > 20) {
        //     echo "Ini lebih besar dari 20";
        // } else {
        //     echo "Ini 20";
        // }
    ?>

    <h1> Selamat pagi, <?php echo "$name!" ?> </h1>

</body>
</html>