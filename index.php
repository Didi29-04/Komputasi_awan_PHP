<?php include 'config.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD PHP Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="mb-4 text-center">Data Mahasiswa</h2>

    <a href="create.php" class="btn btn-primary mb-3">+ Tambah Data</a>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Jurusan</th>
                <th width="180px">Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $no = 1;
        $result = mysqli_query($conn, "SELECT * FROM mahasiswa");

        while($row = mysqli_fetch_assoc($result)) {
        ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['nim']; ?></td>
                <td><?= $row['jurusan']; ?></td>
                <td>
                    <a href="update.php?id=<?= $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="delete.php?id=<?= $row['id']; ?>" 
                       onclick="return confirm('Yakin hapus data?')" 
                       class="btn btn-danger btn-sm">
                       Hapus
                    </a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>

</body>
</html>
