<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customer = $_POST['customer'];
    $produk = $_POST['produk'];
    $jumlah = $_POST['jumlah'];
    
    // Daftar harga produk
    $harga_produk = [
        "TV" => 4200000,
        "Kulkas" => 3100000,
        "Mesin Cuci" => 3800000
    ];
    
    // Hitung total harga belanja
    $total_harga = isset($harga_produk[$produk]) ? $harga_produk[$produk] * $jumlah : 0;

    // Data nilai siswa
    $nilai_uts = isset($_POST['nilai_uts']) ? $_POST['nilai_uts'] : 0;
    $nilai_uas = isset($_POST['nilai_uas']) ? $_POST['nilai_uas'] : 0;
    $nilai_tugas = isset($_POST['nilai_tugas']) ? $_POST['nilai_tugas'] : 0;

    // Hitung nilai akhir dengan bobot
    $nilai_akhir = ($nilai_uts * 0.3) + ($nilai_uas * 0.35) + ($nilai_tugas * 0.35);

    // Menentukan status kelulusan
    $status = ($nilai_akhir > 55) ? "Lulus" : "Tidak Lulus";

    // Menentukan grade berdasarkan nilai akhir
    if ($nilai_akhir >= 85 && $nilai_akhir <= 100) {
        $grade = "A";
    } elseif ($nilai_akhir >= 70 && $nilai_akhir < 85) {
        $grade = "B";
    } elseif ($nilai_akhir >= 56 && $nilai_akhir < 70) {
        $grade = "C";
    } elseif ($nilai_akhir >= 36 && $nilai_akhir < 56) {
        $grade = "D";
    } elseif ($nilai_akhir >= 0 && $nilai_akhir < 36) {
        $grade = "E";
    } else {
        $grade = "I"; // Invalid
    }

    // Menentukan predikat menggunakan switch case
    switch ($grade) {
        case "A":
            $predikat = "Sangat Memuaskan";
            break;
        case "B":
            $predikat = "Memuaskan";
            break;
        case "C":
            $predikat = "Cukup";
            break;
        case "D":
            $predikat = "Kurang";
            break;
        case "E":
            $predikat = "Sangat Kurang";
            break;
        default:
            $predikat = "Tidak Ada";
            break;
    }
?>
    <div class="container mt-3">
        <div class="card">
            <div class="card-header bg-success text-white">Hasil Belanja & Nilai</div>
            <div class="card-body">
                <p><strong>Nama Customer:</strong> <?= htmlspecialchars($customer) ?></p>
                <p><strong>Produk Pilihan:</strong> <?= htmlspecialchars($produk) ?></p>
                <p><strong>Jumlah Beli:</strong> <?= htmlspecialchars($jumlah) ?></p>
                <p><strong>Total Belanja:</strong> Rp. <?= number_format($total_harga, 0, ',', '.') ?></p>
                <hr>
                <p><strong>Nilai UTS:</strong> <?= $nilai_uts ?></p>
                <p><strong>Nilai UAS:</strong> <?= $nilai_uas ?></p>
                <p><strong>Nilai Tugas/Praktikum:</strong> <?= $nilai_tugas ?></p>
                <p><strong>Nilai Akhir:</strong> <?= number_format($nilai_akhir, 2) ?></p>
                <p><strong>Status:</strong> <?= $status ?></p>
                <p><strong>Grade:</strong> <?= $grade ?></p>
                <p><strong>Predikat:</strong> <?= $predikat ?></p>
            </div>
        </div>
    </div>
<?php } ?>
