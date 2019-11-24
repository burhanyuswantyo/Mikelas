<!-- page content -->
<div class="right_col" role="main">
    <div class="">

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-sm-6">
                <div class="x_panel">
                    <div class="x_title">
                        <h2><?php echo $judul; ?></h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <?php echo $this->session->flashdata('message'); ?>
                        <div class="col-sm-4">
                            <img class="img-responsive avatar-view" src="<?php echo base_url('asset/image/profile/') . $user['image']; ?>" alt="Avatar" title="Change the avatar">
                            <div class="text-center padding-top-md">
                                <a class="btn btn-success" href="<?php echo base_url('profile/edit') ?>"><i class="fa fa-edit m-right-xs"></i> Edit Profile</a>
                            </div>
                        </div>
                        <h3><?php echo $user['nama'] ?></h3>

                        <ul class="list-unstyled user_data">
                            <li><i class="fa fa-map-marker user-profile-icon"></i> <?php echo $user['alamat'] ?>
                            </li>

                            <li>
                                <i class="fa fa-briefcase user-profile-icon"></i> Software Engineer
                            </li>

                            <li class="m-top-xs">
                                <i class="fa fa-external-link user-profile-icon"></i>
                                <a href="http://www.kimlabs.com/profile/" target="_blank">www.kimlabs.com</a>
                            </li>
                        </ul>


                        <br />

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->