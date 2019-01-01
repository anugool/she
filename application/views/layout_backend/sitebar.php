    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
      <div class="main-menu-content menu-accordion">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

        <li class="navigation-header">
          <span>Manage WebSite</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip"
          data-placement="right" data-original-title="General"></i>
        </li>


          <li class="nav-item"><a href="<?php echo site_url("manageseting/index"); ?>">
            <i class="ft-align-justify"></i><span class="menu-title" data-i18n="">Web Setting</span></a>
          </li>

          <li class=" nav-item"><a href="<?php echo site_url("manageadmin/index"); ?>">
            <i class="ft-users"></i><span class="menu-title" data-i18n="">Manage Admin</span></a>
          </li>

          <li class="navigation-header">
          <span>Manage Transaction</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip"
          data-placement="right" data-original-title="General"></i>
        </li>

          <li class="nav-item"><a href="<?php echo site_url("dashboard/index"); ?>">
            <i class="ft-home"></i><span class="menu-title" data-i18n="">Dashboard</span></a>
          </li>

          <li class="nav-item">

          <a href="#">
            <i class="ft-user-plus"></i><span class="menu-title">Manage Customer</span>
          </a>

            <ul class="menu-content">
            <li><a class="menu-item" href="<?php echo site_url("managecustomer/index"); ?>">BEAUTY BOX NEW</a>
            </li>
            <li><a class="menu-item" href="<?php echo site_url("managecustomer/indexfree"); ?>">BEAUTY BOX FREE</a>
            </li>
            <li><a class="menu-item" href="#">BEAUTY BOX 350</a>
            </li>
            </ul>

          </li>
          <!-- <li><a href="#" class="menu-item"></a></li> -->
          <li class=" nav-item"><a href="<?php echo site_url("confirmorder/index"); ?>">
            <i class="ft-package"></i><span class="menu-title" data-i18n="">Confirm Order</span></a>
          </li>
          <li class=" nav-item"><a href="#"">
            <i class="ft-airplay"></i><span class="menu-title" data-i18n="">Manage Payment</span></a>

            <ul>
              <li><a href="<?php echo site_url("managepayment/order"); ?>" class="menu-item">Order</a></li>
              <li><a href="<?php echo site_url("managepayment/setting"); ?>" class="menu-item">Setting</a></li>
            </ul>
          </li>


          <li class=" nav-item"><a href="#">
            <i class="ft-package"></i><span class="menu-title" data-i18n="">Manage Transport</span></a>
          </li>

          <li class=" nav-item"><a href="<?php echo site_url("promotioncode/index"); ?>">
            <i class="ft-airplay"></i><span class="menu-title" data-i18n="">Promotion Code</span></a>
          </li>

        <li class="navigation-header">
          <span>Manage CMS</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip"
          data-placement="right" data-original-title="General"></i>
        </li>
          

          <li class="nav-item"><a href="<?php echo site_url("managecms/index"); ?>">
            <i class="ft-align-justify"></i><span class="menu-title" data-i18n="">All Content</span></a>
          </li>

          <li class="nav-item"><a href="<?php echo site_url("managecms/create"); ?>">
          <i class="ft-file-plus"></i><span class="menu-title" data-i18n="">Add New</span></a>
          </li>

          <li class=" nav-item"><a href="<?php echo site_url("managecms/categories"); ?>">
            <i class="ft-users"></i><span class="menu-title" data-i18n="">Category</span></a>
          </li>


         <!--  <li class=" nav-item"><a href="#"><i class="ft-settings"></i><span class="menu-title" data-i18n="">Building Tools</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="documentation-grunt.html">Grunt</a>
              </li>
              <li><a class="menu-item" href="documentation-gulp.html">Gulp</a>
              </li>
            </ul>
          </li> -->

        </ul>
      </div>
    </div>
