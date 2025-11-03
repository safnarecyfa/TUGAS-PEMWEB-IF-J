<?php 
include 'php/koneksi.php';

$id = $_GET['id'];

//query untuk ambil data barang
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
    <title>Hasil Formulir Bimbingan Belajar</title>
    <!-- css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        body {
        background: linear-gradient(135deg, #f3f4f6, #e2e8f0);
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
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

        h2 {
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
    <div class="container mt-5">
        <h2 class="text-center mb-0">Update Data</h2>

        <form action="php/prosesupdate.php" method="POST" onsubmit="return pindah()">
            <input type="hidden" name="id" value="<?= $data['id']?>">

            <div>
                <label for="nama"> Nama : </label>
                <input type="text" name="nama" value="<?= $data['nama']?>" required><br><br>
            </div>

            <div>
                <label for="email"> Email : </label>
                <input type="email" name="email" value="<?= $data['email']?>" required> <br><br>
            </div>

            <div class="mb-3">
                <label class="form-label">Paket Bimbingan</label><br>
                <input type="radio" name="paket" value="Regular"<?= $data['paket'] == "Regular" ? "checked" : "" ?>> Paket Regular
                <input style="margin-left: 20px;" type="radio" name="paket" value="Intensif"<?= $data['paket'] == "Intensif" ? "checked" : "" ?>> Paket Intensif SBMPTN
                <input style="margin-left: 20px;" type="radio" name="paket" value="Supercamp"<?= $data['paket'] == "Supercamp" ? "checked" : "" ?>> Paket Supercamp SBMPTN
            </div>

            <?php
            // ubah string fasilitas (misal "Modul Cetak, Video") jadi array
            $fasilitas_terpilih = explode(", ", $data['fasilitas']);
            ?>

            <div class="mb-3">
                <label class="form-label">Fasilitas Tambahan</label><br>
                <input type="checkbox" name="fasilitas[]" value="Modul Cetak"<?= in_array("Modul Cetak", $fasilitas_terpilih) ? "checked" : "" ?>>Modul Cetak Lengkap <br>
                <input type="checkbox" name="fasilitas[]" value="Modul PDF"<?= in_array("Modul PDF", $fasilitas_terpilih) ? "checked" : "" ?>>Modul PDF <br>
                <input type="checkbox" name="fasilitas[]" value="Video"<?= in_array("Video", $fasilitas_terpilih) ? "checked" : "" ?>>Video Rekaman Kelas <br>
                <input type="checkbox" name="fasilitas[]" value="Grup Telegram"<?= in_array("Grup Telegram", $fasilitas_terpilih) ? "checked" : "" ?>>Grup Diskusi Telegram <br>
            </div>

            <div class="mb-3">
                <label class="form-label">Lokasi Cabang</label>
                <select class="form-select" id="lokasi" name="lokasi" required>
                    <option value="<?= $data['lokasi']?>">Jakarta Pusat</option>
                    <option value="<?= $data['lokasi']?>">Surabaya</option>
                    <option value="<?= $data['lokasi']?>">Yogyakarta</option>
                    <option value="<?= $data['lokasi']?>">Makassar</option>
                    <option value="<?= $data['lokasi']?>">Aceh</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Metode Pembayaran</label>
                <select class="form-select" id="metode_pembayaran" name="metode_pembayaran">
                    <option value="<?= $data['metode_pembayaran']?>">Transfer Bank +3000</option>
                    <option value="<?= $data['metode_pembayaran']?>">E-Wallet +2000</option>
                    <option value="<?= $data['metode_pembayaran']?>">Tunai</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="catatan" class="form-label">Catatan Tambahan</label>
                <textarea class="form-control" id="catatan" name="catatan" rows="3"
                    placeholder="Write your additional note here" value=""><?= $data['catatan']?></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>

            <script>
                function pindah(){
                    let konfirmasi = confirm("Apakah kamu yakin ingin melanjutkan halaman ini?");
                    if (konfirmasi) {
                        return true;
                    } else{
                        return false;
                    }
                }
            </script>
        </form>
        </div>
</body>

</html>