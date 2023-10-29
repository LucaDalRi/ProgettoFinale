<nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
    <div class="position-sticky">
        <div id="list-group" class="list-group list-group-flush mx-3 mt-4">

            <div class="d-flex align-items-center">
                <a href="{{ route('dashboard') }}"
                    class="list-group-item list-group-item-action py-2 ripple {{ Route::current()->getName() == 'dashboard' ? 'active' : '' }}"
                    {{-- aria-current="true" --}}>
                    <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Dashboard</span>
                </a>
            </div>
            <div class="d-flex align-items-center" id="test">
                <a href="{{ route('dishes.index') }}"
                    class="list-group-item list-group-item-action py-2 ripple {{ Route::current()->getName() == 'dishes.index' ? 'active' : '' }}">
                    <i class="fa-solid fa-utensils me-3"></i>
                    <span>Dishes</span>
                </a>
            </div>
            <div class="d-flex align-items-center">
                <a href="#analytics" class="list-group-item list-group-item-action py-2 ripple"><i
                        class="fas fa-chart-line fa-fw me-3"></i><span>Analytics</span>
                </a>
            </div>
        </div>
    </div>
</nav>
