<?php 
include 'config.php';

$id = $_GET["id"];
$result = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id=$id");
$data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
<div class="container mt-4">

    <div class="card shadow">
        <div class="card-header bg-warning">
            <h4>Edit Data Mahasiswa</h4>
        </div>
        <div class="card-body">

            <form method="POST">
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control" value="<?= $data['nama']; ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">NIM</label>
                    <input type="text" name="nim" class="form-control" value="<?= $data['nim']; ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Jurusan</label>
                    <input type="text" name="jurusan" class="form-control" value="<?= $data['jurusan']; ?>" required>
                </div>

                <button class="btn btn-primary" name="submit">Update</button>
                <a href="index.php" class="btn btn-secondary">Kembali</a>
            </form>

        </div>
    </div>
</div>

<?php
if(isset($_POST["submit"])) {
    mysqli_query($conn, "UPDATE mahasiswa SET 
        nama='$_POST[nama]', 
        nim='$_POST[nim]', 
        jurusan='$_POST[jurusan]'
        WHERE id=$id");

    echo "<script>alert('Data berhasil diperbarui'); window.location='index.php';</script>";
}
?>
</body>
</html>
