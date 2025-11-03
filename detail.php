<?php 
include 'php/koneksi.php';

$id = $_GET['id'];

//query untuk ambil data
$sql="SELECT * FROM pendaftar where id = $id";
$query = mysqli_query($koneksi, $sql);

$data = mysqli_fetch_assoc($query);

if (mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan..");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        body {
        background: linear-gradient(135deg, #f3f4f6, #e2e8f0);
        }

        .form-container {
        background: white;
        border-radius: 15px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        padding: 30px 40px;
        width: 100%;
        max-width: 600px;
        animation: fadeIn 0.5s ease-in-out;
        }

        h1 {
        color: #204379ff;
        font-weight: 700;
        text-align: center;
        margin-bottom: 25px;
        }

        label {
        font-weight: 600;
        }

        button {
        border-radius: 8px;
        padding: 10px 20px;
        }

        button:hover {
        opacity: 0.9;
        transition: 0.2s;
        }
    </style>
</head>

<body>
    <form action="php/prosesdetil.php" method='POST'>
        <div class="container mt-5">
                <h1 class="text-center">Hasil Pendaftaran</h1>
                <div id="hasil">
                    <div class="container d-flex justify-content-center">
                        <table class="table table-striped" border="1" style="width : 75%">
                            <input type="hidden" name="id" value="<?= $data['id']?>">
                            <tr>
                                <th>Nama </th>
                                <td><?= $data['nama']?></td>
                            </tr>
                            <tr>
                                <th>Email </th>
                                <td><?= $data['email']?></td>
                            </tr>
                            <tr>
                                <th>Paket </th>
                                <td><?= $data['paket']?></td>
                            </tr>
                            <tr>
                                <th>Fasilitas </th>
                                <td><?= $data['fasilitas']?></td>
                            </tr>
                            <tr>
                                <th>Pajak </th>
                                <td><?= ($data['paket'] == 'undefined') ? '0%' : '10%' ?></td>
                            </tr>
                            <tr>
                                <th>Lokasi </th>
                                <td><?= $data['lokasi']?></td>
                            </tr>
                            <tr>
                                <th>Catatan </th>
                                <td><?= $data['catatan']?></td>
                            </tr>
                            <tr>
                                <th>Pembayaran </th>
                                <td><?= $data['metode_pembayaran']?></td>
                            </tr>
                            <?php if ($data['fasilitas'] != "undefined") : ?>
                                <tr>
                                    <th>Total Harga </th>
                                    <td>
                                        <table class="">
                                            <tr>
                                                <td>Paket</td>
                                                <td>Rp <?= number_format($data['hargaPaket'], 0, ',', '.') ?></td>
                                            </tr>
                                            <tr>
                                                <td>Lokasi Belajar</td>
                                                <td>Rp <?= number_format($data['hlokasi'], 0, ',', '.') ?></td>
                                            </tr>
                                            <tr>
                                                <td>Fasilitas Tambahan</td>
                                                <td>Rp <?= number_format($data['hfasilitas'], 0, ',', '.') ?></td>
                                            </tr>
                                            <tr>
                                                <td>Pajak</td>
                                                <td>Rp <?= number_format($data['pajak'], 0, ',', '.') ?></td>
                                            </tr>
                                            <tr>
                                                <td>Biaya Layanan</td>
                                                <td>Rp <?= number_format($data['hpembayaran'], 0, ',', '.') ?></td>
                                            </tr>
                                            <tr class="fw-bold">
                                                <td>Total</td>
                                                <td>Rp <?= number_format($data['total'], 0, ',', '.') ?></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            <?php endif ?>
                        </table>
                    </div>
                    <br>
                    <div class="d-flex justify-content-center">
                        <a href="index.php" type="submit" class="btn btn-primary">Kembali ke Beranda</a>
                    </div>
                </div>
            </div>
        </form>
</body>

</html>