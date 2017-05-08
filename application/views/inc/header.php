<html>

<head>

    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">


    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Custom CSS -->

    <link href="<?php echo base_url(); ?>css/form.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>css/table.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>css/lazeemenu.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



</head>

<body>
<script type="text/javascript">

    window.onload = function()
    {
        document.getElementById("id").className = "active";

    }
</script>
<div id="wrapper">

    <!-- Sidebar -->

    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3"><div role="tabpanel" id="alllinksdemo2" class="tab-pane fade in active">
                        <div style="margin: auto">
                            <div class="logoimage">
                           <img src="<?php echo base_url('images/logo.jpg'); ?>" hight="40px" width="40px">
                            </div>
                            <ul id="menu-2" class="lz-menu">
                                <li>
                                    <h3><span><i class="fa fa-product-hunt"></i> Products</span></h3>
                                    <ul>
                                        <li id="pinsert"><a href="<?php echo base_url(); ?>Welcome/index"> <i class="fa fa-plus"></i> Insert Products</a></li>
                                        <li id="pview"><a href="<?php echo base_url(); ?>Welcome/view"> <i class="fa fa-television"></i> View Products</a></li>
                                        <li id="pdelete"><a href="#"> <i class="fa fa-trash"></i> Delete Products</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <h3><span> <i class="fa fa-sellsy"></i> Sales</span></h3>
                                    <ul>
                                        <li id="addsale"><a href="<?php echo base_url(); ?>Welcome/addsale"> <i class="fa fa-money"></i> Add Sales</a></li>

                                    </ul>
                                </li>
                                <li>
                                    <h3><span> <i class="fa fa-bars"></i> Reports</span></h3>
                                    <ul>
                                        <li><a href="#"> <i class="fa fa-flag-checkered"></i> Daily Sales Report</a></li>
                                        <li><a href="#"> <i class="fa fa-flag-o"></i> Monthly Sales Report</a></li>
                                        <li><a href="#"> <i class="fa fa-flag"></i> Item Purchase</a></li>
                                        <li><a href="#"> <i class="fa fa-bug"></i> Inventory</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <h3><span> <i class="fa fa-plug"></i> Contact</span></h3>
                                    <ul>
                                        <li><a href="#"> <i class="fa fa-laptop"></i> Developer</a></li>

                                    </ul>
                                </li>
                            </ul>

                        </div>
                    </div></div>
                <div class="col-lg-9">