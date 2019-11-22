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
                <div class="col-sm-4">
                    <div class="alert alert-info alert-dismissible fade in" role="alert">
                        <strong>Role : </strong><?php echo $role['role'] ?>
                    </div>
                    <?php echo $this->session->flashdata('message'); ?>
                    <div class="table-responsive">
                        <table class="table table-striped jambo_table bulk_action">
                            <thead>
                                <tr class="headings">
                                    <th class="column-title" width="20">No</th>
                                    <th class="column-title">Menu</th>
                                    <th class="column-title text-center">Access</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($menu as $m) : ?>
                                    <tr class="even pointer">
                                        <td class="text-center"><?php echo $i; ?></td>
                                        <td class=""><?php echo $m['menu']; ?></td>
                                        <td class="last text-center">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" <?php echo check_access($role['id'], $m['id']); ?> data-role="<?php echo $role['id']; ?>" data-menu="<?php echo $m['id']; ?>">
                                            </div>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->