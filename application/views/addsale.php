<?php include('inc/header.php') ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax.libs.bootstrap-3-typeaheas/4.0.2/bootstrap3-typeahead.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootsrap.min.css"/>
    <script type="text/javascript">

        window.onload = function()
        {
            document.getElementById("addsale").className = "active";
        }
    </script>
    <div class="form-style-8">

<!--        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>-->
        <script>
            $(document).ready(function() {

                var wrapper         = $(".container1");
                var add_button      = $(".add_form_field");

                var x = 1;
                $(add_button).click(function(e){
                    e.preventDefault();
                        $(wrapper).append('<div class="col-md-4"><input type="text" name="pname[]" id="pname[]" class="form-control input-lg" autocomplete="off" placeholder="Product Name"/></div>'); //add input box
                    $(wrapper).append('<div class="col-md-4"><input type="text" name="qty[]" id="qty[]" placeholder="Quantity"></div>');

                    $(wrapper).append('<div class="clearfix"></div>');
                });


            });
        </script>

        <h2>Insert Sales Details</h2>

        <h3><?= $this->session->flashdata('msg'); ?></h3>

        <?= form_open('Welcome/addsale'); ?>

        <div class="container1">

            <div class="col-md-4"><label>Product Name</label></div>
            <div class="col-md-4"><label>Quantity</label></div>
            <div class="clearfix"></div>
            <div class="col-md-4">
                <input type="text" name="pname[]" id="pname[]" class="form-control input-lg" autocomplete="off" placeholder="Product Name"/>


            </div>
            <div id="productlist"></div>
            <div class="col-md-4"><input type="text" name="qty[]" id="qty[]" placeholder="Quantity"></div>
            <div class="clearfix"></div>




        </div>
        <br>
        <br>

        <div class="salebutton">
        <button type="submit" value="submit">Total</button>
        <button type="submit" id="a" class="add_form_field" value="submit">Add</button></div>


        <?php echo form_close(); ?>

    </div>


    <script>
$(document).ready(function(){
      $('#pname').typeahead({
          $.ajax({
              url:"Welcome/suggest",
              method:"POST",
              dataType:"json",
              success:function(data)
              {
                result($.map(data,funtion(item){
                  return item;
              }));
              }
          })

      });

    });


    </script>

<?php include('inc/footer.php') ?>