<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="{{ url('/dashboard') }}"> <img src="" class="header-logo" /> <span
                class="logo-name">{{ siteInfo()->website_name }}</span>
        </a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Main</li>

        <li class="dropdown {{ Request::is('dashboard') ? 'active' : '' }}"> <a href="{{ url('/dashboard') }}"
                class="nav-link" ><i data-feather="copy"></i><span>Dashboard </span></a>
        </li>
        <li class="dropdown {{ Request::is('admin/site-setting*') ? 'active' : '' }}"> <a href="{{ url('/admin/site-setting/1/edit') }}"
                class="nav-link" ><i data-feather="copy"></i><span> Site-setting </span></a>
        </li>
