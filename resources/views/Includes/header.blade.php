<!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                MognoTravels
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">

                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <img src="{{ asset('dashboard/images/profile/17.jpg') }}" width="20" alt=""/>
									<div class="header-info">
										<span class="text-black">{{ Auth::user()->name }}</span>
										<p class="fs-12 mb-0">{{ Auth::user()->user_type }}</p>
									</div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">

                                    <a href="#" class="dropdown-item ai-icon">
                                        <i class="fas fa-user-alt"></i>
                                        <span class="ml-2">Profile</span>
                                    </a>

                                    <a href="{{ route('auth.logout')}}" class="dropdown-item ai-icon">
                                        <i class="fas fa-sign-out-alt"></i>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->
