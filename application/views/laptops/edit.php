<h2>Edit Laptop</h2>
<?php echo validation_errors(); ?>
<?php echo form_open_multipart('laptops/edit/' . $laptop['id']); ?>

    <label for="brand">Brand</label>
    <input type="text" name="brand" value="<?php echo $laptop['brand']; ?>"><br>

    <label for="model">Model</label>
    <input type="text" name="model" value="<?php echo $laptop['model']; ?>"><br>

    <label for="price">Price</label>
    <input type="text" name="price" value="<?php echo $laptop['price']; ?>"><br>

    <label for="image">Image</label>
    <input type="file" name="image"><br>
    <img src="<?php echo base_url('uploads/' . $laptop['image']); ?>" width="100"><br>

    <input type="submit" name="submit" value="Update Laptop" class="btn">

</form>
