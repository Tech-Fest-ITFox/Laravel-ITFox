<div class="top-section">
    <!--       USER SECTION       -->
    <div class="user-section signed clearfix">
        @if(Auth::check())
            <div class="notification-trigger fleft"></div>
            <div class="user-info fleft">
                <div class="avatar-holder fleft">
                    <img src="{{ asset('src/images/' . Auth::user()->image_path) }}" class="avatar" alt="">
                </div>
                <div class="user-name fleft">
                    Християн Япраков <span class="flaticon stroke down-1"></span>
                </div>
            </div>
            <a href="{{ url('logout') }}">
                <div class="flaticon stroke logout fright"></div>
            </a>
        @else
            <div class="btn"><a href="/register">Регистрирай се</a></div>
            <div class="a login"><a href="/login">Влез</a></div>
            @endif

                    <!--      USER PANEL     -->
            <div class="user-panel inactive"></div>

    </div>

    <!--       SEARCH BAR       -->
    <div class="search-bar">
        <input class="search-input" type="text" placeholder="Търси теми в сайта...">
    </div>

    <!--       CATEGORIES       -->
    <ul class="categories clearfix">
        <li class="word"><a href="#" title="MS Word"><span class="catg-icon icon-word"></span><span class="catg-title">MS Word</span></a>
        </li>
        <li class="powerpoint"><a href="#" title="MS Powerpoint"><span class="catg-icon icon-powerpoint"></span><span
                        class="catg-title catg-title-powerpoint"><span class="adobe">MS </span>Powerpoint</span></a>
        </li>
        <li class="excel"><a href="#" title="MS Excel"><span class="catg-icon icon-excel"></span><span
                        class="catg-title">MS Excel</span></a></li>
        <li class="access"><a href="#" title="MS Access"><span class="catg-icon icon-access"></span><span
                        class="catg-title">MS Access</span></a></li>
        <li class="coreldraw"><a href="#" title="Coreldraw"><span class="catg-icon icon-coreldraw"></span><span
                        class="catg-title">Coreldraw</span></a></li>
        <li class="html"><a href="#" title="HTML"><span class="catg-icon icon-html"></span><span
                        class="catg-title">HTML</span></a></li>
        <li class="ps"><a href="#" title="Adobe Photoshop"><span class="catg-icon icon-ps"></span><span
                        class="catg-title catg-title-ps"><span class="adobe">Adobe </span>Photoshop</span></a></li>
        <li class="cpp"><a href="#" title="C++"><span class="catg-icon icon-cpp"></span><span
                        class="catg-title catg-title-cpp">C++</span></a></li>
    </ul>
</div>