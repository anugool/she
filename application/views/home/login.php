<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="BG" ng-controller="login">
    <div class="container" ng-show="View1">
        <div class=" container viewlogin">
            <p style="text-align: center;font-size: 40px; color: #eb125f">กรุณาเข้าสู่ระบบ</p>
            <p style="text-align: center; font-size: 35px">เพื่อรับสิทธิพิเศษ</p>
            <p style="text-align: center; font-size: 35px">จากทาง SHELONGS</p>
            <p style="text-align: center;  padding-top: 50px">
                <button class="btn" ng-click="loginFB()" style=" font-size:20px; width:200px;"><i class="fa fa-facebook"></i>
                    เข้าสู่ระบบด้วย Facebook</button>
            </p>
            <div class="container accountView">
                <div class="form-group Absolute-Center" style="width: 70%;">
                    <label>อีเมล</label>
                    <input type="text" class="form-control" placeholder="อีเมล" ng-model="email">
                </div>
                <div class="form-group Absolute-Center" style="width: 70%;">
                    <label>รหัสผ่าน</label>
                    <input type="password" class="form-control" placeholder="รหัสผ่าน" ng-model="password">
                </div>
                <p style="text-align: right; padding-right: 15%;">
                    <a href="" ng-click="View2=true; View1=false"><u>ลืมรหัสผ่าน</u></a>
                </p>
                <p style="text-align: center;  padding-top: 20px;">
                    <button type="button" class="btn btn2" style="font-size:20px; width:200px;" ng-click="loginuser(email, password)">เข้าสู่ระบบ</button>
                </p>
            </div>
            <p style="text-align: center;  padding-top: 20px;">
                ไม่มีบัญชี Shelongs? <a href="" ng-click="View3=true; View1=false"><u>ลงทะเบียนที่นี่</u></a>
            </p>
        </div>
    </div>

    <div class="container" ng-show="View2">
        <div class="container accountView" style="padding-top: 170px; padding-bottom: 50px;">
            <h3 style="text-align: center; color: #eb125f">รีเซ็ทรหัสผ่าน</h3>
            <div class="form-group  Absolute-Center" style="width: 70%;">
                <label>กรุณากรอกอีเมล</label>
                <input type="text" class="form-control" placeholder="อีเมล" ng-model="email">
            </div>

            <p style="text-align: center; padding-top: 20px;">
                <button type="button" class="btn" style="background-color: #dddddd;font-size:20px" ng-click="View1=true; View2=false">ย้อนกลับ</button>
                <button type="button" class="btn" style="font-size:20px" ng-click="resetpassword(email)">ตกลง</button>
            </p>
        </div>
    </div>

    <div class="container" ng-show="View3">
        <div class="container accountView" style="padding-top: 170px; padding-bottom: 50px;">
            <h3 style="text-align: center; color: #eb125f">สมัครสมาชิก</h3>
            <p style="text-align: center;  padding-top: 20px;">
                <button class="btn" ng-click="loginFB()" style=" font-size:20px; width:200px;"><i class="fa fa-facebook"></i>
                    เชื่อมต่อระบบ Facebook</button>
            </p>
            <div class="form-group  Absolute-Center" style="width: 70%;">
                <label>อีเมล</label>
                <input type="email" class="form-control" placeholder="อีเมล" ng-model="email">
            </div>
            <div class="form-group  Absolute-Center" style="width: 70%;">
                <label>รหัสผ่าน</label>
                <input type="password" class="form-control" placeholder="รหัสผ่านอย่างน้อย 6 ตัว" ng-model="password">
            </div>
            <div class="form-group  Absolute-Center" style="width: 70%;">
                <label>กรอกรหัสผ่านอีกครั้ง</label>
                <input type="password" class="form-control" placeholder="กรอกรหัสผ่านอีกครั้ง" ng-model="repassword">
            </div>

            <p style="text-align: center; padding-top: 20px;">
                <button type="button" class="btn" style="background-color: #dddddd;font-size:20px" ng-click="View1=true; View3=false">ย้อนกลับ</button>
                <button type="button" class="btn" style="font-size:20px" ng-click="checkregister(email,password,repassword)">สมัครสมาชิก</button>
            </p>
        </div>
    </div>

</div>