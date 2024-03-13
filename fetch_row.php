<html>

<head>
    <title>Koneksi Database MYSQL</title>
</head>

<body>
    <h1>Koneksi database dengan mysql_fetch_row</h1>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "kejuaraan") or die("koneksi gagal");
    $hasil = $conn->query("select * from kejuaraan");
    while ($row = mysqli_fetch_row($hasil)) {
        echo "Liga " . $row[1];
        echo " mempunyai " . $row[2];
        echo " wakil di liga champion <br>";
    }
    ?>
</body>

</html>