<!-- Left Sidebar -->
<div class="left main-sidebar">
    <div class="sidebar-inner leftscroll">
        <div id="sidebar-menu">
            <ul>
                <li class="submenu">
                    <a class="active" href="{!! route('admin.home') !!}">
                        <i class="fa fa-fw fa-bars"></i><span> {!! __('menu.dashboard') !!} </span>
                    </a>
                </li>
                <li class="submenu">
                    <a href="{!! route('admin.categories.index') !!}"><i class="fa fa-fw fa-area-chart"> </i>
                        <span> {!! __('menu.categories') !!} </span>
                    </a>
                </li>
                <li class="submenu">
                    <a href="{!! route('admin.types.index') !!}"><i class="fa fa-fw fa-area-chart"> </i>
                        <span> {!! __('menu.types') !!} </span>
                    </a>
                </li>
                <li class="submenu">
                    <a href="charts.html"><i class="fa fa-fw fa-area-chart"></i><span> Charts </span> </a>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fa fa-fw fa-table"></i> <span> Tables </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="list-unstyled">
                        <li><a href="tables-basic.html">Basic Tables</a></li>
                        <li><a href="tables-datatable.html">Data Tables</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fa fa-fw fa-tv"></i> <span> User Interface </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="list-unstyled">
                        <li><a href="ui-alerts.html">Alerts</a></li>
                        <li><a href="ui-buttons.html">Buttons</a></li>
                        <li><a href="ui-cards.html">Cards</a></li>
                        <li><a href="ui-carousel.html">Carousel</a></li>
                        <li><a href="ui-collapse.html">Collapse</a></li>
                        <li><a href="ui-icons.html">Icons</a></li>
                        <li><a href="ui-modals.html">Modals</a></li>
                        <li><a href="ui-tooltips.html">Tooltips and Popovers</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fa fa-fw fa-file-text-o"></i> <span> Forms </span> <span
                                class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="forms-general.html">General Elements</a></li>
                        <li><a href="forms-select2.html">Select2</a></li>
                        <li><a href="forms-validation.html">Form Validation</a></li>
                        <li><a href="forms-text-editor.html">Text Editors</a></li>
                        <li><a href="forms-upload.html">Multiple File Upload</a></li>
                        <li><a href="forms-datetime-picker.html">Date and Time Picker</a></li>
                        <li><a href="forms-color-picker.html">Color Picker</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fa fa-fw fa-th"></i> <span> Plugins </span> <span
                                class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="star-rating.html">Star Rating</a></li>
                        <li><a href="range-sliders.html">Range Sliders</a></li>
                        <li><a href="tree-view.html">Tree View</a></li>
                        <li><a href="sweetalert.html">SweetAlert</a></li>
                        <li><a href="calendar.html">Calendar</a></li>
                        <li><a href="gmaps.html">GMaps</a></li>
                        <li><a href="counter-up.html">Counter-Up</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fa fa-fw fa-image"></i> <span> Images and Galleries </span> <span
                                class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="media-fancybox.html"><span
                                        class="label radius-circle bg-danger float-right">cool</span>
                                Fancybox </a></li>
                        <li><a href="media-masonry.html">Masonry</a></li>
                        <li><a href="media-lightbox.html">Lightbox</a></li>
                        <li><a href="media-owl-carousel.html">Owl Carousel</a></li>
                        <li><a href="media-image-magnifier.html">Image Magnifier</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#">
                        <span class="label radius-circle bg-danger float-right">20</span>
                        <i class="fa fa-fw fa-copy"></i><span> Example Pages </span>
                    </a>
                    <ul class="list-unstyled">
                        <li><a href="page-pricing-tables.html">Pricing Tables</a></li>
                        <li><a target="_blank" href="page-coming-soon.html">Countdown</a></li>
                        <li><a href="page-invoice.html">Invoice</a></li>
                        <li><a href="page-login.html">Login / Register</a></li>
                        <li><a href="page-blank.html">Blank Page</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#">
                        <span class="label radius-circle bg-primary float-right">9</span>
                        <i class="fa fa-fw fa-indent"></i><span> Menu Levels </span>
                    </a>
                    <ul>
                        <li>
                            <a href="#"><span>Second Level</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><span>Third Level</span> <span class="menu-arrow"></span> </a>
                            <ul style="">
                                <li><a href="#"><span>Third Level Item</span></a></li>
                                <li><a href="#"><span>Third Level Item</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="submenu">
                    <a class="pro" href="#"><i class="fa fa-fw fa-star"></i><span> Pike Admin PRO </span> <span
                                class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li>
                            <a target="_blank" href="https://www.pikeadmin.com/pike-admin-pro">
                                Admin PRO features</a>
                        </li>
                        <li><a href="pro-settings.html">Settings</a></li>
                        <li><a href="pro-profile.html">My Profile</a></li>
                        <li><a href="pro-users.html">Users</a></li>
                        <li><a href="pro-articles.html">Articles</a></li>
                        <li><a href="pro-categories.html">Categories</a></li>
                        <li><a href="pro-pages.html">Pages</a></li>
                        <li><a href="pro-contact-messages.html">Contact Messages</a></li>
                        <li><a href="pro-slider.html">Slider</a></li>
                    </ul>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- End Sidebar -->