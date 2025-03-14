<?php
require_once("BukuTamu.php");
session_start();

if (!isset($_SESSION['bukutamu'])) {
    $_SESSION['bukutamu'] = [];
}

if (isset($_POST['submit'])) {
    // Membuat object dari class Buku Tamu
    $bukutamu = new BukuTamu();

    // Mengisi properti timestamp dengan fungsi date
    // Y-m-d H:i:s artinya 2025-03
    $bukutamu->timestamp = date("Y-m-d H:i:s");

    $bukutamu->fullname = $_POST["fullname"];
    $bukutamu->email = $_POST["email"];
    $bukutamu->message = $_POST["message"];

    array_push($_SESSION['bukutamu'], $bukutamu);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container my-5">
        <h2 class="mb-4">Daftar Kunjungan</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Timestamp</th>
                    <th>Full Name</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($_SESSION["bukutamu"] as $entry): ?>
                    <tr>
                        <td>
                            <?php echo htmlspecialchars($entry->timestamp); ?>
                        </td>
                        <td>
                            <?php echo htmlspecialchars($entry->fullname); ?>
                        </td>
                        <td>
                            <?php echo htmlspecialchars($entry->email); ?>
                        </td>
                        <td>
                            <?php echo htmlspecialchars($entry->message); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="index.php"> &lt;&lt;&lt; kembali </a>
    </div>
</body>

</html>