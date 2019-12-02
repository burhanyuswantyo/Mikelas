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
              <h1>1</h1>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">

              <!-- start form for validation -->
              <form id="demo-form" data-parsley-validate>
                <label for="fullname">Full Name * :</label>
                <input type="text" id="fullname" class="form-control" name="fullname" required />

                <label for="email">Email * :</label>
                <input type="email" id="email" class="form-control" name="email" data-parsley-trigger="change" required />

                <label>Gender *:</label>
                <p>
                  M:
                  <input type="radio" class="flat" name="gender" id="genderM" value="M" checked="" required /> F:
                  <input type="radio" class="flat" name="gender" id="genderF" value="F" />
                </p>

                <label>Hobbies (2 minimum):</label>
                <p style="padding: 5px;">
                  <input type="checkbox" name="hobbies[]" id="hobby1" value="ski" data-parsley-mincheck="2" required class="flat" /> Skiing
                  <br />

                  <input type="checkbox" name="hobbies[]" id="hobby2" value="run" class="flat" /> Running
                  <br />

                  <input type="checkbox" name="hobbies[]" id="hobby3" value="eat" class="flat" /> Eating
                  <br />

                  <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Sleeping
                  <br />
                  <p>

                    <label for="heard">Heard us by *:</label>
                    <select id="heard" class="form-control" required>
                      <option value="">Choose..</option>
                      <option value="press">Press</option>
                      <option value="net">Internet</option>
                      <option value="mouth">Word of mouth</option>
                    </select>

                    <label for="message">Message (20 chars min, 100 max) :</label>
                    <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10"></textarea>

                    <br />
                    <span class="btn btn-primary">Validate form</span>

              </form>
              <!-- end form for validations -->

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