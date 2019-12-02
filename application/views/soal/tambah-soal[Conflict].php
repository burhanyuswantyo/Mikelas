<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left padding-bottom-md">
                <h3><?php echo $judul; ?></h3>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="row top_tiles">
            <div class="">
                <!-- Menu -->
                <div class="col-sm-12">
                    <?php echo form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                    <?php echo $this->session->flashdata('menu'); ?>

                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Registration Form</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <!-- start form for validation -->
                            <form>
                                <div class="col-sm-6">
                                    <label for="message">Uraian :</label>
                                    <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10"></textarea>
                                </div>
                                <div class="clearfix"></div>
                                <label class="padding-top-md">Pilihan :</label>
                                <div class="table-responsive">
                                    <table class="table table-striped jambo_table bulk_action">
                                        <tr class="headings">
                                            <td width="10%"><input type="checkbox"></td>
                                            <td>A</td>
                                            <td><input type="text"></td>
                                        </tr>
                                    </table>
                                </div>
                        </div>

                        <div class="clear-fix"></div>
                        <?php for ($i = 1; $i <= 10; $i++) { ?>
                            <a href="<?php echo '#' . $i; ?>" data-toggle="tab" class="btn btn-primary"><?php echo $i; ?></a>

                        <?php } ?>

                        <div class="col-xs-9">
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <?php for ($i = 1; $i <= 10; $i++) { ?>
                                    <div class="tab-pane" id="<?php echo $i ?>">Ini tab <?php echo $i ?></div>

                                <?php } ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->