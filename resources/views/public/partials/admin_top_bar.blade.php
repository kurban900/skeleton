@can('admin-panel')
    <nav class="admin-top-bar mb-2">
        <div class="admin-top-bar__inner">
            <div class="admin-top-bar__menu">
                <a href="{{ route('admin.home') }}">В админку</a>
                @yield('admin-bar')
            </div>
        </div>
    </nav>
@endcan
