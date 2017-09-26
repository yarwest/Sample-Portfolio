<div class="sidebar">
    <div class="sidebar-wrapper">
        <a href="/" class="logo">
            <p>
                Classy Cakery
            </p>
        </a>
        <ul class="nav">
            <li class="{{ Request::segment(2) === null ? 'active' : '' }}">
                <a href="/admin">
                    <i class="fa fa-map fa-lw"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="{{ Request::segment(2) === 'portfolio' ? 'active' : '' }}">
                <a href="/admin/portfolio/">
                    <i class="fa fa-pencil fa-lw"></i>
                    <p>Portfolio</p>
                </a>
            </li>
            <li class="{{ Request::segment(2) === 'analytics' ? 'active' : '' }}">
                <a href="/admin/analytics/">
                    <i class="fa fa-dashboard fa-lw"></i>
                    <p>Analytics</p>
                </a>
            </li>
            <li class="{{ Request::segment(2) === 'settings' ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-cogs fa-lw"></i>
                    <p>Settings</p>
                </a>
            </li>
            @include('partials.auth')
        </ul>
    </div>
</div>
