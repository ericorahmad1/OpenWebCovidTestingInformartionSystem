<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>    
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading">Test Covid</li>
                <li>
                    <a href="{{url('Manager/test/')}}" 
                        @if (Request::path() == 'Manager/test/')
                            class="mm-active"
                        @endif>
                        <!-- <i class="metismenu-icon pe-7s-rocket"></i> -->
                        Test Results
                    </a>
                </li>
                
                <li class="app-sidebar__heading">Tester</li>
                <li>
                    <a href="{{url('/Manager/testers/')}}"
                        @if (Request::path() == '/Manager/testers/')
                            class="mm-active"
                        @endif>
                        <!-- <i class="metismenu-icon pe-7s-diamond"></i> -->
                        Testers
                    </a>
                </li>
                <li>
                    <a href="{{url('/Manager/testers/new')}}"
                        @if (Request::path() == '/Manager/testers/new')
                            class="mm-active"
                        @endif>
                        <!-- <i class="metismenu-icon pe-7s-diamond"></i> -->
                        Register New Testers
                    </a>
                </li>
                
                <li class="app-sidebar__heading">Test KIt</li>
                <li>
                    <a href="{{url('/Manager/testkits')}}"
                        @if (Request::path() == '/Manager/testkits')
                            class="mm-active"
                        @endif>
                        <!-- <i class="metismenu-icon pe-7s-diamond"></i> -->
                        Test Kits
                    </a>
                </li>
                <li>
                    <a href="{{url('/Manager/testkits/new')}}"
                        @if (Request::path() == '/Manager/testkits/new')
                            class="mm-active"
                        @endif>
                        <!-- <i class="metismenu-icon pe-7s-diamond"></i> -->
                        Create New Test Kits
                    </a>
                </li>
                <li>
                    <a href="{{url('/Manager/testkits/add')}}"
                        @if (Request::path() == '/Manager/testkits/add')
                            class="mm-active"
                        @endif>
                        <!-- <i class="metismenu-icon pe-7s-diamond"></i> -->
                        Add Test Kits
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>