


        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="active has-sub">
                    <a class="js-arrow" href="{{route('myuser.myprofile.posts.index')}}">
                        <i class="fas fa-tachometer-alt"></i>Makalelerim</a>

                </li>
                <li>
                    <a href="{{route('myuser.myprofile.posts.comments')}}">
                        <i class="fas fa-chart-bar"></i>Tüm Yorumlarım</a>
                </li>
                <li>
                    <a href="table.html">
                        <i class="fas fa-table"></i>En popüler makalelerim</a>
                </li>
                <li>
                    <a href="{{route('myuser.myprofile.edit')}}">
                        <i class="far fa-check-square"></i>Profili Düzenle</a>
                </li>
                <li>
                    <a href="{{route('myuser.myprofile.logout')}}">
                        <i class="fas fa-calendar-alt"></i>Çıkış Yap</a>
                </li>
            </ul>
        </nav>
