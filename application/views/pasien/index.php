<!-- application/views/pasien/index.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Pasien</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/index.css'); ?>">
</head>
<body>
    <h1>Daftar Pasien</h1>
    <a href="<?php echo site_url('pasien/create'); ?>" class="button">Tambah Pasien</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Penyakit</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($pasien as $p): ?>
        <tr>
            <td><?php echo $p['id']; ?></td>
            <td><?php echo $p['nama']; ?></td>
            <td><?php echo $p['umur']; ?></td>
            <td><?php echo $p['alamat']; ?></td>
            <td><?php echo $p['penyakit']; ?></td>
            <td>
                <a href="<?php echo site_url('pasien/view/'.$p['id']); ?>" class="button view">View</a>
                <a href="<?php echo site_url('pasien/edit/'.$p['id']); ?>" class="button edit">Edit</a>
                <a href="<?php echo site_url('pasien/delete/'.$p['id']); ?>" class="button delete">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
