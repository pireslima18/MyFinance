<?php

/** @var \yii\web\View $this */
/** @var string $content */

use frontend\assets\QuixLabAsset;
use yii\helpers\Url;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use yii\bootstrap5\Modal;

QuixLabAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<head>
    
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
    
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>

<div id="main-wrapper">

    <div class="nav-header">
        <div class="brand-logo">
            <a href="index.php">
                <b class="logo-abbr"><img src="images/logo.png" alt=""> </b>
                <span class="logo-compact"><img src="./images/logo-compact.png" alt=""></span>
                <span class="brand-title">
                    <img src="images/logo-text.png" alt="">
                </span>
            </a>
        </div>
    </div>

    <div class="header">    
        <div class="header-content clearfix">
            
            <div class="nav-control">
                <div class="hamburger">
                    <span class="toggle-icon"><i class="icon-menu"></i></span>
                </div>
            </div>
            <div class="header-left">
                <div class="input-group icons">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-transparent border-0 pr-2 pr-sm-3" id="basic-addon1"><i class="mdi mdi-magnify"></i></span>
                    </div>
                    <input type="search" class="form-control" placeholder="Search Dashboard" aria-label="Search Dashboard">
                    <div class="drop-down animated flipInX d-md-none">
                        <form action="#">
                            <input type="text" class="form-control" placeholder="Search">
                        </form>
                    </div>
                </div>
            </div>
            <div class="header-right">
                <ul class="clearfix">
                    <li class="icons dropdown"><a href="javascript:void(0)" data-toggle="dropdown">
                            <i class="mdi mdi-email-outline"></i>
                            <span class="badge badge-pill gradient-1">3</span>
                        </a>
                        <div class="drop-down animated fadeIn dropdown-menu">
                            <div class="dropdown-content-heading d-flex justify-content-between">
                                <span class="">3 New Messages</span>  
                                <a href="javascript:void()" class="d-inline-block">
                                    <span class="badge badge-pill gradient-1">3</span>
                                </a>
                            </div>
                            <div class="dropdown-content-body">
                                <ul>
                                    <li class="notification-unread">
                                        <a href="javascript:void()">
                                            <img class="float-left mr-3 avatar-img" src="images/avatar/1.jpg" alt="">
                                            <div class="notification-content">
                                                <div class="notification-heading">Saiful Islam</div>
                                                <div class="notification-timestamp">08 Hours ago</div>
                                                <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-unread">
                                        <a href="javascript:void()">
                                            <img class="float-left mr-3 avatar-img" src="images/avatar/2.jpg" alt="">
                                            <div class="notification-content">
                                                <div class="notification-heading">Adam Smith</div>
                                                <div class="notification-timestamp">08 Hours ago</div>
                                                <div class="notification-text">Can you do me a favour?</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void()">
                                            <img class="float-left mr-3 avatar-img" src="images/avatar/3.jpg" alt="">
                                            <div class="notification-content">
                                                <div class="notification-heading">Barak Obama</div>
                                                <div class="notification-timestamp">08 Hours ago</div>
                                                <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void()">
                                            <img class="float-left mr-3 avatar-img" src="images/avatar/4.jpg" alt="">
                                            <div class="notification-content">
                                                <div class="notification-heading">Hilari Clinton</div>
                                                <div class="notification-timestamp">08 Hours ago</div>
                                                <div class="notification-text">Hello</div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                
                            </div>
                        </div>
                    </li>
                    <li class="icons dropdown"><a href="javascript:void(0)" data-toggle="dropdown">
                            <i class="mdi mdi-bell-outline"></i>
                            <span class="badge badge-pill gradient-2">3</span>
                        </a>
                        <div class="drop-down animated fadeIn dropdown-menu dropdown-notfication">
                            <div class="dropdown-content-heading d-flex justify-content-between">
                                <span class="">2 New Notifications</span>  
                                <a href="javascript:void()" class="d-inline-block">
                                    <span class="badge badge-pill gradient-2">5</span>
                                </a>
                            </div>
                            <div class="dropdown-content-body">
                                <ul>
                                    <li>
                                        <a href="javascript:void()">
                                            <span class="mr-3 avatar-icon bg-success-lighten-2"><i class="icon-present"></i></span>
                                            <div class="notification-content">
                                                <h6 class="notification-heading">Events near you</h6>
                                                <span class="notification-text">Within next 5 days</span> 
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void()">
                                            <span class="mr-3 avatar-icon bg-danger-lighten-2"><i class="icon-present"></i></span>
                                            <div class="notification-content">
                                                <h6 class="notification-heading">Event Started</h6>
                                                <span class="notification-text">One hour ago</span> 
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void()">
                                            <span class="mr-3 avatar-icon bg-success-lighten-2"><i class="icon-present"></i></span>
                                            <div class="notification-content">
                                                <h6 class="notification-heading">Event Ended Successfully</h6>
                                                <span class="notification-text">One hour ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void()">
                                            <span class="mr-3 avatar-icon bg-danger-lighten-2"><i class="icon-present"></i></span>
                                            <div class="notification-content">
                                                <h6 class="notification-heading">Events to Join</h6>
                                                <span class="notification-text">After two days</span> 
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                
                            </div>
                        </div>
                    </li>
                    <li class="icons dropdown d-none d-md-flex">
                        <a href="javascript:void(0)" class="log-user"  data-toggle="dropdown">
                            <span>English</span>  <i class="fa fa-angle-down f-s-14" aria-hidden="true"></i>
                        </a>
                        <div class="drop-down dropdown-language animated fadeIn  dropdown-menu">
                            <div class="dropdown-content-body">
                                <ul>
                                    <li><a href="javascript:void()">English</a></li>
                                    <li><a href="javascript:void()">Dutch</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="icons dropdown">
                        <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                            <span class="activity active"></span>
                            <img src="images/user/1.png" height="40" width="40" alt="">
                        </div>
                        <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                            <div class="dropdown-content-body">
                                <ul>
                                    <li>
                                        <a href="app-profile.html"><i class="icon-user"></i> <span>Profile</span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void()">
                                            <i class="icon-envelope-open"></i> <span>Inbox</span> <div class="badge gradient-3 badge-pill gradient-1">3</div>
                                        </a>
                                    </li>
                                    
                                    <hr class="my-2">
                                    <li>
                                        <a href="page-lock.html"><i class="icon-lock"></i> <span>Lock Screen</span></a>
                                    </li>
                                    <li>
                                        <?php
                                            echo Html::a('<i class="icon-key"></i> <span>Logout</span>',
                                            '#',
                                            ['onclick' => "
                                                $.ajax({
                                                    url: '" . Url::toRoute('site/logout') . "',
                                                    type:'post',
                                                    dataType: 'json',
                                                     data: {
                                                        '" . Yii::$app->request->csrfParam . "': '" . Yii::$app->request->csrfToken . "'
                                                    },
                                                    success: function(data){
                                                        location.reload();
                                                    }
                                                });
                                            "]);
                                        ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="nk-sidebar">           
        <div class="nk-nav-scroll">
            <ul class="metismenu" id="menu">
                <li class="nav-label">Dashboard</li>
                <li>
                    <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="./index.html">Home 1</a></li>
                        <!-- <li><a href="./index-2.html">Home 2</a></li> -->
                    </ul>
                </li>
                <li class="mega-menu mega-menu-sm">
                    <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="icon-globe-alt menu-icon"></i><span class="nav-text">Layouts</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="./layout-blank.html">Blank</a></li>
                        <li><a href="./layout-one-column.html">One Column</a></li>
                        <li><a href="./layout-two-column.html">Two column</a></li>
                        <li><a href="./layout-compact-nav.html">Compact Nav</a></li>
                        <li><a href="./layout-vertical.html">Vertical</a></li>
                        <li><a href="./layout-horizontal.html">Horizontal</a></li>
                        <li><a href="./layout-boxed.html">Boxed</a></li>
                        <li><a href="./layout-wide.html">Wide</a></li>
                        
                        
                        <li><a href="./layout-fixed-header.html">Fixed Header</a></li>
                        <li><a href="layout-fixed-sidebar.html">Fixed Sidebar</a></li>
                    </ul>
                </li>
                <li class="nav-label">Apps</li>
                <li>
                    <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="icon-envelope menu-icon"></i> <span class="nav-text">Email</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="./email-inbox.html">Inbox</a></li>
                        <li><a href="./email-read.html">Read</a></li>
                        <li><a href="./email-compose.html">Compose</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="icon-screen-tablet menu-icon"></i><span class="nav-text">Apps</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="./app-profile.html">Profile</a></li>
                        <li><a href="./app-calender.html">Calender</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="icon-graph menu-icon"></i> <span class="nav-text">Charts</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="./chart-flot.html">Flot</a></li>
                        <li><a href="./chart-morris.html">Morris</a></li>
                        <li><a href="./chart-chartjs.html">Chartjs</a></li>
                        <li><a href="./chart-chartist.html">Chartist</a></li>
                        <li><a href="./chart-sparkline.html">Sparkline</a></li>
                        <li><a href="./chart-peity.html">Peity</a></li>
                    </ul>
                </li>
                <li class="nav-label">UI Components</li>
                <li>
                    <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="icon-grid menu-icon"></i><span class="nav-text">UI Components</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="./ui-accordion.html">Accordion</a></li>
                        <li><a href="./ui-alert.html">Alert</a></li>
                        <li><a href="./ui-badge.html">Badge</a></li>
                        <li><a href="./ui-button.html">Button</a></li>
                        <li><a href="./ui-button-group.html">Button Group</a></li>
                        <li><a href="./ui-cards.html">Cards</a></li>
                        <li><a href="./ui-carousel.html">Carousel</a></li>
                        <li><a href="./ui-dropdown.html">Dropdown</a></li>
                        <li><a href="./ui-list-group.html">List Group</a></li>
                        <li><a href="./ui-media-object.html">Media Object</a></li>
                        <li><a href="./ui-modal.html">Modal</a></li>
                        <li><a href="./ui-pagination.html">Pagination</a></li>
                        <li><a href="./ui-popover.html">Popover</a></li>
                        <li><a href="./ui-progressbar.html">Progressbar</a></li>
                        <li><a href="./ui-tab.html">Tab</a></li>
                        <li><a href="./ui-typography.html">Typography</a></li>
                    <!-- </ul>
                </li>
                <li>
                    <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="icon-layers menu-icon"></i><span class="nav-text">Components</span>
                    </a>
                    <ul aria-expanded="false"> -->
                        <li><a href="./uc-nestedable.html">Nestedable</a></li>
                        <li><a href="./uc-noui-slider.html">Noui Slider</a></li>
                        <li><a href="./uc-sweetalert.html">Sweet Alert</a></li>
                        <li><a href="./uc-toastr.html">Toastr</a></li>
                    </ul>
                </li>
                <li>
                    <a href="widgets.html" aria-expanded="false">
                        <i class="icon-badge menu-icon"></i><span class="nav-text">Widget</span>
                    </a>
                </li>
                <li class="nav-label">Forms</li>
                <li>
                    <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="icon-note menu-icon"></i><span class="nav-text">Forms</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="./form-basic.html">Basic Form</a></li>
                        <li><a href="./form-validation.html">Form Validation</a></li>
                        <li><a href="./form-step.html">Step Form</a></li>
                        <li><a href="./form-editor.html">Editor</a></li>
                        <li><a href="./form-picker.html">Picker</a></li>
                    </ul>
                </li>
                <li class="nav-label">Table</li>
                <li>
                    <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="icon-menu menu-icon"></i><span class="nav-text">Table</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="./table-basic.html" aria-expanded="false">Basic Table</a></li>
                        <li><a href="./table-datatable.html" aria-expanded="false">Data Table</a></li>
                    </ul>
                </li>
                <li class="nav-label">Pages</li>
                <li>
                    <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="icon-notebook menu-icon"></i><span class="nav-text">Pages</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="./page-login.html">Login</a></li>
                        <li><a href="./page-register.html">Register</a></li>
                        <li><a href="./page-lock.html">Lock Screen</a></li>
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                            <ul aria-expanded="false">
                                <li><a href="./page-error-404.html">Error 404</a></li>
                                <li><a href="./page-error-403.html">Error 403</a></li>
                                <li><a href="./page-error-400.html">Error 400</a></li>
                                <li><a href="./page-error-500.html">Error 500</a></li>
                                <li><a href="./page-error-503.html">Error 503</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    <main role="main" class="flex-shrink-0">
        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= $content ?>
        </div>
    </main>

    <footer class="footer mt-auto py-3 text-muted">
        <div class="container">
            <p class="float-start">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>
            <p class="float-end"><?= Yii::powered() ?></p>
        </div>
    </footer>

    <?php

        Modal::begin([
            'title' => '',
            'id' => 'modal',
            'size' => 'modal-lg'
        ]);

        echo "<div id='modalContent'></div>";

        Modal::end();

    ?>

</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
