<nav>
    <div class="nav-wrapper blue">
        <div class="container">
            <a href="{{ route('admin.principal') }}" class="brand-logo">SisAdmin</a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li>
                    <a href="{{ route('admin.principal') }}">
                        <span>Início</span>
                    </a>
                </li>

                <li>
                    <a target="_blank" href="{{ route('site.home') }}">
                        <span>Site</span>
                    </a>
                </li>

                @if(\Illuminate\Support\Facades\Auth::guest())
                    <li><a href="{{ route('admin.login') }}">Login</a></li>
                @else
                    <li><a href="">{{ \Illuminate\Support\Facades\Auth::user()->name }}</a></li>
                    <li><a href="{{ route('admin.logout') }}">Sair</a></li>
                @endif
            </ul>
            <ul class="side-nav" id="mobile-demo">
                <li><a href="{{ route('admin.principal') }}">Início</a></li>
                <li><a target="_blank" href="{{ route('site.home') }}">Site</a></li>
                @if(\Illuminate\Support\Facades\Auth::guest())
                    <li><a href="{{ route('admin.login') }}">Login</a></li>
                @else
                    <li><a href="">{{ \Illuminate\Support\Facades\Auth::user()->name }}</a></li>
                    <li><a href="{{ route('admin.logout') }}">Sair</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>
