{{-- @extends('admin_layout')
@section('admin_content')
<div class="row">
  <div class="col-md-12">
    <div class="card card-border-color card-border-color-primary">
      <div class="card-header card-header-divider">
        <h2>Thêm khuyến mãi</h2>
      </div>
      <div class="card-body">
        <form action="{{URL::to('/save-khuyenmai')}}" method="POST">
          {{ csrf_field() }}
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Tên khuyến mãi</label>
            <div class="col-12 col-sm-8 col-lg-6">
              <input class="form-control" id="inputText3" type="text" placeholder="Tên khuyến mãi" name="khuyenmai_ten" required="">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputTextarea3">Mô tả khuyến mãi</label>
            <div class="col-12 col-sm-8 col-lg-6">
              <textarea rows="10" class="form-control" id="inputTextarea3" placeholder="Mô tả khuyến mãi" name="khuyenmai_mota" required=""></textarea>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right"> Default</label>
            <div class="col-12 col-sm-8 col-lg-6 pt1">
              <input class="form-control datetimepicker" type="text" value="">
            </div>
          </div>
          <div class="form-group row pt-1">
            <label class="col-12 col-sm-3 col-form-label text-sm-right">Giá trị khuyến mãi</label>
            <div class="col-12 col-sm-8 col-lg-6">
              <select class="form-control" name="khuyenmai_giatri">
                <option value="1" selected="">10%</option>
                <option value="2">20%</option>
                <option value="3">30%</option>
                <option value="4">40%</option>
                <option value="5">50%</option>
                <option value="6">60%</option>
                <option value="7">70%</option>
                <option value="8">80%</option>
                <option value="9">90%</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right">Ngày bắt đầu</label>
            <div class="col-12 col-sm-7 col-md-5 col-lg-4 col-xl-3">
              <div class="input-group date datetimepicker" data-min-view="2" data-date-format="dd-mm-yyy">
                <input class="form-control" size="16" type="text" placeholder="dd-mm-yyyy" name="khuyenmai_ngaybatdau" required>
                <div class="input-group-append">
                  <button class="btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></button>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right">Ngày kết thúc</label>
            <div class="col-12 col-sm-7 col-md-5 col-lg-4 col-xl-3">
              <div class="input-group date datetimepicker" data-min-view="2" data-date-format="dd-mm-yyyy">
                <input class="form-control" size="16" type="text" placeholder="dd-mm-yyyy" name="khuyenmai_ngayketthuc" required>
                <div class="input-group-append">
                  <button class="btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></button>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group now">
            <div class="col-12 col-sm-8 col-lg-6">
              <p class="text-right">
                <button class="btn btn-space btn-primary" type="submit">Thêm khuyến mãi</button>
              </p>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection --}}

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets\img\logo-fav.png">
    <title>Beagle</title>
    <link rel="stylesheet" type="text/css" href="{{asset('public/backend/assets\lib\perfect-scrollbar\css\perfect-scrollbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/backend/assets\lib\material-design-icons\css\material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/backend/assets\lib\datetimepicker\css\bootstrap-datetimepicker.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/backend/assets\lib\select2\css\select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/backend/assets\lib\bootstrap-slider\css\bootstrap-slider.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/backend/assets\css\app.css')}}" type="text/css">
  </head>
  <body>
    <div class="be-wrapper">
      <nav class="navbar navbar-expand fixed-top be-top-header">
        <div class="container-fluid">
          <div class="be-navbar-header"><a class="navbar-brand" href="index.html"></a>
          </div>
          <div class="page-title"><span>Form Elements</span></div>
          <div class="be-right-navbar">
            <ul class="nav navbar-nav float-right be-user-nav">
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false"><img src="assets\img\avatar.png" alt="Avatar"><span class="user-name">Túpac Amaru</span></a>
                <div class="dropdown-menu" role="menu">     
                  <div class="user-info">
                    <div class="user-name">Túpac Amaru</div>
                    <div class="user-position online">Available</div>
                  </div><a class="dropdown-item" href="pages-profile.html"><span class="icon mdi mdi-face"></span>Account</a><a class="dropdown-item" href="#"><span class="icon mdi mdi-settings"></span>Settings</a><a class="dropdown-item" href="pages-login.html"><span class="icon mdi mdi-power"></span>Logout</a>
                </div>
              </li>
            </ul>
            <ul class="nav navbar-nav float-right be-icons-nav">
              <li class="nav-item dropdown"><a class="nav-link be-toggle-right-sidebar" href="#" role="button" aria-expanded="false"><span class="icon mdi mdi-settings"></span></a></li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false"><span class="icon mdi mdi-notifications"></span><span class="indicator"></span></a>
                <ul class="dropdown-menu be-notifications">
                  <li>
                    <div class="title">Notifications<span class="badge badge-pill">3</span></div>
                    <div class="list">
                      <div class="be-scroller-notifications">
                        <div class="content">
                          <ul>
                            <li class="notification notification-unread"><a href="#">
                                <div class="image"><img src="assets\img\avatar2.png" alt="Avatar"></div>
                                <div class="notification-info">
                                  <div class="text"><span class="user-name">Jessica Caruso</span> accepted your invitation to join the team.</div><span class="date">2 min ago</span>
                                </div></a></li>
                            <li class="notification"><a href="#">
                                <div class="image"><img src="assets\img\avatar3.png" alt="Avatar"></div>
                                <div class="notification-info">
                                  <div class="text"><span class="user-name">Joel King</span> is now following you</div><span class="date">2 days ago</span>
                                </div></a></li>
                            <li class="notification"><a href="#">
                                <div class="image"><img src="assets\img\avatar4.png" alt="Avatar"></div>
                                <div class="notification-info">
                                  <div class="text"><span class="user-name">John Doe</span> is watching your main repository</div><span class="date">2 days ago</span>
                                </div></a></li>
                            <li class="notification"><a href="#">
                                <div class="image"><img src="assets\img\avatar5.png" alt="Avatar"></div>
                                <div class="notification-info"><span class="text"><span class="user-name">Emily Carter</span> is now following you</span><span class="date">5 days ago</span></div></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="footer"> <a href="#">View all notifications</a></div>
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false"><span class="icon mdi mdi-apps"></span></a>
                <ul class="dropdown-menu be-connections">
                  <li>
                    <div class="list">
                      <div class="content">
                        <div class="row">
                          <div class="col"><a class="connection-item" href="#"><img src="assets\img\github.png" alt="Github"><span>GitHub</span></a></div>
                          <div class="col"><a class="connection-item" href="#"><img src="assets\img\bitbucket.png" alt="Bitbucket"><span>Bitbucket</span></a></div>
                          <div class="col"><a class="connection-item" href="#"><img src="assets\img\slack.png" alt="Slack"><span>Slack</span></a></div>
                        </div>
                        <div class="row">
                          <div class="col"><a class="connection-item" href="#"><img src="assets\img\dribbble.png" alt="Dribbble"><span>Dribbble</span></a></div>
                          <div class="col"><a class="connection-item" href="#"><img src="assets\img\mail_chimp.png" alt="Mail Chimp"><span>Mail Chimp</span></a></div>
                          <div class="col"><a class="connection-item" href="#"><img src="assets\img\dropbox.png" alt="Dropbox"><span>Dropbox</span></a></div>
                        </div>
                      </div>
                    </div>
                    <div class="footer"> <a href="#">More</a></div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="be-left-sidebar">
        <div class="left-sidebar-wrapper"><a class="left-sidebar-toggle" href="#">Form Elements</a>
          <div class="left-sidebar-spacer">
            <div class="left-sidebar-scroll">
              <div class="left-sidebar-content">
                <ul class="sidebar-elements">
                  <li class="divider">Menu</li>
                  <li><a href="index.html"><i class="icon mdi mdi-home"></i><span>Dashboard</span></a>
                  </li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-face"></i><span>UI Elements</span></a>
                    <ul class="sub-menu">
                      <li><a href="ui-alerts.html">Alerts</a>
                      </li>
                      <li><a href="ui-buttons.html">Buttons</a>
                      </li>
                      <li><a href="ui-cards.html"><span class="badge badge-primary float-right">New</span>Cards</a>
                      </li>
                      <li><a href="ui-panels.html">Panels</a>
                      </li>
                      <li><a href="ui-general.html">General</a>
                      </li>
                      <li><a href="ui-modals.html">Modals</a>
                      </li>
                      <li><a href="ui-notifications.html">Notifications</a>
                      </li>
                      <li><a href="ui-icons.html">Icons</a>
                      </li>
                      <li><a href="ui-grid.html">Grid</a>
                      </li>
                      <li><a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a>
                      </li>
                      <li><a href="ui-nestable-lists.html">Nestable Lists</a>
                      </li>
                      <li><a href="ui-typography.html">Typography</a>
                      </li>
                      <li><a href="ui-dragdrop.html"><span class="badge badge-primary float-right">New</span>Drag &amp; Drop</a>
                      </li>
                      <li><a href="ui-sweetalert2.html"><span class="badge badge-primary float-right">New</span>Sweetalert 2</a>
                      </li>
                    </ul>
                  </li>
                  <li class="parent"><a href="charts.html"><i class="icon mdi mdi-chart-donut"></i><span>Charts</span></a>
                    <ul class="sub-menu">
                      <li><a href="charts-flot.html">Flot</a>
                      </li>
                      <li><a href="charts-sparkline.html">Sparklines</a>
                      </li>
                      <li><a href="charts-chartjs.html">Chart.js</a>
                      </li>
                      <li><a href="charts-morris.html">Morris.js</a>
                      </li>
                    </ul>
                  </li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-dot-circle"></i><span>Forms</span></a>
                    <ul class="sub-menu">
                      <li class="active"><a href="form-elements.html">Elements</a>
                      </li>
                      <li><a href="form-validation.html">Validation</a>
                      </li>
                      <li><a href="form-multiselect.html">Multiselect</a>
                      </li>
                      <li><a href="form-wizard.html">Wizard</a>
                      </li>
                      <li><a href="form-masks.html">Input Masks</a>
                      </li>
                      <li><a href="form-wysiwyg.html">WYSIWYG Editor</a>
                      </li>
                      <li><a href="form-upload.html">Multi Upload</a>
                      </li>
                    </ul>
                  </li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-border-all"></i><span>Tables</span></a>
                    <ul class="sub-menu">
                      <li><a href="tables-general.html">General</a>
                      </li>
                      <li><a href="tables-datatables.html">Data Tables</a>
                      </li>
                      <li><a href="tables-filters.html"><span class="badge badge-primary float-right">New</span>Table Filters</a>
                      </li>
                    </ul>
                  </li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-layers"></i><span>Pages</span></a>
                    <ul class="sub-menu">
                      <li><a href="pages-blank.html">Blank Page</a>
                      </li>
                      <li><a href="pages-blank-header.html">Blank Page Header</a>
                      </li>
                      <li><a href="pages-login.html">Login</a>
                      </li>
                      <li><a href="pages-login2.html">Login v2</a>
                      </li>
                      <li><a href="pages-404.html">404 Page</a>
                      </li>
                      <li><a href="pages-sign-up.html">Sign Up</a>
                      </li>
                      <li><a href="pages-forgot-password.html">Forgot Password</a>
                      </li>
                      <li><a href="pages-profile.html">Profile</a>
                      </li>
                      <li><a href="pages-pricing-tables.html">Pricing Tables</a>
                      </li>
                      <li><a href="pages-pricing-tables2.html">Pricing Tables v2</a>
                      </li>
                      <li><a href="pages-timeline.html">Timeline</a>
                      </li>
                      <li><a href="pages-timeline2.html">Timeline v2</a>
                      </li>
                      <li><a href="pages-invoice.html"><span class="badge badge-primary float-right">New</span>Invoice</a>
                      </li>
                      <li><a href="pages-calendar.html">Calendar</a>
                      </li>
                      <li><a href="pages-gallery.html">Gallery</a>
                      </li>
                      <li><a href="pages-code-editor.html"><span class="badge badge-primary float-right">New    </span>Code Editor</a>
                      </li>
                      <li><a href="pages-booking.html"><span class="badge badge-primary float-right">New</span>Booking</a>
                      </li>
                      <li><a href="pages-loaders.html"><span class="badge badge-primary float-right">New</span>Loaders</a>
                      </li>
                      <li><a href="pages-ajax-loader.html"><span class="badge badge-primary float-right">New</span>AJAX Loader</a>
                      </li>
                    </ul>
                  </li>
                  <li class="divider">Features</li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-inbox"></i><span>Email</span></a>
                    <ul class="sub-menu">
                      <li><a href="email-inbox.html">Inbox</a>
                      </li>
                      <li><a href="email-read.html">Email Detail</a>
                      </li>
                      <li><a href="email-compose.html">Email Compose</a>
                      </li>
                    </ul>
                  </li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-view-web"></i><span>Layouts</span></a>
                    <ul class="sub-menu">
                      <li><a href="layouts-primary-header.html">Primary Header</a>
                      </li>
                      <li><a href="layouts-success-header.html">Success Header</a>
                      </li>
                      <li><a href="layouts-warning-header.html">Warning Header</a>
                      </li>
                      <li><a href="layouts-danger-header.html">Danger Header</a>
                      </li>
                      <li><a href="layouts-search-input.html">Search Input</a>
                      </li>
                      <li><a href="layouts-offcanvas-menu.html">Off Canvas Menu</a>
                      </li>
                      <li><a href="layouts-top-menu.html"><span class="badge badge-primary float-right">New</span>Top Menu</a>
                      </li>
                      <li><a href="layouts-nosidebar-left.html">Without Left Sidebar</a>
                      </li>
                      <li><a href="layouts-nosidebar-right.html">Without Right Sidebar</a>
                      </li>
                      <li><a href="layouts-nosidebars.html">Without Both Sidebars</a>
                      </li>
                      <li><a href="layouts-fixed-sidebar.html">Fixed Left Sidebar</a>
                      </li>
                      <li><a href="layouts-boxed-layout.html"><span class="badge badge-primary float-right">New</span>Boxed Layout</a>
                      </li>
                      <li><a href="pages-blank-aside.html">Page Aside</a>
                      </li>
                      <li><a href="layouts-collapsible-sidebar.html">Collapsible Sidebar</a>
                      </li>
                      <li><a href="layouts-sub-navigation.html"><span class="badge badge-primary float-right">New</span>Sub Navigation</a>
                      </li>
                      <li><a href="layouts-mega-menu.html"><span class="badge badge-primary float-right">New</span>Mega Menu</a>
                      </li>
                    </ul>
                  </li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-pin"></i><span>Maps</span></a>
                    <ul class="sub-menu">
                      <li><a href="maps-google.html">Google Maps</a>
                      </li>
                      <li><a href="maps-vector.html">Vector Maps</a>
                      </li>
                    </ul>
                  </li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-folder"></i><span>Menu Levels</span></a>
                    <ul class="sub-menu">
                      <li class="parent"><a href="#"><i class="icon mdi mdi-undefined"></i><span>Level 1</span></a>
                        <ul class="sub-menu">
                          <li><a href="#"><i class="icon mdi mdi-undefined"></i><span>Level 2</span></a>
                          </li>
                          <li class="parent"><a href="#"><i class="icon mdi mdi-undefined"></i><span>Level 2</span></a>
                            <ul class="sub-menu">
                              <li><a href="#"><i class="icon mdi mdi-undefined"></i><span>Level 3</span></a>
                              </li>
                              <li><a href="#"><i class="icon mdi mdi-undefined"></i><span>Level 3</span></a>
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                      <li class="parent"><a href="#"><i class="icon mdi mdi-undefined"></i><span>Level 1</span></a>
                        <ul class="sub-menu">
                          <li><a href="#"><i class="icon mdi mdi-undefined"></i><span>Level 2</span></a>
                          </li>
                          <li class="parent"><a href="#"><i class="icon mdi mdi-undefined"></i><span>Level 2</span></a>
                            <ul class="sub-menu">
                              <li><a href="#"><i class="icon mdi mdi-undefined"></i><span>Level 3</span></a>
                              </li>
                              <li><a href="#"><i class="icon mdi mdi-undefined"></i><span>Level 3</span></a>
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><a href="documentation.html"><i class="icon mdi mdi-book"></i><span>Documentation</span></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="progress-widget">
            <div class="progress-data"><span class="progress-value">60%</span><span class="name">Current Project</span></div>
            <div class="progress">
              <div class="progress-bar progress-bar-primary" style="width: 60%;"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="be-content">
        <div class="page-head">
          <h2 class="page-head-title">Form Elements</h2>
          <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb page-head-nav">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Forms</a></li>
              <li class="breadcrumb-item active">Elements</li>
            </ol>
          </nav>
        </div>
        <div class="main-content container-fluid">
          <div class="row">
            <div class="col-lg-6">
              <div class="card card-border-color card-border-color-primary">
                <div class="card-header card-header-divider">Basic Form<span class="card-subtitle">This is the default bootstrap form layout</span></div>
                <div class="card-body">
                  <form>
                    <div class="form-group pt-2">
                      <label for="inputEmail">Email address</label>
                      <input class="form-control" id="inputEmail" type="email" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                      <label for="inputPassword">Password</label>
                      <input class="form-control" id="inputPassword" type="password" placeholder="Password">
                    </div>
                    <div class="row pt-3">
                      <div class="col-lg-6 pb-4 pb-lg-0">
                        <div class="be-checkbox custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="check1">
                          <label class="custom-control-label" for="check1">Remember me</label>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <p class="text-right">
                          <button class="btn btn-space btn-primary" type="submit">Submit</button>
                          <button class="btn btn-space btn-secondary">Cancel</button>
                        </p>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="card card-border-color card-border-color-primary">
                <div class="card-header card-header-divider">Horizontal Form<span class="card-subtitle">This is the horizontal bootstrap layout</span></div>
                <div class="card-body">
                  <form>
                    <div class="form-group row mt-2">
                      <label class="col-3 col-lg-2 col-form-label text-right" for="inputEmail2">Email</label>
                      <div class="col-9 col-lg-10">
                        <input class="form-control" id="inputEmail2" type="email" placeholder="Email">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-3 col-lg-2 col-form-label text-right" for="inputPassword2">Password</label>
                      <div class="col-9 col-lg-10">
                        <input class="form-control" id="inputPassword2" type="password" placeholder="Password">
                      </div>
                    </div>
                    <div class="row pt-3 mt-1">
                      <div class="col-sm-6 col-lg-6 pb-4 pb-lg-0">
                        <div class="be-checkbox custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="check2">
                          <label class="custom-control-label" for="check2">Remember me</label>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <p class="text-right">
                          <button class="btn btn-space btn-primary" type="submit">Register</button>
                          <button class="btn btn-space btn-secondary">Cancel</button>
                        </p>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card card-border-color card-border-color-primary">
                <div class="card-header card-header-divider">Basic Elements<span class="card-subtitle">These are the basic bootstrap form elements</span></div>
                <div class="card-body">
                  <form>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Input Text</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" id="inputText3" type="text">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputPassword3">Input Password</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" id="inputPassword3" type="password">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputPlaceholder3">Placeholder Input</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" id="inputPlaceholder3" type="text" placeholder="Placeholder text">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputDisabled3">Disabled Input</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" id="inputDisabled3" type="text" disabled="disabled" placeholder="Disabled input text">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputReadonly3">Readonly Input</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" id="inputReadonly3" type="text" readonly="readonly" value="Readonly input text">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputTextarea3">Textarea</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <textarea class="form-control" id="inputTextarea3"></textarea>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card card-border-color card-border-color-primary">
                <div class="card-header card-header-divider">Input File<span class="card-subtitle">These are the input file options</span></div>
                <div class="card-body">
                  <form>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="file-1">Button File Input</label>
                      <div class="col-12 col-sm-6">
                        <input class="inputfile" id="file-1" type="file" name="file-1" data-multiple-caption="{count} files selected" multiple="">
                        <label class="btn-secondary" for="file-1"> <i class="mdi mdi-upload"></i><span>Browse files...</span></label>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="file-2">Custom Button File Input</label>
                      <div class="col-12 col-sm-6">
                        <input class="inputfile" id="file-2" type="file" name="file-2" data-multiple-caption="{count} files selected" multiple="">
                        <label class="btn-primary" for="file-2"> <i class="mdi mdi-upload"></i><span>Browse files...</span></label>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Custom Button File Input</label>
                      <div class="col-12 col-sm-6">
                        <div class="input-group mb-3">
                          <div class="input-group-prepend"><span class="input-group-text" id="inputGroupFileAddon01">Upload</span></div>
                          <div class="custom-file">
                            <input class="custom-file-input" id="inputGroupFile01" type="file" aria-describedby="inputGroupFileAddon01">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                          </div>
                        </div>
                        <div class="input-group mb-3">
                          <div class="custom-file">
                            <input class="custom-file-input" id="inputGroupFile02" type="file">
                            <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
                          </div>
                          <div class="input-group-append"><span class="input-group-text" id="inputGroupFileAddon02">Upload</span></div>
                        </div>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <button class="btn btn-secondary" id="inputGroupFileAddon03" type="button">Button</button>
                          </div>
                          <div class="custom-file">
                            <input class="custom-file-input" id="inputGroupFile03" type="file" aria-describedby="inputGroupFileAddon03">
                            <label class="custom-file-label" for="inputGroupFile03">Choose file</label>
                          </div>
                        </div>
                        <div class="input-group">
                          <div class="custom-file">
                            <input class="custom-file-input" id="inputGroupFile04" type="file" aria-describedby="inputGroupFileAddon04">
                            <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                          </div>
                          <div class="input-group-append">
                            <button class="btn btn-secondary" id="inputGroupFileAddon04" type="button">Button</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card card-border-color card-border-color-primary">
                <div class="card-header card-header-divider">Input Sizing<span class="card-subtitle">These are the different form control component sizes</span></div>
                <div class="card-body">
                  <form>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputLarge">Large</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control form-control-lg" id="inputLarge" type="text" value="Large input">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputDefault">Default</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" id="inputDefault" type="text" value="Default input">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputSmall">Small</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control form-control-sm" id="inputSmall" type="text" value="Small input">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputExtraSmall">Extra Small</label>
                      <div class="col-12 col-sm-8 col-lg-6 pt-1">
                        <input class="form-control form-control-xs" id="inputExtraSmall" type="text" value="Extra small input">
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card card-border-color card-border-color-primary">
                <div class="card-header card-header-divider">Select & Option Elements<span class="card-subtitle">Advanced custom radio & checkboxes components with pure css</span></div>
                <div class="card-body">
                  <form action="#" style="border-radius: 0px;">
                    <div class="form-group row pt-3">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right pt-4">Icon Radio</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <div class="form-check form-check-inline">
                          <label class="custom-control custom-radio custom-radio-icon custom-control-inline">
                            <input class="custom-control-input" id="radioIcon1" type="radio" name="radio-icon" checked=""><span class="custom-control-label"><i class="mdi mdi-female"></i></span>
                          </label>
                          <label class="custom-control custom-radio custom-radio-icon custom-control-inline">
                            <input class="custom-control-input" id="radioIcon2" type="radio" name="radio-icon"><span class="custom-control-label"><i class="mdi mdi-male-alt"></i></span>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Checkbox</label>
                      <div class="col-12 col-sm-8 col-lg-6 mt-1">
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" checked="" id="check3">
                          <label class="custom-control-label" for="check3">Option 1</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="check4">
                          <label class="custom-control-label" for="check4">Option 2</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="check5">
                          <label class="custom-control-label" for="check5">Option 3</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row pt-1 pb-1">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Inline Checkbox</label>
                      <div class="col-12 col-sm-8 col-lg-6 form-check mt-1">
                        <div class="custom-control custom-checkbox custom-control-inline">
                          <input class="custom-control-input" type="checkbox" checked="" id="check6">
                          <label class="custom-control-label" for="check6">Option 1</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                          <input class="custom-control-input" type="checkbox" id="check7">
                          <label class="custom-control-label" for="check7">Option 2</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                          <input class="custom-control-input" type="checkbox" id="check8">
                          <label class="custom-control-label" for="check8">Option 3</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row pt-1 pb-1">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Full Color</label>
                      <div class="col-12 col-sm-8 col-lg-6 form-check mt-1">
                        <label class="custom-control custom-checkbox custom-control-inline">
                          <input class="custom-control-input" type="checkbox" checked=""><span class="custom-control-label custom-control-color">Option 1</span>
                        </label>
                        <label class="custom-control custom-checkbox custom-control-inline">
                          <input class="custom-control-input" type="checkbox"><span class="custom-control-label custom-control-color">Option 2</span>
                        </label>
                        <label class="custom-control custom-checkbox custom-control-inline">
                          <input class="custom-control-input" type="checkbox"><span class="custom-control-label custom-control-color">Option 3</span>
                        </label>
                      </div>
                    </div>
                    <div class="form-group row pt-1 pb-1">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Radio</label>
                      <div class="col-12 col-sm-8 col-lg-6 form-check mt-1">
                        <label class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" name="radio-stacked" checked=""><span class="custom-control-label">Option 1</span>
                        </label>
                        <label class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" name="radio-stacked"><span class="custom-control-label">Option 2</span>
                        </label>
                        <label class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" name="radio-stacked"><span class="custom-control-label">Option 3</span>
                        </label>
                      </div>
                    </div>
                    <div class="form-group row pt-1 pb-1">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Inline Radio</label>
                      <div class="col-12 col-sm-8 col-lg-6 form-check mt-1">
                        <label class="custom-control custom-radio custom-control-inline">
                          <input class="custom-control-input" type="radio" name="radio-inline" checked=""><span class="custom-control-label">Option 1</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                          <input class="custom-control-input" type="radio" name="radio-inline"><span class="custom-control-label">Option 2</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                          <input class="custom-control-input" type="radio" name="radio-inline"><span class="custom-control-label">Option 3</span>
                        </label>
                      </div>
                    </div>
                    <div class="form-group row pt-1">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Full Color</label>
                      <div class="col-12 col-sm-8 col-lg-6 form-check mt-1">
                        <label class="custom-control custom-radio custom-control-inline">
                          <input class="custom-control-input" type="radio" name="radio-color" checked=""><span class="custom-control-label custom-control-color">Option 1</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                          <input class="custom-control-input" type="radio" name="radio-color"><span class="custom-control-label custom-control-color">Option 2</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                          <input class="custom-control-input" type="radio" name="radio-color"><span class="custom-control-label custom-control-color">Option 3</span>
                        </label>
                      </div>
                    </div>
                    <div class="form-group row pt-1">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Basic Select</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <select class="form-control">
                          <option value="1" selected="">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Multiple Select</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <select class="form-control" multiple="">
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card card-border-color card-border-color-primary">
                <div class="card-header card-header-divider">Bootstrap Validation States<span class="card-subtitle">Default bootstrap validation states</span></div>
                <div class="card-body">
                  <form action="#">
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Success</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control is-valid" type="text" required="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Error</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control is-invalid" type="text" required="">
                      </div>
                    </div>
                    <div class="card-divider"></div>
                    <div class="form-group row pt-2 pb-1">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Checkbox</label>
                      <div class="col-12 col-sm-8 col-lg-6 mt-1">
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input is-valid" type="checkbox" checked="" id="check9">
                          <label class="custom-control-label" for="check9">Success</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input is-invalid" type="checkbox" id="check10">
                          <label class="custom-control-label" for="check10">Error</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row pt-1 pb-0">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Full Color</label>
                      <div class="col-12 col-sm-8 col-lg-6 mt-1">
                        <div class="form-group">
                          <div class="custom-control custom-checkbox custom-control-inline">
                            <input class="custom-control-input is-valid" type="checkbox" checked="" id="check11">
                            <label class="custom-control-label custom-control-color" for="check11">Success</label>
                          </div>
                          <div class="custom-control custom-checkbox custom-control-inline">
                            <input class="custom-control-input is-invalid" type="checkbox" checked="" id="check12">
                            <label class="custom-control-label custom-control-color" for="check12">Error</label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row pt-0 pb-0">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Radio</label>
                      <div class="col-12 col-sm-8 col-lg-6 mt-1">
                        <div class="form-group">
                          <label class="custom-control custom-radio">
                            <input class="custom-control-input is-valid" type="radio" checked="" name="radioStateColor"><span class="custom-control-label">Success</span>
                          </label>
                          <label class="custom-control custom-radio">
                            <input class="custom-control-input is-invalid" type="radio" name="radioStateColor"><span class="custom-control-label">Error</span>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row pt-0 pb-0">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Inline Radio</label>
                      <div class="col-12 col-sm-8 col-lg-6 mt-1">
                        <div class="form-group">
                          <label class="custom-control custom-radio custom-control-inline">
                            <input class="custom-control-input is-valid" type="radio" checked="" name="radioStateColor2"><span class="custom-control-label">Success</span>
                          </label>
                          <label class="custom-control custom-radio custom-control-inline">
                            <input class="custom-control-input is-invalid" type="radio" name="radioStateColor2"><span class="custom-control-label">Error</span>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row pt-0 pb-0">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Full Color</label>
                      <div class="col-12 col-sm-8 col-lg-6 mt-1">
                        <div class="form-group">
                          <label class="custom-control custom-radio custom-control-inline">
                            <input class="custom-control-input is-valid" type="radio" checked="" name="radioStateColor3"><span class="custom-control-label custom-control-color">Success</span>
                          </label>
                          <label class="custom-control custom-radio custom-control-inline">
                            <input class="custom-control-input is-invalid" type="radio" name="radioStateColor3"><span class="custom-control-label custom-control-color">Error</span>
                          </label>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card card-border-color card-border-color-primary">
                <div class="card-header card-header-Bootstrap">Validation States<span class="card-subtitle">Default bootstrap validation states</span></div>
                <div class="card-body">
                  <form action="#">
                    <div class="card-divider"></div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Input group success state</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <div class="input-group input-group-lg mb-3">
                          <div class="input-group-prepend"><span class="input-group-text">@</span></div>
                          <input class="form-control is-valid" type="text" placeholder="" aria-describedby="inputGroupPrepend3" required="">
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Input group invalid state</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <div class="input-group input-group-lg mb-3">
                          <div class="input-group-prepend"><span class="input-group-text">@</span></div>
                          <input class="form-control is-invalid" type="text" placeholder="" aria-describedby="inputGroupPrepend3" required="">
                        </div>
                      </div>
                    </div>
                    <div class="card-divider"> </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Basic success state</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control is-valid" type="text" placeholder="" value="" required="">
                        <div class="valid-feedback">Looks good!</div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Basic invalid state</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control is-invalid" type="text" placeholder="" value="" required="">
                        <div class="invalid-feedback">Please provide a valid.</div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Checkbox invalid state </label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <div class="form-check">
                          <input class="form-check-input is-invalid" id="invalidCheck3" type="checkbox" value="" required="">
                          <label class="form-check-label" for="invalidCheck3">Agree to terms and conditions     </label>
                          <div class="invalid-feedback">You must agree before submitting.                                       </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card card-border-color card-border-color-primary">
                <div class="card-header card-header-divider">Input Groups<span class="card-subtitle">Bootstrap input groups components</span></div>
                <div class="card-body">
                  <form>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Input Text</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <div class="input-group mb-3"><span class="input-group-prepend"><span class="input-group-text">@</span></span>
                          <input class="form-control" type="text" placeholder="Username">
                        </div>
                        <div class="input-group mb-3">
                          <input class="form-control" type="text">
                          <div class="input-group-append"><span class="input-group-text">.00</span></div>
                        </div>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                          <input class="form-control" type="text">
                          <div class="input-group-append"><span class="input-group-text">.00</span></div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Input Sizing</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <div class="input-group input-group-lg mb-3">
                          <div class="input-group-prepend"><span class="input-group-text">@</span></div>
                          <input class="form-control" type="text" placeholder="Username">
                        </div>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend"><span class="input-group-text">@</span></div>
                          <input class="form-control" type="text" placeholder="Username">
                        </div>
                        <div class="input-group input-group-sm mb-3">
                          <div class="input-group-prepend"><span class="input-group-text">@</span></div>
                          <input class="form-control" type="text" placeholder="Username">
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Checkbox & Radio</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="check13">
                                <label class="custom-control-label" for="check13"></label>
                              </div>
                            </div>
                          </div>
                          <input class="form-control" type="text">
                        </div>
                        <div class="input-group mb-2">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <label class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio"><span class="custom-control-label"></span>
                              </label>
                            </div>
                          </div>
                          <input class="form-control" type="text">
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Button Addons</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <div class="input-group mb-3">
                          <input class="form-control" type="text">
                          <div class="input-group-append">
                            <button class="btn btn-primary" type="button">Go!</button>
                          </div>
                        </div>
                        <div class="input-group mb-3">
                          <input class="form-control" type="text">
                          <div class="input-group-append be-addon">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action</button>
                            <div class="dropdown-menu"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                              <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                            </div>
                          </div>
                        </div>
                        <div class="input-group mb-3">
                          <input class="form-control" type="text">
                          <div class="input-group-append be-addon">
                            <button class="btn btn-primary" tabindex="-1" type="button">Action</button>
                            <button class="btn btn-primary dropdown-toggle dropdown-toggle-split" tabindex="-1" data-toggle="dropdown" type="button"><span class="sr-only">Toggle Dropdown</span></button>
                            <div class="dropdown-menu"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                              <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Select2</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <div class="input-group mb-3">
                          <select class="select2">
                            <optgroup label="Alaskan/Hawaiian Time Zone">
                              <option value="AK">Alaska</option>
                              <option value="HI">Hawaii</option>
                            </optgroup>
                            <optgroup label="Pacific Time Zone">
                              <option value="CA">California</option>
                              <option value="NV">Nevada</option>
                              <option value="OR">Oregon</option>
                              <option value="WA">Washington</option>
                            </optgroup>
                            <optgroup label="Mountain Time Zone">
                              <option value="AZ">Arizona</option>
                              <option value="CO">Colorado</option>
                              <option value="ID">Idaho</option>
                              <option value="MT">Montana</option>
                              <option value="NE">Nebraska</option>
                              <option value="NM">New Mexico</option>
                              <option value="ND">North Dakota</option>
                              <option value="UT">Utah</option>
                              <option value="WY">Wyoming</option>
                            </optgroup>
                            <optgroup label="Central Time Zone">
                              <option value="AL">Alabama</option>
                              <option value="AR">Arkansas</option>
                              <option value="IL">Illinois</option>
                              <option value="IA">Iowa</option>
                              <option value="KS">Kansas</option>
                              <option value="KY">Kentucky</option>
                              <option value="LA">Louisiana</option>
                              <option value="MN">Minnesota</option>
                              <option value="MS">Mississippi</option>
                              <option value="MO">Missouri</option>
                              <option value="OK">Oklahoma</option>
                              <option value="SD">South Dakota</option>
                              <option value="TX">Texas</option>
                              <option value="TN">Tennessee</option>
                              <option value="WI">Wisconsin</option>
                            </optgroup>
                            <optgroup label="Eastern Time Zone">
                              <option value="CT">Connecticut</option>
                              <option value="DE">Delaware</option>
                              <option value="FL">Florida</option>
                              <option value="GA">Georgia</option>
                              <option value="IN">Indiana</option>
                              <option value="ME">Maine</option>
                              <option value="MD">Maryland</option>
                              <option value="MA">Massachusetts</option>
                              <option value="MI">Michigan</option>
                              <option value="NH">New Hampshire</option>
                              <option value="NJ">New Jersey</option>
                              <option value="NY">New York</option>
                              <option value="NC">North Carolina</option>
                              <option value="OH">Ohio</option>
                              <option value="PA">Pennsylvania</option>
                              <option value="RI">Rhode Island</option>
                              <option value="SC">South Carolina</option>
                              <option value="VT">Vermont</option>
                              <option value="VA">Virginia</option>
                              <option value="WV">West Virginia</option>
                            </optgroup>
                          </select>
                          <div class="input-group-append">
                            <button class="btn btn-primary" type="button">Go!</button>
                          </div>
                        </div>
                        <div class="input-group mb-3">
                          <select class="select2">
                            <optgroup label="Alaskan/Hawaiian Time Zone">
                              <option value="AK">Alaska</option>
                              <option value="HI">Hawaii</option>
                            </optgroup>
                            <optgroup label="Pacific Time Zone">
                              <option value="CA">California</option>
                              <option value="NV">Nevada</option>
                              <option value="OR">Oregon</option>
                              <option value="WA">Washington</option>
                            </optgroup>
                            <optgroup label="Mountain Time Zone">
                              <option value="AZ">Arizona</option>
                              <option value="CO">Colorado</option>
                              <option value="ID">Idaho</option>
                              <option value="MT">Montana</option>
                              <option value="NE">Nebraska</option>
                              <option value="NM">New Mexico</option>
                              <option value="ND">North Dakota</option>
                              <option value="UT">Utah</option>
                              <option value="WY">Wyoming</option>
                            </optgroup>
                            <optgroup label="Central Time Zone">
                              <option value="AL">Alabama</option>
                              <option value="AR">Arkansas</option>
                              <option value="IL">Illinois</option>
                              <option value="IA">Iowa</option>
                              <option value="KS">Kansas</option>
                              <option value="KY">Kentucky</option>
                              <option value="LA">Louisiana</option>
                              <option value="MN">Minnesota</option>
                              <option value="MS">Mississippi</option>
                              <option value="MO">Missouri</option>
                              <option value="OK">Oklahoma</option>
                              <option value="SD">South Dakota</option>
                              <option value="TX">Texas</option>
                              <option value="TN">Tennessee</option>
                              <option value="WI">Wisconsin</option>
                            </optgroup>
                            <optgroup label="Eastern Time Zone">
                              <option value="CT">Connecticut</option>
                              <option value="DE">Delaware</option>
                              <option value="FL">Florida</option>
                              <option value="GA">Georgia</option>
                              <option value="IN">Indiana</option>
                              <option value="ME">Maine</option>
                              <option value="MD">Maryland</option>
                              <option value="MA">Massachusetts</option>
                              <option value="MI">Michigan</option>
                              <option value="NH">New Hampshire</option>
                              <option value="NJ">New Jersey</option>
                              <option value="NY">New York</option>
                              <option value="NC">North Carolina</option>
                              <option value="OH">Ohio</option>
                              <option value="PA">Pennsylvania</option>
                              <option value="RI">Rhode Island</option>
                              <option value="SC">South Carolina</option>
                              <option value="VT">Vermont</option>
                              <option value="VA">Virginia</option>
                              <option value="WV">West Virginia</option>
                            </optgroup>
                          </select>
                          <div class="input-group-append be-addon">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action</button>
                            <div class="dropdown-menu"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                              <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                            </div>
                          </div>
                        </div>
                        <div class="input-group mb-3">
                          <select class="select2">
                            <optgroup label="Alaskan/Hawaiian Time Zone">
                              <option value="AK">Alaska</option>
                              <option value="HI">Hawaii</option>
                            </optgroup>
                            <optgroup label="Pacific Time Zone">
                              <option value="CA">California</option>
                              <option value="NV">Nevada</option>
                              <option value="OR">Oregon</option>
                              <option value="WA">Washington</option>
                            </optgroup>
                            <optgroup label="Mountain Time Zone">
                              <option value="AZ">Arizona</option>
                              <option value="CO">Colorado</option>
                              <option value="ID">Idaho</option>
                              <option value="MT">Montana</option>
                              <option value="NE">Nebraska</option>
                              <option value="NM">New Mexico</option>
                              <option value="ND">North Dakota</option>
                              <option value="UT">Utah</option>
                              <option value="WY">Wyoming</option>
                            </optgroup>
                            <optgroup label="Central Time Zone">
                              <option value="AL">Alabama</option>
                              <option value="AR">Arkansas</option>
                              <option value="IL">Illinois</option>
                              <option value="IA">Iowa</option>
                              <option value="KS">Kansas</option>
                              <option value="KY">Kentucky</option>
                              <option value="LA">Louisiana</option>
                              <option value="MN">Minnesota</option>
                              <option value="MS">Mississippi</option>
                              <option value="MO">Missouri</option>
                              <option value="OK">Oklahoma</option>
                              <option value="SD">South Dakota</option>
                              <option value="TX">Texas</option>
                              <option value="TN">Tennessee</option>
                              <option value="WI">Wisconsin</option>
                            </optgroup>
                            <optgroup label="Eastern Time Zone">
                              <option value="CT">Connecticut</option>
                              <option value="DE">Delaware</option>
                              <option value="FL">Florida</option>
                              <option value="GA">Georgia</option>
                              <option value="IN">Indiana</option>
                              <option value="ME">Maine</option>
                              <option value="MD">Maryland</option>
                              <option value="MA">Massachusetts</option>
                              <option value="MI">Michigan</option>
                              <option value="NH">New Hampshire</option>
                              <option value="NJ">New Jersey</option>
                              <option value="NY">New York</option>
                              <option value="NC">North Carolina</option>
                              <option value="OH">Ohio</option>
                              <option value="PA">Pennsylvania</option>
                              <option value="RI">Rhode Island</option>
                              <option value="SC">South Carolina</option>
                              <option value="VT">Vermont</option>
                              <option value="VA">Virginia</option>
                              <option value="WV">West Virginia</option>
                            </optgroup>
                          </select>
                          <div class="input-group-append be-addon">
                            <button class="btn btn-primary" tabindex="-1" type="button">Action</button>
                            <button class="btn btn-primary dropdown-toggle dropdown-toggle-split" tabindex="-1" data-toggle="dropdown" type="button"><span class="sr-only">Toggle Dropdown</span></button>
                            <div class="dropdown-menu"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                              <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card card-border-color card-border-color-primary">
                <div class="card-header card-header-divider">Switch Component<span class="card-subtitle">Custom switch component using only css</span></div>
                <div class="card-body">
                  <form action="#" style="border-radius: 0px;">
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Sizes</label>
                      <div class="col-12 col-sm-8 col-lg-6 pt-1">
                        <div class="switch-button switch-button-xs">
                          <input type="checkbox" checked="" name="swt1" id="swt1"><span>
                            <label for="swt1"></label></span>
                        </div>
                        <div class="switch-button switch-button-sm">
                          <input type="checkbox" checked="" name="swt2" id="swt2"><span>
                            <label for="swt2"></label></span>
                        </div>
                        <div class="switch-button">
                          <input type="checkbox" checked="" name="swt3" id="swt3"><span>
                            <label for="swt3"></label></span>
                        </div>
                        <div class="switch-button switch-button-lg">
                          <input type="checkbox" checked="" name="swt4" id="swt4"><span>
                            <label for="swt4"></label></span>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Success</label>
                      <div class="col-12 col-sm-8 col-lg-6 pt-1">
                        <div class="switch-button switch-button-success">
                          <input type="checkbox" checked="" name="swt5" id="swt5"><span>
                            <label for="swt5"></label></span>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Warning</label>
                      <div class="col-12 col-sm-8 col-lg-6 pt-1">
                        <div class="switch-button switch-button-warning">
                          <input type="checkbox" checked="" name="swt6" id="swt6"><span>
                            <label for="swt6"></label></span>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Danger</label>
                      <div class="col-12 col-sm-8 col-lg-6 pt-1">
                        <div class="switch-button switch-button-danger">
                          <input type="checkbox" checked="" name="swt7" id="swt7"><span>
                            <label for="swt7"></label></span>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Yes/No Labels</label>
                      <div class="col-12 col-sm-8 col-lg-6 pt-1">
                        <div class="switch-button switch-button-yesno">
                          <input type="checkbox" checked="" name="swt8" id="swt8"><span>
                            <label for="swt8"></label></span>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card card-border-color card-border-color-primary">
                <div class="card-header card-header-divider">Date Picker<span class="card-subtitle">Datepicker bootstrap plugin</span></div>
                <div class="card-body">
                  <form>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right"> Default</label>
                      <div class="col-12 col-sm-8 col-lg-6 pt1">
                        <input class="form-control datetimepicker" type="text" value="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right"> Read Only</label>
                      <div class="col-12 col-sm-7 col-md-5 col-lg-4 col-xl-3">
                        <div class="input-group date datetimepicker" data-date="1979-09-16T05:25:07Z" data-date-format="yyyy-mm-dd - HH:ii" data-link-field="dtp_input1">
                          <input class="form-control" size="16" type="text" value="" readonly="">
                          <div class="input-group-append">
                            <button class="btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right"> Only Date </label>
                      <div class="col-12 col-sm-7 col-md-5 col-lg-4 col-xl-3">
                        <div class="input-group date datetimepicker" data-min-view="2" data-date-format="yyyy-mm-dd">
                          <input class="form-control" size="16" type="text" value="">
                          <div class="input-group-append">
                            <button class="btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Decade View</label>
                      <div class="col-12 col-sm-7 col-md-5 col-lg-4 col-xl-3">
                        <div class="input-group date datetimepicker" data-start-view="4" data-date="1979-09-16T05:25:07Z" data-date-format="yyyy-mm-dd - HH:ii" data-link-field="dtp_input1">
                          <input class="form-control" size="16" type="text" value="">
                          <div class="input-group-append">
                            <button class="btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Year View</label>
                      <div class="col-12 col-sm-7 col-md-5 col-lg-4 col-xl-3">
                        <div class="input-group date datetimepicker" data-start-view="3" data-date="1979-09-16T05:25:07Z" data-date-format="yyyy-mm-dd - HH:ii" data-link-field="dtp_input1">
                          <input class="form-control" size="16" type="text" value="">
                          <div class="input-group-append">
                            <button class="btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Month View</label>
                      <div class="col-12 col-sm-7 col-md-5 col-lg-4 col-xl-3">
                        <div class="input-group date datetimepicker" data-start-view="2" data-date="1979-09-16T05:25:07Z" data-date-format="yyyy-mm-dd - HH:ii" data-link-field="dtp_input1">
                          <input class="form-control" size="16" type="text" value="">
                          <div class="input-group-append">
                            <button class="btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Day View</label>
                      <div class="col-12 col-sm-7 col-md-5 col-lg-4 col-xl-3">
                        <div class="input-group date datetimepicker" data-start-view="1" data-date="1979-09-16T05:25:07Z" data-date-format="yyyy-mm-dd - HH:ii" data-link-field="dtp_input1">
                          <input class="form-control" size="16" type="text" value="">
                          <div class="input-group-append">
                            <button class="btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Hour View</label>
                      <div class="col-12 col-sm-7 col-md-5 col-lg-4 col-xl-3">
                        <div class="input-group date datetimepicker" data-start-view="0" data-date="1979-09-16T05:25:07Z" data-date-format="yyyy-mm-dd - HH:ii" data-link-field="dtp_input1">
                          <input class="form-control" size="16" type="text" value="">
                          <div class="input-group-append">
                            <button class="btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Day View Meridian</label>
                      <div class="col-12 col-sm-7 col-md-5 col-lg-4 col-xl-3">
                        <div class="input-group date datetimepicker" data-show-meridian="true" data-start-view="1" data-date="1979-09-16T05:25:07Z" data-date-format="yyyy-mm-dd - HH:ii" data-link-field="dtp_input1">
                          <input class="form-control" size="16" type="text" value="">
                          <div class="input-group-append">
                            <button class="btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Hour View Meridian</label>
                      <div class="col-12 col-sm-7 col-md-5 col-lg-4 col-xl-3">
                        <div class="input-group date datetimepicker" data-show-meridian="true" data-start-view="0" data-date="1979-09-16T05:25:07Z" data-date-format="yyyy-mm-dd - HH:ii" data-link-field="dtp_input1">
                          <input class="form-control" size="16" type="text" value="">
                          <div class="input-group-append">
                            <button class="btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card card-border-color card-border-color-primary">
                <div class="card-header card-header-divider">Advanced Controls<span class="card-subtitle">Select2 & Bootstrap slider plugins</span></div>
                <div class="card-body">
                  <form action="#">
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Select2 Large</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <select class="select2 select2-lg">
                          <option> </option>
                          <optgroup label="Alaskan/Hawaiian Time Zone">
                            <option value="AK">Alaska</option>
                            <option value="HI">Hawaii</option>
                          </optgroup>
                          <optgroup label="Pacific Time Zone">
                            <option value="CA">California</option>
                            <option value="NV">Nevada</option>
                            <option value="OR">Oregon</option>
                            <option value="WA">Washington</option>
                          </optgroup>
                          <optgroup label="Mountain Time Zone">
                            <option value="AZ">Arizona</option>
                            <option value="CO">Colorado</option>
                            <option value="ID">Idaho</option>
                            <option value="MT">Montana</option>
                            <option value="NE">Nebraska</option>
                            <option value="NM">New Mexico</option>
                            <option value="ND">North Dakota</option>
                            <option value="UT">Utah</option>
                            <option value="WY">Wyoming</option>
                          </optgroup>
                          <optgroup label="Central Time Zone">
                            <option value="AL">Alabama</option>
                            <option value="AR">Arkansas</option>
                            <option value="IL">Illinois</option>
                            <option value="IA">Iowa</option>
                            <option value="KS">Kansas</option>
                            <option value="KY">Kentucky</option>
                            <option value="LA">Louisiana</option>
                            <option value="MN">Minnesota</option>
                            <option value="MS">Mississippi</option>
                            <option value="MO">Missouri</option>
                            <option value="OK">Oklahoma</option>
                            <option value="SD">South Dakota</option>
                            <option value="TX">Texas</option>
                            <option value="TN">Tennessee</option>
                            <option value="WI">Wisconsin</option>
                          </optgroup>
                          <optgroup label="Eastern Time Zone">
                            <option value="CT">Connecticut</option>
                            <option value="DE">Delaware</option>
                            <option value="FL">Florida</option>
                            <option value="GA">Georgia</option>
                            <option value="IN">Indiana</option>
                            <option value="ME">Maine</option>
                            <option value="MD">Maryland</option>
                            <option value="MA">Massachusetts</option>
                            <option value="MI">Michigan</option>
                            <option value="NH">New Hampshire</option>
                            <option value="NJ">New Jersey</option>
                            <option value="NY">New York</option>
                            <option value="NC">North Carolina</option>
                            <option value="OH">Ohio</option>
                            <option value="PA">Pennsylvania</option>
                            <option value="RI">Rhode Island</option>
                            <option value="SC">South Carolina</option>
                            <option value="VT">Vermont</option>
                            <option value="VA">Virginia</option>
                            <option value="WV">West Virginia</option>
                          </optgroup>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Default</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <select class="select2">
                          <option> </option>
                          <optgroup label="Alaskan/Hawaiian Time Zone">
                            <option value="AK">Alaska</option>
                            <option value="HI">Hawaii</option>
                          </optgroup>
                          <optgroup label="Pacific Time Zone">
                            <option value="CA">California</option>
                            <option value="NV">Nevada</option>
                            <option value="OR">Oregon</option>
                            <option value="WA">Washington</option>
                          </optgroup>
                          <optgroup label="Mountain Time Zone">
                            <option value="AZ">Arizona</option>
                            <option value="CO">Colorado</option>
                            <option value="ID">Idaho</option>
                            <option value="MT">Montana</option>
                            <option value="NE">Nebraska</option>
                            <option value="NM">New Mexico</option>
                            <option value="ND">North Dakota</option>
                            <option value="UT">Utah</option>
                            <option value="WY">Wyoming</option>
                          </optgroup>
                          <optgroup label="Central Time Zone">
                            <option value="AL">Alabama</option>
                            <option value="AR">Arkansas</option>
                            <option value="IL">Illinois</option>
                            <option value="IA">Iowa</option>
                            <option value="KS">Kansas</option>
                            <option value="KY">Kentucky</option>
                            <option value="LA">Louisiana</option>
                            <option value="MN">Minnesota</option>
                            <option value="MS">Mississippi</option>
                            <option value="MO">Missouri</option>
                            <option value="OK">Oklahoma</option>
                            <option value="SD">South Dakota</option>
                            <option value="TX">Texas</option>
                            <option value="TN">Tennessee</option>
                            <option value="WI">Wisconsin</option>
                          </optgroup>
                          <optgroup label="Eastern Time Zone">
                            <option value="CT">Connecticut</option>
                            <option value="DE">Delaware</option>
                            <option value="FL">Florida</option>
                            <option value="GA">Georgia</option>
                            <option value="IN">Indiana</option>
                            <option value="ME">Maine</option>
                            <option value="MD">Maryland</option>
                            <option value="MA">Massachusetts</option>
                            <option value="MI">Michigan</option>
                            <option value="NH">New Hampshire</option>
                            <option value="NJ">New Jersey</option>
                            <option value="NY">New York</option>
                            <option value="NC">North Carolina</option>
                            <option value="OH">Ohio</option>
                            <option value="PA">Pennsylvania</option>
                            <option value="RI">Rhode Island</option>
                            <option value="SC">South Carolina</option>
                            <option value="VT">Vermont</option>
                            <option value="VA">Virginia</option>
                            <option value="WV">West Virginia</option>
                          </optgroup>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Small</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <select class="select2 select2-sm">
                          <option> </option>
                          <optgroup label="Alaskan/Hawaiian Time Zone">
                            <option value="AK">Alaska</option>
                            <option value="HI">Hawaii</option>
                          </optgroup>
                          <optgroup label="Pacific Time Zone">
                            <option value="CA">California</option>
                            <option value="NV">Nevada</option>
                            <option value="OR">Oregon</option>
                            <option value="WA">Washington</option>
                          </optgroup>
                          <optgroup label="Mountain Time Zone">
                            <option value="AZ">Arizona</option>
                            <option value="CO">Colorado</option>
                            <option value="ID">Idaho</option>
                            <option value="MT">Montana</option>
                            <option value="NE">Nebraska</option>
                            <option value="NM">New Mexico</option>
                            <option value="ND">North Dakota</option>
                            <option value="UT">Utah</option>
                            <option value="WY">Wyoming</option>
                          </optgroup>
                          <optgroup label="Central Time Zone">
                            <option value="AL">Alabama</option>
                            <option value="AR">Arkansas</option>
                            <option value="IL">Illinois</option>
                            <option value="IA">Iowa</option>
                            <option value="KS">Kansas</option>
                            <option value="KY">Kentucky</option>
                            <option value="LA">Louisiana</option>
                            <option value="MN">Minnesota</option>
                            <option value="MS">Mississippi</option>
                            <option value="MO">Missouri</option>
                            <option value="OK">Oklahoma</option>
                            <option value="SD">South Dakota</option>
                            <option value="TX">Texas</option>
                            <option value="TN">Tennessee</option>
                            <option value="WI">Wisconsin</option>
                          </optgroup>
                          <optgroup label="Eastern Time Zone">
                            <option value="CT">Connecticut</option>
                            <option value="DE">Delaware</option>
                            <option value="FL">Florida</option>
                            <option value="GA">Georgia</option>
                            <option value="IN">Indiana</option>
                            <option value="ME">Maine</option>
                            <option value="MD">Maryland</option>
                            <option value="MA">Massachusetts</option>
                            <option value="MI">Michigan</option>
                            <option value="NH">New Hampshire</option>
                            <option value="NJ">New Jersey</option>
                            <option value="NY">New York</option>
                            <option value="NC">North Carolina</option>
                            <option value="OH">Ohio</option>
                            <option value="PA">Pennsylvania</option>
                            <option value="RI">Rhode Island</option>
                            <option value="SC">South Carolina</option>
                            <option value="VT">Vermont</option>
                            <option value="VA">Virginia</option>
                            <option value="WV">West Virginia</option>
                          </optgroup>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Extra Small</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <select class="select2 select2-xs">
                          <option> </option>
                          <optgroup label="Alaskan/Hawaiian Time Zone">
                            <option value="AK">Alaska</option>
                            <option value="HI">Hawaii</option>
                          </optgroup>
                          <optgroup label="Pacific Time Zone">
                            <option value="CA">California</option>
                            <option value="NV">Nevada</option>
                            <option value="OR">Oregon</option>
                            <option value="WA">Washington</option>
                          </optgroup>
                          <optgroup label="Mountain Time Zone">
                            <option value="AZ">Arizona</option>
                            <option value="CO">Colorado</option>
                            <option value="ID">Idaho</option>
                            <option value="MT">Montana</option>
                            <option value="NE">Nebraska</option>
                            <option value="NM">New Mexico</option>
                            <option value="ND">North Dakota</option>
                            <option value="UT">Utah</option>
                            <option value="WY">Wyoming</option>
                          </optgroup>
                          <optgroup label="Central Time Zone">
                            <option value="AL">Alabama</option>
                            <option value="AR">Arkansas</option>
                            <option value="IL">Illinois</option>
                            <option value="IA">Iowa</option>
                            <option value="KS">Kansas</option>
                            <option value="KY">Kentucky</option>
                            <option value="LA">Louisiana</option>
                            <option value="MN">Minnesota</option>
                            <option value="MS">Mississippi</option>
                            <option value="MO">Missouri</option>
                            <option value="OK">Oklahoma</option>
                            <option value="SD">South Dakota</option>
                            <option value="TX">Texas</option>
                            <option value="TN">Tennessee</option>
                            <option value="WI">Wisconsin</option>
                          </optgroup>
                          <optgroup label="Eastern Time Zone">
                            <option value="CT">Connecticut</option>
                            <option value="DE">Delaware</option>
                            <option value="FL">Florida</option>
                            <option value="GA">Georgia</option>
                            <option value="IN">Indiana</option>
                            <option value="ME">Maine</option>
                            <option value="MD">Maryland</option>
                            <option value="MA">Massachusetts</option>
                            <option value="MI">Michigan</option>
                            <option value="NH">New Hampshire</option>
                            <option value="NJ">New Jersey</option>
                            <option value="NY">New York</option>
                            <option value="NC">North Carolina</option>
                            <option value="OH">Ohio</option>
                            <option value="PA">Pennsylvania</option>
                            <option value="RI">Rhode Island</option>
                            <option value="SC">South Carolina</option>
                            <option value="VT">Vermont</option>
                            <option value="VA">Virginia</option>
                            <option value="WV">West Virginia</option>
                          </optgroup>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">MultiTag Input</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <select class="tags" multiple="">
                          <option value="1">Green</option>
                          <option value="2">Red</option>
                          <option value="3">Blue</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Multitag from Select</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <select class="select2" multiple="">
                          <option> </option>
                          <optgroup label="Alaskan/Hawaiian Time Zone">
                            <option value="AK">Alaska</option>
                            <option value="HI">Hawaii</option>
                          </optgroup>
                          <optgroup label="Pacific Time Zone">
                            <option value="CA">California</option>
                            <option value="NV">Nevada</option>
                            <option value="OR">Oregon</option>
                            <option value="WA">Washington</option>
                          </optgroup>
                          <optgroup label="Mountain Time Zone">
                            <option value="AZ">Arizona</option>
                            <option value="CO">Colorado</option>
                            <option value="ID">Idaho</option>
                            <option value="MT">Montana</option>
                            <option value="NE">Nebraska</option>
                            <option value="NM">New Mexico</option>
                            <option value="ND">North Dakota</option>
                            <option value="UT">Utah</option>
                            <option value="WY">Wyoming</option>
                          </optgroup>
                          <optgroup label="Central Time Zone">
                            <option value="AL">Alabama</option>
                            <option value="AR">Arkansas</option>
                            <option value="IL">Illinois</option>
                            <option value="IA">Iowa</option>
                            <option value="KS">Kansas</option>
                            <option value="KY">Kentucky</option>
                            <option value="LA">Louisiana</option>
                            <option value="MN">Minnesota</option>
                            <option value="MS">Mississippi</option>
                            <option value="MO">Missouri</option>
                            <option value="OK">Oklahoma</option>
                            <option value="SD">South Dakota</option>
                            <option value="TX">Texas</option>
                            <option value="TN">Tennessee</option>
                            <option value="WI">Wisconsin</option>
                          </optgroup>
                          <optgroup label="Eastern Time Zone">
                            <option value="CT">Connecticut</option>
                            <option value="DE">Delaware</option>
                            <option value="FL">Florida</option>
                            <option value="GA">Georgia</option>
                            <option value="IN">Indiana</option>
                            <option value="ME">Maine</option>
                            <option value="MD">Maryland</option>
                            <option value="MA">Massachusetts</option>
                            <option value="MI">Michigan</option>
                            <option value="NH">New Hampshire</option>
                            <option value="NJ">New Jersey</option>
                            <option value="NY">New York</option>
                            <option value="NC">North Carolina</option>
                            <option value="OH">Ohio</option>
                            <option value="PA">Pennsylvania</option>
                            <option value="RI">Rhode Island</option>
                            <option value="SC">South Carolina</option>
                            <option value="VT">Vermont</option>
                            <option value="VA">Virginia</option>
                            <option value="WV">West Virginia</option>
                          </optgroup>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Slider</label>
                      <div class="col-12 col-sm-8 col-lg-6 mt-2">
                        <input class="bslider form-control" type="text" value="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Range Slider</label>
                      <div class="col-12 col-sm-8 col-lg-6 mt-2">
                        <input class="bslider form-control" type="text" data-slider-value="[250,450]" data-slider-step="5" data-slider-max="1000" data-slider-min="10" value="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Vertical Slider</label>
                      <div class="col-12 col-sm-8 col-lg-6 mt-2">
                        <input class="form-control bslider" type="text" data-slider-selection="after" data-slider-orientation="vertical" data-slider-value="-13" data-slider-step="1" data-slider-max="20" data-slider-min="-20" value="">
                        <input class="form-control bslider" type="text" data-slider-selection="after" data-slider-orientation="vertical" data-slider-value="-9" data-slider-step="1" data-slider-max="20" data-slider-min="-20" value="">
                        <input class="form-control bslider" type="text" data-slider-selection="after" data-slider-orientation="vertical" data-slider-value="-5" data-slider-step="1" data-slider-max="20" data-slider-min="-20" value="">
                        <input class="form-control bslider" type="text" data-slider-selection="after" data-slider-orientation="vertical" data-slider-value="-2" data-slider-step="1" data-slider-max="20" data-slider-min="-20" value="">
                        <input class="form-control bslider" type="text" data-slider-selection="after" data-slider-orientation="vertical" data-slider-value="-5" data-slider-step="1" data-slider-max="20" data-slider-min="-20" value="">
                        <input class="form-control bslider" type="text" data-slider-selection="after" data-slider-orientation="vertical" data-slider-value="-9" data-slider-step="1" data-slider-max="20" data-slider-min="-20" value="">
                        <input class="form-control bslider" type="text" data-slider-selection="after" data-slider-orientation="vertical" data-slider-value="-13" data-slider-step="1" data-slider-max="20" data-slider-min="-20" value="">
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <nav class="be-right-sidebar">
        <div class="sb-content">
          <div class="tab-navigation">
            <ul class="nav nav-tabs nav-justified" role="tablist">
              <li class="nav-item" role="presentation"><a class="nav-link active" href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">Chat</a></li>
              <li class="nav-item" role="presentation"><a class="nav-link" href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">Todo</a></li>
              <li class="nav-item" role="presentation"><a class="nav-link" href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">Settings</a></li>
            </ul>
          </div>
          <div class="tab-panel">
            <div class="tab-content">
              <div class="tab-pane tab-chat active" id="tab1" role="tabpanel">
                <div class="chat-contacts">
                  <div class="chat-sections">
                    <div class="be-scroller-chat">
                      <div class="content">
                        <h2>Recent</h2>
                        <div class="contact-list contact-list-recent">
                          <div class="user"><a href="#"><img src="assets\img\avatar1.png" alt="Avatar">
                              <div class="user-data"><span class="status away"></span><span class="name">Claire Sassu</span><span class="message">Can you share the...</span></div></a></div>
                          <div class="user"><a href="#"><img src="assets\img\avatar2.png" alt="Avatar">
                              <div class="user-data"><span class="status"></span><span class="name">Maggie jackson</span><span class="message">I confirmed the info.</span></div></a></div>
                          <div class="user"><a href="#"><img src="assets\img\avatar3.png" alt="Avatar">
                              <div class="user-data"><span class="status offline"></span><span class="name">Joel King		</span><span class="message">Ready for the meeti...</span></div></a></div>
                        </div>
                        <h2>Contacts</h2>
                        <div class="contact-list">
                          <div class="user"><a href="#"><img src="assets\img\avatar4.png" alt="Avatar">
                              <div class="user-data2"><span class="status"></span><span class="name">Mike Bolthort</span></div></a></div>
                          <div class="user"><a href="#"><img src="assets\img\avatar5.png" alt="Avatar">
                              <div class="user-data2"><span class="status"></span><span class="name">Maggie jackson</span></div></a></div>
                          <div class="user"><a href="#"><img src="assets\img\avatar6.png" alt="Avatar">
                              <div class="user-data2"><span class="status offline"></span><span class="name">Jhon Voltemar</span></div></a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="bottom-input">
                    <input type="text" placeholder="Search..." name="q"><span class="mdi mdi-search"></span>
                  </div>
                </div>
                <div class="chat-window">
                  <div class="title">
                    <div class="user"><img src="assets\img\avatar2.png" alt="Avatar">
                      <h2>Maggie jackson</h2><span>Active 1h ago</span>
                    </div><span class="icon return mdi mdi-chevron-left"></span>
                  </div>
                  <div class="chat-messages">
                    <div class="be-scroller-messages">
                      <div class="content">
                        <ul>
                          <li class="friend">
                            <div class="msg">Hello</div>
                          </li>
                          <li class="self">
                            <div class="msg">Hi, how are you?</div>
                          </li>
                          <li class="friend">
                            <div class="msg">Good, I'll need support with my pc</div>
                          </li>
                          <li class="self">
                            <div class="msg">Sure, just tell me what is going on with your computer?</div>
                          </li>
                          <li class="friend">
                            <div class="msg">I don't know it just turns off suddenly</div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="chat-input">
                    <div class="input-wrapper"><span class="photo mdi mdi-camera"></span>
                      <input type="text" placeholder="Message..." name="q" autocomplete="off"><span class="send-msg mdi mdi-mail-send"></span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane tab-todo" id="tab2" role="tabpanel">
                <div class="todo-container">
                  <div class="todo-wrapper">
                    <div class="be-scroller-todo">
                      <div class="todo-content"><span class="category-title">Today</span>
                        <ul class="todo-list">
                          <li>
                            <div class="custom-checkbox custom-control custom-control-sm"><span class="delete mdi mdi-delete"></span>
                              <input class="custom-control-input" type="checkbox" checked="" id="tck1">
                              <label class="custom-control-label" for="tck1">Initialize the project</label>
                            </div>
                          </li>
                          <li>
                            <div class="custom-checkbox custom-control custom-control-sm"><span class="delete mdi mdi-delete"></span>
                              <input class="custom-control-input" type="checkbox" id="tck2">
                              <label class="custom-control-label" for="tck2">Create the main structure							</label>
                            </div>
                          </li>
                          <li>
                            <div class="custom-checkbox custom-control custom-control-sm"><span class="delete mdi mdi-delete"></span>
                              <input class="custom-control-input" type="checkbox" id="tck3">
                              <label class="custom-control-label" for="tck3">Updates changes to GitHub							</label>
                            </div>
                          </li>
                        </ul><span class="category-title">Tomorrow</span>
                        <ul class="todo-list">
                          <li>
                            <div class="custom-checkbox custom-control custom-control-sm"><span class="delete mdi mdi-delete"></span>
                              <input class="custom-control-input" type="checkbox" id="tck4">
                              <label class="custom-control-label" for="tck4">Initialize the project							</label>
                            </div>
                          </li>
                          <li>
                            <div class="custom-checkbox custom-control custom-control-sm"><span class="delete mdi mdi-delete"></span>
                              <input class="custom-control-input" type="checkbox" id="tck5">
                              <label class="custom-control-label" for="tck5">Create the main structure							</label>
                            </div>
                          </li>
                          <li>
                            <div class="custom-checkbox custom-control custom-control-sm"><span class="delete mdi mdi-delete"></span>
                              <input class="custom-control-input" type="checkbox" id="tck6">
                              <label class="custom-control-label" for="tck6">Updates changes to GitHub							</label>
                            </div>
                          </li>
                          <li>
                            <div class="custom-checkbox custom-control custom-control-sm"><span class="delete mdi mdi-delete"></span>
                              <input class="custom-control-input" type="checkbox" id="tck7">
                              <label class="custom-control-label" for="tck7" title="This task is too long to be displayed in a normal space!">This task is too long to be displayed in a normal space!							</label>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="bottom-input">
                    <input type="text" placeholder="Create new task..." name="q"><span class="mdi mdi-plus"></span>
                  </div>
                </div>
              </div>
              <div class="tab-pane tab-settings" id="tab3" role="tabpanel">
                <div class="settings-wrapper">
                  <div class="be-scroller-settings"><span class="category-title">General</span>
                    <ul class="settings-list">
                      <li>
                        <div class="switch-button switch-button-sm">
                          <input type="checkbox" checked="" name="st1" id="st1"><span>
                            <label for="st1"></label></span>
                        </div><span class="name">Available</span>
                      </li>
                      <li>
                        <div class="switch-button switch-button-sm">
                          <input type="checkbox" checked="" name="st2" id="st2"><span>
                            <label for="st2"></label></span>
                        </div><span class="name">Enable notifications</span>
                      </li>
                      <li>
                        <div class="switch-button switch-button-sm">
                          <input type="checkbox" checked="" name="st3" id="st3"><span>
                            <label for="st3"></label></span>
                        </div><span class="name">Login with Facebook</span>
                      </li>
                    </ul><span class="category-title">Notifications</span>
                    <ul class="settings-list">
                      <li>
                        <div class="switch-button switch-button-sm">
                          <input type="checkbox" name="st4" id="st4"><span>
                            <label for="st4"></label></span>
                        </div><span class="name">Email notifications</span>
                      </li>
                      <li>
                        <div class="switch-button switch-button-sm">
                          <input type="checkbox" checked="" name="st5" id="st5"><span>
                            <label for="st5"></label></span>
                        </div><span class="name">Project updates</span>
                      </li>
                      <li>
                        <div class="switch-button switch-button-sm">
                          <input type="checkbox" checked="" name="st6" id="st6"><span>
                            <label for="st6"></label></span>
                        </div><span class="name">New comments</span>
                      </li>
                      <li>
                        <div class="switch-button switch-button-sm">
                          <input type="checkbox" name="st7" id="st7"><span>
                            <label for="st7"></label></span>
                        </div><span class="name">Chat messages</span>
                      </li>
                    </ul><span class="category-title">Workflow</span>
                    <ul class="settings-list">
                      <li>
                        <div class="switch-button switch-button-sm">
                          <input type="checkbox" name="st8" id="st8"><span>
                            <label for="st8"></label></span>
                        </div><span class="name">Deploy on commit</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>
    <script src="{{asset('public/backend/assets\lib\jquery\jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/assets\lib\perfect-scrollbar\js\perfect-scrollbar.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/assets\lib\bootstrap\dist\js\bootstrap.bundle.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/assets\js\app.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/assets\lib\jquery-ui\jquery-ui.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/assets\lib\jquery.nestable\jquery.nestable.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/assets\lib\moment.js\min\moment.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/assets\lib\datetimepicker\js\bootstrap-datetimepicker.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/assets\lib\select2\js\select2.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/assets\lib\select2\js\select2.full.min.js')}}" type="text/javascript"></script>
    <script src="assets\lib\bootstrap-slider\bootstrap-slider.min.js" type="text/javascript"></script>
    <script src="{{asset('public/backend/assets\lib\bs-custom-file-input\bs-custom-file-input.js')}}" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//-initialize the javascript
      	App.init();
      	App.formElements();
      });
    </script>
  </body>
</html>