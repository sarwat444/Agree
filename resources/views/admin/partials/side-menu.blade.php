<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <div id="sidebar-menu">

            <ul class="metismenu list-unstyled" id="side-menu">
                <li>
                    <a href="{{route('dashboard.index')}}">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-maps">{{__('home.Dashboard')}}  </span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fas fa-th"></i>
                        <span key="t-ecommerce"> {{__('home.Namozags')}} </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('dashboard.tawzef_model')}}" key="t-products"> {{__('home.Tawzef Model')}} </a></li>
                        <li><a href="{{route('dashboard.Consultant_model')}}" key="t-products"> {{__('home.Consultant registration form')}}  </a></li>
                        <li><a href="{{route('dashboard.sgap_model')}}" key="t-products">{{__('home.Agricultural inspector registration S-GAP')}} </a></li>
                        <li><a href="{{route('dashboard.ServicesRequest_model')}}" key="t-products"> {{__('home.Service Requests Model')}} </a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{route('dashboard.messages')}}">
                        <i class="bx bx-comment"></i>
                        <span key="t-maps"> {{__('home.Messages')}}  </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
