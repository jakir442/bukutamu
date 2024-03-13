<html>

<head>
    <title>Koneksi Database MYSQL</title>
</head>

<body>
    <h1>Demo koneksi database MYSQL</h1>
    <?
    $conn = mysqli_connect("localhost", "root", "mysql");
    if ($conn) {
        echo "ok";
    } else {
        echo "Server not connected";
    }
    ?>
</body>

</html>