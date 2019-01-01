<div class="container">
    <nav class="navbar desktop">
        <a class="navbar-brand" href="#"><img src="<?php echo base_url();?>app-assets/images/logo-icon.png" alt="Logo"
                style="height: 70px;">
        </a>
        <form class="form-inline my-2 my-lg-0" style="float:right">
            <!-- <a style="font-size: 20px;float:right" class="nav-link" href="https://shelongs.com/">เว็บไซต์</a> -->
            <!-- <a style="font-size: 20px;float:right" class="nav-link" ng-click="logout()" href="#">ออกจากระบบ</a> -->
        </form>
    </nav>


    <div class="text-center mobile" style="padding-top:30px;">
        <a class="navbar-brand" href="#"><img src="<?php echo base_url();?>app-assets/images/logo-icon.png" alt="Logo"
                style="height: 100px;">
        </a>
    </div>

    <div class="container-fluid BG ">
        <div class=" container desktop" style="padding-top: 100px; height: 850px">
            <p style="text-align: center; color: #eb125f; font-size: 40px;"><strong>มองหาเนื้อคู่ที่เหมาะกับผิวของคุณอยู่หรือเปล่า?</strong></p>
            <p style="text-align: center; font-size: 30px;">มาเล่น Quiz สนุกๆแล้วมาดูกันว่า Beauty Item</p>
            <p style="text-align: center; font-size: 30px;">ชิ้นไหนเป็นตัวคุณที่สุด!</p>
            {{sessionStorage.id}}

            <div class="container" style="position: relative;"><img style="width: 40%; display: block; margin-left: auto; margin-right: auto; "
                    src="<?php echo base_url();?>app-assets/images/Mouth.png" />
                <a href="#!quiz" class="centered" style="font-size: 30px; color: #eb125f;">มาเริ่มกันเลย!</a></div>
        </div>

        <div class="container-fluid BG mobile" style="height: 650px">

            <div class="container" style="padding-top: 50px;">
                <p style="text-align: center; color: #eb125f; font-size: 30px;"><strong>มองหาเนื้อคู่ที่เหมาะกับผิวของคุณอยู่หรือเปล่า?</strong></p>
                <p style="text-align: center; font-size: 20px;">มาเล่น Quiz สนุกๆแล้วมาดูกันว่า Beauty Item</p>
                <p style="text-align: center; font-size: 20px;">ชิ้นไหนเป็นตัวคุณที่สุด!</p>

                <div class="container" style="position: relative;"><img style="width: 80%; display: block; margin-left: auto; margin-right: auto; "
                        src="<?php echo base_url();?>app-assets/images/Mouth.png" />
                    <a href="#!quiz" class="centered" style="font-size: 20px; color: #eb125f;"><b>มาเริ่มกันเลย!</b></a></div>
            </div>

        </div>
    </div>
</div>