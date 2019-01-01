<div class="container-fluid col-md-10" ng-init="getProfile()">
    <div class="alert alert-success" role="alert" ng-show="alertsuccess">
        บันทึกข้อมูลสำเร็จ
    </div>
    <div class="alert alert-danger" role="alert" ng-show="alerterror">
        บันทึกข้อมูลไม่สำเร็จ
    </div>
    <div class="container ConEdit" style="margin:10px">
        <div class="form-row">
            <div class="col-md-6 mb-1">
                <label>ชื่อ</label>
                <input type="text" class="form-control" name="firstname" ng-model="get_detail_cus.cs_fname">
            </div>
            <div class="col-md-6 mb-1">
                <label>นามสกุล</label>
                <input type="text" class="form-control" name="lastName" ng-model="get_detail_cus.cs_lname">
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-3 mb-1">
                <label>อายุ</label>
                <input type="nember" class="form-control col-md-11" name="age" ng-model="get_detail_cus.cs_age">
            </div>
            <div class="col-md-3 mb-1">
                <label>เพศ</label>
                <div class="radio">
                    <label class="col-md-4"><input type="radio" name="sex" value="ชาย" ng-model="sex.name">
                        ชาย</label>
                    <label class="col-md-4"><input type="radio" name="sex" value="หญิง" ng-model="sex.name">
                        หญิง</label>
                </div>
            </div>
            <div class="col-md-6 mb-1">
                <label>โทรศัพท์</label>
                <input type="text" class="form-control" name="tel" ng-model="get_detail_cus.cs_tel">
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-4 mb-1">
                <label>บ้านเลขที่</label>
                <input type="text" class="form-control col-md-11" name="houseno" ng-model="get_detail_cus.cs_house_no">
            </div>
            <div class="col-md-4 mb-1">
                <label>หมู่บ้าน/อาคาร</label>
                <input type="text" class="form-control col-md-11" name="vaillageorbuilding" ng-model="get_detail_cus.cs_buliding">
            </div>
            <div class="col-md-4 mb-1">
                <label>ตรอก/ซอย</label>
                <input type="text" class="form-control col-md-11" name="alleyway" ng-model="get_detail_cus.cs_soi">
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-4 mb-1">
                <label>ถนน</label>
                <input type="text" class="form-control col-md-11" name="road" ng-model="get_detail_cus.cs_road">
            </div>
            <div class="col-md-4 mb-1">
                <label>ตำบล/แขวง</label>
                <input type="text" class="form-control col-md-11" name="subdistric" ng-model="get_detail_cus.cs_sub_district">
            </div>
            <div class="col-md-4 mb-1">
                <label>อำเภอ/เขต</label>
                <input type="text" class="form-control col-md-11" name="distric" ng-model="get_detail_cus.cs_district">
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-8 mb-1">
                <label>จังหวัด</label>
                <select class="form-control col-md-11" ng-model="get_detail_cus.cs_province" ng-options="item for item in province">
                </select>
            </div>
            <div class="col-md-4 mb-1">
                <label>รหัสไปรษณีย์</label>
                <input type="text" class="form-control col-md-11" name="postcode" ng-model="get_detail_cus.cs_zipcode">
            </div>
        </div>

        <div class="form-row" style="padding-bottom:20px">
            <div class="col-md-12 mb-1">
                <label>งบประมาณซื้อเครื่องสำอาง/เดือน</label>
                <div class="radio">
                    <label class="col-md-4"><input type="radio" name="budget" value="ต่ำกว่า 1,500 บาท" ng-model="budget.name">
                        ต่ำกว่า 1,500 บาท</label>
                </div>
                <div class="radio">
                    <label class="col-md-4"><input type="radio" name="budget" value="1,500 - 3,000 บาท" ng-model="budget.name">
                        1,500 - 3,000 บาท</label>
                </div>
                <div class="radio">
                    <label class="col-md-4"><input type="radio" name="budget" value="3,000 - 4,500 บาท" ng-model="budget.name">
                        3,000 - 4,500 บาท</label>
                </div>
                <div class="radio">
                    <label class="col-md-4"><input type="radio" name="budget" value="มากกว่า 6,000 บาท" ng-model="budget.name">
                        มากกว่า 6,000 บาท</label>
                </div>
            </div>
        </div>
        <div style="text-align:center; padding-bottom:20px">
            <button type="submit" class="btn btn-lg" ng-click="updateProfile()">บันทึก</button>
        </div>
    </div>

</div>
</div>
</div>