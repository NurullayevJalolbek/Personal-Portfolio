<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ route('admin.dashboard') }}" class="app-brand-link">
            <span class="app-brand-logo demo">
                {{-- <img id="themeLogo" src="{{ getLogo() }}" alt="" width="45px"> --}}
            </span>
            <span class="app-brand-text demo menu-text fw-bold ">
                Frontend.uz
                {{-- CONSULTING --}}
            </span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <li class="menu-item {{ isActiveCollapseArray(['admin.dashboard']) }}">
            <a href="{{ route('admin.dashboard') }}" class="menu-link">
                <i class='menu-icon tf-icons bx bx-stats'></i>
                <div class="text-truncate">{{ __('admin.Statistic') }}</div>
            </a>
        </li>

        <li class="menu-item {{ isActiveCollapseArray(['admin.users.*']) }}">
            <a href="{{ route('admin.users.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-shield-quarter"></i>
                <div class="text-truncate">{{ __('admin.Employees') }}</div>
            </a>
        </li>

        <li class="menu-item {{ isActiveCollapseArray(['admin.developers.*']) }}">
            <a href="{{ route('admin.developers.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-user"></i>
                <div class="text-truncate">{{ __('admin.Developers') }}</div>
            </a>
        </li>

        <li class="menu-item {{ isActiveCollapseArray(['admin.posts.*']) }}">
            <a href="{{ route('admin.posts.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-message-square-add"></i>
                <div class="text-truncate">{{ __('admin.Posts') }}</div>
            </a>
        </li>

        {{-- <li class="menu-item {{ isActiveCollapseArray(['admin.countries.*', 'admin.programs.*'], 'active open') }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='menu-icon tf-icons bx bx-clipboard'></i>
                <div class="text-truncate">{{ __('admin.Additions') }}</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ isActiveCollapseArray(['admin.countries.*']) }}">
                    <a href="{{ route('admin.countries.index') }}" class="menu-link">
                        <div class="text-truncate">{{ __('admin.Countries') }}</div>
                    </a>
                </li>
                <li class="menu-item {{ isActiveCollapseArray(['admin.programs.*']) }}">
                    <a href="{{ route('admin.programs.index') }}" class="menu-link">
                        <div class="text-truncate">{{ __('admin.Programs') }}</div>
                    </a>
                </li>
            </ul>
        </li> --}}

        <li
            class="menu-item {{ isActiveCollapseArray(['admin.about.*', 'admin.login-histories.*', 'admin.user-actions.*'], 'active open') }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='menu-icon bx bx-cog'></i>
                <div class="text-truncate">{{ __('admin.Settings') }}</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ isActiveCollapseArray(['admin.about.*']) }}">
                    <a href="{{ route('admin.about.edit') }}" class="menu-link">
                        <div class="text-truncate">{{ __('admin.System settings') }}</div>
                    </a>
                </li>
                <li class="menu-item {{ isActiveCollapseArray(['admin.login-histories.*']) }}">
                    <a href="{{ route('admin.login-histories.index') }}" class="menu-link">
                        <div class="text-truncate">{{ __('admin.Login histories') }}</div>
                    </a>
                </li>
                <li class="menu-item {{ isActiveCollapseArray(['admin.user-actions.*']) }}">
                    <a href="{{ route('admin.user-actions.index') }}" class="menu-link">
                        <div class="text-truncate">{{ __('admin.User actions') }}</div>
                    </a>
                </li>
            </ul>
        </li>


    </ul>
</aside>
