<div class="col-md-10 " style="padding-top: 30px" ng-init="getProfile();getPackage()">
    <div class="container col-md-10">
        <div ng-show="Join01" ng-init="Join01=true;">
            <div class="form-row">
                <div class="col-md-4 text-center">
                    <h2>เลือกแพ็คเกจที่คุณถูกใจ</h2>
                    <br>
                    <div class="radio" ng-repeat="pack in allPackage">
                        <label>
                            <h3><input type="radio" name="package" value="{{pack.package_id}}" ng-click="CheckPackage($event,pack.package_name,pack.package_price,pack.package_des)">
                                {{pack.package_name}}</h3>
                        </label>
                        <p>{{pack.package_price}}</p>
                        <p>{{pack.package_des}}</p>
                    </div>

                    <div class="text-center">
                        <button type="button" class="btn" ng-click="Join01=false;Join02=true">สมัครแพ็คเกจ</button>
                    </div>
                </div>
                <div class="col-md-8">
                    <img src="<?php echo base_url();?>app-assets/images/join.png" style="width: 100%; height: auto;">
                </div>
            </div>
        </div>

        <div ng-show="Join02">
            <h3 style="border-bottom: 1px solid #eb125f;">การสั่งซื้อ</h3>
            <div class="row">
                <div class="col-md-4">
                    <h5><b>วิธีการชำระเงิน</b></h5>
                    <div class="radio">
                        <label>
                            <input type="radio" name="Payment" value="โอนเงินผ่านธนาคาร" ng-model="Payment">
                            โอนเงินผ่านธนาคาร<br>
                            <span class="seed-confirm-check-wrap -detail" style="padding-left:20px;">
                                <span class="seed-confirm-bank-info-bank">ไทยพาณิชย์ 038-469682-4 </span>
                            </span><br>
                            <span class="seed-confirm-check-wrap -detail" style="padding-left:20px;">
                                <span class="seed-confirm-bank-info-bank">บริษัท จำกัด
                                    ชีลองส์ 959</span>
                            </span>
                        </label>
                    </div>
                    <!-- <div class="radio">
                        <label>
                            <input type="radio" name="Payment" value="บัตรเครดิต/เดบิต" ng-model="Payment">
                            บัตรเครดิต/เดบิต
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="Payment" value="บัญชีธนาคาร" ng-model="Payment">
                            บัญชีธนาคาร
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="Payment" value="ALIPAY" ng-model="Payment">
                            ALIPAY
                        </label>
                    </div> -->
                </div>
                <div class="col-md-4">
                    <h5><b>ที่อยู่สำหรับจัดส่ง</b></h5>
                    บ้านเลขที่
                    {{get_detail_cus.cs_house_no}}
                    หมู่ {{get_detail_cus.cs_buliding}} ตรอก/ซอย {{get_detail_cus.cs_soi}}
                    ถนน
                    {{get_detail_cus.cs_road}} {{get_detail_cus.cs_sub_district}}
                    {{get_detail_cus.cs_district}} {{get_detail_cus.cs_province}}
                    {{get_detail_cus.cs_zipcode}}
                </div>
                <div class="col-md-4">
                    <h5><b>วันที่สั่งซื้อ</b></h5>
                    {{ today | date:'dd-MM-yyyy' }}
                </div>
            </div>
            <table class="table" style="border: 1px solid #dee2e6">
                <thead>
                    <tr>
                        <th>ชื่อแพ็กเกจ</th>
                        <th>ราคาต่อชิ้น</th>
                        <th>ปริมาณ</th>
                        <th>รวม</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{packagename}}</td>
                        <td>{{packageprice}}</td>
                        <td>1</td>
                        <td>{{packageprice}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-5 float-right" ng-show="Join02">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="กรุณากรอกคูปองส่วนลด" ng-model="CodeFreeCheck">
                <div class="input-group-append">
                    <button style="background-color: white; color: black; border: 2px solid #eb125f;" type="button"
                        ng-click="CheckPackageFree(CodeFreeCheck)">ตกลง</button>
                </div>
            </div>
            <table class="table">
                <tbody>
                    <tr>
                        <td class="text-right">ส่วนลด</td>
                        <td class="text-right">{{discount}}</td>
                    </tr>
                    <tr>
                        <td class="text-right">ราคาก่อน VAT</td>
                        <td class="text-right">{{packageprice}}</td>
                    </tr>
                    <tr>
                        <td class="text-right">ค่าจัดส่ง</td>
                        <td class="text-right">ฟรี</td>
                    </tr>
                    <tr>
                        <td class="text-right">VAT 7%</td>
                        <td class="text-right">{{packagevat}}</td>
                    </tr>
                    <tr>
                        <td class="text-right">คะแนนที่ได้รับ</td>
                        <td class="text-right">คะแนนที่ได้รับ</td>
                    </tr>
                    <tr>
                        <td class="text-right">รวม</td>
                        <td class="text-right">{{totalprice}}</td>
                    </tr>
                    <p class="float-right">{{Payment}}</p>
                </tbody>
            </table>
            <div class="text-center" ng-show="Join02">
                <button type="button" class="btn" ng-click="addpackageCS(Payment)">สมัครแพ็คเกจ</button>
            </div>
        </div>

        <!-- <div ng-show="Join03">
            <h2 class="text-center">กรุณากรอกที่อยู่จัดส่ง</h2>
            <div class="container ConEdit">
                <div class="row">
                    <div class="col-md-8">
                        <h2>รายละเอียดที่อยู่ในใบเสร็จ</h2>
                        <div class="radio">
                            <label><input type="radio" name="addressRadio" value="old" ng-click="CheckAddress($event)"
                                    checked>จัดส่งไปยังที่อยู่เดิม</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="addressRadio" value="new" ng-click="CheckAddress($event)">จัดส่งไปยังที่อยู่อื่น</label>
                        </div>

                        <div class="form-row" ng-show="old">
                            <div class="form-group row">
                                <p class="col-md-1 mb-1" style="font-size: 20px;">ชื่อ</p>
                                <p class="col-md-11 mb-1" style="font-size: 20px;">{{get_detail_cus[0].cs_fname}}
                                    {{get_detail_cus[0].cs_lname}}</p>
                                <p class="col-md-10 mb-1" style="font-size: 20px;">บ้านเลขที่
                                    {{get_detail_cus[0].cs_house_no}}
                                    หมู่ {{get_detail_cus[0].cs_buliding}} ตรอก/ซอย {{get_detail_cus[0].cs_soi}}
                                    ถนน
                                    {{get_detail_cus[0].cs_road}} {{get_detail_cus[0].cs_sub_district}}
                                    {{get_detail_cus[0].cs_district}} {{get_detail_cus[0].cs_province}}
                                    {{get_detail_cus[0].cs_zipcode}}
                            </div>
                        </div>

                        <div class="form-row" ng-show="new">
                            <div class="col-md-5 mb-1">
                                <label>ชื่อ</label>{{packagefirstName}}
                                <input type="text" class="form-control" ng-model="packagefirstName">
                            </div>
                            <div class="col-md-5 mb-1">
                                <label>นามสกุล</label>
                                <input type="text" class="form-control" name="lastName" ng-model="packagelastName">
                            </div>
                            <div class="col-md-5 mb-1">
                                <label>บ้านเลขที่</label>
                                <input type="text" class="form-control" name="houseno" ng-model="packagehouseno">
                            </div>
                            <div class="col-md-5 mb-1">
                                <label>หมู่บ้าน/อาคาร</label>
                                <input type="text" class="form-control" name="vaillageorbuilding" ng-model="packagevaillageorbuilding">
                            </div>
                            <div class="col-md-5 mb-1">
                                <label>ตรอก/ซอย</label>
                                <input type="text" class="form-control" name="alleyway" ng-model="packagealleyway">
                            </div>
                            <div class="col-md-5 mb-1">
                                <label>ถนน</label>
                                <input type="text" class="form-control" name="road" ng-model="packageroad">
                            </div>
                            <div class="col-md-5 mb-1">
                                <label>ตำบล/แขวง</label>
                                <input type="text" class="form-control" name="subdistric" ng-model="packagesubdistric">
                            </div>
                            <div class="col-md-5 mb-1">
                                <label>อำเภอ/เขต</label>
                                <input type="text" class="form-control" name="distric" ng-model="packagedistric">
                            </div>
                            <div class="col-md-7 mb-1">
                                <label>จังหวัด</label>
                                <select class="form-control" ng-model="packageprovinceTh" ng-options="item for item in province">
                                </select>
                            </div>
                            <div class="col-md-3 mb-1">
                                <label>รหัสไปรษณีย์</label>
                                <input type="text" class="form-control" name="postcode" ng-model="packagepostcode">
                            </div>
                        </div>

                    </div>

                    <div class="col-md-4 " style="border-style: solid; height:300px; border-color: #eb125f;">
                        <h2>รายการสั่งซื้อของคุณ</h2>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">สินค้า</th>
                                    <th scope="col" class="text-right">รวม</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{packagename}}</td>
                                    <td class="text-right">{{packageprice}} บาท</td>
                                </tr>
                                <tr>
                                    <td>มูลค่าสินค้า</td>
                                    <td class="text-right">{{packageprice}} บาท</td>
                                </tr>
                                <tr>
                                    <td>รวม</td>
                                    <td class="text-right">{{packageprice}} บาท</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="float-right">{{Payment}}</p>
                    </div>
                </div>
                <div style="height:20px"></div>
                <div ng-show="Join02" class="accountView Absolute-Center border border-dark rounded" style="background:#fafafa;2 color:#22;">
                    <div style="margin:20px;">
                        <h2 class="text-center">Payment</h2>
                        <div style="padding:10px;">
                            <div class="radio">
                                <label>
                                    <h4><input type="radio" name="Payment" value="โอนเงินผ่านธนาคาร" ng-model="Payment">
                                        โอนเงินผ่านธนาคาร</h4>
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <h4><input type="radio" name="Payment" value="บัตรเครดิต/เดบิต" ng-model="Payment">
                                        บัตรเครดิต/เดบิต</h4>
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <h4><input type="radio" name="Payment" value="บัญชีธนาคาร" ng-model="Payment">
                                        บัญชีธนาคาร</h4>
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <h4><input type="radio" name="Payment" value="ALIPAY" ng-model="Payment">
                                        ALIPAY</h4>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <button type="button" class="btn" ng-click="addpackageCS(packagefirstName,packagelastName,packagehouseno,packagevaillageorbuilding,packagealleyway,packageroad,packagesubdistric,packagedistric,packageprovinceTh,packagepostcode,Payment)">สมัครแพ็คเกจ</button>
                </div>
            </div>
        </div> -->
    </div>
</div>
</div>
</div>

<style>
    ::placeholder {
        color: black;
        opacity: 1;
        font-size: 16px;
        font-family: avenir;
        /* Firefox */
    }

    :-ms-input-placeholder {
        /* Internet Explorer 10-11 */
        color: black;
        font-family: avenir;
        font-size: 16px;
    }

    ::-ms-input-placeholder {
        /* Microsoft Edge */
        color: black;
        font-family: avenir;
        font-size: 16px;
    }
</style>