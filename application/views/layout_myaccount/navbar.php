<!-- <div style="height:150px; border-bottom: 20px solid #eb125f;" class="desktop">
    <div class="container">
        <div class="float-right" style="padding-top:30px">
            <a><img src="<?php echo base_url();?>app-assets/images/a5.jpg" style="height: 40px;"></a>
            <a><img src="<?php echo base_url();?>app-assets/images/a4.jpg" style="height: 40px;"></a>
            <a><img src="<?php echo base_url();?>app-assets/images/a3.jpg" style="height: 40px;"></a>
            <a><img src="<?php echo base_url();?>app-assets/images/a2.jpg" style="height: 40px;"></a>
        </div>
        <br>
        <br>
        <br>
        <br>
        <div class="float-right"><a href="#" ng-click="logout()" style="font-size: 20px;">ออกจากระบบ</a></div>
    </div>
</div> -->
<div class="desktop" style="border-top: 10px solid #eb125f;">
</div>
<!--<nav class="navbar navbar-light navbar-expand-md bg-faded justify-content-center">
    <div class="navbar-collapse collapse w-100" id="collapsingNavbar3">
        <ul class="navbar-nav container w-100" style="text-align: center;">
            <li class="nav-itemr" style="width:100%;">
                <a style="font-size: 20px;" class="nav-link" href="https://shelongs.com/"><b>เข้าสู่เว็บไซต์</b></a>
            </li>
            <li class="nav-itemr" style="width:100%;">
                <a style="font-size: 20px;" class="nav-link" href="#!account"><b>ข้อมูลส่วนตัว</b></a>
            </li>
            <li class="nav-itemr" style="width:100%;">
                <a style="font-size: 20px;" class="nav-link" href="#!beautyprofile"><b>ข้อมูลบิวตี้โปรไฟล์</b></a>
            </li>
            <li class="nav-itemr" style="width:100%;">
                <a style="font-size: 20px;" class="nav-link" href="#!package"><b>สมัครแพ็กเกจ</b></a>
            </li>
            <li class="nav-itemr" style="width:100%;">
                <a style="font-size: 20px;" class="nav-link" href="#"><b>แจ้งชำระเงิน</b></a>
            </li>
            <li class="nav-itemr" style="width:100%;">
                <a style="font-size: 20px;" class="nav-link" href="#"><b>เช็คสถานะการจัดส่ง</b></a>
            </li>
            <li class="nav-itemr" style="width:100%;">
                <a style="font-size: 20px;" class="nav-link" href="#"><b>แจ้งคืนสินค้า</b></a>
            </li>
        </ul>
    </div>
    </nav>-->


<nav class=" header-navbar navbar navbar-with-menu  fixed-top navbar-semi-dark navbar-shadow mobile" style="background-color: #eb125f;border-bottom: 1px solid #eb125f;"
    ng-controller="login">
    <a class="navbar-brand" href="#" style="color:white">SHELONGS</a>
    <button style="color:white" class="navbar-toggler toggler-example float-right" type="button" data-toggle="collapse"
        data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"><span><i
                class="fa fa-bars fa-1x"></i></span></button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent1">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item" style="border-bottom: 1px solid;border-color: white;">
                <h3 class="nav-link" style="color:white">บัญชีของฉัน</h3>
            </li>
            <li class="nav-item" style="border-bottom: 1px solid;border-color: white;">
                <a class="nav-link" style="color:white" href="#!dashboard">หน้าแรก</a>
            </li>
            <li class="nav-item" style="border-bottom: 1px solid;border-color: white;">
                <a class="nav-link" style="color:white" href="">คำสั่งซื้อของฉัน</a>
            </li>
            <li class="nav-item" style="border-bottom: 1px solid;border-color: white;">
                <a class="nav-link" style="color:white" href="">สินค้าที่สั่งซื้อแล้ว</a>
            </li>
            <li class="nav-item" style="border-bottom: 1px solid;border-color: white;">
                <a class="nav-link" style="color:white" href="">รีวิว</a>
            </li>
            <li class="nav-item" style="border-bottom: 1px solid;border-color: white;">
                <a class="nav-link" style="color:white" href="">รายการสินค้าที่อยากได้</a>
            </li>
            <li class="nav-item" style="border-bottom: 1px solid;border-color: white;">
                <a class="nav-link" style="color:white" href="#!beautyprofile">Beauty Profile</a>
            </li>
            <li class="nav-item" style="border-bottom: 1px solid;border-color: white;">
                <a class="nav-link" style="color:white" href="#!account">ข้อมูลของฉัน</a>
            </li>
            <li class="nav-item" style="border-bottom: 1px solid;border-color: white;">
                <a class="nav-link" style="color:white" href="#!package">สมัครแพ็คเกจ</a>
            </li>
            <li class="nav-item" style="border-bottom: 1px solid;border-color: white;">
                <a class="nav-link" style="color:white" href="#!confirmpayment">แจ้งชำระเงิน</a>
            </li>
            <!-- <li class="nav-item" style="border-bottom: 1px solid;border-color: white;">
                <a class="nav-link" style="color:white" href="#!package">สมัครแพ็กเกจ</a>
            </li> -->
            <li class="nav-item">
                <a class="nav-link" style="color:white" href="#" ng-click="logout()">ออกจากระบบ</a>
            </li>
        </ul>
    </div>
</nav>


<div class="mobile" style="height:50px"></div>
<div class="container" style="padding-bottom:20px;" ng-controller="login">
    <div class="row">
        <div class="container desktop col-md-2">
            <h3 style="font-size:20px;">บัญชีของฉัน</h3>
            <a style="font-size:20px;" href="#">หน้าเว็บไซต์</a>
            <br>
            <a style="font-size:20px;" href="#!dashboard">บัญชีของคุณ</a>
            <br>
            <a style="font-size:20px;" href="#!order">คำสั่งซื้อของฉัน</a>
            <br>
            <a style="font-size:20px;" href="#">สินค้าที่สั่งซื้อแล้ว</a>
            <br>
            <a style="font-size:20px;" href="#">รีวิว</a>
            <br>
            <a style="font-size:20px;" href="#">รายการสินค้าที่อยากได้</a>
            <br>
            <a style="font-size:20px;" href="#!beautyprofile">Beauty Profile</a>
            <br>
            <a style="font-size:20px;" href="#!account">ข้อมูลของฉัน</a>
            <br>
            <a style="font-size:20px;" href="#!package">สมัครแพ็คเกจ</a>
            <br>
            <a style="font-size:20px;" href="#!confirmpayment">แจ้งชำระเงิน</a>
        </div>