 <!-- ========== Left Sidebar Start ========== -->
 <div class="vertical-menu">

    <div data-simplebar class="h-100">

        <div class="navbar-brand-box">
            <a href="index.html" class="logo">
                <img src="{{asset('assets/images/PBL Logo.png')}}" alt="" style="width: 10rem" height="40">
            </a>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{url('/staff')}}" class="waves-effect"><i class="mdi mdi-home-analytics"></i><span
                            class="badge badge-pill badge-primary float-right">7</span><span>Staff</span></a>
                </li>
                <li>
                    <a href="{{url('/attendance')}}" class="waves-effect"><i class="mdi mdi-home-analytics"></i><span>Attendance</span></a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                            class="mdi mdi-diamond-stone"></i><span>UI Elements</span></a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="ui-buttons.html">Buttons</a></li>
                    </ul>
                </li>

                

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->