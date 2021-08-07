<!-- main-header opened -->
<div class="main-header nav nav-item hor-header">
    <div class="container">
        <div class="main-header-left ">
            <a class="animated-arrow hor-toggle horizontal-navtoggle"><span></span></a><!-- sidebar-toggle-->
            <a class="header-brand" href="#">
                <img src="{{ URL::asset('assets/logo/logo_haed_w.svg')}}" class="desktop-dark">
            </a>
        </div>

        <div>
            <h2>بطولة الفورمولا</h2>
        </div> 

        <div class="main-header-right">
            
            <div class="nav nav-item  navbar-nav-right ml-auto">
                
                <div class="nav-item full-screen fullscreen-button">
                    <a class="new nav-link full-screen-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-maximize"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path></svg></a>
                </div>

                <div class="dropdown main-profile-menu nav nav-item nav-link">
                    <a class="profile-user d-flex" href="#"><img alt="" src="{{ URL::asset('assets/logo/1.jpg')}}"></a>
                    <div class="dropdown-menu">
                        <div class="main-header-profile bg-primary p-3">
                            <div class="d-flex wd-100p">
                                <div class="main-img-user"><img alt="" src="{{ URL::asset('assets/logo/1.jpg')}}" class=""></div>
                                <div class="mr-3 my-auto">
                                    <h6>{{ Auth::user()->title }}</h6><span>{{ Auth::user()->email }}</span>
                                </div>
                            </div>
                        </div>
                                                
                        <form method="POST" action="{{ route('logout') }}">	
                            @csrf
                            <a class="dropdown-item" href="#" onclick="event.preventDefault();
                                this.closest('form').submit();"><i class="bx bx-log-out"></i> تسجيل الخروج
                            </a>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
<!-- /main-header -->