<!doctype html>
<html lang="en">
   <?php include_once 'pages/header.php'; ?>
   <body>
      <!-- loader Start -->
      <div id="loading">
         <div id="loading-center">
         </div>
      </div>
      <!-- loader END -->
      <!-- Wrapper Start -->
      <div class="wrapper">
         <!-- Sidebar  -->
         <div class="iq-sidebar">
            <div class="iq-sidebar-logo d-flex justify-content-between">
               <a href="index.html">
               <div class="iq-light-logo">
                  <img src="images/logo.gif" class="img-fluid" alt="">
               </div>
               <div class="iq-dark-logo">
                  <img src="images/logo-dark.gif" class="img-fluid" alt="">
               </div>
               <span>Vito</span>
               </a>
               <div class="iq-menu-bt-sidebar">
                 <div class="iq-menu-bt align-self-center">
                    <div class="wrapper-menu">
                       <div class="main-circle"><i class="ri-arrow-left-s-line"></i></div>
                       <div class="hover-circle"><i class="ri-arrow-right-s-line"></i></div>
                    </div>
                 </div>
              </div>
            </div>
            <div id="sidebar-scrollbar">
               <nav class="iq-sidebar-menu">
                  <ul id="iq-sidebar-toggle" class="iq-menu">
                     <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Home</span></li>
                     <li>
                        <a href="index.html" class="iq-waves-effect"><i class="ri-home-4-line"></i><span>Dashboard</span></a>
                     </li>

                     <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Apps</span></li>
                     
                     <li><a href="todo.html" class="iq-waves-effect" aria-expanded="false"><i class="ri-chat-check-line"></i><span>Todo</span></a></li>
                     <li>
                        <a href="#userinfo" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-user-line"></i><span>User</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="userinfo" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="profile.html"><i class="ri-profile-line"></i>User Profile</a></li>
                           <li><a href="profile-edit.html"><i class="ri-file-edit-line"></i>User Edit</a></li>
                           <li><a href="add-user.html"><i class="ri-user-add-line"></i>User Add</a></li>
                           <li><a href="user-list.html"><i class="ri-file-list-line"></i>User List</a></li>
                        </ul>
                     </li>
                     <li><a href="calendar.html" class="iq-waves-effect"><i class="ri-calendar-2-line"></i><span>Calendar</span></a></li>
                     <li><a href="chat.html" class="iq-waves-effect"><i class="ri-message-line"></i><span>Chat</span></a></li>
                     
                     <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Components</span></li>
                     <li class="active">
                        <a href="#ui-elements" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="true"><i class="ri-pencil-ruler-line"></i><span>UI Elements</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="ui-elements" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="ui-colors.html"><i class="ri-font-color"></i>colors</a></li>
                           <li><a href="ui-typography.html"><i class="ri-text"></i>Typography</a></li>
                           <li><a href="ui-alerts.html"><i class="ri-alert-line"></i>Alerts</a></li>
                           <li><a href="ui-badges.html"><i class="ri-building-3-line"></i>Badges</a></li>
                           <li><a href="ui-breadcrumb.html"><i class="ri-menu-2-line"></i>Breadcrumb</a></li>
                           <li><a href="ui-buttons.html"><i class="ri-checkbox-blank-line"></i>Buttons</a></li>
                           <li><a href="ui-cards.html"><i class="ri-bank-card-line"></i>Cards</a></li>
                           <li><a href="ui-carousel.html"><i class="ri-slideshow-line"></i>Carousel</a></li>
                           <li><a href="ui-embed-video.html"><i class="ri-slideshow-2-line"></i>Video</a></li>
                           <li><a href="ui-grid.html"><i class="ri-grid-line"></i>Grid</a></li>
                           <li><a href="ui-images.html"><i class="ri-image-line"></i>Images</a></li>
                           <li><a href="ui-list-group.html"><i class="ri-file-list-3-line"></i>list Group</a></li>
                           <li><a href="ui-media-object.html"><i class="ri-camera-line"></i>Media</a></li>
                           <li><a href="ui-modal.html"><i class="ri-stop-mini-line"></i>Modal</a></li>
                           <li><a href="ui-notifications.html"><i class="ri-notification-line"></i>Notifications</a></li>
                           <li><a href="ui-pagination.html"><i class="ri-pages-line"></i>Pagination</a></li>
                           <li><a href="ui-popovers.html"><i class="ri-folder-shield-2-line"></i>Popovers</a></li>
                           <li><a href="ui-progressbars.html"><i class="ri-battery-low-line"></i>Progressbars</a></li>
                           <li class="active"><a href="ui-tabs.html"><i class="ri-database-line"></i>Tabs</a></li>
                           <li><a href="ui-tooltips.html"><i class="ri-record-mail-line"></i>Tooltips</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#forms" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-profile-line"></i><span>Forms</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="forms" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="form-layout.html"><i class="ri-tablet-line"></i>Form Elements</a></li>
                           <li><a href="form-validation.html"><i class="ri-device-line"></i>Form Validation</a></li>
                           <li><a href="form-switch.html"><i class="ri-toggle-line"></i>Form Switch</a></li>
                           <li><a href="form-chechbox.html"><i class="ri-checkbox-line"></i>Form Checkbox</a></li>
                           <li><a href="form-radio.html"><i class="ri-radio-button-line"></i>Form Radio</a></li>
                        </ul>
                     </li>
                     
                     <li>
                        <a href="#tables" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-table-line"></i><span>Table</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="tables" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="tables-basic.html"><i class="ri-table-line"></i>Basic Tables</a></li>
                           <li><a href="data-table.html"><i class="ri-database-line"></i>Data Table</a></li>
                           <li><a href="table-editable.html"><i class="ri-refund-line"></i>Editable Table</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#charts" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-pie-chart-box-line"></i><span>Charts</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="charts" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="chart-morris.html"><i class="ri-file-chart-line"></i>Morris Chart</a></li>
                           <li><a href="chart-high.html"><i class="ri-bar-chart-line"></i>High Charts</a></li>
                           <li><a href="chart-am.html"><i class="ri-folder-chart-line"></i>Am Charts</a></li>
                           <li><a href="chart-apex.html"><i class="ri-folder-chart-2-line"></i>Apex Chart</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#icons" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-list-check"></i><span>Icons</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="icons" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="icon-dripicons.html"><i class="ri-stack-line"></i>Dripicons</a></li>
                           <li><a href="icon-fontawesome-5.html"><i class="ri-facebook-fill"></i>Font Awesome 5</a></li>
                           <li><a href="icon-lineawesome.html"><i class="ri-keynote-line"></i>line Awesome</a></li>
                           <li><a href="icon-remixicon.html"><i class="ri-remixicon-line"></i>Remixicon</a></li>
                           <li><a href="icon-unicons.html"><i class="ri-underline"></i>unicons</a></li>
                        </ul>
                     </li>
                     <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Pages</span></li>
                     <li>
                        <a href="#authentication" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-pages-line"></i><span>Authentication</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="authentication" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="sign-in.html"><i class="ri-login-box-line"></i>Login</a></li>
                           <li><a href="sign-up.html"><i class="ri-login-circle-line"></i>Register</a></li>
                           <li><a href="pages-recoverpw.html"><i class="ri-record-mail-line"></i>Recover Password</a></li>
                           <li><a href="pages-confirm-mail.html"><i class="ri-file-code-line"></i>Confirm Mail</a></li>
                           <li><a href="pages-lock-screen.html"><i class="ri-lock-line"></i>Lock Screen</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#map-page" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-map-pin-user-line"></i><span>Maps</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="map-page" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="pages-map.html"><i class="ri-google-line"></i>Google Map</a></li>
                           
                        </ul>
                     </li>
                     <li>
                        <a href="#extra-pages" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-pantone-line"></i><span>Extra Pages</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="extra-pages" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="pages-timeline.html"><i class="ri-map-pin-time-line"></i>Timeline</a></li>
                           <li><a href="pages-invoice.html"><i class="ri-question-answer-line"></i>Invoice</a></li>
                           <li><a href="blank-page.html"><i class="ri-invision-line"></i>Blank Page</a></li>
                           <li><a href="pages-error.html"><i class="ri-error-warning-line"></i>Error 404</a></li>
                           <li><a href="pages-error-500.html"><i class="ri-error-warning-line"></i>Error 500</a></li>
                           <li><a href="pages-pricing.html"><i class="ri-price-tag-line"></i>Pricing</a></li>
                           <li><a href="pages-pricing-one.html"><i class="ri-price-tag-2-line"></i>Pricing 1</a></li>
                           <li><a href="pages-maintenance.html"><i class="ri-archive-line"></i>Maintenance</a></li>
                           <li><a href="pages-comingsoon.html"><i class="ri-mastercard-line"></i>Coming Soon</a></li>
                           <li><a href="pages-faq.html"><i class="ri-compasses-line"></i>Faq</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#menu-level" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-record-circle-line"></i><span>Menu Level</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="menu-level" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="#"><i class="ri-record-circle-line"></i>Menu 1</a></li>
                           <li><a href="#"><i class="ri-record-circle-line"></i>Menu 2</a></li>
                           <li><a href="#"><i class="ri-record-circle-line"></i>Menu 3</a></li>
                           <li><a href="#"><i class="ri-record-circle-line"></i>Menu 4</a></li>
                        </ul>
                     </li>
                  </ul>
               </nav>
               <div class="p-3"></div>
            </div>
         </div>
         <!-- TOP Nav Bar -->
         <div class="iq-top-navbar">
            <div class="iq-navbar-custom">
               <div class="iq-sidebar-logo">
                  <div class="top-logo">
                     <a href="index.html" class="logo">
                     <div class="iq-light-logo">
                  <img src="images/logo.gif" class="img-fluid" alt="">
               </div>
               <div class="iq-dark-logo">
                  <img src="images/logo-dark.gif" class="img-fluid" alt="">
               </div>
                     <span>vito</span>
                     </a>
                  </div>
               </div>
               <nav class="navbar navbar-expand-lg navbar-light p-0">
                  <div class="navbar-left">
                  <ul id="topbar-data-icon" class="d-flex p-0 topbar-menu-icon">
                     <li class="nav-item">
                         <a href="index.html" class="nav-link font-weight-bold search-box-toggle"><i class="ri-home-4-line"></i></a>
                     </li>
                     <li><a href="chat.html" class="nav-link"><i class="ri-message-line"></i></a></li>
                     
                     <li><a href="profile.html" class="nav-link"><i class="ri-question-answer-line"></i></a></li>
                     <li><a href="todo.html" class="nav-link router-link-exact-active router-link-active"><i class="ri-chat-check-line"></i></a></li>
                     <li><a href="app/index.html" class="nav-link"><i class="ri-inbox-line"></i></a></li>
                  </ul>
                  <div class="iq-search-bar d-none d-md-block">
                     <form action="#" class="searchbox">
                        <input type="text" class="text search-input" placeholder="Type here to search...">
                        <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                        <div class="searchbox-datalink">
                          <h6 class="pl-3 pt-3 pb-3">Pages</h6>
                           <ul class="m-0 pl-3 pr-3 pb-3">
                              <li class="iq-bg-primary-hover rounded"><a href="index.html" class="nav-link router-link-exact-active router-link-active pr-2"><i class="ri-home-4-line pr-2"></i>Dashboard</a></li>
                              <li class="iq-bg-primary-hover rounded"><a href="dashboard-1.html" class="nav-link router-link-exact-active router-link-active pr-2"><i class="ri-home-3-line pr-2"></i>Dashboard-1</a></li>
                              <li class="iq-bg-primary-hover rounded"><a href="chat.html" class="nav-link"><i class="ri-message-line pr-2"></i>Chat</a></li>
                              <li class="iq-bg-primary-hover rounded"><a href="calendar.html" class="nav-link"><i class="ri-calendar-2-line pr-2"></i>Calendar</a></li>
                              <li class="iq-bg-primary-hover rounded"><a href="profile.html" class="nav-link"><i class="ri-profile-line pr-2"></i>Profile</a></li>
                              <li class="iq-bg-primary-hover rounded"><a href="todo.html" class="nav-link"><i class="ri-chat-check-line pr-2"></i>Todo</a></li>
                              <li class="iq-bg-primary-hover rounded"><a href="app/index.html" class="nav-link"><i class="ri-mail-line pr-2"></i>Email</a></li>
                              <li class="iq-bg-primary-hover rounded"><a href="e-commerce-product-list.html" class="nav-link"><i class="ri-message-line pr-2"></i>Product Listing</a></li>
                              <li class="iq-bg-primary-hover rounded"><a href="e-commerce-product-detail.html" class="nav-link"><i class="ri-file-list-line pr-2"></i>Product Details</a></li>
                              <li class="iq-bg-primary-hover rounded"><a href="pages-faq.html" class="nav-link"><i class="ri-compasses-line pr-2"></i>Faq</a></li>
                              <li class="iq-bg-primary-hover rounded"><a href="form-wizard.html" class="nav-link"><i class="ri-clockwise-line pr-2"></i>Form-wizard</a></li>
                           </ul>
                        </div>
                     </form>
                  </div>
               </div>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-label="Toggle navigation">
                  <i class="ri-menu-3-line"></i>
                  </button>
                  <div class="iq-menu-bt align-self-center">
                     <div class="wrapper-menu">
                        <div class="main-circle"><i class="ri-arrow-left-s-line"></i></div>
                        <div class="hover-circle"><i class="ri-arrow-right-s-line"></i></div>
                     </div>
                  </div>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav ml-auto navbar-list">
                        <li class="nav-item">
                           <a class="search-toggle iq-waves-effect language-title" href="#"><img src="images/small/flag-01.png" alt="img-flaf" class="img-fluid mr-1" style="height: 16px; width: 16px;" /> English <i class="ri-arrow-down-s-line"></i></a>
                           <div class="iq-sub-dropdown">
                              <a class="iq-sub-card" href="#"><img src="images/small/flag-02.png" alt="img-flaf" class="img-fluid mr-2" />French</a>
                              <a class="iq-sub-card" href="#"><img src="images/small/flag-03.png" alt="img-flaf" class="img-fluid mr-2" />Spanish</a>
                              <a class="iq-sub-card" href="#"><img src="images/small/flag-04.png" alt="img-flaf" class="img-fluid mr-2" />Italian</a>
                              <a class="iq-sub-card" href="#"><img src="images/small/flag-05.png" alt="img-flaf" class="img-fluid mr-2" />German</a>
                              <a class="iq-sub-card" href="#"><img src="images/small/flag-06.png" alt="img-flaf" class="img-fluid mr-2" />Japanese</a>

                           </div>
                        </li>
                        
                        <li class="nav-item">
                           <a href="#" class="search-toggle iq-waves-effect">
                              <div id="lottie-beil"></div>
                              <span class="bg-danger dots"></span>
                           </a>
                           <div class="iq-sub-dropdown">
                              <div class="iq-card shadow-none m-0">
                                 <div class="iq-card-body p-0 ">
                                    <div class="bg-primary p-3">
                                       <h5 class="mb-0 text-white">All Notifications<small class="badge  badge-light float-right pt-1">4</small></h5>
                                    </div>

                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="images/user/01.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Emma Watson Nik</h6>
                                             <small class="float-right font-size-12">Just Now</small>
                                             <p class="mb-0">95 MB</p>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="images/user/02.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">New customer is join</h6>
                                             <small class="float-right font-size-12">5 days ago</small>
                                             <p class="mb-0">Jond Nik</p>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="images/user/03.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Two customer is left</h6>
                                             <small class="float-right font-size-12">2 days ago</small>
                                             <p class="mb-0">Jond Nik</p>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="images/user/04.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">New Mail from Fenny</h6>
                                             <small class="float-right font-size-12">3 days ago</small>
                                             <p class="mb-0">Jond Nik</p>
                                          </div>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="nav-item dropdown">
                           <a href="#" class="search-toggle iq-waves-effect">
                             <div id="lottie-mail"></div>
                              <span class="bg-primary count-mail"></span>
                           </a>
                           <div class="iq-sub-dropdown">
                              <div class="iq-card shadow-none m-0">
                                 <div class="iq-card-body p-0 ">
                                    <div class="bg-primary p-3">
                                       <h5 class="mb-0 text-white">All Messages<small class="badge  badge-light float-right pt-1">5</small></h5>
                                    </div>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="images/user/01.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Nik Emma Watson</h6>
                                             <small class="float-left font-size-12">13 Jun</small>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="images/user/02.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Lorem Ipsum Watson</h6>
                                             <small class="float-left font-size-12">20 Apr</small>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="images/user/03.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Why do we use it?</h6>
                                             <small class="float-left font-size-12">30 Jun</small>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="images/user/04.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Variations Passages</h6>
                                             <small class="float-left font-size-12">12 Sep</small>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="images/user/05.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Lorem Ipsum generators</h6>
                                             <small class="float-left font-size-12">5 Dec</small>
                                          </div>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>
                  <ul class="navbar-list">
                      <li>
                        <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center bg-primary rounded">
                           <img src="images/user/1.jpg" class="img-fluid rounded mr-3" alt="user">
                           <div class="caption">
                              <h6 class="mb-0 line-height text-white">Nik jone</h6>
                              <span class="font-size-12 text-white">Available</span>
                           </div>
                        </a>
                        <div class="iq-sub-dropdown iq-user-dropdown">
                           <div class="iq-card shadow-none m-0">
                              <div class="iq-card-body p-0 ">
                                 <div class="bg-primary p-3">
                                    <h5 class="mb-0 text-white line-height">Hello Nik jone</h5>
                                    <span class="text-white font-size-12">Available</span>
                                 </div>
                                 <a href="profile.html" class="iq-sub-card iq-bg-primary-hover">
                                    <div class="media align-items-center">
                                       <div class="rounded iq-card-icon iq-bg-primary">
                                          <i class="ri-file-user-line"></i>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">My Profile</h6>
                                          <p class="mb-0 font-size-12">View personal profile details.</p>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="profile-edit.html" class="iq-sub-card iq-bg-primary-hover">
                                    <div class="media align-items-center">
                                       <div class="rounded iq-card-icon iq-bg-primary">
                                          <i class="ri-profile-line"></i>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Edit Profile</h6>
                                          <p class="mb-0 font-size-12">Modify your personal details.</p>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="account-setting.html" class="iq-sub-card iq-bg-primary-hover">
                                    <div class="media align-items-center">
                                       <div class="rounded iq-card-icon iq-bg-primary">
                                          <i class="ri-account-box-line"></i>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Account settings</h6>
                                          <p class="mb-0 font-size-12">Manage your account parameters.</p>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="privacy-setting.html" class="iq-sub-card iq-bg-primary-hover">
                                    <div class="media align-items-center">
                                       <div class="rounded iq-card-icon iq-bg-primary">
                                          <i class="ri-lock-line"></i>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Privacy Settings</h6>
                                          <p class="mb-0 font-size-12">Control your privacy parameters.</p>
                                       </div>
                                    </div>
                                 </a>
                                 <div class="d-inline-block w-100 text-center p-3">
                                    <a class="btn btn-primary dark-btn-primary" href="sign-in.html" role="button">Sign out<i class="ri-login-box-line ml-2"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                  </ul>
               </nav>
               

            </div>
         </div>
         <!-- TOP Nav Bar END -->
         <!-- Page Content  -->
         <div id="content-page" class="content-page">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12 col-lg-6">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Basic Tabs</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <p>The base <code>.nav</code> component does not include any <code>.active</code> state. The following examples include the class, mainly to demonstrate that this particular class does not trigger any special styling.</p>
                           <ul class="nav nav-tabs" id="myTab-1" role="tablist">
                              <li class="nav-item">
                                 <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                              </li>
                           </ul>
                           <div class="tab-content" id="myTabContent-2">
                              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                              </div>
                              <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                              </div>
                              <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Basic Tabs Style 3</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <p>Takes the basic nav from above and adds the <code>.nav-tabs</code> class to generate a tabbed interface.</p>
                           <ul class="nav nav-tabs" id="myTab-two" role="tablist">
                              <li class="nav-item">
                                 <a class="nav-link active" id="home-tab-two" data-toggle="tab" href="#home-two" role="tab" aria-controls="home" aria-selected="true">Home</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" id="profile-tab-two" data-toggle="tab" href="#profile-two" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" id="contact-tab-two" data-toggle="tab" href="#contact-two" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                              </li>
                           </ul>
                           <div class="tab-content" id="myTabContent-1">
                              <div class="tab-pane fade show active" id="home-two" role="tabpanel" aria-labelledby="home-tab-two">
                                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                              </div>
                              <div class="tab-pane fade" id="profile-two" role="tabpanel" aria-labelledby="profile-tab-two">
                                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                              </div>
                              <div class="tab-pane fade" id="contact-two" role="tabpanel" aria-labelledby="contact-tab-two">
                                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Tabs Vertical Pills</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <p>Stack your navigation by changing the flex item direction with the <code>.flex-column</code> utility.</p>
                           <div class="row">
                              <div class="col-sm-3">
                                 <div class="nav flex-column nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
                                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
                                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
                                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
                                 </div>
                              </div>
                              <div class="col-sm-9">
                                 <div class="tab-content mt-0" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Tabs Justify Center</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <p>Centered with <code>.justify-content-center</code></p>
                           <ul class="nav nav-tabs justify-content-center" id="myTab-2" role="tablist">
                              <li class="nav-item">
                                 <a class="nav-link active" id="home-tab-justify" data-toggle="tab" href="#home-justify" role="tab" aria-controls="home" aria-selected="true">Home</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" id="profile-tab-justify" data-toggle="tab" href="#profile-justify" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" id="contact-tab-justify" data-toggle="tab" href="#contact-justify" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                              </li>
                           </ul>
                           <div class="tab-content" id="myTabContent-3">
                              <div class="tab-pane fade show active" id="home-justify" role="tabpanel" aria-labelledby="home-tab-justify">
                                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                              </div>
                              <div class="tab-pane fade" id="profile-justify" role="tabpanel" aria-labelledby="profile-tab-justify">
                                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                              </div>
                              <div class="tab-pane fade" id="contact-justify" role="tabpanel" aria-labelledby="contact-tab-justify">
                                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-12 col-lg-6">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Basic Tabs Style 2</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <p>Take that same HTML, but use <code>.nav-pills</code> instead:</p>
                           <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                              <li class="nav-item">
                                 <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
                              </li>
                           </ul>
                           <div class="tab-content" id="pills-tabContent-2">
                              <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                              </div>
                              <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                              </div>
                              <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Basic Tabs Style 4</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                            <p>Takes the basic nav from above and adds the <code>.nav-tabs</code> class to generate a tabbed interface.</p>
                           <ul class="nav nav-tabs" id="myTab-three" role="tablist">
                              <li class="nav-item">
                                 <a class="nav-link active" id="home-tab-three" data-toggle="tab" href="#home-three" role="tab" aria-controls="home" aria-selected="true">Home</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" id="profile-tab-three" data-toggle="tab" href="#profile-three" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" id="contact-tab-three" data-toggle="tab" href="#contact-three" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                              </li>
                           </ul>
                           <div class="tab-content" id="myTabContent-4">
                              <div class="tab-pane fade show active" id="home-three" role="tabpanel" aria-labelledby="home-tab-three">
                                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                              </div>
                              <div class="tab-pane fade" id="profile-three" role="tabpanel" aria-labelledby="profile-tab-three">
                                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                              </div>
                              <div class="tab-pane fade" id="contact-three" role="tabpanel" aria-labelledby="contact-tab-three">
                                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Tabs Fill and justify</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <p>Force your <code>.nav</code>’s contents to extend the full available width one of two modifier classes. To proportionately fill all available space with your <code>.nav-item</code>s, use <code>.nav-fill</code>. Notice that all horizontal space is occupied, but not every nav item has the same width.</p>
                           <ul class="nav nav-pills mb-3 nav-fill" id="pills-tab-1" role="tablist">
                              <li class="nav-item">
                                 <a class="nav-link active" id="pills-home-tab-fill" data-toggle="pill" href="#pills-home-fill" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" id="pills-profile-tab-fill" data-toggle="pill" href="#pills-profile-fill" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" id="pills-contact-tab-fill" data-toggle="pill" href="#pills-contact-fill" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
                              </li>
                           </ul>
                           <div class="tab-content" id="pills-tabContent-1">
                              <div class="tab-pane fade show active" id="pills-home-fill" role="tabpanel" aria-labelledby="pills-home-tab-fill">
                                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                              </div>
                              <div class="tab-pane fade" id="pills-profile-fill" role="tabpanel" aria-labelledby="pills-profile-tab-fill">
                                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                              </div>
                              <div class="tab-pane fade" id="pills-contact-fill" role="tabpanel" aria-labelledby="pills-contact-tab-fill">
                                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Tabs Justify Right</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <p>Right-aligned with <code>.justify-content-end</code>.</p>
                           <ul class="nav nav-tabs justify-content-end" id="myTab-4" role="tablist">
                              <li class="nav-item">
                                 <a class="nav-link active" id="home-tab-end" data-toggle="tab" href="#home-end" role="tab" aria-controls="home" aria-selected="true">Home</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" id="profile-tab-end" data-toggle="tab" href="#profile-end" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" id="contact-tab-end" data-toggle="tab" href="#contact-end" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                              </li>
                           </ul>
                           <div class="tab-content" id="myTabContent-5">
                              <div class="tab-pane fade show active" id="home-end" role="tabpanel" aria-labelledby="home-tab-end">
                                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                              </div>
                              <div class="tab-pane fade" id="profile-end" role="tabpanel" aria-labelledby="profile-tab-end">
                                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                              </div>
                              <div class="tab-pane fade" id="contact-end" role="tabpanel" aria-labelledby="contact-tab-end">
                                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Wrapper END -->
      <?php include_once 'pages/footer.php'; ?>
   </body>
</html>