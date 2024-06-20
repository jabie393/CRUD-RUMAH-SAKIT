<!DOCTYPE html>
<html>
<head>
    <title>Edit Pasien</title>
    <link rel="stylesheet"  href="<?php echo base_url('assets/css/t&epasien.css'); ?>">
</head>
<body>

    <div>
        <h1>Edit pasien</h1>
        <form action="<?php echo site_url('pasien/edit/' . $pasien['id']); ?>" method="post">
    <?php echo validation_errors(); ?>
    <?php echo form_open('pasien/edit/'.$pasien['id']); ?>
        <label for="nama">Nama</label>
        <input type="text" name="nama" value="<?php echo $pasien['nama']; ?>"><br>
        
        <label for="umur">Umur</label>
        <input type="number" name="umur" value="<?php echo $pasien['umur']; ?>"><br>
        
        <label for="alamat">Alamat</label>
        <textarea name="alamat"><?php echo $pasien['alamat']; ?></textarea><br>
        
        <label for="penyakit">Penyakit</label>
        <input type="text" name="penyakit" value="<?php echo $pasien['penyakit']; ?>"><br>
        
        <input type="submit" name="submit" value="Update">
    </form>
    </div>

</body>
</html>
