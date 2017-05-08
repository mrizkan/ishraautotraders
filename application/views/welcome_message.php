<?php include('inc/header.php') ?>
    <script type="text/javascript">

        window.onload = function()
        {
            document.getElementById("pinsert").className = "active";
        }
    </script>
    <div class="form-style-8">

        <h2>Insert Product Details</h2>

        <h3><?= $this->session->flashdata('msg'); ?></h3>

        <?= form_open('Welcome/add'); ?>

        <div class="col-md-2"><label>Product Name</label></div>
        <div class="col-md-4"><input type="text" name="pname" placeholder="Product Name"
                                     value="<?php echo set_value('pname'); ?>">
            <?= form_error('pname'); ?></div>

        <div class="col-md-2"><label>Rack Number</label></div>
        <div class="col-md-4"><input type="text" name="rnum" placeholder="Rack Number"
                                     value="<?php echo set_value('rnum'); ?>">
            <?= form_error('rnum'); ?></div>

        <div class="col-md-2"><label>Quantity</label></div>
        <div class="col-md-4"><input type="text" name="qty" placeholder="Quantity"
                                     value="<?php echo set_value('qty'); ?>"></div>

        <div class="col-md-2"><label>Price</label></div>
        <div class="col-md-4"><input type="text" name="price" placeholder="Price"
                                     value="<?php echo set_value('price'); ?>"></div>

        <div class="col-md-12"><textarea name="description" rows="4" cols="50" placeholder="Description"></textarea>
        </div>
        <br>
        <button type="submit" value="submit">Insert</button>
        <?php echo form_close(); ?>

    </div>


<?php include('inc/footer.php') ?>