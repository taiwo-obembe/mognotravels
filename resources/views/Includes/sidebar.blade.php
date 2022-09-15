<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li class="{{ $page === 'dashboard' ? 'active' : '' }}">
                <a href="{{ route('user.dashboard') }}" aria-expanded="false">
                    <i class="fas fa-rss"></i>
                    <span class="nav-text">Feeds</span>
                </a>

            </li>

            @if(Auth::user()->roles === "admin" || Auth::user()->roles === "support")
                <li class="{{ $page ==='admin-dashboard' ? 'active' : '' }}">
                    <a href="{{ route('admin.dashboard') }}" aria-expanded="false">
                        <i class="fas fa-user-secret"></i>
                        <span class="nav-text">Administrator</span>
                    </a>
                </li>
            @endif

            <li class="{{ $page === 'travels' ? 'active' : '' }}">
                <a class="" href="{{ route('user.travels.guide') }}" aria-expanded="false">

                    <i class="fas fa-plane-departure"></i>
                    <span class="nav-text">Travels</span>
                </a>
            </li>
            <li class="{{ $page === 'tags' ? 'active' : '' }}">
                <a href="{{ route('user.travels.tag') }}" aria-expanded="false">
                    <i class="fas fa-tags"></i>
                    <span class="nav-text">Tags</span>
                </a>
            </li>

            <li>
                <a href="#" aria-expanded="false">
                   <i class="flaticon-381-settings-2"></i>
                   <span class="nav-text">Settings</span>
                </a>

            </li>

        </ul>

        <div class="copyright">
            <p><strong>MognoTravels</strong> ©All Rights Reserved</p>
            <p><?php echo date("Y"); ?></p>
        </div>
    </div>
</div>
