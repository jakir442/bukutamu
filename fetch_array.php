<html>

<head>
    <title>Koneksi Database MYSQL</title>
</head>

<body>
    <h1>Koneksi database dengan mysql_fetch_array</h1>
    <?php
    // mysqli_connect("localhost","root","qwerty ");
    // mysqli_select_db("liga");

    // $sql = mysqli_query("SELECT * FROM liga");


    $conn = mysqli_connect("localhost", "root", "", "kejuaraan") or die("koneksi gagal");
    $hasil = $conn->query("SELECT * FROM kejuaraan");
    while ($row = mysqli_fetch_array($hasil)) {
        echo "Liga " . $row["negara"];
        echo " mempunyai " . $row[2];
        echo " wakil di liga champion <br>";
    }
    ?>
</body>

</html>