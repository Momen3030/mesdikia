<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('dashboard_files/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">

            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>

                <a class="btn btn-primary" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
        <ul class="sidebar-menu" data-widget="tree">
            <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-th"></i><span>@lang('site.dashboard')</span></a></li>
            <li><a href="{{ route('dashboard.users.index') }}"><i class="fa fa-th"></i><span>@lang('site.users')</span></a></li>
            <li><a href="{{ route('dashboard.cars.index') }}"><i class="fa fa-th"></i><span>@lang('site.cars')</span></a></li>
            <li><a href="{{ route('dashboard.jewleries.index') }}"><i class="fa fa-th"></i><span>@lang('site.jewleries')</span></a></li>
            <li><a href="{{ route('dashboard.highvalues.index') }}"><i class="fa fa-th"></i><span>@lang('site.highvalues')</span></a></li>
            <li><a href="{{ route('dashboard.properties.index') }}"><i class="fa fa-th"></i><span>@lang('site.properties')</span></a></li>
            <li><a href="{{ route('dashboard.vichles.index') }}"><i class="fa fa-th"></i><span>@lang('site.vichles')</span></a></li>
            <li><a href="{{ route('dashboard.controls.index') }}"><i class="fa fa-th"></i><span>@lang('site.control_website')</span></a></li>
            <li><a href="{{ route('dashboard.supports.index') }}"><i class="fa fa-th"></i><span>@lang('site.support')</span></a></li>
            <li><a href="{{ route('dashboard.messages.index') }}"><i class="fa fa-th"></i><span>@lang('site.message')</span></a></li>
            <li><a href="{{ route('dashboard.addtextimage.index') }}"><i class="fa fa-th"></i><span>@lang('site.ADDTExtImag')</span></a></li>
            <li><a href="{{ route('dashboard.advertising.index') }}"><i class="fa fa-th"></i><span>@lang('site.add_advertising')</span></a></li>
            <li><a href="{{ route('dashboard.categories.index') }}"><i class="fa fa-th"></i><span>@lang('site.categories')</span></a></li>
            <li><a href="{{ url('/homemesdakia') }}"><i class="fa fa-th"></i><span>@lang('site.homemesdakia')</span></a></li>

        </ul>
    </section>

</aside>

