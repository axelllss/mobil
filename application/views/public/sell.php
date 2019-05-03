<?php $this->load->view('public/partials/view_public_header.php'); ?>
<!-- page content -->
<style type="text/css">
                                        .btn{
                                        width: 100px;
                                        margin: 20px;
                                        padding: 10px;
                                        box-shadow: 1px 1px 2px #000000;
                                        border-radius: 10%;
                                        text-align: center;
                                      }

                                      .btn-success{
                                        background-color: #4a544a;
                                      }

                                      .btn-success:hover{
                                        background-color: #96999e;
                                      }
                                    </style>
<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <hr>
        <div class="row" style="margin-left: 80px">
            <div class="col-md-8 col-sm-8 col-xs-8">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Add Customer Details</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <?php echo validation_errors(); ?> 
                        <form method="post">
                            <fieldset>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <input name="cf_name" type="text" value="<?php echo set_value('cf_name'); ?>" class="form-control" placeholder="First Name" >
                                    </div>
                                    <div class="col-xs-6">
                                        <input name="cl_name" type="text" value="<?php echo set_value('cl_name'); ?>" class="form-control" placeholder="Last Name" >
                                    </div>
                                </div>
                                <br>
                                
                                <div class="row">
                                
                                    <div class="col-xs-6">
                                        <input name="c_email" class="form-control" value="<?php echo set_value('c_email'); ?>"  placeholder="Email Address(User Name)" >
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <br>
                                        <input  class="form-control" name="s_price" value="<?php echo set_value('s_price'); ?>" placeholder="Selling Price" >
                                    </div><br>
                                </div><br>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <input type="text" class="form-control" name="c_mobile"  value="<?php echo set_value('c_mobile'); ?>" placeholder="Mobile No" >
                                    </div>
                                    <div class="col-xs-6">
                                        <h5>Payment Method</h5>
                                        <select class="form-control" name="payment_type" required>
                                            <option value="Cash">Cash</option>
                                            <option value="Credit">Credit</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <br>
                                <div class="row" hidden="">
                                    <div class="col-xs-6" >
                                        Warranty Start Date:
                                        <input type="date" class="form-control" name="w_start" value="<?php echo date("Y-m-d"); ?>">
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row" hidden="">
                                    <div class="col-xs-8">
                                        <input type="text" class="form-control" name="c_pass" value="Deafult Password : 1234" disabled>
                                    </div>
                                </div>
                                <br/><br/>
								<input type="hidden" name="v_id" value="<?php if(isset($cid)){echo $cid; }?> <?php echo set_value('v_id'); ?>">
                                <input type="submit" name="buttonSubmits" value="Confirm Buy" class="btn btn-success" />
                                
                            </fieldset>
                        </form>
                        <br/>
                        <label><?php //echo $message; ?></label>
                                
                    </div> <!-- /content --> 
                </div><!-- /x-panel --> 
            </div> <!-- /col --> 
        </div> <!-- /row --> 
    </div>
</div> <!-- /.col-right --> 
<!-- /page content -->

<?php $this->load->view('public/partials/view_public_footer'); ?>

<?php if($this->session->flashdata('message') != NULL) : ?>
<script>
    swal({
      title: "Success",
      text: "<?php echo $this->session->flashdata('message'); ?>",
      type: "success",
      timer: 1500,
      showConfirmButton: false
    });
</script>
<?php endif ?>