<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title> <?php echo $judul_web; ?> </title>
    <link rel="icon" type="image/x-icon" href="<?php echo base_url() ?>assets/assets/img/favicon.ico" />
    <link href="<?php echo base_url() ?>assets/assets/css/loader.css" rel="stylesheet" type="text/css" />
    <script src="<?php echo base_url() ?>assets/assets/js/loader.js"></script>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>assets/assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugins/select2/select2.min.css">


    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="<?php echo base_url() ?>assets/plugins/apex/apexcharts.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>assets/assets/css/dashboard/dash_2.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="<?php echo base_url() ?>assets/plugins/flatpickr/flatpickr.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>assets/plugins/flatpickr/custom-flatpickr.css" rel="stylesheet" type="text/css">
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugins/table/datatable/datatables.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugins/table/datatable/dt-global_style.css">
    <!-- END PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/assets/css/forms/theme-checkbox-radio.css">


</head>

<body class="alt-menu sidebar-noneoverflow">
    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR (MENU)  -->
    <div class="header-container">
        <header class="header navbar navbar-expand-sm">

            <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg></a>

            <div class="nav-logo align-self-center">
                <a class="navbar-brand" href="<?php echo base_url() ?>"><img alt="logo" src="<?php echo base_url() ?>assets/assets/img/logo.svg"> <span class="navbar-brand-name">CORK</span></a>
            </div>

            <ul class="navbar-item flex-row mr-auto">
                <li class="nav-item align-self-center search-animated">
                    <!-- sudah hilang kolom pencarian -->
                </li>
            </ul>

            <ul class="navbar-item flex-row nav-dropdowns">
                <!-- logout -->
                <li class="nav-item dropdown user-profile-dropdown order-lg-0 order-1">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="user-profile-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="media">
                            <img src="<?php echo base_url() ?>assets/assets/img/profile-7.jpeg" class="img-fluid" alt="admin-profile">
                            <div class="media-body align-self-center">
                                <h6><span>Hi,</span> Alan</h6>
                            </div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </a>
                    <div class="dropdown-menu position-absolute animated fadeInUp" aria-labelledby="user-profile-dropdown">
                        <div class="">
                            <div class="dropdown-item">
                                <a class="" href="auth_login.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
                                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                        <polyline points="16 17 21 12 16 7"></polyline>
                                        <line x1="21" y1="12" x2="9" y2="12"></line>
                                    </svg> Sign Out</a>
                            </div>
                        </div>
                    </div>

                </li>
            </ul>
        </header>
    </div>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN TOPBAR  -->
        <div class="topbar-nav header navbar" role="banner">
            <nav id="topbar">

                <ul class="list-unstyled menu-categories" id="topAccordion">

                    <li class="menu single-menu active">
                        <a href="<?php echo base_url() ?>layout">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg>
                                <span>Dashboard</span>
                            </div>
                        </a>
                    </li>

                    <!-- <li class="menu single-menu">
                        <a href="#app" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cpu">
                                    <rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect>
                                    <rect x="9" y="9" width="6" height="6"></rect>
                                    <line x1="9" y1="1" x2="9" y2="4"></line>
                                    <line x1="15" y1="1" x2="15" y2="4"></line>
                                    <line x1="9" y1="20" x2="9" y2="23"></line>
                                    <line x1="15" y1="20" x2="15" y2="23"></line>
                                    <line x1="20" y1="9" x2="23" y2="9"></line>
                                    <line x1="20" y1="14" x2="23" y2="14"></line>
                                    <line x1="1" y1="9" x2="4" y2="9"></line>
                                    <line x1="1" y1="14" x2="4" y2="14"></line>
                                </svg>
                                <span>Apps</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="app" data-parent="#topAccordion">
                            <li>
                                <a href="apps_chat.html"> Chat </a>
                            </li>
                            <li>
                                <a href="apps_mailbox.html"> Mailbox </a>
                            </li>
                            <li>
                                <a href="apps_todoList.html"> Todo List </a>
                            </li>
                            <li>
                                <a href="apps_notes.html">Notes</a>
                            </li>
                            <li>
                                <a href="apps_scrumboard.html">Task Board</a>
                            </li>
                            <li>
                                <a href="apps_contacts.html">Contacts</a>
                            </li>
                            <li>
                                <a href="apps_invoice.html">Invoice List</a>
                            </li>
                            <li>
                                <a href="apps_calendar.html"> Calendar</a>
                            </li>
                        </ul>
                    </li> -->

                    <!-- <li class="menu single-menu">
                        <a href="#components" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box">
                                    <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                                    </path>
                                    <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                                    <line x1="12" y1="22.08" x2="12" y2="12"></line>
                                </svg>
                                <span>Components</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="components" data-parent="#topAccordion">
                            <li>
                                <a href="component_tabs.html"> Tabs </a>
                            </li>
                            <li>
                                <a href="component_accordion.html"> Accordions </a>
                            </li>
                            <li>
                                <a href="component_modal.html"> Modals </a>
                            </li>
                            <li>
                                <a href="component_cards.html"> Cards </a>
                            </li>
                            <li>
                                <a href="component_bootstrap_carousel.html">Carousel</a>
                            </li>
                            <li>
                                <a href="component_blockui.html"> Block UI </a>
                            </li>
                            <li>
                                <a href="component_countdown.html"> Countdown </a>
                            </li>
                            <li>
                                <a href="component_counter.html"> Counter </a>
                            </li>
                            <li>
                                <a href="component_sweetalert.html"> Sweet Alerts </a>
                            </li>
                            <li>
                                <a href="component_timeline.html"> Timeline </a>
                            </li>
                            <li>
                                <a href="component_snackbar.html"> Notifications </a>
                            </li>
                            <li>
                                <a href="component_session_timeout.html"> Session Timeout </a>
                            </li>
                            <li>
                                <a href="component_media_object.html"> Media Object </a>
                            </li>
                            <li>
                                <a href="component_list_group.html"> List Group </a>
                            </li>
                            <li>
                                <a href="component_pricing_table.html"> Pricing Tables </a>
                            </li>
                            <li>
                                <a href="component_lightbox.html"> Lightbox </a>
                            </li>
                        </ul>
                    </li>


                    <li class="menu single-menu">
                        <a href="#uiKit" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-zap">
                                    <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                                </svg>
                                <span>UI Kit</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="uiKit" data-parent="#topAccordion">
                            <li>
                                <a href="ui_alerts.html"> Alerts </a>
                            </li>
                            <li>
                                <a href="ui_avatar.html"> Avatar </a>
                            </li>
                            <li>
                                <a href="ui_badges.html"> Badges </a>
                            </li>
                            <li>
                                <a href="ui_breadcrumbs.html"> Breadcrumbs </a>
                            </li>
                            <li>
                                <a href="ui_buttons.html"> Buttons </a>
                            </li>
                            <li>
                                <a href="ui_buttons_group.html"> Button Groups </a>
                            </li>
                            <li>
                                <a href="ui_color_library.html"> Color Library </a>
                            </li>
                            <li>
                                <a href="ui_dropdown.html"> Dropdown </a>
                            </li>
                            <li>
                                <a href="ui_infobox.html"> Infobox </a>
                            </li>
                            <li>
                                <a href="ui_jumbotron.html"> Jumbotron </a>
                            </li>
                            <li>
                                <a href="ui_loader.html"> Loader </a>
                            </li>
                            <li>
                                <a href="ui_pagination.html"> Pagination </a>
                            </li>
                            <li>
                                <a href="ui_popovers.html"> Popovers </a>
                            </li>
                            <li>
                                <a href="ui_progress_bar.html"> Progress Bar </a>
                            </li>
                            <li>
                                <a href="ui_search.html"> Search </a>
                            </li>
                            <li>
                                <a href="ui_tooltips.html"> Tooltips </a>
                            </li>
                            <li>
                                <a href="ui_treeview.html"> Treeview </a>
                            </li>
                            <li>
                                <a href="ui_typography.html"> Typography </a>
                            </li>
                        </ul>
                    </li> -->

                    <li class="menu single-menu">
                        <a href="#tables" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layout">
                                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                    <line x1="3" y1="9" x2="21" y2="9"></line>
                                    <line x1="9" y1="21" x2="9" y2="9"></line>
                                </svg>
                                <span>Lihat Data</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="tables" data-parent="#topAccordion">
                            <li>
                                <a href=""> Data User </a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('tabel_siswa'); ?>"> Data Siswa </a>
                            </li>
                            <li>
                                <a href="#datatable"> Data Kelas
                                </a>
                            </li>
                            <li>
                                <a href="#datatable"> Data Guru
                                </a>
                            </li>
                            <li>
                                <a href="#datatable"> Data Ekstrakulikuler
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu single-menu">
                        <a href="#forms" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard">
                                    <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2">
                                    </path>
                                    <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                                </svg>
                                <span>Input Data</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="forms" data-parent="#topAccordion">
                            <li>
                                <a href="form_bootstrap_basic.html"> User </a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('siswa'); ?>"> Siswa </a>
                            </li>
                            <li>
                                <a href="form_layouts.html"> Kelas </a>
                            </li>
                            <li>
                                <a href="form_layouts.html"> Guru </a>
                            </li>
                            <li>
                                <a href="form_layouts.html"> Ekstrakulikuler </a>
                            </li>
                        </ul>
                    </li>

                    <!-- <li class="menu single-menu">
                        <a href="#page" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file">
                                    <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                                    <polyline points="13 2 13 9 20 9"></polyline>
                                </svg>
                                <span>Pages</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="page" data-parent="#topAccordion">
                            <li>
                                <a href="pages_helpdesk.html"> Helpdesk </a>
                            </li>
                            <li>
                                <a href="pages_contact_us.html"> Contact Form </a>
                            </li>
                            <li>
                                <a href="pages_faq.html"> FAQ </a>
                            </li>
                            <li>
                                <a href="pages_faq2.html"> FAQ 2 </a>
                            </li>
                            <li>
                                <a href="pages_privacy.html"> Privacy Policy </a>
                            </li>
                            <li>
                                <a href="pages_coming_soon.html"> Coming Soon </a>
                            </li>
                            <li>
                                <a href="user_profile.html"> Profile </a>
                            </li>
                            <li>
                                <a href="user_account_setting.html"> Account Settings </a>
                            </li>
                            <li class="sub-sub-submenu-list">
                                <a href="#pages-error" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Error <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="pages-error" data-parent="#more">
                                    <li>
                                        <a href="pages_error404.html"> 404 </a>
                                    </li>
                                    <li>
                                        <a href="pages_error500.html"> 500 </a>
                                    </li>
                                    <li>
                                        <a href="pages_error503.html"> 503 </a>
                                    </li>
                                    <li>
                                        <a href="pages_maintenence.html"> Maintanence </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sub-sub-submenu-list">
                                <a href="#user-login" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Login <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="user-login" data-parent="#page">
                                    <li>
                                        <a href="auth_login.html"> Login </a>
                                    </li>
                                    <li>
                                        <a href="auth_login_boxed.html"> Login Boxed </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sub-sub-submenu-list">
                                <a href="#user-register" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Register <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="user-register" data-parent="#page">
                                    <li>
                                        <a href="auth_register.html"> Register </a>
                                    </li>
                                    <li>
                                        <a href="auth_register_boxed.html"> Register Boxed </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="sub-sub-submenu-list">
                                <a href="#user-passRecovery" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Password Recovery <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="user-passRecovery" data-parent="#page">
                                    <li>
                                        <a href="auth_pass_recovery.html"> Recover ID </a>
                                    </li>
                                    <li>
                                        <a href="auth_pass_recovery_boxed.html"> Recover ID Boxed </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="sub-sub-submenu-list">
                                <a href="#user-lockscreen" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Lockscreen <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="user-lockscreen" data-parent="#page">
                                    <li>
                                        <a href="auth_lockscreen.html"> Unlock </a>
                                    </li>
                                    <li>
                                        <a href="auth_lockscreen_boxed.html"> Unlock Boxed </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li> -->
                    <!-- 
                    <li class="menu single-menu">
                        <a href="#more" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="12" y1="8" x2="12" y2="16"></line>
                                    <line x1="8" y1="12" x2="16" y2="12"></line>
                                </svg>
                                <span>More</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="more" data-parent="#topAccordion">
                            <li>
                                <a href="dragndrop_dragula.html"> Drag and Drop</a>
                            </li>
                            <li>
                                <a href="widgets.html"> Widgets </a>
                            </li>
                            <li>
                                <a href="map_jvector.html"> Vector Maps</a>
                            </li>
                            <li>
                                <a href="charts_apex.html"> Charts </a>
                            </li>
                            <li>
                                <a href="fonticons.html"> Font Icons </a>
                            </li>
                            <li class="sub-sub-submenu-list">
                                <a href="#starter-kit" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Starter Kit <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg> </a>
                                <ul class="collapse list-unstyled sub-submenu eq-animated eq-fadeInUp" id="starter-kit" data-parent="#more">
                                    <li>
                                        <a href="starter_kit_blank_page.html"> Blank Page </a>
                                    </li>
                                    <li>
                                        <a href="starter_kit_breadcrumb.html"> Breadcrumb </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="../../documentation/index.html"> Documentation </a>
                            </li>
                        </ul>
                    </li> -->
                </ul>
            </nav>
        </div>
        <!--  END TOPBAR  -->

        <!--  BEGIN CONTENT PART  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                <?php echo $content; ?>
                <div class="footer-wrapper">
                    <div class="footer-section f-section-1">
                        <p class="">Copyright © 2020 <a target="_blank" href="https://designreset.com">Miftahul Jannah</a></p>
                    </div>
                    <div class="footer-section f-section-2">
                        <p class="">SMK Bisa <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                </path>
                            </svg></p>
                    </div>
                </div>
            </div>
        </div>
        <!--  END CONTENT PART  -->
        

    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="<?php echo base_url() ?>assets/assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="<?php echo base_url() ?>assets/bootstrap/js/popper.min.js"></script>
    <script src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?php echo base_url() ?>assets/assets/js/app.js"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="<?php echo base_url() ?>assets/assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="<?php echo base_url() ?>assets/plugins/apex/apexcharts.min.js"></script>
    <script src="<?php echo base_url() ?>assets/assets/js/dashboard/dash_2.js"></script>
    <script src="<?php echo base_url() ?>assets/assets/js/forms/bootstrap_validation/bs_validation_script.js"></script>
    <!-- sweetalert -->
    <script src="<?php echo base_url(); ?>assets/sweetalert/sweetalert2.all.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/sweetalert/mysweet.js"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="<?php echo base_url(); ?>assets/plugins/select2/select2.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/select2/custom-select2.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/flatpickr/custom-flatpickr.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/flatpickr/flatpickr.js"></script>
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="<?php echo base_url() ?>assets/plugins/table/datatable/datatables.js"></script>
    <script>
        $('#default-ordering').DataTable({
            "oLanguage": {
                "oPaginate": {
                    "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                    "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
                },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
                "sLengthMenu": "Results :  _MENU_",
            },
            "order": [
                [3, "desc"]
            ],
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7,
            drawCallback: function() {
                $('.dataTables_paginate > .pagination').addClass(
                    ' pagination-style-13 pagination-bordered mb-5');
            }
        });
    </script>
    <!-- END PAGE LEVEL SCRIPTS -->

</body>

</html>