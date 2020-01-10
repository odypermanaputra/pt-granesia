    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
          <img src="<?= base_url('assets/img/logo/') ;?>granesia1.png" width="53px" height="50px" alt="">
      
        </div>
        <div class="sidebar-brand-text mx-3">Granesia</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-2">
      
      <?php
        $role_id = $this->session->userdata('role_id');
        $queryMenu = "SELECT `tbl_user_menu`.`id`, `menu`
                        FROM `tbl_user_menu` JOIN `user_access_menu`
                          ON `tbl_user_menu`.`id` = `user_access_menu`.`menu_id`
                       WHERE `user_access_menu`.`role_id` = $role_id 
                    ORDER BY `user_access_menu`.`menu_id` ASC " ;

        $menuHeading = $this->db->query($queryMenu)->result_array();
      ?>

      <!-- looping menu -->
      <?php 
        foreach ($menuHeading as $menu ) :  ?>

          <!-- Heading -->
          <div class="sidebar-heading">
            <?=  $menu['menu']; ?>
          </div>
      <?php 

      $menuID = $menu['id'];
      $querySubmenu = "SELECT *
                         FROM `tbl_user_submenu` JOIN `tbl_user_menu`
                           ON `tbl_user_submenu`.`menu_id` = `tbl_user_menu`.`id`
                        WHERE `tbl_user_submenu`.`menu_id` = $menuID 
                          AND `tbl_user_submenu`.`is_active` = 1 ";

      $menu_Submenu = $this->db->query($querySubmenu)->result_array();
     
      ?>

          <!-- Divider -->
          <!-- <hr class="sidebar-divider">  -->
      <!-- looping sub menu -->
      <?php foreach ($menu_Submenu as $submenu ) : ?>
      
      <?php if ($judul == $submenu['title']) : ?>
              <li class="nav-item active">
            <?php else : ?>
            
              <li class="nav-item">
          <?php endif; ?>
          <!-- Nav Item - Dashboard -->
         
            <a class="nav-link" href="<?= base_url($submenu['url']); ?>">
              <i class="<?= $submenu['icon']; ?>"></i>
              <span><?= $submenu['title']; ?></span></a>
          </li>        

    <?php endforeach; ?>

    <!-- Divider -->
    <hr class="sidebar-divider my-2"> 

      <?php
        endforeach ; 
      ?>

      <!-- Nav Item - Pemakaian -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
          <i class="fas fa-fw fa-sign-out-alt"></i>
          <span>Logout</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->