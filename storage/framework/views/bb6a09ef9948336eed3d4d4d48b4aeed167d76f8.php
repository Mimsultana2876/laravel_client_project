<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Invoice</title>
    <link rel="canonical" href="<?php echo e(asset('https://www.wrappixel.com/templates/niceadmin-lite/')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css')); ?>">
    <!-- Favicon icon -->
    
    <!-- Custom CSS -->
    <link href="<?php echo e(asset('assets/libs/chartist/dist/chartist.min.css')); ?>" rel="stylesheet">
    <!-- Custom CSS -->
    
    <link href="<?php echo e(asset('dist/css/style.min.css')); ?>" rel="stylesheet">
    
    <link href="<?php echo e(asset('assets/up.css')); ?>" rel="stylesheet">
   
    
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-navbarbg="skin6" data-theme="light" data-layout="vertical" data-sidebartype="full"
        data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                        <i class="ti-menu ti-close"></i>
                    </a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand">
                        <a href="<?php echo e(url('/dashboard')); ?>" class="logo">
                            <!-- Logo icon -->
                            <b class="logo-icon">
                                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                                <span>Invoice Admin</span>
                                <!-- Dark Logo icon -->
                                
                                <!-- Light Logo icon -->
                                
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <span class="logo-text">
                              
                            </span>
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin6">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-start me-auto">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box">
                            <a class="nav-link waves-effect waves-dark" href="javascript:void(0)">
                                <div class="d-flex align-items-center">
                                    <i class="mdi mdi-magnify font-20 me-1"></i>
                                    <div class="ms-1 d-none d-sm-block">
                                        <span>Search</span>
                                    </div>
                                </div>
                            </a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter">
                                <a class="srh-btn">
                                    <i class="ti-close"></i>
                                </a>
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-end">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="ti-user me-1 ms-1"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end user-dd animated">
                                <a class="dropdown-item" href="<?php echo e(url('/logout')); ?>">
                                    Logout</a>

                            </ul>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo e(url('/admin/show_client_type')); ?>"
                                aria-expanded="false">
                                <i class="mdi mdi-av-timer"></i>
                                <span class="hide-menu">Client Type</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo e(url('admin/show_client_info')); ?>"
                                aria-expanded="false">
                                <i class="mdi mdi-account-network"></i>
                                <span class="hide-menu">Client Information</span>
                            </a>
                        </li>
                        

                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!--         -->


       <?php echo $__env->yieldContent('content'); ?>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    </div>
    
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo e(asset('assets/libs/jquery/dist/jquery.min.js')); ?>"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo e(asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')); ?>"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo e(asset('assets/extra-libs/sparkline/sparkline.js')); ?>"></script>
    <!--Wave Effects -->
    <script src="<?php echo e(asset('dist/js/waves.js')); ?>"></script>
    <!--Menu sidebar -->
    <script src="<?php echo e(asset('dist/js/sidebarmenu.js')); ?>"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo e(asset('dist/js/custom.min.js')); ?>"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="<?php echo e(asset('assets/libs/chartist/dist/chartist.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dist/js/pages/dashboards/dashboard1.js')); ?>"></script>


    <script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>


    <script>
        $(document).ready(function(){
            $('#datatable').dataTable();
            // $('#TableId').DataTable( "dom": '<"pull-left"f><"pull-right"l>tip' ); 
        });

$(document).ready(function () {

          
});

  </script>


    <?php echo $__env->yieldContent('javaScript'); ?>
</body>

</html><?php /**PATH C:\xampp\htdocs\project\Invoice\resources\views/layout/master.blade.php ENDPATH**/ ?>