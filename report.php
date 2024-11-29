<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="report.css">
</head>

<body>
    <div class="container">
        <div class="hero">
            <img src="logo.png" alt="logo" width="100px">
            <div class="kanan">
                <h1>SEKOLAH MENENGAH ATAS</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos nobis, ea animi dolorum magni aut.</p>
            </div>
        </div>

        <?php
        $nis = $_POST['nis'];
        $nama = $_POST['nama'];
        $nilai = $_POST['nilai'];
        ?>

        <div class="info">
            <p><strong>Nama Guru : </strong> <?= $guru = $_POST['guru']; ?></p>
            <p><strong>Mata Pelajaran : </strong><?= $mapel = $_POST['mapel']; ?></p>
            <p><strong>KKM : </strong><?= $kkm = $_POST['kkm']; ?></p>
            <p><strong>Kelas : </strong><?php $kelas = $_POST['kelas'];
                                        if ($kelas == 1) {
                                            echo "XII RPL 1";
                                        } else {
                                            echo "XII RPL 2";
                                        } ?></p>
        </div>

        <table border="0" cellpadding="10">
            <tr>
                <th>No</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Nilai</th>
                <th>Keterangan</th>
            </tr>
            <?php
            $s = count($nis);
            $no = 1;
            for ($i = 0; $i < $s; $i++) {
            ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $nis[$i]; ?></td>
                    <td><?= $nama[$i]; ?></td>
                    <td><?= $nilai[$i]; ?></td>
                    <td><?php if ($nilai[$i] >= $kkm) {
                            echo "Kompeten";
                        } else {
                            echo "Tidak Kompeten";
                        }
                        ?>
                    </td>
                </tr>
            <?php $no++;
            } ?>
        </table>
    </div>
</body>

</html>