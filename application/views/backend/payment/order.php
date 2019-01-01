<div class="app-content content">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
            <h3 class="content-header-title mb-0 d-inline-block">Manage Order</h3>
          </div>
          <div class="content-header-right col-md-6 col-12 d-none d-md-block">
            <div class="btn-group float-md-right">
                <input type="text" name="search" style="height: 30px"><button class="btn btn-sm">Search Order</button>
            </div>
          </div>
        </div>
        <div class="row d-none d-md-block">
            <div class="col-md-12 col-sm-6 my-1">
                <div class="d-flex flex-md-row flex-wrap">
                    <div>
                        <div class="dropdown">
                                <div>
                                    <select class="form-control" style="height: 30px;" name="" id="">
                                        <option>คำสั่งจำนวนมาก</option>
                                        <option value="saab">แก้ไข</option>
                                        <option value="opel">ย้ายไปถังขยะ</option>
                                    </select>

                                </div>
                        </div>
                    </div>
                    <button class="btn btn-sm" style="height: 30px;">ทำงาน</button>

                    <div class="ml-2 d-none d-md-block">
                    <div class="dropdown">
                                    <select class="form-control" style="height: 30px;" name="" id="">
                                        <option>วันที่ทั้งหมด</option>
                                        <option value="saab">มกราคม</option>
                                        <option value="opel">กุมภาพันธ์</option>
                                    </select>
                        </div>
                    </div>

                    <div class="ml-1 d-none d-md-block">
                        <div class="dropdown">
                                    <select class="form-control" style="height: 30px;" name="" id="">
                                            <option>Filter By ...</option>
                                            <option value="saab">Filter By Registered Custommer</option>
                                            <option value="opel">Filter By A-Z</option>
                                        </select>
                            </div>
                    </div>
                    <button class="btn btn-sm" style="height: 30px;">ตัวกรอง</button>

                </div>
                <div class="text-right mr-1">
                    <small class="mt-2">1 รายการ</small>
                    </div>
                </div>


        </div>
        <div class="content-body"><!-- Basic Tables start -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-content colslapse show">
                      <?php if($order){ ?>
                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th><input type="checkbox" value=""></th>
                                            <th>คำสั่งซื้อ</th>
                                            <th>วันที่</th>
                                            <th>สถานะ</th>
                                            <th>รวมทั้งหมด</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php foreach($order as $row): ?>
                                        <tr>
                                            <td><input type="checkbox" value=""></td>
                                            <th><a href="<?php echo site_url("managepayment/orderdetail"); ?>"><?php echo $row->order_no; ?></a></th>
                                            <td><?php echo date('d-m-Y', strtotime($row->order_create)); ?></td>
                                            <td><button class="btn btn-sm btn-yellow btn-lighten-4 text-dark"><?php echo $row->order_status; ?></button></td>
                                            <td><?php echo number_format($row->order_totalprice, 2); ?> บาท</td>
                                        </tr>
                                      <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <?php echo $links; ?> <!-- Pagination -->
                        </div>
                      <?php }else{
                        echo "<center>ไม่มีข้อมูล</center>";
                      } ?>
                    </div>
                </div>
            </div>
            </div>
        </div>

              <div class="d-flex justify-content-end mr-1">
                <small>1 รายการ</small>
              </div>

        <div class="row">
            <div class="col-12">
                <div class="d-flex flex-md-row flex-wrap">
                    <div>
                        <div class="dropdown">
                                <div>
                                    <select class="form-control" style="height: 30px;" name="" id="">
                                        <option>คำสั่งจำนวนมาก</option>
                                        <option value="saab">แก้ไข</option>
                                        <option value="opel">ย้ายไปถังขยะ</option>
                                    </select>

                                </div>
                        </div>
                    </div>
                    <button class="btn btn-sm" style="height: 30px;">ทำงาน</button>
                </div>

                </div>
        </div>
        <div class="row  d-md-none d-sm-block">
            <div class="col-12 mt-2">
                <input type="text" name="search" style="height: 30px">
                <button class="btn btn-sm">Search Order</button>
            </div>
          </div>
    </div>
</div>
