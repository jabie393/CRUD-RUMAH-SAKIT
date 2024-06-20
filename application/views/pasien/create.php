<!DOCTYPE html>
<html>
<head>
    <title>Tambah Pasien</title>
    <link rel="stylesheet"  href="<?php echo base_url('assets/css/t&epasien.css'); ?>">
</head>
<body>
    <div>
    <h1>Tambah Pasien</h1>
    <form action="<?php echo site_url('pasien/create'); ?>" method="post">
    <?php echo validation_errors(); ?>
    <?php echo form_open('pasien/create'); ?>
        <label for="nama">Nama</label>
        <input type="text" name="nama"><br>
        
        <label for="umur">Umur</label>
        <input type="number" name="umur"><br>
        
        <label for="alamat">Alamat</label>
        <textarea name="alamat"></textarea><br>
        
        <label for="penyakit">Penyakit</label>
        <input type="text" name="penyakit"><br>
        
        <input type="submit" name="submit" value="Tambah">
    </form>
    </div>
</body>
</html>
