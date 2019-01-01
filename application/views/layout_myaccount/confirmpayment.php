<div class="col-md-10 " ng-init="orderaccount()">
    <h2 class="text-center">แจ้งชำระเงิน</h2>
    <div class="row">
        <div class="col-md-6 ">
            <label>ชื่อ</label>
            <input type="text" class="form-control" ng-model="order_fullname">
        </div>
        <div class="col-md-6 ">
            <label>เบอร์ติดต่อ</label>
            <input type="text" class="form-control" ng-model="order_tel">
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 ">
            <label>รายการสั่งซื้อ</label>
            <input type="text" class="form-control" ng-model="order_no">
        </div>
        <div class="col-md-6 ">
            <label>ยอดโอน</label>
            <input type="text" class="form-control" ng-model="order_pay">
        </div>
    </div>
    <label>ธนาคารที่โอน</label>
    <div class="row ">
        <div class="col-md-12">
            <label>
                <span class="seed-confirm-check-wrap -logo">
                    <span class="seed-confirm-bank-info-logo"><img src="<?php echo base_url();?>app-assets/images/scb.png"
                            width="32" height="32"></span>
                </span>
                <span class="seed-confirm-check-wrap -detail" style="padding-left:20px;">
                    <span class="seed-confirm-bank-info-bank">ไทยพาณิชย์</span>
                    <span class="seed-confirm-bank-info-account-number">038-469682-4</span>
                    <span class="seed-confirm-bank-info-account-name">บริษัท จำกัด ชีลองส์ 959</span>
                </span>
            </label>
        </div>
    </div>
    <label>วันที่โอน</label>
    <div class="row ">
        <div class="col-md-6">
            <div class="form-group row">
                <label for="example-date-input" class="col-2 col-form-label">Date</label>
                <div class="col-10">
                    <input class="form-control" type="date" id="example-date-input" ng-model="order_date">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group row">
                <label for="example-time-input" class="col-2 col-form-label">Time</label>
                <div class="col-10">
                    <input class="form-control" type="time" id="example-time-input" ng-model="order_time">
                </div>
            </div>
        </div>
    </div>


    <label>หลักฐานการโอน</label>
    <div class="col-md-4">
        <input type="file" file-input="files" />
    </div>
    <!-- <div class="col-md-6">
        <button class="btn btn-info" ng-click="uploadFile(files)">Upload</button>
    </div> -->
    <p style="text-align: center; padding-top: 20px;">
        <button type="button" class="btn" style="font-size:20px" ng-click="uploadFile(order_fullname, order_tel, order_no, order_pay, order_date, order_time, files)">แจ้งชำระเงิน</button>
    </p>
</div>
</div>
</div>