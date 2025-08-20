<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/images/logo_icai.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/logo_icai.png" type="image/x-icon">
    <title>BOS Admin</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/icofont.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/themify.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/flag-icon.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/feather-icon.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/datatables.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/date-picker.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/dropzone.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link id="color" rel="stylesheet" href="assets/css/color-1.css" media="screen">
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

    <link rel="stylesheet" type="text/css" href="assets/css/vendors/quill.snow.css">
    <style>
        .w-80 {
            width: 80% !important;
        }
    </style>
</head>

<body>
    <div class="loader-wrapper">
        <div class="loader">
            <div class="loader4"></div>
        </div>
    </div>
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <div class="page-wrapper default-wrapper" id="pageWrapper">
        <div class="page-header">
            <div class="header-wrapper row m-0">
                <form class="form-inline search-full col" action="#" method="get">
                    <div class="form-group w-100">
                        <div class="Typeahead Typeahead--twitterUsers">
                            <div class="u-posRelative">
                                <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text"
                                    placeholder="Search Riho .." name="q" title="" autofocus>
                                <div class="spinner-border Typeahead-spinner" role="status"><span
                                        class="sr-only">Loading... </span></div><i class="close-search"
                                    data-feather="x"></i>
                            </div>
                            <div class="Typeahead-menu"> </div>
                        </div>
                    </div>
                </form>
                <div class="header-logo-wrapper col-auto p-0">
                    <div class="logo-wrapper">
                        <a href="dashboard.php">
                            <img class="img-fluid for-dark w-30" src="assets/images/logo/logo-light.png"
                                alt="looginpage">
                            <img class="img-fluid for-light w-30" src="assets/images/logo/logo-dark.png"
                                alt="looginpage">
                        </a>
                    </div>
                    <div class="toggle-sidebar">
                        <i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i>
                    </div>
                </div>
                <div class="left-header col-xxl-5 col-xl-6 col-lg-5 col-md-4 col-sm-3 p-0">
                    <div> <a class="toggle-sidebar" href="#"> <i class="iconly-Category icli"> </i></a>
                        <div class="d-flex align-items-center gap-2 ">
                            <h4 class="f-w-600">Welcome Alex</h4><img class="mt-0" src="assets/images/hand.gif"
                                alt="hand-gif">
                        </div>
                    </div>
                    <div class="welcome-content d-xl-block d-none"><span class="text-truncate col-12">Good
                            Morning</span></div>
                </div>
                <div class="nav-right col-xxl-7 col-xl-6 col-md-7 col-8 pull-right right-header p-0 ms-auto">
                    <ul class="nav-menus">
                        <li>
                            <div class="mode"><i class="moon" data-feather="moon"> </i></div>
                        </li>
                        <li class="onhover-dropdown notification-down">
                            <div class="notification-box">
                                <svg>
                                    <use href="assets/svg/icon-sprite.svg#notification-header"></use>
                                </svg><span class="badge rounded-pill badge-secondary">4 </span>
                            </div>
                            <div class="onhover-show-div notification-dropdown">
                                <div class="card mb-0">
                                    <div class="card-header">
                                        <div class="common-space">
                                            <h4 class="text-start f-w-600">Notitications</h4>
                                            <div><span>4 New</span></div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="notitications-bar">
                                            <div class="tab-content" id="pills-tabContent">
                                                <div class="tab-pane fade show active" id="pills-aboutus"
                                                    role="tabpanel" aria-labelledby="pills-aboutus-tab">
                                                    <div class="user-message">
                                                        <ul>
                                                            <li>
                                                                <div class="user-alerts"><img
                                                                        class="user-image rounded-circle img-fluid me-2"
                                                                        src="assets/images/dashboard/user/5.jpg"
                                                                        alt="user" />
                                                                    <div class="user-name">
                                                                        <div>
                                                                            <h6><a class="f-w-500 f-14"
                                                                                    href="template/user-profile.html">Floyd
                                                                                    Miles</a></h6><span
                                                                                class="f-light f-w-500 f-12">Sir, Can i
                                                                                remove part in des...</span>
                                                                        </div>
                                                                        <div>
                                                                            <svg>
                                                                                <use
                                                                                    href="assets/svg/icon-sprite.svg#more-vertical">
                                                                                </use>
                                                                            </svg>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="user-alerts"><img
                                                                        class="user-image rounded-circle img-fluid me-2"
                                                                        src="assets/images/dashboard/user/6.jpg"
                                                                        alt="user" />
                                                                    <div class="user-name">
                                                                        <div>
                                                                            <h6><a class="f-w-500 f-14"
                                                                                    href="template/user-profile.html">Dianne
                                                                                    Russell</a></h6><span
                                                                                class="f-light f-w-500 f-12">So, what
                                                                                is my next work ?</span>
                                                                        </div>
                                                                        <div>
                                                                            <svg>
                                                                                <use
                                                                                    href="assets/svg/icon-sprite.svg#more-vertical">
                                                                                </use>
                                                                            </svg>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="profile-nav onhover-dropdown">
                            <div class="media profile-media"><img class="b-r-10"
                                    src="assets/images/dashboard/profile.png" alt="">
                                <div class="media-body d-xxl-block d-none box-col-none">
                                    <div class="d-flex align-items-center gap-2"> <span>Alex Mora </span><i
                                            class="middle fa fa-angle-down"> </i></div>
                                    <p class="mb-0 font-roboto">Admin</p>
                                </div>
                            </div>
                            <ul class="profile-dropdown onhover-show-div">
                                <li><a href="user-profile.html"><i data-feather="user"></i><span>My Profile</span></a>
                                </li>
                                <li><a href="letter-box.html"><i data-feather="mail"></i><span>Inbox</span></a></li>
                                <li> <a href="edit-profile.html"> <i
                                            data-feather="settings"></i><span>Settings</span></a></li>
                                <li><a class="btn btn-pill btn-outline-primary btn-sm" href="login.html">Log Out</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <script class="result-template" type="text/x-handlebars-template">
            <div class="ProfileCard u-cf">                        
            <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
            <div class="ProfileCard-details"> 
            <div class="ProfileCard-realName">{{name}}</div>
            </div> 
            </div>
          </script>
            </div>
        </div>
        <div class="page-body-wrapper default-menu default-menu">
            <div class="sidebar-wrapper" data-layout="stroke-svg">
                <div class="logo-wrapper">
                    <a href="dashboard.php">
                        <img class="img-fluid w-80" src="assets/images/logo/logo-light.png" alt="">
                    </a>
                    <div class="back-btn">
                        <i class="fa fa-angle-left"> </i>
                    </div>
                    <div class="toggle-sidebar">
                        <i class="status_toggle middle sidebar-toggle" data-feather="grid">
                        </i>
                    </div>
                </div>
                <div class="logo-icon-wrapper">
                    <a href="dashboard.php">
                        <img class="img-fluid" width="36" src="assets/images/logo_icai.png" alt="">
                    </a>
                </div>
                <nav class="sidebar-main">
                    <div class="left-arrow" id="left-arrow">
                        <i data-feather="arrow-left"></i>
                    </div>
                    <div id="sidebar-menu">
                        <ul class="sidebar-links" id="simple-bar">
                            <li class="back-btn">
                                <a href="dashboard.php">
                                    <img class="img-fluid" src="assets/images/logo/logo-icon.png" alt="">
                                </a>
                                <div class="mobile-back text-end"> <span>Back </span>
                                    <i class="fa fa-angle-right ps-2" aria-hidden="true"></i>
                                </div>
                            </li>

                            <li class="pin-title sidebar-main-title">
                                <div>
                                    <h6>Pinned</h6>
                                </div>
                            </li>

                            <li class="sidebar-main-title">
                                <div>
                                    <h6 class="lan-1">General</h6>
                                </div>
                            </li>

                            <li class="sidebar-list"><i class="fa fa-thumb-tack"> </i><a
                                    class="sidebar-link sidebar-title link-nav" href="dashboard.php">
                                    <svg class="stroke-icon">
                                        <use href="assets/svg/icon-sprite.svg#stroke-home"></use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="assets/svg/icon-sprite.svg#fill-home"></use>
                                    </svg>
                                    <span>Dashboard</span></a>
                            </li>

                            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                                <a class="sidebar-link sidebar-title" href="#">
                                    <svg class="stroke-icon">
                                        <use href="assets/svg/icon-sprite.svg#stroke-home"></use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="assets/svg/icon-sprite.svg#fill-home"></use>
                                    </svg>
                                    <span>Announcement</span>
                                </a>
                                <ul class="sidebar-submenu">
                                    <li><a href="announcement-list.php">List</a></li>
                                    <li><a href="announcement-add.php">Add</a></li>
                                </ul>
                            </li>

                            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                                <a class="sidebar-link sidebar-title" href="#">
                                    <svg class="stroke-icon">
                                        <use href="assets/svg/icon-sprite.svg#stroke-home"></use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="assets/svg/icon-sprite.svg#fill-home"></use>
                                    </svg>
                                    <span>Subscribers</span>
                                </a>
                                <ul class="sidebar-submenu">
                                    <li><a href="foundation-subscribers.php">Foundation </a></li>
                                    <li><a href="intermediate-subscribers.php">Intermediate </a></li>
                                    <li><a href="final-subscribers.php">Final </a></li>
                                </ul>
                            </li>
                            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                                <a class="sidebar-link sidebar-title" href="#">
                                    <svg class="stroke-icon">
                                        <use href="assets/svg/icon-sprite.svg#stroke-home"></use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="assets/svg/icon-sprite.svg#fill-home"></use>
                                    </svg>
                                    <span>Lecture Details</span>
                                </a>
                                <ul class="sidebar-submenu">
                                    <li><a href="add_lecture.php">Add Lecture</a></li>
                                    <li><a href="live_class_list.php">Live Class List</a></li>
                                    <li><a href="bfys_class_list.php">BFYS Class List</a></li>
                                    <li><a href="revisionary_class_list.php">Revisionary Class List</a></li>
                                </ul>
                            </li>
                            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                                <a class="sidebar-link sidebar-title" href="#">
                                    <svg class="stroke-icon">
                                        <use href="assets/svg/icon-sprite.svg#stroke-home"></use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="assets/svg/icon-sprite.svg#fill-home"></use>
                                    </svg>
                                    <span>POU</span>
                                </a>
                                <ul class="sidebar-submenu">
                                    <li><a href="pou-list.php">List</a></li>
                                    <li><a href="pou-add.php">Add</a></li>
                                </ul>
                            </li>
                            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                                <a class="sidebar-link sidebar-title" href="#">
                                    <svg class="stroke-icon">
                                        <use href="assets/svg/icon-sprite.svg#stroke-home"></use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="assets/svg/icon-sprite.svg#fill-home"></use>
                                    </svg>
                                    <span>Mock Test Paper</span>
                                </a>
                                <ul class="sidebar-submenu">
                                    <li><a href="mock_test_paper_list.php">List</a></li>
                                    <li><a href="mock_test_paper_add.php">Add</a></li>
                                </ul>
                            </li>
                            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                                <a class="sidebar-link sidebar-title" href="#">
                                    <svg class="stroke-icon">
                                        <use href="assets/svg/icon-sprite.svg#stroke-home"></use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="assets/svg/icon-sprite.svg#fill-home"></use>
                                    </svg>
                                    <span>Faculty</span>
                                </a>
                                <ul class="sidebar-submenu">
                                    <li><a href="faculty_list.php">List</a></li>
                                    <li><a href="faculty_add.php">Add</a></li>
                                </ul>
                            </li>
                            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                                <a class="sidebar-link sidebar-title" href="#">
                                    <svg class="stroke-icon">
                                        <use href="assets/svg/icon-sprite.svg#stroke-home"></use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="assets/svg/icon-sprite.svg#fill-home"></use>
                                    </svg>
                                    <span>PDF</span>
                                </a>
                                <ul class="sidebar-submenu">
                                    <li><a href="pdf_list.php">List</a></li>
                                    <li><a href="pdf_add.php">Add</a></li>
                                    <li><a href="pdf_authenticate.php">PDF Authenticate</a></li>
                                </ul>
                            </li>
                            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                                <a class="sidebar-link sidebar-title" href="#">
                                    <svg class="stroke-icon">
                                        <use href="assets/svg/icon-sprite.svg#stroke-home"></use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="assets/svg/icon-sprite.svg#fill-home"></use>
                                    </svg>
                                    <span>Push Notification</span>
                                </a>
                                <ul class="sidebar-submenu">
                                    <li><a href="push_notification_list.php">List</a></li>
                                    <li><a href="push_notification_add.php">Add</a></li>
                                </ul>
                            </li>
                            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                                <a class="sidebar-link sidebar-title" href="#">
                                    <svg class="stroke-icon">
                                        <use href="assets/svg/icon-sprite.svg#stroke-home"></use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="assets/svg/icon-sprite.svg#fill-home"></use>
                                    </svg>
                                    <span>Students Journal</span>
                                </a>
                                <ul class="sidebar-submenu">
                                    <li><a href="students_journal_list.php">List</a></li>
                                    <li><a href="students_journal_add.php">Add</a></li>
                                </ul>
                            </li>
                            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                                <a class="sidebar-link sidebar-title" href="#">
                                    <svg class="stroke-icon">
                                        <use href="assets/svg/icon-sprite.svg#stroke-home"></use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="assets/svg/icon-sprite.svg#fill-home"></use>
                                    </svg>
                                    <span>MCQ</span>
                                </a>
                                <ul class="sidebar-submenu">
                                    <li><a href="mcq_paper_list.php">Paper List</a></li>
                                    <li><a href="mcq_paper_add.php">Paper Add</a></li>
                                    <li><a href="mcq_count.php">MCQ Count</a></li>
                                </ul>
                            </li>
                            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                                <a class="sidebar-link sidebar-title" href="#">
                                    <svg class="stroke-icon">
                                        <use href="assets/svg/icon-sprite.svg#stroke-home"></use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="assets/svg/icon-sprite.svg#fill-home"></use>
                                    </svg>
                                    <span>Daily Quiz</span>
                                </a>
                                <ul class="sidebar-submenu">
                                    <li><a href="daily_quiz_upload_list.php">List</a></li>
                                    <li><a href="daily_quiz_upload_add.php">Add</a></li>
                                </ul>
                            </li>
                            <li class="sidebar-list"><i class="fa fa-thumb-tack"> </i><a
                                    class="sidebar-link sidebar-title link-nav" href="feedback.php">
                                    <svg class="stroke-icon">
                                        <use href="assets/svg/icon-sprite.svg#stroke-home"></use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="assets/svg/icon-sprite.svg#fill-home"></use>
                                    </svg>
                                    <span>Feedback</span></a>
                            </li>
                            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                                <a class="sidebar-link sidebar-title" href="#">
                                    <svg class="stroke-icon">
                                        <use href="assets/svg/icon-sprite.svg#stroke-home"></use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="assets/svg/icon-sprite.svg#fill-home"></use>
                                    </svg>
                                    <span>Feeds</span>
                                </a>
                                <ul class="sidebar-submenu">
                                    <li><a href="feeds_list.php">List</a></li>
                                    <li><a href="feeds_add.php">Add</a></li>
                                </ul>
                            </li>
                            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                                <a class="sidebar-link sidebar-title" href="#">
                                    <svg class="stroke-icon">
                                        <use href="assets/svg/icon-sprite.svg#stroke-home"></use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="assets/svg/icon-sprite.svg#fill-home"></use>
                                    </svg>
                                    <span>Slider Banner</span>
                                </a>
                                <ul class="sidebar-submenu">
                                    <li><a href="slider_list.php">List</a></li>
                                    <li><a href="slider_add.php">Add</a></li>
                                </ul>
                            </li>
                            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                                <a class="sidebar-link sidebar-title" href="#">
                                    <svg class="stroke-icon">
                                        <use href="assets/svg/icon-sprite.svg#stroke-home"></use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="assets/svg/icon-sprite.svg#fill-home"></use>
                                    </svg>
                                    <span>Webinar</span>
                                </a>
                                <ul class="sidebar-submenu">
                                    <li><a href="webinar_list.php">List</a></li>
                                    <li><a href="webinar_add.php">Add</a></li>
                                </ul>
                            </li>

                        </ul>
                        <!-- <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                                    class="sidebar-link sidebar-title" href="#">
                                    <svg class="stroke-icon">
                                        <use href="assets/svg/icon-sprite.svg#stroke-widget"></use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="assets/svg/icon-sprite.svg#fill-widget"></use>
                                    </svg><span class="lan-6">Widgets</span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="general-widget.html">General</a></li>
                                    <li><a href="chart-widget.html">Chart</a></li>
                                </ul>
                            </li>

                            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                                    class="sidebar-link sidebar-title" href="#">
                                    <svg class="stroke-icon">
                                        <use href="assets/svg/icon-sprite.svg#stroke-layout"></use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="assets/svg/icon-sprite.svg#fill-layout"></use>
                                    </svg><span class="lan-7">Page layout</span></a>
                                <ul class="sidebar-submenu">
                                    <li><a href="box-layout.html">Boxed</a></li>
                                    <li><a href="layout-rtl.html">RTL</a></li>
                                    <li><a href="layout-dark.html">Dark Layout</a></li>
                                    <li> <a href="hide-on-scroll.html">Hide Nav Scroll</a></li>
                                </ul>
                            </li> -->

                        </ul>
                        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
                    </div>
                </nav>
            </div>
