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
                    {{ Auth::user()->name }} <span class="flaticon stroke down-1"></span>
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
            <div class="user-panel inactive">
                <section class="profile clearfix">
                    <h4>Профилни Данни</h4>
                    <div class="avatar-holder big fleft">
                        <img src="{{ asset('src/images/' . Auth::user()->image_path) }}" class="avatar" alt="">
                    </div>
                    <div class="fleft">
                        @if( Auth::user()->grade != 0 && Auth::user()->class != '' && Auth::user()->school != '' && Auth::user()->city != '' )
                            <p>
                                {{ Auth::user()->roles{0}->role }} от <a href="#">{{ Auth::user()->grade }} {{ Auth::user()->class }}</a> клас <br>
                                в <a href="#">{{ Auth::user()->school }}</a> <br>
                                град {{ Auth::user()->city }} <br>
                                e-mail: <a href="#">{{ Auth::user()->email }}</a> <br><br>
                                <!-- учител по ИТ: <a href="#">Спаска Ангелова</a> -->
                            </p>
                        <a href="edit-user" class="btn">Промени информацията</a>
                            @else
                            <p>
                                Имате незавършен профил. <br>
                                <a href="edit-user">Попълнете профила си.</a> <br>
                                e-mail: <a href="#">{{ Auth::user()->email }}</a> <br><br><br>
                                <!-- учител по ИТ: <a href="#">Спаска Ангелова</a> -->
                            </p>
                        @endif
                        <a href="edit-user" class="btn">Промени</a>
                    </div>
                </section>
                <section class="profile-info-files clearfix">
                    <h4>Файлове</h4>
                    <ul class="files-listing">
                        <li class="clearfix">
                            <a href="#" class="clearfix">
                                <div class="file-name"><i class="fa fa-file-text-o access-color"></i> name.accdb</div>
                                <div class="file-size">1MB</div>
                                <div class="file-date">08.08.2016</div>
                            </a>
                        </li>
                        <li class="clearfix">
                            <a href="#" class="clearfix">
                                <div class="file-name"><i class="fa fa-file-code-o html-color"></i> name.html</div>
                                <div class="file-size">100KB</div>
                                <div class="file-date">08.08.2016</div>
                            </a>
                        </li>
                        <li class="clearfix">
                            <a href="#" class="clearfix">
                                <div class="file-name"><i class="fa fa-file-image-o ps-color"></i> name.jpeg</div>
                                <div class="file-size">15MB</div>
                                <div class="file-date">08.02.2016</div>
                            </a>
                        </li>
                    </ul>
                    <div class="btn-group">
                        <a href="#" class="btn">Качи нов файл</a>
                        <a href="#" class="btn-company">Всички качени (23)</a>
                    </div>
                </section>
                <section class="groups">
                    <h4>Групи и Потребители</h4>
                    <table style="width: 100%;">
                        <tr>
                            <td><a href="#">XI A</a></td>
                            <td><a href="#" class="nostyle">Николай</a> и 14 други</td>
                            <td><span class="legend">КЛАС</span></td>
                        </tr>
                        <tr>
                            <td><a href="#">XI ПМГ</a></td>
                            <td><a href="#" class="nostyle">Виктор</a> и 14 други</td>
                            <td><span class="legend">ВИПУСК</span></td>
                        </tr>
                        <tr>
                            <td><a href="#">ПМГ</a></td>
                            <td>197 ученици</td>
                            <td><span class="legend">УЧИЛИЩЕ</span></td>
                        </tr>
                    </table>
                    <a href="#" class="btn-company db tac air-15-0">Виж всички твои групи</a>
                </section>
            </div>

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
        <li class="more"><a href="#" title="More"><span class="catg-icon icon-more"></span><span
                        class="catg-title catg-title-more">Други<span></a></li>

    </ul>
</div>