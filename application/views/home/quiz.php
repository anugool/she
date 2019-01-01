<div class="container-fluid BG " ng-show="start" ng-init="start=true;">
    <div class=" container desktop" style="padding-top: 100px; height: 850px">
        <p style="text-align: center; color: #eb125f; font-size: 40px;"><strong>มองหาเนื้อคู่ที่เหมาะกับผิวของคุณอยู่หรือเปล่า?</strong></p>
        <p style="text-align: center; font-size: 30px;">มาเล่น Quiz สนุกๆแล้วมาดูกันว่า Beauty Item</p>
        <p style="text-align: center; font-size: 30px;">ชิ้นไหนเป็นตัวคุณที่สุด!</p>
        {{sessionStorage.id}}

        <div class="container" style="position: relative;"><img style="width: 40%; display: block; margin-left: auto; margin-right: auto; "
                src="<?php echo base_url();?>app-assets/images/Mouth.png" />
            <a href="" ng-click="quiz=true; start=false" class="centered" style="font-size: 30px; color: #eb125f;">มาเริ่มกันเลย!</a></div>
    </div>

    <div class="container-fluid BG mobile" style="height: 650px">

        <div class="container" style="padding-top: 50px;">
            <p style="text-align: center; color: #eb125f; font-size: 30px;"><strong>มองหาเนื้อคู่ที่เหมาะกับผิวของคุณอยู่หรือเปล่า?</strong></p>
            <p style="text-align: center; font-size: 20px;">มาเล่น Quiz สนุกๆแล้วมาดูกันว่า Beauty Item</p>
            <p style="text-align: center; font-size: 20px;">ชิ้นไหนเป็นตัวคุณที่สุด!</p>

            <div class="container" style="position: relative;"><img style="width: 80%; display: block; margin-left: auto; margin-right: auto; "
                    src="<?php echo base_url();?>app-assets/images/Mouth.png" />
                <a href="" ng-click="quiz=true; start=false" class="centered" style="font-size: 20px; color: #eb125f;"><b>มาเริ่มกันเลย!</b></a></div>
        </div>

    </div>
</div>

<!-- <div class="text-center mobile" style="padding-top:30px;">
    <a class="navbar-brand" href="#"><img src="<?php echo base_url();?>app-assets/images/logo-icon.png" alt="Logo"
            style="height: 100px;">
    </a>
</div> -->

<div class="container-fluid BG" ng-controller="quiz" ng-show="quiz">
    <div class="container" ng-show="View1" ng-init="View1=true">
        <h3 class="conHeader">ลองดูสักนิด
            ว่าสีผิวของคุณเป็นอย่างไร?</h3>
        <div class="alert alert-danger" role="alert" ng-show="alert1">
            กรุณาเลือกข้อมูลของท่าน
        </div>
        <div class="container ConEdit">

            <input type="radio" name="skincolor" id="a01" class="input-hidden" value="ขาว" ng-model="selectView1" />
            <label for="a01" class="column3">
                <img src="<?php echo base_url();?>app-assets/images/Q01/ขาว.png" class="imageRadio" />
                <p style="text-align:center;">ขาว</p>
            </label>

            <input type="radio" name="skincolor" id="a02" class="input-hidden" value="สองสี" ng-model="selectView1" />
            <label for="a02" class="column3">
                <img src="<?php echo base_url();?>app-assets/images/Q01/สองสี.png" class="imageRadio" />
                <p style="text-align:center;">สองสี</p>
            </label>

            <input type="radio" name="skincolor" id="a03" class="input-hidden" value="ผิวเข้ม" ng-model="selectView1" />
            <label for="a03" class="column3">
                <img src="<?php echo base_url();?>app-assets/images/Q01/เข้ม.png" class="imageRadio" />
                <p style="text-align:center;">ผิวเข้ม</p>
        </div>
        <div style="text-align:center;">
            <button type="button" class="btn btn-lg" ng-click="select1()">ถัดไป</button>
        </div>

    </div>

    <div class="container" ng-show="View2">
        <h3 class="conHeader">ประเภทผิวของคุณเป็นแบบไหน?</h3>
        <div class="alert alert-danger" role="alert" ng-show="alert1">
            กรุณาเลือกข้อมูลของท่าน
        </div>
        <div class="container ConEdit">

            <input type="radio" name="skin" id="b01" class="input-hidden" value="แห้ง" ng-model="selectView2" />
            <label for="b01" class="column4">
                <img src="<?php echo base_url();?>app-assets/images/Q02/แห้ง.png" class="imageRadio" />
                <p style="text-align:center;">แห้ง</p>
            </label>

            <input type="radio" name="skin" id="b02" class="input-hidden" value="มัน" ng-model="selectView2" />
            <label for="b02" class="column4">
                <img src="<?php echo base_url();?>app-assets/images/Q02/มัน.png" class="imageRadio" />
                <p style="text-align:center;">มัน</p>
            </label>

            <input type="radio" name="skin" id="b03" class="input-hidden" value="ผสม" ng-model="selectView2" />
            <label for="b03" class="column4">
                <img src="<?php echo base_url();?>app-assets/images/Q02/ผสม.png" class="imageRadio" ng-model="selectView2" />
                <p style="text-align:center;">ผสม</p>
            </label>

            <input type="radio" name="skin" id="b04" class="input-hidden" value="ธรรมดา" ng-model="selectView2" />
            <label for="b04" class="column4">
                <img src="<?php echo base_url();?>app-assets/images/Q02/ธรรมดา.png" class="imageRadio" />
                <p style="text-align:center;">ธรรมดา</p>
            </label>
        </div>
        <div style="text-align:center;">
            <button type="button" class="btn btn-lg" style="background-color: #dddddd;" ng-click="View1=true; View2=false">ย้อนกลับ</button>
            <button type="button" class="btn btn-lg" ng-click="select2()">ถัดไป</button>
        </div>
    </div>

    <div class="container" ng-show="View3">
        <h3 class="conHeader">ปัญหาชวนหงุดหงิดใจคุณคือ?</h3>
        <p style="text-align: center;">(เลือกได้มากกว่า1 ข้อ)</p>
        <div class="alert alert-danger" role="alert" ng-show="alert1">
            กรุณาเลือกข้อมูลของท่าน
        </div>
        <div class="container ConEdit desktop">
            <input type="checkbox" name="Irritability Problem" id="c01" class="input-hidden" value="ผิวหน้าหม่นหมอง"
                ng-model="selectView301" ng-click="addquiz03(1)" ng-true-value="'YES'" ng-false-value="'NO'" />
            <label for="c01" class="column5">
                <img src="<?php echo base_url();?>app-assets/images/Q03/ผิวหน้าหม่นหมอง.png" class="imageRadio" />
                <p style="text-align:center;">ผิวหน้าหม่นหมอง</p>
            </label>
            <input type="checkbox" name="Irritability Problem" id="c02" class="input-hidden" value="ริ้วรอย" ng-model="selectView302"
                ng-click="addquiz03(2)" ng-true-value="'YES'" ng-false-value="'NO'" />
            <label for="c02" class="column5">
                <img src="<?php echo base_url();?>app-assets/images/Q03/ริ้วรอย.png" class="imageRadio" />
                <p style="text-align:center;">ริ้วรอย</p>
            </label>
            <input type="checkbox" name="Irritability Problem" id="c03" class="input-hidden" value="กระจุดด่างดำ"
                ng-model="selectView303" ng-click="addquiz03(3)" ng-true-value="'YES'" ng-false-value="'NO'" />
            <label for="c03" class="column5">
                <img src="<?php echo base_url();?>app-assets/images/Q03/กระจุดด่างดำ.png" class="imageRadio" />
                <p style="text-align:center;">กระ/จุดด่างดำ</p>
            </label>
            <input type="checkbox" name="Irritability Problem" id="c04" class="input-hidden" value="ฝ้า" ng-model="selectView304"
                ng-click="addquiz03(4)" ng-true-value="'YES'" ng-false-value="'NO'" />
            <label for="c04" class="column5">
                <img src="<?php echo base_url();?>app-assets/images/Q03/ฝ้า.png" class="imageRadio" />
                <p style="text-align:center;">ฝ้า</p>
            </label>
            <input type="checkbox" name="Irritability Problem" id="c05" class="input-hidden" value="รูขุมขนกว้าง"
                ng-model="selectView305" ng-click="addquiz03(5)" ng-true-value="'YES'" ng-false-value="'NO'" />
            <label for="c05" class="column5">
                <img src="<?php echo base_url();?>app-assets/images/Q03/รูขุมขนกว้าง.png" class="imageRadio" />
                <p style="text-align:center;">รูขุมขนกว้าง</p>
            </label>
            <input type="checkbox" name="Irritability Problem" id="c06" class="input-hidden" value="ผิวมัน" ng-model="selectView306"
                ng-click="addquiz03(6)" ng-true-value="'YES'" ng-false-value="'NO'" />
            <label for="c06" class="column5">
                <img src="<?php echo base_url();?>app-assets/images/Q03/มัน.png" class="imageRadio" />
                <p style="text-align:center;">ผิวมัน</p>
            </label>
            <input type="checkbox" name="Irritability Problem" id="c07" class="input-hidden" value="ผิวแพ้ง่าย"
                ng-model="selectView307" ng-click="addquiz03(7)" ng-true-value="'YES'" ng-false-value="'NO'" />
            <label for="c07" class="column5">
                <img src="<?php echo base_url();?>app-assets/images/Q03/แพ้ง่าย.png" class="imageRadio" />
                <p style="text-align:center;">ผิวแพ้ง่าย</p>
            </label>
            <input type="checkbox" name="Irritability Problem" id="c08" class="input-hidden" value="ผิวแห้งลอก"
                ng-model="selectView308" ng-click="addquiz03(8)" ng-true-value="'YES'" ng-false-value="'NO'" />
            <label for="c08" class="column5">
                <img src="<?php echo base_url();?>app-assets/images/Q03/ผิวแห้งลอก.png" class="imageRadio" />
                <p style="text-align:center;">ผิวแห้งลอก</p>
            </label>
            <input type="checkbox" name="Irritability Problem" id="c09" class="input-hidden" value="ผิวขาดน้ำ" ng-model="selectView309"
                ng-click="addquiz03(9)" ng-true-value="'YES'" ng-false-value="'NO'" />
            <label for="c09" class="column5">
                <img src="<?php echo base_url();?>app-assets/images/Q03/ผิวขาดน้ำ.png" class="imageRadio" />
                <p style="text-align:center;">ผิวขาดน้ำ</p>
            </label>
            <input type="checkbox" name="Irritability Problem" id="c10" class="input-hidden" value="สิว" ng-model="selectView310"
                ng-click="addquiz03(10)" ng-true-value="'YES'" ng-false-value="'NO'" />
            <label for="c10" class="column5">
                <img src="<?php echo base_url();?>app-assets/images/Q03/สิว.png" class="imageRadio" />
                <p style="text-align:center;">สิว</p>
            </label>
        </div>
        <div class="container ConEdit mobile">
            <input type="checkbox" name="Irritability Problem" id="c01" class="input-hidden" value="ผิวหน้าหม่นหมอง"
                ng-model="selectView301" ng-true-value="'YES'" ng-false-value="'NO'" />
            <label for="c01" class="column3">
                <img src="<?php echo base_url();?>app-assets/images/Q03/ผิวหน้าหม่นหมอง.png" class="imageRadio" />
                <p style="text-align:center;">ผิวหน้าหม่นหมอง</p>
            </label>
            <input type="checkbox" name="Irritability Problem" id="c02" class="input-hidden" value="ริ้วรอย" ng-model="selectView302"
                ng-true-value="'YES'" ng-false-value="'NO'" />
            <label for="c02" class="column3">
                <img src="<?php echo base_url();?>app-assets/images/Q03/ริ้วรอย.png" class="imageRadio" />
                <p style="text-align:center;">ริ้วรอย</p>
            </label>
            <input type="checkbox" name="Irritability Problem" id="c03" class="input-hidden" value="กระจุดด่างดำ"
                ng-model="selectView303" ng-true-value="'YES'" ng-false-value="'NO'" />
            <label for="c03" class="column3">
                <img src="<?php echo base_url();?>app-assets/images/Q03/กระจุดด่างดำ.png" class="imageRadio" />
                <p style="text-align:center;">กระ/จุดด่างดำ</p>
            </label>
            <input type="checkbox" name="Irritability Problem" id="c04" class="input-hidden" value="ฝ้า" ng-model="selectView304"
                ng-true-value="'YES'" ng-false-value="'NO'" />
            <label for="c04" class="column2">
                <img src="<?php echo base_url();?>app-assets/images/Q03/ฝ้า.png" class="imageRadio" />
                <p style="text-align:center;">ฝ้า</p>
            </label>
            <input type="checkbox" name="Irritability Problem" id="c05" class="input-hidden" value="รูขุมขนกว้าง"
                ng-model="selectView305" ng-true-value="'YES'" ng-false-value="'NO'" />
            <label for="c05" class="column2">
                <img src="<?php echo base_url();?>app-assets/images/Q03/รูขุมขนกว้าง.png" class="imageRadio" />
                <p style="text-align:center;">รูขุมขนกว้าง</p>
            </label>
            <input type="checkbox" name="Irritability Problem" id="c06" class="input-hidden" value="ผิวมัน" ng-model="selectView306"
                ng-true-value="'YES'" ng-false-value="'NO'" />
            <label for="c06" class="column3">
                <img src="<?php echo base_url();?>app-assets/images/Q03/มัน.png" class="imageRadio" />
                <p style="text-align:center;">ผิวมัน</p>
            </label>
            <input type="checkbox" name="Irritability Problem" id="c07" class="input-hidden" value="ผิวแพ้ง่าย"
                ng-model="selectView307" ng-true-value="'YES'" ng-false-value="'NO'" />
            <label for="c07" class="column3">
                <img src="<?php echo base_url();?>app-assets/images/Q03/แพ้ง่าย.png" class="imageRadio" />
                <p style="text-align:center;">ผิวแพ้ง่าย</p>
            </label>
            <input type="checkbox" name="Irritability Problem" id="c08" class="input-hidden" value="ผิวแห้งลอก"
                ng-model="selectView308" ng-true-value="'YES'" ng-false-value="'NO'" />
            <label for="c08" class="column3">
                <img src="<?php echo base_url();?>app-assets/images/Q03/ผิวแห้งลอก.png" class="imageRadio" />
                <p style="text-align:center;">ผิวแห้งลอก</p>
            </label>
            <input type="checkbox" name="Irritability Problem" id="c09" class="input-hidden" value="ผิวขาดน้ำ" ng-model="selectView309"
                ng-true-value="'YES'" ng-false-value="'NO'" />
            <label for="c09" class="column2">
                <img src="<?php echo base_url();?>app-assets/images/Q03/ผิวขาดน้ำ.png" class="imageRadio" />
                <p style="text-align:center;">ผิวขาดน้ำ</p>
            </label>
            <input type="checkbox" name="Irritability Problem" id="c10" class="input-hidden" value="สิว" ng-model="selectView310"
                ng-true-value="'YES'" ng-false-value="'NO'" />
            <label for="c10" class="column2">
                <img src="<?php echo base_url();?>app-assets/images/Q03/สิว.png" class="imageRadio" />
                <p style="text-align:center;">สิว</p>
            </label>
        </div>
        <div style="text-align:center; padding-bottom: 50px">
            <button type="button" class="btn btn-lg" style="background-color: #dddddd;" ng-click="View2=true; View3=false">ย้อนกลับ</button>
            <button type="button" class="btn btn-lg" ng-click="select3()">ถัดไป</button>
        </div>
    </div>

    <div class="container" ng-show="View4">
        <h3 class="conHeader">คุณให้ความสำคัญกับเครื่องสำอางประเภทไหนมากที่สุด?</h3>
        <p style="text-align: center;">(เลือกได้มากกว่า1 ข้อ)</p>
        <div class="alert alert-danger" role="alert" ng-show="alert1">
            กรุณาเลือกข้อมูลของท่าน
        </div>
        <div class="container ConEdit desktop">
            <input type="checkbox" name="Like Cosmetics Category" id="d01" class="input-hidden" value="รองพื้น"
                ng-model="selectView401" ng-click="addquiz04(1)" ng-true-value="'YES'" ng-false-value="'NO'" />
            <label for="d01" class="column5">
                <img src="<?php echo base_url();?>app-assets/images/Q04/รองพื้น.png" class="imageRadio" />
                <p style="text-align:center;">รองพื้น</p>
            </label>
            <input type="checkbox" name="Like Cosmetics Category" id="d02" class="input-hidden" value="แป้ง" ng-model="selectView402"
                ng-click="addquiz04(2)" ng-true-value="'YES'" ng-false-value="'NO'" />
            <label for="d02" class="column5">
                <img src="<?php echo base_url();?>app-assets/images/Q04/แป้ง.png" class="imageRadio" />
                <p style="text-align:center;">แป้ง</p>
            </label>
            <input type="checkbox" name="Like Cosmetics Category" id="d03" class="input-hidden" value="บลัชออน"
                ng-model="selectView403" ng-click="addquiz04(3)" ng-true-value="'YES'" ng-false-value="'NO'" />
            <label for="d03" class="column5">
                <img src="<?php echo base_url();?>app-assets/images/Q04/บลัชออน.png" class="imageRadio" />
                <p style="text-align:center;">บลัชออน</p>
            </label>
            <input type="checkbox" name="Like Cosmetics Category" id="d04" class="input-hidden" value="อายแชโดว์"
                ng-model="selectView404" ng-click="addquiz04(4)" ng-true-value="'YES'" ng-false-value="'NO'" />
            <label for="d04" class="column5">
                <img src="<?php echo base_url();?>app-assets/images/Q04/อายแชโดว์.png" class="imageRadio" />
                <p style="text-align:center;">อายแชโดว์</p>
            </label>
            <input type="checkbox" name="Like Cosmetics Category" id="d05" class="input-hidden" value="ไฮไลท์" ng-model="selectView405"
                ng-click="addquiz04(5)" ng-true-value="'YES'" ng-false-value="'NO'" />
            <label for="d05" class="column5">
                <img src="<?php echo base_url();?>app-assets/images/Q04/ไฮไลท์.png" class="imageRadio" />
                <p style="text-align:center;">ไฮไลท์</p>
            </label>
            <input type="checkbox" name="Like Cosmetics Category" id="d06" class="input-hidden" value="คอนทัวร์และเฉดดิ้ง"
                ng-model="selectView406" ng-click="addquiz04(6)" ng-true-value="'YES'" ng-false-value="'NO'" />
            <label for="d06" class="column5">
                <img src="<?php echo base_url();?>app-assets/images/Q04/คอนทัวร์และเฉดดิ้ง.png" class="imageRadio" />
                <p style="text-align:center;">คอนทัวร์และเฉดดิ้ง</p>
            </label>
            <input type="checkbox" name="Like Cosmetics Category" id="d07" class="input-hidden" value="ลิปสติก"
                ng-model="selectView407" ng-click="addquiz04(7)" ng-true-value="'YES'" ng-false-value="'NO'" />
            <label for="d07" class="column5">
                <img src="<?php echo base_url();?>app-assets/images/Q04/ลิปสติก.png" class="imageRadio" />
                <p style="text-align:center;">ลิปสติก</p>
            </label>
            <input type="checkbox" name="Like Cosmetics Category" id="d08" class="input-hidden" value="มาสคาร่า"
                ng-model="selectView408" ng-click="addquiz04(8)" ng-true-value="'YES'" ng-false-value="'NO'" />
            <label for="d08" class="column5">
                <img src="<?php echo base_url();?>app-assets/images/Q04/มาสคาร่า.png" class="imageRadio" />
                <p style="text-align:center;">มาสคาร่า</p>
            </label>
            <input type="checkbox" name="Like Cosmetics Category" id="d09" class="input-hidden" value="อายไลเนอร์"
                ng-model="selectView409" ng-click="addquiz04(9)" ng-true-value="'YES'" ng-false-value="'NO'" />
            <label for="d09" class="column5">
                <img src="<?php echo base_url();?>app-assets/images/Q04/อายไลเนอร์.png" class="imageRadio" />
                <p style="text-align:center;">อายไลเนอร์</p>
            </label>
            <input type="checkbox" name="Like Cosmetics Category" id="d10" class="input-hidden" value="ผลิตภัณฑ์คิ้ว"
                ng-model="selectView410" ng-click="addquiz04(10)" ng-true-value="'YES'" ng-false-value="'NO'" />
            <label for="d10" class="column5">
                <img src="<?php echo base_url();?>app-assets/images/Q04/ผลิตภัณฑ์คิ้ว.png" class="imageRadio" />
                <p style="text-align:center;">ผลิตภัณฑ์คิ้ว</p>
            </label>
        </div>
        <div class="container ConEdit mobile">
            <input type="checkbox" name="Like Cosmetics Category" id="d01" class="input-hidden" value="รองพื้น"
                ng-model="selectView401" ng-true-value="'YES'" ng-false-value="'NO'" />
            <label for="d01" class="column3">
                <img src="<?php echo base_url();?>app-assets/images/Q04/รองพื้น.png" class="imageRadio" />
                <p style="text-align:center;">รองพื้น</p>
            </label>
            <input type="checkbox" name="Like Cosmetics Category" id="d02" class="input-hidden" value="แป้ง" ng-model="selectView402"
                ng-true-value="'YES'" ng-false-value="'NO'" />
            <label for="d02" class="column3">
                <img src="<?php echo base_url();?>app-assets/images/Q04/แป้ง.png" class="imageRadio" />
                <p style="text-align:center;">แป้ง</p>
            </label>
            <input type="checkbox" name="Like Cosmetics Category" id="d03" class="input-hidden" value="บลัชออน"
                ng-model="selectView403" ng-true-value="'YES'" ng-false-value="'NO'" />
            <label for="d03" class="column3">
                <img src="<?php echo base_url();?>app-assets/images/Q04/บลัชออน.png" class="imageRadio" />
                <p style="text-align:center;">บลัชออน</p>
            </label>
            <input type="checkbox" name="Like Cosmetics Category" id="d04" class="input-hidden" value="อายแชโดว์"
                ng-model="selectView404" ng-true-value="'YES'" ng-false-value="'NO'" />
            <label for="d04" class="column2">
                <img src="<?php echo base_url();?>app-assets/images/Q04/อายแชโดว์.png" class="imageRadio" />
                <p style="text-align:center;">อายแชโดว์</p>
            </label>
            <input type="checkbox" name="Like Cosmetics Category" id="d05" class="input-hidden" value="ไฮไลท์" ng-model="selectView405"
                ng-true-value="'YES'" ng-false-value="'NO'" />
            <label for="d05" class="column2">
                <img src="<?php echo base_url();?>app-assets/images/Q04/ไฮไลท์.png" class="imageRadio" />
                <p style="text-align:center;">ไฮไลท์</p>
            </label>
            <input type="checkbox" name="Like Cosmetics Category" id="d06" class="input-hidden" value="คอนทัวร์และเฉดดิ้ง"
                ng-model="selectView406" ng-true-value="'YES'" ng-false-value="'NO'" />
            <label for="d06" class="column3">
                <img src="<?php echo base_url();?>app-assets/images/Q04/คอนทัวร์และเฉดดิ้ง.png" class="imageRadio" />
                <p style="text-align:center;">คอนทัวร์และเฉดดิ้ง</p>
            </label>
            <input type="checkbox" name="Like Cosmetics Category" id="d07" class="input-hidden" value="ลิปสติก"
                ng-model="selectView407" ng-true-value="'YES'" ng-false-value="'NO'" />
            <label for="d07" class="column3">
                <img src="<?php echo base_url();?>app-assets/images/Q04/ลิปสติก.png" class="imageRadio" />
                <p style="text-align:center;">ลิปสติก</p>
            </label>
            <input type="checkbox" name="Like Cosmetics Category" id="d08" class="input-hidden" value="มาสคาร่า"
                ng-model="selectView408" ng-true-value="'YES'" ng-false-value="'NO'" />
            <label for="d08" class="column3">
                <img src="<?php echo base_url();?>app-assets/images/Q04/มาสคาร่า.png" class="imageRadio" />
                <p style="text-align:center;">มาสคาร่า</p>
            </label>
            <input type="checkbox" name="Like Cosmetics Category" id="d09" class="input-hidden" value="อายไลเนอร์"
                ng-model="selectView409" ng-true-value="'YES'" ng-false-value="'NO'" />
            <label for="d09" class="column2">
                <img src="<?php echo base_url();?>app-assets/images/Q04/อายไลเนอร์.png" class="imageRadio" />
                <p style="text-align:center;">อายไลเนอร์</p>
            </label>
            <input type="checkbox" name="Like Cosmetics Category" id="d10" class="input-hidden" value="ผลิตภัณฑ์คิ้ว"
                ng-model="selectView410" ng-true-value="'YES'" ng-false-value="'NO'" />
            <label for="d10" class="column2">
                <img src="<?php echo base_url();?>app-assets/images/Q04/ผลิตภัณฑ์คิ้ว.png" class="imageRadio" />
                <p style="text-align:center;">ผลิตภัณฑ์คิ้ว</p>
            </label>
        </div>
        <div style="text-align:center; padding-bottom: 50px">
            <button type="button" class="btn btn-lg" style="background-color: #dddddd;" ng-click="View3=true; View4=false">ย้อนกลับ</button>
            <button type="button" class="btn btn-lg" ng-click="select4()">ถัดไป</button>
        </div>
    </div>

    <div class="container-fluid TopHomeBg2" style="padding-top:80px" ng-show="View5">
        <div class="container ConEdit">
            <h3 style="text-align: center; padding-bottom: 20px">โปรไฟล์ของคุณ</h3>
            <div class="alert alert-danger" role="alert" ng-show="alert1">
                กรุณากรอกข้อมูลให้ครบ
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-1">
                    <label>ชื่อ</label>
                    <input type="text" class="form-control" ng-model="firstName">
                </div>
                <div class="col-md-6 mb-1">
                    <label>นามสกุล</label>
                    <input type="text" class="form-control" name="lastName" ng-model="lastName">
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-3 mb-1">
                    <label>อายุ</label>
                    <input type="text" class="form-control col-md-11" name="age" ng-model="age">
                </div>
                <div class="col-md-3 mb-1">
                    <label>เพศ</label>
                    <div class="radio">
                        <label class="col-md-4"><input type="radio" name="sex" value="ชาย" ng-model="sex">
                            ชาย</label>
                        <label class="col-md-4"><input type="radio" name="sex" value="หญิง" ng-model="sex">
                            หญิง</label>
                    </div>
                </div>
                <div class="col-md-6 mb-1">
                    <label>โทรศัพท์</label>
                    <input type="text" class="form-control" name="tel" ng-model="tel">
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-4 mb-1">
                    <label>บ้านเลขที่</label>
                    <input type="text" class="form-control col-md-11" name="houseno" ng-model="houseno">
                </div>
                <div class="col-md-4 mb-1">
                    <label>หมู่บ้าน/อาคาร</label>
                    <input type="text" class="form-control col-md-11" name="vaillageorbuilding" ng-model="vaillageorbuilding">
                </div>
                <div class="col-md-4 mb-1">
                    <label>ตรอก/ซอย</label>
                    <input type="text" class="form-control col-md-11" name="alleyway" ng-model="alleyway">
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-4 mb-1">
                    <label>ถนน</label>
                    <input type="text" class="form-control col-md-11" name="road" ng-model="road">
                </div>
                <div class="col-md-4 mb-1">
                    <label>ตำบล/แขวง</label>
                    <input type="text" class="form-control col-md-11" name="subdistric" ng-model="subdistric">
                </div>
                <div class="col-md-4 mb-1">
                    <label>อำเภอ/เขต</label>
                    <input type="text" class="form-control col-md-11" name="distric" ng-model="distric">
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-8 mb-1">
                    <label>จังหวัด</label>
                    <select class="form-control col-md-11" ng-model="provinceTh" ng-options="item for item in province">
                    </select>
                </div>
                <div class="col-md-4 mb-1">
                    <label>รหัสไปรษณีย์</label>
                    <input type="text" class="form-control col-md-11" name="postcode" ng-model="postcode">
                </div>
            </div>

            <div class="form-row" style="padding-bottom:20px">
                <div class="col-md-12 mb-1">
                    <label>งบประมาณซื้อเครื่องสำอาง/เดือน</label>
                    <div class="radio">
                        <label class="col-md-4"><input type="radio" name="budget" value="ต่ำกว่า 1,500 บาท" ng-model="budget">
                            ต่ำกว่า 1,500 บาท</label>
                    </div>
                    <div class="radio">
                        <label class="col-md-4"><input type="radio" name="budget" value="1,500 - 3,000 บาท" ng-model="budget">
                            1,500 - 3,000 บาท</label>
                    </div>
                    <div class="radio">
                        <label class="col-md-4"><input type="radio" name="budget" value="3,000 - 4,500 บาท" ng-model="budget">
                            3,000 - 4,500 บาท</label>
                    </div>
                    <div class="radio">
                        <label class="col-md-4"><input type="radio" name="budget" value="มากกว่า 6,000 บาท" ng-model="budget">
                            มากกว่า 6,000 บาท</label>
                    </div>
                </div>
            </div>
            <div class="checkbox" style="text-align:center;">
                <label class="col-md-4"><input type="checkbox" name="policy" ng-true-value="'YES'" ng-false-value="'NO'"
                        ng-model="policy">
                    <a target="_blank" href="https://www.shelongs.com/%E0%B9%80%E0%B8%87%E0%B8%B7%E0%B9%88%E0%B8%AD%E0%B8%99%E0%B9%84%E0%B8%82%E0%B9%81%E0%B8%A5%E0%B8%B0%E0%B8%82%E0%B9%89%E0%B8%AD%E0%B8%95%E0%B8%81%E0%B8%A5%E0%B8%87/?fbclid=IwAR1PmToChppCyDbPpvCwDCcZzRivcFn0-G-C4iZhFN58YjkERQMIxglCxvU">ฉันยอมรับเงื่อนไขการสมัคร
                        และ นโยบายข้อมูลส่วนบุคคล</a></label>
            </div>
            <div style="text-align:center; padding-bottom:20px">
                <button type="button" class="btn btn-lg" style="background-color: #dddddd;" ng-click="View4=true; View5=false">ย้อนกลับ</button>
                <button type="submit" class="btn btn-lg" ng-click="select5()">บันทึกข้อมูล</button>
            </div>
        </div>

    </div>
</div>