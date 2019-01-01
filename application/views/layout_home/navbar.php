<div class="container-fluid" ng-init="checkmunu()" ng-controller="login">
    <nav class=" header-navbar navbar navbar-with-menu  fixed-top navbar-semi-dark navbar-shadow mobile" style="background-color: black;">
        <div class="row">
            <div class="col-2">
                <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1"
                    aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation" style="color:white;">
                    <span><i class="fa fa-bars" style="font-size: 16px;"></i></span></button>
            </div>
            <div class="col-4" style="font-family: avenir;">
                <div class="row">
                    <div class="dropdown" ng-show="logoutmenu">
                        <a aria-haspopup="true" aria-expanded="false" ng-click="loginview()" style="color:white;">
                            <i class="fa fa-user-circle" style="font-size: 18px;"></i><span style="font-size: 18px;">
                                ACCOUNT</span>
                        </a>
                    </div>
                    <div class="dropdown" ng-show="loginmenu">
                        <a aria-haspopup="true" aria-expanded="false" href="#!account" style="color:white;">
                            <i class="fa fa-user-circle " style="font-size: 18px;"></i><span style="font-size: 18px;">
                                {{fnamenav}}</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <form class="form-inline float-right" style="padding-top:2px;">
                    <div class="input-group">
                        <input type="text" placeholder="Search" style="border-radius: 20px 0px  0px 20px; background-color: white; border:0; width:90px; height:27px; ">
                        <div class="input-group-append">
                            <button class="btn btn-search btn-secondary" style="border-radius: 0px 20px  20px 0px; background-color: white;   height:27px">
                                <i class="fa fa-search" style="color:black; font-size: 16px;"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="collapse navbar-collapse" id="navbarSupportedContent1" style="background-color: rgba(255, 255, 255, 0.8);  left:0; top:50px; position: absolute; font-family: 'db_helvethaica_x65_med';">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" style="color:black; padding-left: 10px; padding-right: 10px;" href="#!specialpackage">BEAUTY
                        BOX</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:black; padding-left: 10px; padding-right: 10px;" href="#!bestietalk">Besite
                        Talk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:black; padding-left: 10px; padding-right: 10px;" href="#">Community</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:black; padding-left: 10px; padding-right: 10px;" href="#">Exclusive
                        Interview</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:black; padding-left: 10px; padding-right: 10px;" href="#!bestpicks">กิจกรรมและโปรโมชั่น</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:black; padding-left: 10px; padding-right: 10px;" href="#">ร้านค้า</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="mobile" style="padding-top: 50px; height: 150px">
        <a href="#">
            <img class="center" src="<?php echo base_url();?>app-assets/images/logo-icon.png" style="width: 30%;">
        </a>
    </div>

    <div class="row">
        <div class="col-4">
        </div>
        <div class="col-4 desktop">
            <a href="#">
                <img class="center" src="<?php echo base_url();?>app-assets/images/logo-icon.png" style="width:50%">
            </a>
        </div>
        <div class="col-4 desktop">
            <div class="float-right">
                <div class="row" ng-show="logoutmenu" style="padding-right:20px;">
                    <a href="" ng-click="loginview()" style="font-size:25px;">เข้าสู่ระบบ |</a>&nbsp;
                    <a href="" ng-click="viewregister()" style="font-size:25px;">สมัครสมาชิก</a>
                </div>
                <div class="dropdown" ng-show="loginmenu">
                    <a id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div style="padding-top:20px;">
                            <h2 style="color:black;" ng-show="loginmenu"><b>Account</b>
                                <i class="fa fa-user-circle i-menu"></i></h2>
                        </div>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#!account">บัญชีของฉัน</a>
                            <a class="dropdown-item" ng-click="logout()" href="">ออกจากระบบ</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <div class="desktop">
    </div>

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" style="font-size: 25px; font-weight: bold; color: black; font-family: avenir;"><span><i
                                class="fa fa-bars" style="font-size: 20px;"></i></span> &nbsp;
                        MENU
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a style="font-size: 25px; font-weight: bold;" class="dropdown-item" href="#">หน้าหลัก</a>
                        <a style="font-size: 25px; font-weight: bold;" class="dropdown-item" href="#!specialpackage">BEAUTY
                            BOX</a>
                        <a style="font-size: 25px; font-weight: bold;" class="dropdown-item" href="#!bestietalk">บทความ
                            (Bestie Talk)</a>
                        <a style="font-size: 25px; font-weight: bold;" class="dropdown-item" href="#">Community</a>
                        <a style="font-size: 25px; font-weight: bold;" class="dropdown-item" href="#">Exclusive
                            Interview</a>
                        <a style="font-size: 25px; font-weight: bold;" class="dropdown-item" href="#!bestpicks">ไอเท็มเด็ดประจำเดือน</a>
                        <a style="font-size: 25px; font-weight: bold;" class="dropdown-item" href="#">แชร์เรื่องราวบิวตี้</a>
                        <a style="font-size: 25px; font-weight: bold;" class="dropdown-item" href="#">กิจกรรมและโปรโมชั่น</a>
                        <a style="font-size: 25px; font-weight: bold;" class="dropdown-item" href="#">ร้านค้า</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" style="font-size: 25px; font-weight: bold; color: black; font-family: avenir; padding-left:30px;"><span><i
                                class="fa fa-angle-down" style="font-size: 20px;"></i></span> &nbsp;
                        CUSTOMER SERVICES
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a style="font-size: 25px; font-weight: bold;" class="dropdown-item" href="#!howtobuy">วิธีการสั่งซื้อ</a>
                        <a style="font-size: 25px; font-weight: bold;" class="dropdown-item" href="#!howtopay">วิธีการชำระเงิน</a>
                        <a style="font-size: 25px; font-weight: bold;" class="dropdown-item" href="#!howtosend">การจัดส่งสินค้า</a>
                        <a style="font-size: 25px; font-weight: bold;" class="dropdown-item" href="#!questions">คำถามที่พบบ่อย</a>
                        <a style="font-size: 25px; font-weight: bold;" class="dropdown-item" href="#!returnproduct">การแลกเปลี่ยน/คืนสินค้า</a>
                        <a style="font-size: 25px; font-weight: bold;" class="dropdown-item" href="#">สนับสนุน</a>
                        <a style="font-size: 25px; font-weight: bold;" class="dropdown-item" href="#!contact">ติดต่อเรา</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" style="font-size: 25px; font-weight: bold; color: black; font-family: avenir;  padding-left:30px;"><span><i
                                class="fa fa-angle-down" style="font-size: 20px;"></i></span> &nbsp;
                        SHElongs
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a style="font-size: 25px; font-weight: bold;" class="dropdown-item" href="#!aboutSHElongs">เกี่ยวกับเรา</a>
                        <a style="font-size: 25px; font-weight: bold;" class="dropdown-item" href="#!Joinme">ร่วมงานกับเรา</a>
                        <a style="font-size: 25px; font-weight: bold;" class="dropdown-item" href="#!condition">เงื่อนไขและข้อตกลง</a>
                        <a style="font-size: 25px; font-weight: bold;" class="dropdown-item" href="#!policy">นโยบายความเป็นส่วนตัว</a>
                        <a style="font-size: 25px; font-weight: bold;" class="dropdown-item" href="#">พาร์ทเนอร์ธุรกิจ</a>
                    </div>
                </li>
            </ul>

            <form class="form-inline">
                <div class="input-group">
                    <input type="text" placeholder="Search" style="border-radius: 40px 0px  0px 40px; background-color: black; border:0; color: white; width:200px;">
                    <div class="input-group-append">
                        <button class="btn btn-search btn-secondary" type="button" style="border-radius: 0px 40px  40px 0px;">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </nav>
</div>

<style>
    /* Style the sidenav links and the dropdown button */

    @media only screen and (min-width: 800px) {
        ::placeholder {
            color: white;
            opacity: 1;
            text-align: center;
            font-size: 20px;
            font-family: avenir;
            /* Firefox */
        }

        :-ms-input-placeholder {
            /* Internet Explorer 10-11 */
            color: white;
            text-align: center;
            font-size: 20px;
            font-family: avenir;
        }

        ::-ms-input-placeholder {
            /* Microsoft Edge */
            color: white;
            text-align: center;
            font-size: 20px;
            font-family: avenir;
        }
    }

    @media only screen and (max-width: 800px) {
        ::placeholder {
            color: black;
            opacity: 1;
            font-size: 16px;
            padding-left: 20px;
            font-family: avenir;
            /* Firefox */
        }

        :-ms-input-placeholder {
            /* Internet Explorer 10-11 */
            color: black;
            font-family: avenir;
            font-size: 16px;
            padding-left: 20px;
        }

        ::-ms-input-placeholder {
            /* Microsoft Edge */
            color: black;
            font-family: avenir;
            font-size: 16px;
            padding-left: 20px;
        }
    }


    .dropdown-btn {
        padding: 6px 8px 6px 16px;
        text-decoration: none;
        font-size: 20px;
        color: #818181;
        display: block;
        border: none;
        background: #eb125f;
        width: 100%;
        text-align: left;
        cursor: pointer;
        outline: none;
    }

    /* Main content */
    .main {
        margin-left: 200px;
        /* Same as the width of the sidenav */
        font-size: 20px;
        /* Increased text to enable scrolling */
        padding: 0px 10px;
    }

    /* Add an active class to the active dropdown button */
    /* .active {
        background-color: #eb125f;
        color: #eb125f;
    } */

    /* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
    .dropdown-container {
        display: none;
        background-color: white;
        padding-left: 8px;

    }

    /* Optional: Style the caret down icon */
    .fa-caret-down {
        float: right;
        padding-right: 8px;
    }

    /* Some media queries for responsiveness */

    .navbar2 {
        overflow: hidden;
        background-color: white;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 1;
        width: 100%;
        height: 60px;

    }

    .sidenav {
        height: 100%;
        width: 0;
        position: fixed;
        top: 0;
        left: 0;
        background-color: #111;
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 60px;
        background-color: white;
        z-index: 100;

    }

    .sidenav a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 25px;
        color: #818181;
        display: block;
        transition: 0.3s;

    }

    .sidenav a:hover {
        color: #f1f1f1;
    }

    .sidenav .closebtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
        margin-left: 50px;
        color: white;

    }

    @media screen and (max-height: 450px) {
        .sidenav {
            padding-top: 15px;

        }
        .sidenav a {
            font-size: 18px;

        }
    }
</style>

<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }

    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
            } else {
                dropdownContent.style.display = "block";
            }
        });
    }
</script>