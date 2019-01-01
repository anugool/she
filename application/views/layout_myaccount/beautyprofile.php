<div class="col-md-10" ng-init="getProfile()">
    <h3 style="border-bottom-style: solid">ข้อมูลของฉัน</h3>
    <div class="row" style="margin:10px">
        <div class="col-md-3">
            <!-- <img class="center" src="<?php echo base_url();?>app-assets/images/logo-icon.png" style="width:50%"> -->
            <div class="row ">
                <p style="padding-left:20px">{{get_detail_cus.cs_fname}} {{get_detail_cus.cs_lname}}</p>
            </div>
        </div>
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <p><b>สีผิวของคุณ</b></p>
                        <p style="padding-left:20px"> {{get_detail_cus.skin_color}}</p>
                    </div>
                    <div class="row">
                        <p><b>ประเภทผิวของคุณ</b></p>
                        <p style="padding-left:20px"> {{get_detail_cus.skin_type}}</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <p><b>ปัญหาชวนหงุดหงิดใจคุณ</b></p>
                    </div>
                    <div class="row">
                        <p style="padding-left:20px" ng-repeat="x in get_skin_cus"> {{x.pr_name}}</p>
                    </div>
                    <div class="row">
                        <p><b>คุณให้ความสำคัญกับเครื่องสำอางประเภท</b></p>
                    </div>
                    <div class="row">
                        <p style="padding-left:20px" ng-repeat="y in get_makeup_cus"> {{y.make_name}}</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- <h3 class="breadcrumb">สีผิวของคุณ</h3>
    <div class="form-group row">
        <p for="colFormLabelSm" class="col-sm-12 col-form-label col-form-label-sm" style="font-size: 20px;">
            {{get_detail_cus[0].skin_color}}</p>
    </div>

    <h3 class="breadcrumb">ประเภทผิวของคุณ</h3>
    <div class="form-group row">
        <p for="colFormLabelSm" class="col-sm-12 col-form-label col-form-label-sm" style="font-size: 20px;">
            {{get_detail_cus[0].skin_type}}</p>
    </div>

    <h3 class="breadcrumb">ปัญหาชวนหงุดหงิดใจคุณ</h3>
    <div class="form-group row">
        <p for="colFormLabelSm" class="col-sm-12 col-form-label col-form-label-sm" style="font-size: 20px;" ng-repeat="x in get_skin_cus">
            {{x.pr_name}}</p>
    </div>

    <h3 class="breadcrumb">คุณให้ความสำคัญกับเครื่องสำอางประเภท</h3>
    <div class="form-group row">
        <p for="colFormLabelSm" class="col-sm-12 col-form-label col-form-label-sm" style="font-size: 20px;" ng-repeat="y in get_makeup_cus">
            {{y.make_name}}</p>
    </div> -->
</div>
</div>
</div>