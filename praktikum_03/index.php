<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form Submission</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <div class="container mt-5">
        <h2>Selamat Datang di Perpustakaan STT-NF</h2>
        <p>Silahkan isi buku tamu di bawah ini</p>
        <hr />
        <form method="POST" action="kunjungan.php">
            <div class="form-group row">
                <label for="fullname" class="col-4 col-form-label">Nama Lengkap</label>
                <div class="col-8">
                    <input id="fullname" name="fullname" type="text" class="form-control" required="required" aria-describedby="fullnameHelpBlock">
                    <span id="fullnameHelpBlock" class="form-text text-muted">isi nama lengkap kamu.</span>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-4 col-form-label">Email</label>
                <div class="col-8">
                    <input id="email" name="email" type="text" class="form-control" required="required" aria-describedby="emailHelpBlock">
                    <span id="emailHelpBlock" class="form-text text-muted">isi dengan Email aktif kamu</span>
                </div>
            </div>
            <div class="form-group row">
                <label for="massage" class="col-4 col-form-label">Keperluan</label>
                <div class="col-8">
                    <textarea id="massage" name="massage" cols="40" rows="5" class="form-control" required="required" aria-describedby="massageHelpBlock"></textarea>
                    <span id="massageHelpBlock" class="form-text text-muted">Tuliskan keperluan kamu mengunjungin perpustakaan</span>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>