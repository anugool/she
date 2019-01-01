<div class="col-md-10" ng-init="getProfile()" ng-controller="login">
    <h3 style="border-bottom-style: solid">เปลี่ยนรหัสผ่าน</h3>
    <div class="container accountView">
        <div class="form-group  Absolute-Center" style="width: 70%;">
            <label>รหัสผ่านเก่า</label>
            <input type="password" class="form-control" placeholder="รหัสผ่านเก่า" ng-model="oldpassword">
        </div>
        <div class="form-group  Absolute-Center" style="width: 70%;">
            <label>รหัสผ่านใหม่</label>
            <input type="password" class="form-control" placeholder="รหัสผ่านอย่างน้อย 6 ตัว" ng-model="password">
        </div>
        <div class="form-group  Absolute-Center" style="width: 70%;">
            <label>กรอกรหัสผ่านใหม่อีกครั้ง</label>
            <input type="password" class="form-control" placeholder="กรอกรหัสผ่านอีกครั้ง" ng-model="repassword">
        </div>

        <p style="text-align: center; padding-top: 20px;">
            <button type="button" class="btn" style="font-size:20px" ng-click="changepassword(oldpassword,password,repassword)">ตกลง</button>
        </p>
    </div>

</div>
</div>
</div>