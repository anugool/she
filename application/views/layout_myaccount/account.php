<div class="col-md-10" ng-init="getProfile()">
    <h3 style="border-bottom-style: solid">ข้อมูลของฉัน</h3>
    <div class="row" style="margin:10px">
        <div class="col-md-3">
            <!-- <img class="center" src="<?php echo base_url();?>app-assets/images/logo-icon.png" style="width:50%"> -->
            <div class="row ">
                <p><b>MEMBER</b></p>
                <p style="padding-left:20px"> {{get_detail_cus.cs_no}}</p>
            </div>
            <div class="row">
                <p><b>Status</b></p>
                <p style="padding-left:20px"> {{get_detail_cus.cs_status}}</p>
            </div>
            <div class="row">
                <p><b>วันหมดอายุ</b></p>
                <p style="padding-left:20px"> {{get_detail_cus.cs_expired}}</p>
            </div>
        </div>
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <p><b>ชื่อ</b></p>
                        <p style="padding-left:20px"> {{get_detail_cus.cs_fname}} {{get_detail_cus.cs_lname}}</p>
                    </div>
                    <div class="row">
                        <p><b>อีเมล</b></p>
                        <p style="padding-left:20px"> {{get_detail_cus.cs_email}}</p>
                    </div>
                    <div class="row">
                        <p><b>เบอร์โทรศัพท์</b></p>
                        <p style="padding-left:20px"> {{get_detail_cus.cs_tel}}</p>
                    </div>
                    <div class="row">
                        <p href="#!editprofile" style="font-size: 25px;"><b>ทึ่อยู่สำหรับจัดส่ง</b></p>
                    </div>
                    <div class="row">
                        <p style="padding-left:20px"> บ้านเลขที่
                            {{get_detail_cus.cs_house_no}}
                            หมู่ {{get_detail_cus.cs_buliding}} ตรอก/ซอย {{get_detail_cus.cs_soi}} ถนน
                            {{get_detail_cus.cs_road}} {{get_detail_cus.cs_sub_district}}
                            {{get_detail_cus.cs_district}} {{get_detail_cus.cs_province}}
                            {{get_detail_cus.cs_zipcode}}</p>
                    </div>
                    <div class="row">
                        <a href="#!editprofile" style="font-size: 25px;"><u>แก้ไขข้อมูลส่วนตัว</u></a><a href="#!changepassword"
                            style="font-size: 25px; padding-left:10px;"><u>เปลี่ยนรหัสผ่าน</u></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="form-group row" style="border-bottom-style: solid">
        <p class="col-form-label col-form-label-sm" style="font-size: 20px; border-right-style: solid; padding-right:10px; padding-left:10px">DATE</p>
        <p class="col-form-label col-form-label-sm" style="font-size: 20px; padding-left:10px">{{get_detail_cus.cs_expired}}</p>
    </div>


    <img class="center" src="<?php echo base_url();?>app-assets/images/logo-icon.png" style="width:40%">


    <div class="form-group" style="border-bottom-style: dashed; padding-top:50px">
        <p class="col-form-label col-form-label-sm" style="font-size: 20px; text-align: right; padding-right:10px; padding-left:10px">MEMBER</p>
        <p class="col-form-label col-form-label-sm" style="font-size: 20px; text-align: right; padding-left:10px">{{get_detail_cus.cs_no}}</p>
    </div>

    <div class="form-group row" style="border-bottom-style: solid">
        <p class="col-form-label col-form-label-sm" style="font-size: 20px; border-right-style: solid; padding-right:10px; padding-left:10px">ชื่อสมาชิก</p>
        <p class="col-form-label col-form-label-sm" style="font-size: 20px; padding-left:10px">{{get_detail_cus.cs_fname}}
            {{get_detail_cus.cs_lname}}</p>
    </div>

    <div class="form-group row" style="border-bottom-style: solid">
        <p class="col-form-label col-form-label-sm" style="font-size: 20px; padding-left:10px;">บ้านเลขที่
            {{get_detail_cus.cs_house_no}}
            หมู่ {{get_detail_cus.cs_buliding}} ตรอก/ซอย {{get_detail_cus.cs_soi}} ถนน
            {{get_detail_cus.cs_road}} {{get_detail_cus.cs_sub_district}}
            {{get_detail_cus.cs_district}} {{get_detail_cus.cs_province}}
            {{get_detail_cus.cs_zipcode}}
    </div>
    <div class="form-group row" style="border-bottom-style: solid">
        <p class="col-form-label col-form-label-sm" style="font-size: 20px; border-right-style: solid; padding-right:10px; padding-left:10px">แพ็คเกจ</p>
        <p class="col-form-label col-form-label-sm" style="font-size: 20px; padding-left:10px">{{get_detail_cus.cs_status}}</p>
    </div>


    <div class="form-group row" style="border-bottom-style: solid">
        <p class="col-form-label col-form-label-sm" style="font-size: 20px; border-right-style: solid; padding-right:10px; padding-left:10px">คะแนนสะสม</p>
        <p class="col-form-label col-form-label-sm" style="font-size: 20px; padding-left:10px">{{get_detail_cus.cs_point}}
            Point</p>
    </div>

    <div class="text-center">
        <a href="#!editprofile"><button type="button" class="btn">แก้ไขโปรไฟล์</button></a>
    </div> -->

    <!--<div class="text-center mobile">
            <button type="button" class="btn">ข้อมูลบิวตี้โปรไฟล์</button>
            <button type="button" class="btn">เช็คสถานะการจัดส่ง</button>
            <button type="button" class="btn" ng-click="logout()">ออกจากระบบ</button>
        </div>-->


    <!--<h3 class="breadcrumb">GENERAL</h3>
        <div class="form-group row">
            <p for="colFormLabelSm" class="col-sm-12 col-form-label col-form-label-sm" style="font-size: 20px;">เลขที่สมาชิก
                {{get_detail_cus[0].cs_no}}</p>
        </div>
        <div class="form-group row">
            <p for="colFormLabelSm" class="col-sm-12 col-form-label col-form-label-sm" style="font-size: 20px;">ชื่อ
                {{get_detail_cus[0].cs_fname}} นามสกุล {{get_detail_cus[0].cs_lname}}</p>
        </div>
        <div class="form-group row">
            <p for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm" style="font-size: 20px;">อายุ :
                {{get_detail_cus[0].cs_age}}</p>
            <p for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm" style="font-size: 20px;">เพศ :
                {{get_detail_cus[0].cs_gender}}</p>
            <p for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm" style="font-size: 20px;">โทรศัพท์
                :
                {{get_detail_cus[0].cs_tel}}</p>
        </div>
        <div class="form-group row">
            <p for="colFormLabelSm" class="col-sm-12 col-form-label col-form-label-sm" style="font-size: 20px;">ที่อยู่
                : บ้านเลขที่
                {{get_detail_cus[0].cs_house_no}}
                หมู่ {{get_detail_cus[0].cs_buliding}} ตรอก/ซอย {{get_detail_cus[0].cs_soi}}
                ถนน {{get_detail_cus[0].cs_road}} ตำบล {{get_detail_cus[0].cs_sub_district}}
                อำเภอ {{get_detail_cus[0].cs_district}} จังหวัด {{get_detail_cus[0].cs_province}}
                รหัสไปรษณีย์ {{get_detail_cus[0].cs_zipcode}}</p>
        </div>
        <h3 class="breadcrumb">ORDERS</h3>

        <h3 class="breadcrumb">MORE</h3>
        <div class="form-group row">
            <p for="colFormLabelSm" class="col-sm-12 col-form-label col-form-label-sm">งบประมาณในการซื้อ :
                {{get_detail_cus[0].cs_budget}}</p>
            <p for="colFormLabelSm" class="col-sm-12 col-form-label col-form-label-sm">สีผิวของคุณเป็นอย่างไร :
                {{get_detail_cus[0].skin_color}}</p>
            <p for="colFormLabelSm" class="col-sm-12 col-form-label col-form-label-sm">ประเภทผิวของคุณเป็นแบบไหน :
                {{get_detail_cus[0].skin_type}}</p>
            <p for="colFormLabelSm" class="col-sm-12 col-form-label col-form-label-sm" ng-repeat="x in get_skin_cus">ปัญหาชวนหงุดหงิดใจคุณคือ
                :
                {{x.pr_name}}</p>
            <p for="colFormLabelSm" class="col-sm-12 col-form-label col-form-label-sm" ng-repeat="y in get_makeup_cus">คุณให้ความสำคัญกับเครื่องสำอางประเภทไหนมากที่สุด
                : {{y.make_name}}</p>
        </div>-->
</div>
</div>
</div>