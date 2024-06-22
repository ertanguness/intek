<!-- <?php
        $link = $_SERVER['PHP_SELF'];
        $link_array = explode('/', $link);
        $page = end($link_array);
        ?> -->

<?php require_once "config/functions.php"; ?>

<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul class="sidebar-vertical">
                <li class="menu-title">
                    <span>Main</span>
                </li>
       
                <li class="<?php echo hasActive('admin-dashboard') ;?>">
                    <a href="#"><i class="la la-dashboard "></i> <span>ANA SAYFA</span></a>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-rocket"></i> <span> PROJELER</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a class="<?php echo hasActive('projects/new'); ?>" href="admin-dashboard.php">Yeni Proje</a></li>
                        <li><a class="<?php echo hasActive('projects/list'); ?>" href="pages/projects/list.php">Proje Listesi</a></li>
                        <li><a class="<?php echo hasActive('projects/cards'); ?>" href="admin-dashboard.php">Yapılandırma Kartları</a></li>
                        <li><a class="<?php echo ($page == 'employee-dashboard.php') ? 'active' : ''; ?>" href="employee-dashboard.php">Eleman Yönetimi</a></li>
                        <li><a class="<?php echo ($page == 'deals-dashboard.php') ? 'active' : ''; ?>" href="deals-dashboard.php">Poz Yönetimi</a></li>
                        <li><a class="<?php echo ($page == 'leads-dashboard.php') ? 'active' : ''; ?>" href="leads-dashboard.php">Revizyon Fişleri</a></li>
                    </ul>
                </li>

                <!-- İMALAT -->
                <li class="menu-title">
                    <span>İMALAT</span>
                </li>
                <li class="<?php echo ($page == 'clients.php' || $page == 'clients-list.php') ? 'active' : ''; ?>">
                    <a href="clients.php"><i class="la la-pencil-alt"></i> <span>Ön İmalat</span></a>
                </li>
                <li class="<?php echo ($page == 'clients.php' || $page == 'clients-list.php') ? 'active' : ''; ?>">
                    <a href="clients.php"><i class="la la-pencil-ruler"></i> <span>İmalat</span></a>
                </li>
                <!-- İMALAT -->


                  <!-- STOK -->
                  <li class="menu-title">
                    <span>STOK</span>
                </li>
                <li class="<?php echo ($page == 'clients.php' || $page == 'clients-list.php') ? 'active' : ''; ?>">
                    <a href="clients.php"><i class="lab la-buffer"></i> <span>Stoklar</span></a>
                </li>
                <li class="<?php echo ($page == 'clients.php' || $page == 'clients-list.php') ? 'active' : ''; ?>">
                    <a href="clients.php"><i class="lab la-audible"></i> <span>Stok İstek Yönetimi</span></a>
                </li>
                <li class="<?php echo ($page == 'clients.php' || $page == 'clients-list.php') ? 'active' : ''; ?>">
                    <a href="clients.php"><i class="la la-warehouse"></i> <span>Depo</span></a>
                </li>
                <!-- STOK -->

                
            </ul>

        </div>
    </div>
</div>

<!-- /Sidebar -->