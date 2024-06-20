<!DOCTYPE html>
<html>
<head>
    <title>Detail Pasien</title>
    <link rel="stylesheet"  href="<?php echo base_url('assets/css/detailpasien.css'); ?>">
</head>
<body>
    <h1>Detail Pasien</h1>
    <p>ID: <?php echo $pasien['id']; ?></p>
    <p>Nama: <?php echo $pasien['nama']; ?></p>
    <p>Umur: <?php echo $pasien['umur']; ?></p>
    <p>Alamat: <?php echo $pasien['alamat']; ?></p>
    <p>Penyakit: <?php echo $pasien['penyakit']; ?></p>
    <a href="<?php echo site_url('pasien'); ?>"class="button">Kembali</a>
</body>
</html>
