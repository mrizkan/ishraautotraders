<?php include('inc/header.php') ?>

    <div class="form-style-8">

        <h2>Update Product Details</h2>

        <?= form_open('Welcome/update'); ?>
        <?php  foreach ($data["fetch_data"]->result() as $row) {
            ?>
            <input type="text" name="pid" hidden="hidden" value="<?php echo $row->pid; ?>">

            <div class="col-md-2"><label>Product Name</label></div> <div class="col-md-4"><input type="text" name="pname" value="<?php echo $row->pname; ?>"></div> <div class="col-md-2"><label>Rack Number</label></div> <div class="col-md-4"><input type="text" name="rnum" value="<?php echo $row->rnum; ?>"></div> <br>
            <div class="col-md-2"><label>Quantity</label></div> <div class="col-md-4"><input type="text" name="qty" value="<?php echo $row->qty; ?>"></div>
            <div class="col-md-2"><label>Price</label></div> <div class="col-md-4"> <input type="text" name="price" value="<?php echo $row->price; ?>"></div>
            <br>
            <textarea name="description" rows="7" cols="50"> <?php echo $row->description; ?> </textarea> <br>
        <?php } ?>
        <button type="submit" value="submit">Update</button>
        <?php echo form_close(); ?>
    </div>


<?php include('inc/footer.php') ?>