<link href="{{ asset('css/css.css') }}" rel="stylesheet">
    <div class="sidebar">
        <div class="ramka">
            <div class="ava"></div>



        @if (Route::has('login'))
            <div class="links">
                @auth
{{--                    <a href="{{ url('/home') }}">--}}
                    <a>
                        <?php
                        $user = auth()->user();
                        echo $user->name;
                        ?>
                    </a>
                @endauth
            </div>
                <div class="main-button">
                    <a href="{{ url('/') }}">На главную</a>
                </div>
                <div class="ramka_stat">
                    <div>
                    <?php
                         $users = DB::select('select * from users order by money DESC');
                        foreach($users as $key)
                        echo'
                        <div class="nickname">'.$key->name.'</div>
                        <div class="">'.$key->money.'</div>'
                    ?>
                    </div>
                </div>
                <div class="pustota"> </div>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
        </div>
    </div>

        @endif

