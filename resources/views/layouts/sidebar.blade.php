<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
        <a href="{{route('home')}}">PT. Makro Borneo Plush</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
        <a href="{{route('home')}}">PT.MBP</a>
        </div>
        <ul class="sidebar-menu">
            <!-- menu header -->
            <li class="menu-header">Dashboard</li>
            <!-- menu item -->
            <li class="{{request()->routeIs('home') ? 'active': ''}}">
              <a class="custom-hover" href="{{route('home')}}"><i class="fas fa-home"></i><span>Home</span></a>
            </li>
            <li class="{{request()->routeIs('inventory') ? 'active': ''}}">
                <a class="custom-hover" href="{{route('inventory')}}"><i class="fas fa-boxes"></i><span>Inventory</span></a>
            </li>
            <li class="{{request()->routeIs('documentation') ? 'active': ''}}">
                <a class="custom-hover" href="{{route('documentation')}}"><i class="fas fa-image"></i><span>Dokumentasi</span></a>
            </li>
            <li class="{{request()->routeIs('report') ? 'active': ''}}">
                <a class="custom-hover" href="{{route('report')}}"><i class="fas fa-file-alt"></i><span>Laporan</span></a>
            </li>
        </ul>
    </aside>
</div>