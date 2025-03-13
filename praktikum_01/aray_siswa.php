<?php
    $ns1 = ["id" => 1, "nim" => "01101", "uts" => 80, "uas" => 84, "tugas" => 78 ];
    $ns2 = ["id" => 2, "nim" => "01101", "uts" => 70, "uas" => 50, "tugas" => 68 ];
    $ns3 = ["id" => 3, "nim" => "01101", "uts" => 60, "uas" => 86, "tugas" => 70 ];
    $ns4 = ["id" => 4, "nim" => "01101", "uts" => 90, "uas" => 91, "tugas" => 82 ];

    $ar_nilai = [$ns1, $ns2, $ns3, $ns4,];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>daftar nilai siswa</h3>
    <table border ="1" width= "50%">
        <head>
        <tbody>
            <tr>
                <th>no</th>
                <th>uts</th>
                <th>uas</th>
                <th>tugas</th>
                <th>nilai akhir </th>
            </tr>
        </head>
        <body>
        <?php
            $nomor = 1;
            foreach($ar_nilai as $ns) {
                    echo '<tr><td>' .$nomor. '</td>';
                    echo '<td>'.$ns['nim'].'';
                    echo '<td>'.$ns['uts'].'';
                    echo '<td>'.$ns['uas'].'';
                    echo '<td>'.$ns['tugas'].'';
                    $nilai_akhir = ($ns['uts'] + $ns['uts'] + $ns['tugas'])/3;
                    echo '<td>'.number_format($nilai_akhir, 2,',','-').'</td>';
                    echo '</t>';
                    $nomor++;
            }
            ?>
        </tbody>
</table>
</body>
</html>