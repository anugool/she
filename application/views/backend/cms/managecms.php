<div class="app-content content">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
            <h3 class="content-header-title mb-0 d-inline-block">เรื่อง</h3>
            
            <div class="row breadcrumbs-top d-inline-block">
              <div class="breadcrumb-wrapper col-12">
                <a href="<?php echo site_url("managecms/create"); ?>" class="btn btn-outline-primary btn-sm">เขียนเรื่องใหม่</a>
              </div>
            </div>
          </div>
          <div class="content-header-right col-md-6 col-12 d-none d-md-block">
            <div class="btn-group float-md-right">
                <input type="text" name="search" style="height: 30px"><button class="btn btn-sm">ค้นหาหัวเรื่อง</button>
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
                        <div class="card-body">
                            
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th width="500px"><input type="checkbox" value="">หัวข้อ</th>
                                            <th>ผู้เขียน</th>
                                            <th>หมวดหมู่</th>
                                            <th>ป้ายกำกับ</th>
                                            <th>วันที่</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="divbutton" >
                                            <th scope="row"><input type="checkbox" value=""> เรื่อง1<br>
                                            <div class="divbutton">
                                            <small style="display: none;">
                                                <a href="<?php echo site_url("managecms/edit"); ?>">แก้ไข</a>
                                                <a href="#">ย้ายไปถังขยะ</a>
                                                <a href="#">ดู</a>
                                            </small>
                                            </div>
                                            </th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>11-02-2028</td>
                                        </tr>
                                        <tr class="divbutton">
                                            <th scope="row"><input type="checkbox" value=""> เรื่อง2<br>
                                            <div class="divbutton">
                                            <small style="display: none;">
                                                <a href="<?php echo site_url("managecms/edit"); ?>">แก้ไข</a>
                                                <a href="#">ย้ายไปถังขยะ</a>
                                                <a href="#">ดู</a>
                                            </small>
                                                
                                            </div></th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                            <td>11-02-2028</td>
                                        </tr>
                                        <tr class="divbutton"> 
                                            <th scope="row"><input type="checkbox" value=""> เรื่อง3<br>
                                            <small style="display: none;">
                                                <a href="<?php echo site_url("managecms/edit"); ?>">แก้ไข</a>
                                                <a href="#">ย้ายไปถังขยะ</a>
                                                <a href="#">ดู</a>
                                            </small></th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                            <td>11-02-2028</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
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
                <div class="text-right mb-2">
                <small>1 รายการ</small>
                </div>
                </div>       
        </div>
        <div class="row  d-md-none d-sm-block">
            <div class="col-12">
                <input type="text" name="search" style="height: 30px">
                <button class="btn btn-sm">ค้นหาหัวเรื่อง</button>
            </div>
          </div>
    </div>
</div>

<script>

// var buttonDiv = document.getElementsByClassName("divbutton")[0];  //better use some id and then use getElementById

// buttonDiv.onmouseover = function() {
//     document.getElementById("action1").style.display = 'block';
// }

// buttonDiv.onmouseout = function() {
//     document.getElementById("action1").style.display = 'none';
// }
    $(document).ready(function () {
        $(document).on('mouseenter', '.divbutton', function () {
            $(this).find("small").show();
        }).on('mouseleave', '.divbutton', function () {
            $(this).find("small").hide();
        });
    });
</script>


