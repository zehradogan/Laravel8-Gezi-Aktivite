<div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
    <div class="nano">
        <div class="nano-content">
            <ul>


                <li><a href="app-profile.html"><i class="ti-user"></i> Profile</a>
                    @auth
                        <a href="#" class="d-block">{{Auth::user() -> name}}</a>
                        <a href="{{route('logout')}}" class="d-block">Logout</a>
                    @endauth
                </li>
                <li><a href="app-widget-card.html"><i class="ti-layout-grid2-alt"></i> Widget</a></li>
                <li>
                    <a href="{{route('admin_category')}}">Category</a>
                </li>

                <li>
                    <a href="{{route('admin_contents')}}">Contents</a>
                </li>

                <li>
                    <a href="{{route('admin_message')}}">Contact Messages</a>
                </li>

                <li>
                    <a href="{{route('admin_setting')}}">Settings</a>
                </li>

                <li>
                    <a class="sidebar-sub-toggle"><i class="ti-panel"></i> Tours <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                </li>

                <li>
                    <a class="sidebar-sub-toggle"><i class="ti-bar-chart-alt"></i>  Activities  <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                </li>

            </ul>
        </div>
    </div>
</div>
<!-- /# sidebar -->
