<?php include 'config.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
<div class="container mt-4">

    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4>Tambah Data Mahasiswa</h4>
        </div>
        <div class="card-body">

            <form method="POST">
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">NIM</label>
                    <input type="text" name="nim" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Jurusan</label>
                    <input type="text" name="jurusan" class="form-control" required>
                </div>

                <button class="btn btn-success" name="submit">Simpan</button>
                <a href="index.php" class="btn btn-secondary">Kembali</a>
            </form>

        </div>
    </div>
</div>

<?php
if(isset($_POST["submit"])) {
    mysqli_query($conn, "INSERT INTO mahasiswa VALUES('', 
        '$_POST[nama]', 
        '$_POST[nim]', 
        '$_POST[jurusan]')");

    echo "<script>alert('Data berhasil ditambahkan'); window.location='index.php';</script>";
}
?>
</body>
</html>
