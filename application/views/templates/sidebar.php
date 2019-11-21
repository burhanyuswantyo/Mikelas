<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <!-- query menu -->
    <?php
  $role_id = $this->session->userdata('role_id');
  $queryMenu = "SELECT `user_menu`.`id`, `menu`
                  FROM `user_menu` JOIN `user_access_menu` 
                  ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                  WHERE `user_access_menu`.`role_id` = $role_id
                  ORDER BY `user_access_menu`.`menu_id` ASC
                  ";
  $menu = $this->db->query($queryMenu)->result_array();
  ?>
    <!-- menu -->
    <?php foreach ($menu as $m) : ?>
    <div class="menu_section">
        <h3><?php echo $m['menu']; ?></h3>

        <!-- query sub menu -->
        <?php
        $menuId = $m['id'];
        $querySubMenu = "SELECT *
                        FROM `user_sub_menu`
                        WHERE `menu_id` = $menuId
                        AND `is_active` = 1
                        ";
        $subMenu = $this->db->query($querySubMenu)->result_array();
        ?>
        <ul class="nav side-menu">
            <?php foreach ($subMenu as $sm) : ?>
            <li><a href="<?php echo base_url($sm['url']); ?>"><i class="<?php echo $sm['icon']; ?>"></i>
                    <?php echo $sm['sub_menu']; ?> </a></li>
            <?php endforeach; ?>
        </ul>
    </div>
    <?php endforeach; ?>
    <!-- menu -->
</div>
<!-- /sidebar menu -->
</div>
</div>