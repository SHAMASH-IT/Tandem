<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard </title>
    <link rel="icon" href="<?=URL?>favicon.ico" type="image/x-icon"> <!-- Favicon-->

    <!-- plugin css file  -->
    <link rel="stylesheet" href="<?=URL.VIEW_DIR?>/admin/<?=ASSETS_ADMIN_DIR?>plugin/datatables/responsive.dataTables.min.css">
    <link rel="stylesheet" href="<?=URL.VIEW_DIR?>/admin/<?=ASSETS_ADMIN_DIR?>plugin/datatables/dataTables.bootstrap5.min.css">
    <style>
        @import url("<?=URL.VIEW_DIR?>/admin/<?=ASSETS_ADMIN_DIR?>font-awesome/4.7.0/css/font-awesome.min.css");
        @import url("<?=URL.VIEW_DIR?>/admin/<?=ASSETS_ADMIN_DIR?>bootstrap-icons/font/bootstrap-icons.css");
    </style>
    <!-- project css file  -->
    <link rel="stylesheet" href="<?=URL.VIEW_DIR?>/admin/<?=ASSETS_ADMIN_DIR?>css/ebazar.style.min.css">
    <base href="<?=URL?>">
    <?php $script = ''; ?>
    <?= $link ?? ''?>
</head>
<body>
    <div id="ebazar-layout" class="theme-blue">
        
        <!-- sidebar -->
        <div class="sidebar px-4 py-4 py-md-4 me-0">
            <div class="d-flex flex-column h-100">
                <a href="<?=URL?>" class="mb-0 brand-icon">
                    <span class="logo-text"><?=SITE_NAME?></span>
                </a>
                <!-- Menu: main ul -->
                <ul class="menu-list flex-grow-1 mt-3">
                    <!-- <li>
                        <a class="m-link <?= ($page_title ?? NULL ) == 'dashboard' ? 'active':''?>" href="<?=URL?>admin/dashboard"><i class="icofont-home fs-5"></i> <span>Dashboard</span></a>
                    </li> -->
                    <li>
                        <a class="m-link <?= ($page_title ?? NULL ) == 'formations' ? 'active':''?>" href="<?=URL?>admin/formations"><i class="fa fa-book"></i> <span>Formations</span></a>
                    </li>
                    <li>
                        <a class="m-link <?= ($page_title ?? NULL ) == 'categories' ? 'active':''?>" href="<?=URL?>admin/categories"><i class="icofont-chart-flow fs-5"></i> <span>Categories</span></a>
                    </li>
                    <li>
                        <a class="m-link <?= ($page_title ?? NULL ) == 'clients' ? 'active':''?>" href="<?=URL?>admin/clients"><i class="icofont-notepad fs-5"></i> <span><?=__('Participation')?></span></a>
                    </li>
                    <!-- 
                    <li>
                        <a class="m-link <?= ($page_title ?? NULL ) == 'settings' ? 'active':''?>" href="<?=URL?>admin/settings"><i class="icofont-settings fs-5"></i> <span>Settings</span></a>
                    </li>
                    -->
                    
                    <li>
                        <a class="m-link <?= ($page_title ?? NULL ) == 'events' ? 'active':''?>" href="<?=URL?>admin/events"><i class="icofont-settings fs-5"></i> <span>Events</span></a>
                    </li>
                    <li>
                        <a class="m-link <?= ($page_title ?? NULL ) == 'meta' ? 'active':''?>" href="<?=URL?>admin/meta"><i class="icofont-settings fs-5"></i> <span>Meta</span></a>
                    </li>
                   
                    <li>
                        <a class="m-link <?= ($page_title ?? NULL ) == 'options' ? 'active':''?>" href="<?=URL?>admin/options"><i class="icofont-sale-discount fs-5"></i> <span>Options</span></a>
                    </li> 
                    <li>
                        <a class="m-link <?= ($page_title ?? NULL ) == 'contacts' ? 'active':''?>" href="<?=URL?>admin/contacts"><i class="icofont-envelope fs-5"></i> <span>Contacts</span></a>
                    </li>
                </ul>
                <!-- Menu: menu collepce btn -->
                <a href="<?=URL?>admin/logout" class="btn btn-link text-light">
                    <span class="ms-2"><i class="icofont-logout"></i>Logout</span>
                </a>
            </div>
        </div>
