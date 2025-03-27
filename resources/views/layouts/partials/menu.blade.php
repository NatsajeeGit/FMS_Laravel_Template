<ul class="menu-inner py-1">
    <li class="menu-item {{ request()->routeIs('app.index') ? 'active' : '' }}">
        <a href="{{ route('app.index') }}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-home-smile"></i>
            <div class="text-truncate" data-i18n="หน้าหลัก">หน้าหลัก</div>
        </a>
    </li>
     <li class="menu-item {{ request()->routeIs('app.table') ? 'active' : '' }}">
        <a href="{{ route('app.table') }}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-table"></i>
            <div class="text-truncate" data-i18n="ตาราง">ตาราง</div>
        </a>
    </li>
    <li class="menu-item {{ request()->routeIs('app.form') ? 'active' : '' }}">
        <a href="{{ route('app.form') }}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-edit-alt"></i>
            <div class="text-truncate" data-i18n="ฟอร์ม">ฟอร์ม</div>
        </a>
    </li>
</ul>