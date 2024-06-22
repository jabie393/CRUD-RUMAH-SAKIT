<h2>Tambah Laptop</h2>
<?php echo validation_errors(); ?>
<?php echo form_open_multipart('laptops/create'); ?>

    <label for="brand">Brand</label>
    <input type="text" name="brand"><br>

    <label for="model">Model</label>
    <input type="text" name="model"><br>

    <label for="price">Price</label>
    <input type="text" name="price"><br>

    <label for="image">Image</label>
    <input type="file" name="image"><br>

    <input type="submit" name="submit" value="Tambah Laptop" class="btn">

</form>
