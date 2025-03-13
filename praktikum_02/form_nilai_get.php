<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Form Nilai Siswa</title>

    <style>
        @media (min-width: 426px) {
            form {
                width: 65%;
            }
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">Sistem Penilaian</a>
            </div>
        </nav>
    </header>

    <main role="main" class="container mt-3">
        <h3>Form Penilaian Siswa</h3>
        <hr />
        <form class="mx-auto" action="form_nilai_get.php" method="">
            <div class="form-group row">
                <label for="nama" class="col-5 col-form-label font-weight-bold text-right">Nama Lengkap</label>
                <div class="col-7">
                    <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" required="required" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="matkul" class="col-5 col-form-label font-weight-bold text-right">Mata Kuliah</label>
                <div class="col-7">
                    <select id="matkul" name="matkul" class="custom-select" required="required">
                        <option value="DDP">Dasar Dasar Pemrograman</option>
                        <option value="BD1">Basis Data I</option>
                        <option value="PW1">Pemrograman Web 1</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai_uts" class="col-5 col-form-label font-weight-bold text-right">Nilai UTS</label>
                <div class="col-7">
                    <input id="nilai_uts" name="nilai uts" placeholder="Nilai UTS" type="number" class="form-control" required="required" min="0" max="100">
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai_uas" class="col-5 col-form-label font-weight-bold text-right">Nilai UAS</label>
                <div class="col-7">
                    <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="number" class="form-control" required="required" min="0" max="100">
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai_tugas" class="col-5 col-form-label font-weight-bold text-right">Nilai Tugas/Praktikum</label>
                <div class="col-7">
                    <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas" type="number" class="form-control" required="required" min="0" max="100">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-5 col-7">
                    <button type="submit" name="proses" class=btn btn-primary value="Simpan"">Simpan</button>
                </div>
            </div>
        </form>
    </main>

    <?php
    $proses = isset($_GET['proses']) ? $_GET['proses'] : "";
    $nama = isset($_GET['nama']) ? $_GET['nama'] : "";
    $matkul = isset($_GET['matkul']) ? $_GET['matkul'] : "";
    $nilai_uts = isset($_GET['nilai_uts']) ? $_GET['nilai_uts'] : "";
    $nilai_uas= isset($_GET['nilai_uas']) ? $_GET['nilai_uas'] : "";
    $nilai_tugas = isset($_GET['nilai_tugas']) ? $_GET['nilai_tugas'] : "";

    echo "Proses : " . $proses;
    echo "<br/>Nama : " . $nama;
    echo "<br/>Mata Kuliah : " . $matkul;
    echo "<br/>Nilai UTS : " . $nilai_uts;
    echo "<br/>nilai UAS : " . $nilai_uas;
    echo "<br/>Nilai TUGAS : " . $nilai_tugas;
    ?>

    <footer class="mt-5" style="bottom: 0; left: 0; right: 0; position: fixed;">
        <nav class="navbar navbar-expand-md navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">Develop By @ahusa &copy;<?= date("Y") ?></a>
            </div>
        </nav>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>