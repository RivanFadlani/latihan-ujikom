<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo $guru = $_POST['guru'];
    echo $mapel = $_POST['mapel'];
    echo $kkm = $_POST['kkm'];
    $kelas = $_POST['kelas'];
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $nilai = $_POST['nilai'];
    if ($kelas == 1) {
        echo "XII RPL 1";
    } else {
        echo "XII RPL 2";
    }
    ?>

    <table border="1">
        <tr>
            <td>No</td>
            <td>NIS</td>
            <td>Nama</td>
            <td>Nilai</td>
            <td>Keterangan</td>
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
                <td><?php if ($nilai[$i] > $kkm) {
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
</body>

</html>