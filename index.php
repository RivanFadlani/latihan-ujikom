<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="index.css">
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
        <h2>Tentukan Data</h2>
        <form action="" method="post">
            <label for="guru">Guru</label>
            <input type="text" name="guru" id="guru" value="" placeholder="Masukkan Nama Guru" required>
            <label for="mapel">Mata Pelajaran</label>
            <input type="text" name="mapel" id="mapel" value="" placeholder="Tentukan Mata Pelajaran" required>
            <label for="kkm">KKM</label>
            <input type="number" name="kkm" id="kkm" value="" min="0" max="100" placeholder="Tentukan KKM" required>
            <label for="kelas">Kelas</label>
            <select name="kelas" id="kelas" required>
                <option>=== Pilih Kelas ===</option>
                <option value="1">XII RPL 1</option>
                <option value="2">XII RPL 2</option>
            </select>
            <input type="submit" name="ok" value="OK">
        </form>

        <br>
        <br>
        <?php
        if (isset($_POST["ok"])) {
            $guru = $_POST["guru"];
            $mapel = $_POST["mapel"];
            $kkm = $_POST["kkm"];
            $kelas = $_POST["kelas"];

            if ($kelas == 1) {
                $siswa = array(
                    [10111, 'Kenma'],
                    [10112, 'Hinata'],
                    [10113, 'Bokuto'],
                    [10114, 'Kageyama'],
                    [10115, 'Kuroo'],
                );
            } else {
                $siswa = array(
                    [10116, 'Akaashi'],
                    [10117, 'Oikawa'],
                    [10118, 'Yuu'],
                    [10118, 'Kei'],
                    [10118, 'Satori'],
                );
            }
        ?>
            <form action="report.php" method="post">
                <input type="hidden" name="guru" value="<?= $guru ?>" readonly>
                <input type="hidden" name="mapel" value="<?= $mapel ?>" readonly>
                <input type="hidden" name="kkm" value="<?= $kkm ?>" readonly>
                <input type="hidden" name="kelas" value="<?= $kelas ?>" readonly>
                <table border="0" cellpadding="10" cellspacing="0">
                    <tr>
                        <th>No</th>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Nilai</th>
                    </tr>
                    <?php
                    $no = 1;
                    foreach ($siswa as $key => $y) {
                    ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><input type="text" name="nis[]" value="<?= $y[0]; ?>" readonly></td>
                            <td><input type="text" name="nama[]" value="<?= $y[1]; ?>" readonly></td>
                            <td><input type="number" name="nilai[]" min="0" max="100" placeholder="Masukkan Nilai Siswa"></td>
                        </tr>
                    <?php $no++;
                    } ?>
                </table>
                <input type="submit" name="submit">
            </form>
        <?php } ?>
    </div>
</body>

</html>