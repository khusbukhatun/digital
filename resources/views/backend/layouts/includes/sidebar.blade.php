
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{  route('digital.restaurant') }}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">DIGITAL RESTAURANT <sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="fa fa-cloud" aria-hidden="true"></i>
                    <span>Dashboard</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="{{ route('site.setting') }}">
                    <i class="fa fa-cog fa-spin" style="font-size:2opx"></i>
                    <span>Site Setting</span></a>
                </li>


            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">

                    <i class="fa fa-barcode" style="font-size:c0px;color:white"></i>

                    <span>Restaurants data</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">

                        <a class="collapse-item" href="{{ route('restaurants') }}">show data</a>
                        <a class="collapse-item" href="{{ route('add.new') }}">add new data</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fa fa-cutlery" style="font-size:45px"></i>
                    <span>Menu</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('menu.list') }}">show data</a>
                        <a class="collapse-item" href="{{ route('add.newdata')}}">add new data</a>

                    </div>
                </div>
            </li>


            <li class="nav-item active">
                <a class="nav-link" href="{{ route('viewreservation') }}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Reservation</span></a>
                </li>


            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="{{   route('viewchef')  }}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>chefs</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->


            <!-- Sidebar Message -->


        </ul>
        <!-- End of Sidebar -->
