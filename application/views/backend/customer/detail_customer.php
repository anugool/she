
<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-1">
        <h2 class="content-header-title">Customer Detial</h2>
      </div>
    </div>
    <div class="content-body">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <!-- <div class="text-center">
                        <div class="card-body">
              <img src="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/portrait/medium/avatar-m-4.png" class="rounded-circle  height-150"
              alt="Card image">
            </div>
            <div class="card-body">
              <h4 class="card-title">
                <?php
                echo $get_detail_cus->cs_no. '<br>';
                echo $get_detail_cus->cs_fname. ' '. $get_detail_cus->cs_lname. '<br>';
                ?>
                <h5>
                  <?php echo $get_detail_cus->cs_status; ?>
                </h5>
              </h4>

            </div>
          </div> -->

                  <div class="row">
                  <div class="col-md-12">
                      <div class="card">
                          <div class="card-content collapse show">
                              <div class="card-body">
                                  <form class="form form-horizontal row-separator">
                                    <div class="form-body">
                                      <h4 class="form-section"><i class="la la-user"></i> รายละเอียดลูกค้า</h4>
                                      <div class="text-center">
                                      <h4 class="card-title">
                                          <?php
                                          echo $get_detail_cus->cs_no. '<br>';
                                          echo $get_detail_cus->cs_fname. ' '. $get_detail_cus->cs_lname. '<br>';
                                          ?>
                                          <h5>
                                            <?php echo $get_detail_cus->cs_status; ?>
                                          </h5>
                                        </h4>
                                      </div>
                                      <div class="form-group row">
                                            <label class="col-md-2 label-control" for="age">อายุ:</label>
                                            <div class="col-md-9">
                                              <input type="text" id="age" class="form-control" value="<?php echo $get_detail_cus->cs_age; ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 label-control" for="gender">เพศ:</label>
                                        <div class="col-md-9">
                                              <input type="text" id="gender" class="form-control" value="<?php echo $get_detail_cus->cs_gender; ?>" disabled>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-2 label-control" for="tel">โทรศัพท์</label>
                                            <div class="col-md-9">
                                              <input type="text" id="tel" class="form-control" value="<?php echo $get_detail_cus->cs_tel; ?>" disabled>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-2 label-control" for="address">ที่อยู่</label>
                                            <div class="col-md-9">
                                              <textarea type="" id="address" class="form-control" rows="5" disabled><?php
                                                echo $get_detail_cus->cs_house_no. ' '. $get_detail_cus->cs_buliding. ' '. $get_detail_cus->cs_soi
                                                .' '. $get_detail_cus->cs_road. ' '. $get_detail_cus->cs_sub_district. ' '. $get_detail_cus->cs_district
                                                .' '. $get_detail_cus->cs_province. ' '. $get_detail_cus->cs_zipcode;
                                                ?></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row last">
                                            <label class="col-md-2 label-control" for="budget">งบประมาณในการซื้อ</label>
                                            <div class="col-md-9">
                                              <input type="text" id="budget" class="form-control" value="<?php echo $get_detail_cus->cs_budget; ?>" disabled>
                                            </div>
                                        </div>

                                        <h4 class="form-section"><i class="la la-clipboard"></i>ประเภทผิว</h4>

                                        <div class="form-group row">
                                            <label class="col-md-2 label-control" for="projectinput5">สีผิวของคุณเป็นอย่างไร</label>
                                            <div class="col-md-9">
                                              <input type="text" id="projectinput5" class="form-control" value="<?php echo $get_detail_cus->skin_color; ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 label-control" for="projectinput5">ประเภทผิวของคุณเป็นแบบไหน</label>
                                            <div class="col-md-9">
                                              <input type="text" id="projectinput5" class="form-control" value="<?php echo $get_detail_cus->skin_type; ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 label-control" for="projectinput5">ปัญหาชวนหงุดหงิดใจคุณ</label>
                                            <div class="col-md-9">
                                              <input type="text" id="projectinput5" class="form-control" value="<?php
                                                  foreach($get_skin_cus as $row){
                                                    echo $row->pr_name. ', ';
                                                  }
                                                  ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row last">
                                            <label class="col-md-2 label-control" for="projectinput5">คุณให้ความสำคัญกับเครื่องสำอางประเภทไหนมากที่สุด</label>
                                            <div class="col-md-9">
                                              <input type="text" id="projectinput5" class="form-control" value="<?php
                                                  foreach($get_makeup_cus as $row){
                                                    echo $row->make_name. ', ';
                                                  }
                                                  ?>" disabled>
                                            </div>
                                        </div>
                                    </div>
                                      <div class="d-flex flex-column align-items-center">
                                      <button type="button" class="btn btn-icon btn-success mb-1" style="width:300px;">Update BEAUTY BOX FREE</button>
                                      <button type="button" class="btn btn-icon btn-danger mb-1" style="width:300px;"><i class="la la-trash"></i></button>
                                      <a href="<?php echo site_url('managecustomer/index'); ?>" class="btn btn-icon btn-warning mb-1" style="width:300px;">Back</a>
                                      </div>
                                  </form>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
