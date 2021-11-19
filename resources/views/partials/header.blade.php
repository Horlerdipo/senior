<!-- main header @s -->
<div class="nk-header nk-header-fluid is-theme">
    <div class="container-xl wide-xl">
        <div class="nk-header-wrap">
            <div class="nk-menu-trigger mr-sm-2 d-lg-none">
                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="headerNav"><em class="icon ni ni-menu"></em></a>
            </div>
            <div class="nk-header-brand">
                <a href="/" class="logo-link">
                    <img class="logo-light logo-img" src="./images/logo.jpg" srcset="./images/logo2x.png 2x" alt="logo">
                    <img class="logo-dark logo-img" src="./images/logo.jpg" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                </a>
            </div><!-- .nk-header-brand -->
            <div class="nk-header-menu" data-content="headerNav">
                <div class="nk-header-mobile">
                    <div class="nk-header-brand">
                        <a href="/" class="logo-link">
                            <img class="logo-light logo-img" src="./images/logo.jpg" srcset="./images/logo2x.png 2x" alt="logo">
                            <img class="logo-dark logo-img" src="./images/logo.jpg" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                        </a>
                    </div>
                    <div class="nk-menu-trigger mr-n2">
                        <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="headerNav"><em class="icon ni ni-arrow-left"></em></a>
                    </div>
                </div>
                <ul class="nk-menu nk-menu-main ui-s2">
                    @role('superadmin')
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-text">Dashboards</span>
                        </a>

                        <ul class="nk-menu-sub">

                            <li class="nk-menu-item">
                                <a href="{{route('show.user')}}" class="nk-menu-link">
                                    <span class="nk-menu-text">Super Admin</span>
                                </a>
                            </li><!-- .nk-menu-item -->

                            <li class="nk-menu-item">
                                <a href="{{route('show.seniorcitizen')}}" class="nk-menu-link">
                                    <span class="nk-menu-text">Senior Citizens</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item">
                                <a href="{{route('show.hospital')}}" class="nk-menu-link">
                                    <span class="nk-menu-text">Hospitals</span>
                                </a>
                            </li>

                            <li class="nk-menu-item">
                                <a href="{{route('show.government')}}" class="nk-menu-link">
                                    <span class="nk-menu-text">Governments</span>
                                </a>
                            </li>


                            <!-- .nk-menu-item -->
                            {{--                            <li class="nk-menu-item">--}}
                            {{--                                <a href="html/index-analytics.html" class="nk-menu-link">--}}
                            {{--                                    <span class="nk-menu-text">Analytics Dashboard</span>--}}
                            {{--                                </a>--}}
                            {{--                            </li><!-- .nk-menu-item -->--}}
                            {{--                            <li class="nk-menu-heading">--}}
                            {{--                                <h6 class="overline-title text-primary">Use-Case Concept</h6>--}}
                            {{--                            </li><!-- .nk-menu-item -->--}}
                            {{--                            <li class="nk-menu-item">--}}
                            {{--                                <a href="html/invest/index.html" class="nk-menu-link" target="_blank">--}}
                            {{--                                    <span class="nk-menu-text">Investment Panel</span>--}}
                            {{--                                    <span class="nk-menu-badge badge-danger">HOT</span>--}}
                            {{--                                </a>--}}
                            {{--                            </li><!-- .nk-menu-item -->--}}
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->

                    <li class="nk-menu-item ">
                        <a href="{{route('show.seniorcitizenprofile')}}" class="nk-menu-link ">
                            <span class="nk-menu-text">Senior Citizen Profile</span>
                        </a>

                    </li><!-- .nk-menu-item -->

                    <li class="nk-menu-item ">
                        <a href="#" class="nk-menu-link ">
                            <span class="nk-menu-text">Bank Account Detials</span>
                        </a>

                    </li><!-- .nk-menu-item -->

                    <li class="nk-menu-item ">
                        <a href="#" class="nk-menu-link ">
                            <span class="nk-menu-text">List Of Hospitals</span>
                        </a>

                    </li><!-- .nk-menu-item -->
                    @endrole
                    @role('student')
                    <li class="nk-menu-item ">
                        <a href="#" class="nk-menu-link ">
                            <span class="nk-menu-text"></span>
                        </a>

                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="#" class="nk-menu-link">
                            <span class="nk-menu-text">Write Up Changes</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    @endrole

                    @role('hospital')
                    <li class="nk-menu-item">
                        <a href="{{route('show.seniorcitizenprofilehospital')}}" class="nk-menu-link ">
                            <span class="nk-menu-text">View Medical Record Of Senior Citizen</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    @endrole
                    @role('government')
                    <li class="nk-menu-item has-sub">
                        <a href="{{route('show.seniorcitizenprofilegovernment')}}" class="nk-menu-link ">
                            <span class="nk-menu-text">Record Of Senior Citizen</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    @endrole
                </ul><!-- .nk-menu -->
            </div><!-- .nk-header-menu -->
            <div class="nk-header-tools">
                <ul class="nk-quick-nav">
                    <li class="dropdown notification-dropdown">
                        <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-toggle="dropdown">
                            <div class="icon-status icon-status-info"><em class="icon ni ni-bell"></em></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right dropdown-menu-s1">
                            <div class="dropdown-head">
                                <span class="sub-title nk-dropdown-title">Notifications</span>
                                <a href="#">Mark All as Read</a>
                            </div>
                            <div class="dropdown-body">
                                <div class="nk-notification">
                                    <div class="nk-notification-item dropdown-inner">
                                        <div class="nk-notification-icon">
                                            <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                        </div>
                                        <div class="nk-notification-content">
                                            <div class="nk-notification-text">You have requested to <span>Widthdrawl</span></div>
                                            <div class="nk-notification-time">2 hrs ago</div>
                                        </div>
                                    </div>
                                    <div class="nk-notification-item dropdown-inner">
                                        <div class="nk-notification-icon">
                                            <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                        </div>
                                        <div class="nk-notification-content">
                                            <div class="nk-notification-text">Your <span>Deposit Order</span> is placed</div>
                                            <div class="nk-notification-time">2 hrs ago</div>
                                        </div>
                                    </div>
                                    <div class="nk-notification-item dropdown-inner">
                                        <div class="nk-notification-icon">
                                            <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                        </div>
                                        <div class="nk-notification-content">
                                            <div class="nk-notification-text">You have requested to <span>Widthdrawl</span></div>
                                            <div class="nk-notification-time">2 hrs ago</div>
                                        </div>
                                    </div>
                                    <div class="nk-notification-item dropdown-inner">
                                        <div class="nk-notification-icon">
                                            <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                        </div>
                                        <div class="nk-notification-content">
                                            <div class="nk-notification-text">Your <span>Deposit Order</span> is placed</div>
                                            <div class="nk-notification-time">2 hrs ago</div>
                                        </div>
                                    </div>
                                    <div class="nk-notification-item dropdown-inner">
                                        <div class="nk-notification-icon">
                                            <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                        </div>
                                        <div class="nk-notification-content">
                                            <div class="nk-notification-text">You have requested to <span>Widthdrawl</span></div>
                                            <div class="nk-notification-time">2 hrs ago</div>
                                        </div>
                                    </div>
                                    <div class="nk-notification-item dropdown-inner">
                                        <div class="nk-notification-icon">
                                            <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                        </div>
                                        <div class="nk-notification-content">
                                            <div class="nk-notification-text">Your <span>Deposit Order</span> is placed</div>
                                            <div class="nk-notification-time">2 hrs ago</div>
                                        </div>
                                    </div>
                                </div><!-- .nk-notification -->
                            </div><!-- .nk-dropdown-body -->
                            <div class="dropdown-foot center">
                                <a href="#">View All</a>
                            </div>
                        </div>
                    </li><!-- .dropdown -->
                    <li class="dropdown user-dropdown order-sm-first">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <div class="user-toggle">
                                <div class="user-avatar sm">
                                    <em class="icon ni ni-user-alt"></em>
                                </div>

                                <div class="user-info d-none d-xl-block">
                                    <div class="user-status">{{\Illuminate\Support\Facades\Auth::user()->roles->pluck('name')->first()}}</div>
                                    <div class="user-name dropdown-indicator">{{\Illuminate\Support\Facades\Auth::user()->name}}</div>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right dropdown-menu-s1 is-light">
                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                <div class="user-card">
                                    <div class="user-avatar">
                                        <span>AB</span>
                                    </div>
                                    <div class="user-info">
                                        <span class="lead-text">{{\Illuminate\Support\Facades\Auth::user()->name}}</span>
                                        <span class="sub-text">{{\Illuminate\Support\Facades\Auth::user()->email }}</span>
                                    </div>

                                    <div class="user-action">
                                        <a class="btn btn-icon mr-n2" href="html/invest/profile-setting.html"><em class="icon ni ni-setting"></em></a>
                                    </div>
                                </div>
                            </div>
                             @role("seniorcitizen")
                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <li><a href="{{route('profile')}}"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                </ul>
                            </div>
                            @endrole



                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><em class="icon ni ni-signout"></em><span>Sign out</span></a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li><!-- .dropdown -->
                </ul><!-- .nk-quick-nav -->
            </div><!-- .nk-header-tools -->
        </div><!-- .nk-header-wrap -->
    </div><!-- .container-fliud -->
</div>
<!-- main header @e -->
