<?php include('inc/header.php') ?>

    <div class="form-style-8">
        <h2>Edit Product Details</h2>

        <h3><?= $this->session->flashdata('msg'); ?></h3>

        <table border="1">
            <tr>
                <th width="1%">Rack Number</th>
                <th width="26%">Product Name</th>
                <th width="50%">Description</th>
                <th width="2%">Quantity</th>
                <th width="20%">Price</th>
                <th width="1%">Options</th>

            </tr>
            <?php
            if ($fetch_data->num_rows() > 0) {
                foreach ($fetch_data->result() as $row) {
                    ?>
                    <tr>
                        <td><?php echo $row->rnum; ?></td>
                        <td><?php echo $row->pname; ?></td>
                        <td><?php echo $row->description; ?></td>
                        <td><?php echo $row->qty; ?></td>
                        <td>Rs. <?php echo $row->price; ?> /=</td>
                        <td><a href="<?= base_url() . 'Welcome/one_edit/' . $row->pid ?>">Edit</a></td>

                    </tr>


                <?php
                }
            } else {
                ?>
                <tr>
                    <td>No Data Found</td>
                </tr>

            <?php

            }
            ?>

        </table>
    </div>


<?php include('inc/footer.php') ?>