<h2>Daftar Laptop</h2>
<a href="<?php echo base_url('laptops/create'); ?>" class="btn">Tambah Laptop</a>
<table>
    <tr>
        <th>ID</th>
        <th>Brand</th>
        <th>Model</th>
        <th>Price</th>
        <th>Image</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($laptops as $laptop): ?>
    <tr>
        <td><?php echo $laptop['id']; ?></td>
        <td><?php echo $laptop['brand']; ?></td>
        <td><?php echo $laptop['model']; ?></td>
        <td><?php echo $laptop['price']; ?></td>
        <td><img src="<?php echo base_url('uploads/' . $laptop['image']); ?>"></td>
        <td>
            <a href="<?php echo base_url('laptops/view/' . $laptop['id']); ?>" class="btn btn-view">View</a>
            <a href="<?php echo base_url('laptops/edit/' . $laptop['id']); ?>" class="btn btn-edit">Edit</a>
            <a href="<?php echo base_url('laptops/delete/' . $laptop['id']); ?>" class="btn btn-delete">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
<div class="pagination">
    <?php echo $links; ?>
</div>
