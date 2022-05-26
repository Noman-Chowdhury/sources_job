<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto">
                <a class="" href="{{url('/')}}">
                    <img style="height:40px; margin: 20px 20px;"
                         src="{{ asset('admin/app-assets/images/ico/sources1.png') }}"
                     alt=""/>
                </a>
            </li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i
                        class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"
                    ></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary"
                            data-feather="disc" data-ticon="disc"
                    ></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="{{ Route::currentRouteName()=='jobSeeker.list'?'active':'' }} nav-item"><a
                    class="d-flex align-items-center" href="{{route('jobSeeker.list')}}"
                ><i class="fas fa-user-tag"></i><span class="menu-title text-truncate" data-i18n="Home"
                    >{{__('Job Seeker')}}</span></a>
            </li>
            <li class="{{ Route::currentRouteName()=='job.list'?'active':'' }} nav-item"><a
                    class="d-flex align-items-center" href="{{route('job.list')}}"
                ><i class="fas fa-list"></i><span class="menu-title text-truncate" data-i18n="Home"
                    >{{__('Job List')}}</span></a>
            </li>
            <li class="{{ Route::currentRouteName()=='category.index'?'active':'' }} nav-item"><a
                    class="d-flex align-items-center" href="{{route('category.index')}}"
                ><i class="fas fa-list"></i><span class="menu-title text-truncate" data-i18n="Home"
                    >{{__(' Job Category')}}</span></a>
            </li>
            <li class="{{ Route::currentRouteName()=='education.index'?'active':'' }} nav-item"><a
                    class="d-flex align-items-center" href="{{route('education.index')}}"
                ><i class="fas fa-list"></i><span class="menu-title text-truncate" data-i18n="Home"
                    >{{__(' Job Education')}}</span></a>
            </li>
        </ul>
    </div>
</div><!-- END: Main Menu-->
