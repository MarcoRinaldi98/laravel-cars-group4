<nav class="navbar navbar-expand-lg bg-body-tertiary h-100 ms_shadow">
    <div class="container-fluid">
        <a class="navbar-brand fs-1 text-primary fw-bolder" href="{{ route('home') }}">
            Cars
        </a>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 w-100 d-flex justify-content-center">
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}"
                        href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'cars.index' ? 'active' : '' }} {{ Route::currentRouteName() == 'cars.show' ? 'active' : '' }} {{ Route::currentRouteName() == 'cars.edit' ? 'active' : '' }}{{ Route::currentRouteName() == 'cars.create' ? 'active' : '' }}"
                        href="{{ route('cars.index') }}">List</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
