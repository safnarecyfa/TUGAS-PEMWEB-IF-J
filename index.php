<?php
include 'php/koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bimbel Babarsari</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" 
        crossorigin="anonymous">
    <style>
        body {
        background: linear-gradient(135deg, #f3f4f6, #e2e8f0);
        justify-content: center;
        }

        h1 {
        color: #204379ff;
        font-weight: 700;
        text-align: center;
        margin-bottom: 25px;
        }

    </style>
</head>

<body>
    <div align="center">
        <br>
        <h1>Data Pendaftaran Bimbel</h1>
        <!-- untuk nambahin data ke file tambahdata.php -->
        <a href="tambahdata.php"><button type="submit" class="btn btn-light btn-outline-primary">Tambah Data</button></a>
        <br><br>

        <table border = '1' class="table table-primary table-striped" style="width : 50%">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Paket</th>
                <th>Total Biaya</th>
                <th>Aksi</th>
            </tr>
            <?php
                $ID = 1;
                $sql = "SELECT * FROM pendaftar";
                $query = mysqli_query($koneksi, $sql);
                if (mysqli_num_rows($query) == 0) {
                ?>
                    <tr>
                        <td colspan="5" style="text-align: center;">Data masih kosong</td>
                    </tr>
                    <?php
                } else {
                    while ($data = mysqli_fetch_assoc($query)) {
                    ?>
                        <tr>
                            <td><?= $ID++; ?></td>
                            <td><?= $data['nama']; ?></td>
                            <td><?= $data['paket']; ?></td>
                            <td><?= $data['total']; ?></td>
                            <td>
                                <a href="detail.php?id=<?= $data['id']; ?>"><button type="submit" class="btn btn-light btn-outline-primary btn-sm">Detail</button></a>
                                <a href="update.php?id=<?= $data['id']; ?>"><button type="submit" class="btn btn-light btn-outline-warning btn-sm">Edit</button></a>
                                <a href="php/hapusdata.php?id=<?= $data['id']; ?>"><button type="submit" class="btn btn-light btn-outline-danger btn-sm">Hapus</button></a>
                            </td>
                        </tr>
                <?php
                    }
                }
                ?>
        </table>
    </div>
</body>

</html>
