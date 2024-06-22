<h2>Detail Laptop</h2>
<p>ID: <?php echo $laptop['id']; ?></p>
<p>Brand: <?php echo $laptop['brand']; ?></p>
<p>Model: <?php echo $laptop['model']; ?></p>
<p>Price: <?php echo $laptop['price']; ?></p>
<p><img src="<?php echo base_url('uploads/' . $laptop['image']); ?>"></p>
<a href="<?php echo base_url('laptops'); ?>" class="btn">Kembali</a>
