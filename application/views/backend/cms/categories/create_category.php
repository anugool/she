<div class="app-content content">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
          <h2>หมวดหมู่</h2>
          </div>
        </div>
        <div class="content-body"><!-- Basic Editor start -->
            <section id="basic">
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                    <h4>สร้างหมวดหมู่ใหม่</h4>
                    <form class="form">
                            
							<div class="form-body">
								<div class="form-group">
									<label for="userinput5">ชื่อ</label>
									<input class="form-control border-dark" type="text" name="name" id="name">
                                    <small>ชื่อนี้แสดงว่าชื่อจะปรากฎแบบใดบนเว็บของคุณ</small>
								</div>

								<div class="form-group">
									<label for="userinput6">slug</label>
									<input class="form-control border-dark" type="text"  name="slug" id="slug">
                                    <small>“slug” คือการเขียนชื่อเว็บใหม่ให้เป็น URL-friendly ดังนั้นจะถูกเขียนออกมาในรูปตัวอักษรตัวเล็ก และมีเพียงตัวอักษร, ตัวเลข, และ hyphens (ขีดกลาง)</small>
								</div>

								<div class="form-group">
									<label for="userinput8">คำขยายความ</label>
									<textarea id="userinput8" rows="5" class="form-control border-dark" name="extenddescription"></textarea>
								</div>

							</div>

							<div class="form-actions left">
								<button type="submit" class="btn btn-primary btn-sm">
									สร้างหมวดหมู่ใหม่
								</button>
							</div>
						</form>
                    </div>

                    <div class="col-lg-8 col-md-12">

                    <div class="content-header row">
                        <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                            
                        </div>
                        <div class="content-header-right col-md-6 col-12 d-none d-md-block">
                            <div class="btn-group float-md-right">
                                <input type="text" name="search" style="height: 30px"><button class="btn btn-sm">ค้นหาหมวดหมู่</button>
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
                                                            <th><input type="checkbox" value=""></th>
                                                            <th>ชื่อ</th>
                                                            <th>คำขยายความ</th>
                                                            <th>Slug</th>
                                                            <th>นับ</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><input type="checkbox" value=""></td>
                                                            <th><a href="<?php echo site_url("managecms/editcategory"); ?>">เครื่องสำอาง</a></th>
                                                            <td>cosmetic</td>
                                                            <td></td>
                                                            <td>1</td>
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

                    </div>
                </div>
            </section>
        </div>
      </div>
    </div>
    