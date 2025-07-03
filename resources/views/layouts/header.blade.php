<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
    id="layout-navbar">
    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
            <i class="bx bx-menu bx-sm"></i>
        </a>
    </div>

    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
        <!-- Search -->
        <div class="navbar-nav align-items-center">
            <div class="nav-item navbar-search-wrapper mb-0">
                <a class="nav-item nav-link search-toggler px-0" href="javascript:void(0);">
                    <i class="bx bx-search bx-sm"></i>
                    <span class="d-none d-md-inline-block text-muted">{{ __('admin.Search') }} (Ctrl+/)</span>
                </a>
            </div>
        </div>
        <!-- /Search -->

        <ul class="navbar-nav flex-row align-items-center ms-auto">
            <li>
                <a href="{{ route('home') }}" class="btn btn-primary" target="_blank" style="margin-right: 6px;">
                    Website
                </a>
            </li>
            <!-- Language -->
            <li class="nav-item dropdown-language dropdown me-2 me-xl-0">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <i class="bx bx-globe bx-sm"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    @foreach (systemLangs() ?: [] as $language)
                        <li>
                            <a class="dropdown-item @if (app()->getLocale() == $language->url) active @endif"
                                href="{{ route('localization', $language->url) }}" data-language="{{ $language->url }}"
                                data-text-direction="ltr">
                                <span class="align-middle">{{ $language->name }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </li>
            <!-- /Language -->

            <!-- Style Switcher -->
            <li class="nav-item dropdown-style-switcher dropdown me-2 me-xl-0">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <i class="bx bx-sm"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
                    <li>
                        <a class="dropdown-item" href="javascript:void(0);" data-theme="light">
                            <span class="align-middle">
                                <i class="bx bx-sun me-2"></i>{{ __('locale.Light') }}
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">
                            <span class="align-middle">
                                <i class="bx bx-moon me-2"></i>{{ __('locale.Dark') }}
                            </span>
                        </a>
                    </li>
                    {{-- <li>
                        <a class="dropdown-item" href="javascript:void(0);" data-theme="system">
                            <span class="align-middle">
                                <i class="bx bx-desktop me-2"></i>{{ __('locale.System') }}
                            </span>
                        </a>
                    </li> --}}
                </ul>
            </li>
            <!-- / Style Switcher-->

            <!-- User -->
            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                        <img src="{{ auth()->user()?->getAvatar('image') }}" class="rounded-circle" />
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <a class="dropdown-item" href="{{ route('admin.profile.edit') }}">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar avatar-online">
                                        <img src="{{ auth()->user()?->getAvatar('image') }}" alt
                                            class="rounded-circle" />
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <span class="fw-medium d-block w_hide">{{ auth()->user()?->fullname }}</span>
                                    <small
                                        class="text-muted">{{ auth()->user()?->role?->translate('name') ? '' : 'superadmin' }}</small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('admin.profile.edit') }}">
                            <i class="bx bx-user me-2"></i>
                            <span class="align-middle">{{ __('locale.My profile') }}</span>
                        </a>
                    </li>
                    <li>
                        <form action="{{ route('logout') }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="dropdown-item">
                                <i class="bx bx-power-off me-2"></i>
                                <span class="align-middle">{{ __('locale.Logout') }}</span>
                            </button>
                        </form>
                    </li>
                </ul>
            </li>
            <!--/ User -->
        </ul>
    </div>
    <div class="navbar-search-wrapper search-input-wrapper d-none">
        <input type="text" class="form-control search-input border-0 container-fluid"
            placeholder="{{ __('admin.Search') }}..." aria-label="{{ __('admin.Search') }}...">
        <i class="bx bx-x bx-sm search-toggler cursor-pointer"></i>
    </div>
</nav>
