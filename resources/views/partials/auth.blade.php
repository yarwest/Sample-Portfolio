@if($user->exists)
    <li>
        <a href="{{ url('/logout') }}"
           onclick="
                    event.preventDefault();
                    document.getElementById('logout-form').submit();
        ">
            Logout
        </a>

        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    </li>

    @if($user->isAdmin)
        <li class="{{ Request::segment(1) === 'admin' ? 'active' : '' }}"><a href="/admin">Dashboard</a></li>
    @endif
@endif
