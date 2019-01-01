<div class="container desktop">
    <h1 class="text-center" style="font-size: 100px; font-weight: bold;">BESTIE TALK</h1>
    <div class="form-row">
        <div class="col-md-6">
            <div class=" container2">
                <a href="#!bestie01">
                    <img src="<?php echo base_url();?>app-assets/images/bes01.png" class="image" style="width:100%">
                    <div class="overlay">
                        <div class="text" style="font-size:40px; color:white; -webkit-text-stroke: 2px white;">GLOWING
                            WINTER IS COMMING !!</div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-6">
            <div class=" container2">
                <a href="#!bestie02">
                    <img src="<?php echo base_url();?>app-assets/images/bes02.png" class="image" style="width:100%">
                    <div class="overlay2">
                        <div class="text" style="font-size:40px; color:white; -webkit-text-stroke: 2px white;">NAKED
                            CHERRY
                            BY URBAN DECAY</div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="container2">
                <a href="#!bestie03">
                    <img src="<?php echo base_url();?>app-assets/images/bes03.png" class="image" style="width:100%">
                    <div class="overlay2">
                        <div class="text" style="font-size:40px; color:white; -webkit-text-stroke: 2px white;">SRICHAND
                            X
                            ASAVA<br>COLOR CREATION</div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="container2">
                <a href="#!bestie04">
                    <img src="<?php echo base_url();?>app-assets/images/bes04.png" class="image" style="width:100%">
                    <div class="overlay">
                        <div class="text" style="font-size:40px; color:white; -webkit-text-stroke: 2px white;">VIOLETTE
                            LOVE COLLECTION<br>BY SUPER MOM</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="mobile">
    <h1 class="text-center" style="font-size:50px;  font-weight: bold;">BESTIE TALK</h1>

    <ul class="nav nav-pills justify-content-center" role="tablist" ng-init="beautytip=true;">
        <li class="nav-item">
            <a class="nav-link nav02 active text-center" data-toggle="pill" ng-click="beautytip=true; sportlight=false;"
                style="color:white; border-radius: 15px 0px 0px 15px; width:150px; height: 40px;">
                <h5>BEAUTY
                    TIPS</h5>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link nav02 text-center" data-toggle="pill" ng-click="sportlight=true; beautytip=false;" style="color:white; border-radius: 0px 15px 15px 0px; width:150px; height: 40px;">
                <h5>SPORTLIGHT</h5>
            </a>
        </li>
    </ul>

    <div ng-show="beautytip">
        <a href="#!bestie01">
            <img src="<?php echo base_url();?>app-assets/images/bes01.png" class="image" style="width:100%">
            <div class="text-center">
                <h4 style="color:black;"><b>GLOWING WINTER IS COMMING !!<span>
                            <p style="width:auto; font-size: 20px;"> อ่านต่อ...</p>
                        </span></b></h4>

            </div>
        </a>
        <a href="#!makeuptrends">
            <img src="<?php echo base_url();?>app-assets/images/makeup01.jpg" class="image" style="width:100%">
            <div class="text-center">
                <h4 style="color:black;"><b>MAKE UP TRENDS FOR NEW YEAR FESTIVAL<span>
                            <p style="width:auto; font-size: 20px;"> อ่านต่อ...</p>
                        </span></b></h4>
            </div>
        </a>
    </div>

    <div ng-show="sportlight">
        <a href="#!bestie02">
            <img src="<?php echo base_url();?>app-assets/images/sport01.jpg" class="image" style="width:100%">
            <div class="text-center">
                <h4 style="color:black;"><b>NAKED CHERRY BY URBAN DECAY<span>
                            <p style="width:auto; font-size: 20px;"> อ่านต่อ...</p>
                        </span></b></h4>
            </div>
        </a>
        <a href="#!bestie03">
            <img src="<?php echo base_url();?>app-assets/images/sport02.jpg" class="image" style="width:100%">
            <div class="text-center">
                <h4 style="color:black;"><b>SRICHAND X ASAVA COLOR CREATION<span>
                            <p style="width:auto; font-size: 20px;"> อ่านต่อ...</p>
                        </span></b></h4>
            </div>
        </a>
        <a href="#!bestie04">
            <img src="<?php echo base_url();?>app-assets/images/sport03.jpg" class="image" style="width:100%">
            <div class="text-center">
                <h4 style="color:black;"><b>VIOLETTE LOVE COLLECTION BY SUPER MOM<span>
                            <p style="width:auto; font-size: 20px;"> อ่านต่อ...</p>
                        </span></b></h4>
            </div>
        </a>
        <a href="#!bestpicks">
            <img src="<?php echo base_url();?>app-assets/images/sport04.jpg" class="image" style="width:100%">
            <div class="text-center">
                <h4 style="color:black;"><b>BEST PICKS OF THE MONTH<span>
                            <p style="width:auto; font-size: 20px;"> อ่านต่อ...</p>
                        </span></b></h4>
            </div>
        </a>
    </div>
</div>




<style>
    .nav02:not(.active) {
        background-color: black !important;
        font-weight: bold;
    }

    .nav02 {
        background-color: #eb125f !important;
        font-weight: bold;
    }

    .image {
        display: block;
        width: 100%;
        height: auto;
        padding: 20px
    }

    .overlay2 {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        height: 100%;
        width: 100%;
        opacity: 0;
        transition: .5s ease;
        background-color: black;
    }

    .overlay {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        height: 100%;
        width: 100%;
        opacity: 0;
        transition: .5s ease;
        background-color: #eb125f;
    }

    .container2:hover .overlay {
        opacity: 0.7;
        border: 20px solid white;
    }

    .container2:hover .overlay2 {
        opacity: 0.7;
        border: 20px solid white;
    }

    .text {
        color: white;
        position: absolute;
        top: 50%;
        left: 50%;
        width: 100%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        text-align: center;
    }
</style>