<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Bimbingan Belajar</title>
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
        color: #0d6efd;
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
        <h2 class="text-center mb-0">Bimbel Babarsari</h2>

        <form action="php/prosestambah.php" method="POST" onsubmit="return pindah()">
            <div>
                <label for="nama"> Nama : </label>
                <input type="text" name="nama" required> <br><br>
            </div>

            <div>
                <label for="email"> Email : </label>
                <input type="email" name="email" required> <br><br>
            </div>

            <div class="mb-3">
                <label class="form-label">Paket Bimbingan</label><br>
                <input type="radio" name="paket" value="Regular"> Paket Regular
                <input style="margin-left: 20px;" type="radio" name="paket" value="Intensif"> Paket Intensif SBMPTN
                <input style="margin-left: 20px;" type="radio" name="paket" value="Supercamp"> Paket Supercamp SBMPTN
            </div>

            <div class="mb-3">
                <label class="form-label">Fasilitas Tambahan</label><br>
                <input type="checkbox" name="fasilitas[]" value="Modul Cetak"> Modul Cetak Lengkap <br>
                <input type="checkbox" name="fasilitas[]" value="Modul PDF"> Modul PDF <br>
                <input type="checkbox" name="fasilitas[]" value="Video"> Video Rekaman Kelas <br>
                <input type="checkbox" name="fasilitas[]" value="Grup Telegram"> Grup Diskusi Telegram <br>
            </div>

            <div class="mb-3">
                <label class="form-label">Lokasi Cabang</label>
                <select class="form-select" id="lokasi" name="lokasi" required>
                    <option value="Jakarta Pusat">Jakarta Pusat</option>
                    <option value="Surabaya">Surabaya</option>
                    <option value="Yogyakarta">Yogyakarta</option>
                    <option value="Makassar">Makassar</option>
                    <option value="Aceh">Aceh</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Metode Pembayaran</label>
                <select class="form-select" id="metode_pembayaran" name="metode_pembayaran">
                    <option value="Transfer Bank">Transfer Bank +3000</option>
                    <option value="E-Wallet">E-Wallet +2000</option>
                    <option value="Tunai">Tunai</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="catatan" class="form-label">Catatan Tambahan</label>
                <textarea class="form-control" id="catatan" name="catatan" rows="3"
                    placeholder="Write your additional note here"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
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