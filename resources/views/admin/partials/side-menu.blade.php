<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <div id="sidebar-menu">

            <ul class="metismenu list-unstyled" id="side-menu">
                <li>
                    <a href="{{route('dashboard.index')}}">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-maps">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fas fa-th"></i>
                        <span key="t-ecommerce"> Namozags </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('dashboard.tawzef_model')}}" key="t-products"> Tawzef Model</a></li>
                        <li><a href="{{route('dashboard.Consultant_model')}}" key="t-products"> Consultant registration form</a></li>
                        <li><a href="{{route('dashboard.sgap_model')}}" key="t-products"> Agricultural inspector registration S-GAP</a></li>
                        <li><a href="{{route('dashboard.ServicesRequest_model')}}" key="t-products"> Service Requests Model</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>