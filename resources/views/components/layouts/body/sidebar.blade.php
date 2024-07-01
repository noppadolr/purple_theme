<div class="app-menu">
    @php
        $id =\Illuminate\Support\Facades\Auth::user()->id;
        $adminData = \App\Models\User::find($id);
    @endphp
    <!-- Brand Logo -->
    <div class="logo-box">
        <!-- Brand Logo Light -->
        <a href="#" class="logo-light">
            <img src="{{ asset('admin/assets/images/logo-light.png') }}" alt="logo" class="logo-lg">
            <img src="{{ asset('admin/assets/images/logo-sm.png') }}" alt="small logo" class="logo-sm">
        </a>

        <!-- Brand Logo Dark -->
        <a href="#" class="logo-dark">
            <img src="{{ asset('admin/assets/images/logo-dark.png') }}" alt="dark logo" class="logo-lg">
            <img src="{{ asset('admin/assets/images/logo-sm.png') }}" alt="small logo" class="logo-sm">
        </a>
    </div>

    <!-- menu-left -->
    <div class="scrollbar">

        <!-- User box -->
        <div class="user-box text-center">
            <img  src="{{ (!empty($adminData->photo))? url('upload/adminImages/'.$adminData->photo):url('upload/no_image.jpg') }}"  alt="user-img" title="{{ $adminData->name }}" class="rounded-circle avatar-md ">
            {{-- <img src="{{ asset('admin/assets/images/users/user-1.jpg') }}" alt="user-img" title="Mat Helme" class="rounded-circle avatar-md"> --}}
            <div class="dropdown">
                <a href="javascript: void(0);" class="dropdown-toggle h5 mb-1 d-block" data-bs-toggle="dropdown">{{ $adminData->name }}</a>
                <div class="dropdown-menu user-pro-dropdown">

                    <!-- item-->
                    <a href="{{ route('admin.profile') }}" class="dropdown-item notify-item">
                        <i class="fe-user me-1"></i>
                        <span>My Account</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-settings me-1"></i>
                        <span>Settings</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-lock me-1"></i>
                        <span>Lock Screen</span>
                    </a>

                    <!-- item-->
{{--                    <a href="javascript:void(0);" class="dropdown-item notify-item">--}}
{{--                        <i class="fe-log-out me-1"></i>--}}
{{--                        <span>Logout</span>--}}
{{--                    </a>--}}
                    <x-logout>Logout</x-logout>

                </div>
            </div>
            <p class="text-muted mb-0">Admin Head</p>
        </div>

        <!--- Menu -->
        <ul class="menu">

            <li class="menu-title">Navigation</li>
            <li class="menu-item">
                <a href="{{ route('admin.dashboard') }}" class="menu-link">
                    <span class="menu-icon"><i data-feather="airplay"></i></span>
                    <span class="menu-text"> Dashboard </span>
                </a>
            </li>



            <li class="menu-title">Apps</li>

            <li class="menu-item">
                <a href="apps-calendar.html" class="menu-link">
                    <span class="menu-icon"><i data-feather="calendar"></i></span>
                    <span class="menu-text"> Calendar </span>
                </a>
            </li>

            <li class="menu-item">
                <a href="apps-chat.html" class="menu-link">
                    <span class="menu-icon"><i data-feather="message-square"></i></span>
                    <span class="menu-text"> Chat </span>
                </a>
            </li>

            <li class="menu-item">
                <a href="#menuEcommerce" data-bs-toggle="collapse" class="menu-link">
                    <span class="menu-icon"><i data-feather="shopping-cart"></i></span>
                    <span class="menu-text"> Ecommerce </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="menuEcommerce">
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="ecommerce-dashboard.html" class="menu-link">
                                <span class="menu-text">Dashboard</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="ecommerce-products.html" class="menu-link">
                                <span class="menu-text">Products</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="ecommerce-product-detail.html" class="menu-link">
                                <span class="menu-text">Product Detail</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="ecommerce-product-edit.html" class="menu-link">
                                <span class="menu-text">Add Product</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="ecommerce-customers.html" class="menu-link">
                                <span class="menu-text">Customers</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="ecommerce-orders.html" class="menu-link">
                                <span class="menu-text">Orders</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="ecommerce-order-detail.html" class="menu-link">
                                <span class="menu-text">Order Detail</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="ecommerce-sellers.html" class="menu-link">
                                <span class="menu-text">Sellers</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="ecommerce-cart.html" class="menu-link">
                                <span class="menu-text">Shopping Cart</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="ecommerce-checkout.html" class="menu-link">
                                <span class="menu-text">Checkout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="menu-item">
                <a href="#menuCrm" data-bs-toggle="collapse" class="menu-link">
                    <span class="menu-icon"><i data-feather="users"></i></span>
                    <span class="menu-text"> CRM </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="menuCrm">
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="crm-dashboard.html" class="menu-link">
                                <span class="menu-text">Dashboard</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="crm-contacts.html" class="menu-link">
                                <span class="menu-text">Contacts</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="crm-opportunities.html" class="menu-link">
                                <span class="menu-text">Opportunities</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="crm-leads.html" class="menu-link">
                                <span class="menu-text">Leads</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="crm-customers.html" class="menu-link">
                                <span class="menu-text">Customers</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>


            <li class="menu-title">Custom</li>

            <li class="menu-item">
                <a href="#menuAuth" data-bs-toggle="collapse" class="menu-link">
                    <span class="menu-icon"><i data-feather="file-text"></i></span>
                    <span class="menu-text"> Auth Pages </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse collapse-md" id="menuAuth">
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="auth-login.html" class="menu-link">
                                <span class="menu-text">Log In</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="auth-login-2.html" class="menu-link">
                                <span class="menu-text">Log In 2</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="auth-register.html" class="menu-link">
                                <span class="menu-text">Register</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="auth-register-2.html" class="menu-link">
                                <span class="menu-text">Register 2</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="auth-signin-signup.html" class="menu-link">
                                <span class="menu-text">Signin - Signup</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="auth-signin-signup-2.html" class="menu-link">
                                <span class="menu-text">Signin - Signup 2</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="auth-recoverpw.html" class="menu-link">
                                <span class="menu-text">Recover Password</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="auth-recoverpw-2.html" class="menu-link">
                                <span class="menu-text">Recover Password 2</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="auth-lock-screen.html" class="menu-link">
                                <span class="menu-text">Lock Screen</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="auth-lock-screen-2.html" class="menu-link">
                                <span class="menu-text">Lock Screen 2</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="auth-logout.html" class="menu-link">
                                <span class="menu-text">Logout</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="auth-logout-2.html" class="menu-link">
                                <span class="menu-text">Logout 2</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="auth-confirm-mail.html" class="menu-link">
                                <span class="menu-text">Confirm Mail</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="auth-confirm-mail-2.html" class="menu-link">
                                <span class="menu-text">Confirm Mail 2</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="menu-title">Components</li>
            <li class="menu-item">
                <a href="#menuBaseui" data-bs-toggle="collapse" class="menu-link">
                    <span class="menu-icon"><i data-feather="pocket"></i></span>
                    <span class="menu-text"> Base UI </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse collapse-md" id="menuBaseui">
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="ui-buttons.html" class="menu-link">
                                <span class="menu-text">Buttons</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="ui-cards.html" class="menu-link">
                                <span class="menu-text">Cards</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="ui-avatars.html" class="menu-link">
                                <span class="menu-text">Avatars</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="ui-portlets.html" class="menu-link">
                                <span class="menu-text">Portlets</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="ui-tabs-accordions.html" class="menu-link">
                                <span class="menu-text">Tabs & Accordions</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="ui-modals.html" class="menu-link">
                                <span class="menu-text">Modals</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="ui-progress.html" class="menu-link">
                                <span class="menu-text">Progress</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="ui-notifications.html" class="menu-link">
                                <span class="menu-text">Notifications</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="ui-offcanvas.html" class="menu-link">
                                <span class="menu-text">Offcanvas</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="ui-placeholders.html" class="menu-link">
                                <span class="menu-text">Placeholders</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="ui-spinners.html" class="menu-link">
                                <span class="menu-text">Spinners</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="ui-images.html" class="menu-link">
                                <span class="menu-text">Images</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="ui-carousel.html" class="menu-link">
                                <span class="menu-text">Carousel</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="ui-list-group.html" class="menu-link">
                                <span class="menu-text">List Group</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="ui-video.html" class="menu-link">
                                <span class="menu-text">Embed Video</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="ui-dropdowns.html" class="menu-link">
                                <span class="menu-text">Dropdowns</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="ui-ribbons.html" class="menu-link">
                                <span class="menu-text">Ribbons</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="ui-tooltips-popovers.html" class="menu-link">
                                <span class="menu-text">Tooltips & Popovers</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="ui-general.html" class="menu-link">
                                <span class="menu-text">General UI</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="ui-typography.html" class="menu-link">
                                <span class="menu-text">Typography</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="ui-grid.html" class="menu-link">
                                <span class="menu-text">Grid</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="menu-item">
                <a href="#menuIcons" data-bs-toggle="collapse" class="menu-link">
                    <span class="menu-icon"><i data-feather="cpu"></i></span>
                    <span class="menu-text"> Icons </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="menuIcons">
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="icons-material-symbols.html" class="menu-link">
                                <span class="menu-text">Material Symbols </span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="icons-two-tone.html" class="menu-link">
                                <span class="menu-text">Two Tone Icons</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="icons-feather.html" class="menu-link">
                                <span class="menu-text">Feather Icons</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="icons-mdi.html" class="menu-link">
                                <span class="menu-text">Material Design Icons</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="icons-dripicons.html" class="menu-link">
                                <span class="menu-text">Dripicons</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="icons-font-awesome.html" class="menu-link">
                                <span class="menu-text">Font Awesome 5</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="icons-themify.html" class="menu-link">
                                <span class="menu-text">Themify</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="icons-simple-line.html" class="menu-link">
                                <span class="menu-text">Simple Line</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="icons-weather.html" class="menu-link">
                                <span class="menu-text">Weather</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="menu-item">
                <a href="#menuForms" data-bs-toggle="collapse" class="menu-link">
                    <span class="menu-icon"><i data-feather="bookmark"></i></span>
                    <span class="menu-text"> Forms </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="menuForms">
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="forms-elements.html" class="menu-link">
                                <span class="menu-text">General Elements</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="forms-advanced.html" class="menu-link">
                                <span class="menu-text">Advanced</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="forms-validation.html" class="menu-link">
                                <span class="menu-text">Validation</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="forms-pickers.html" class="menu-link">
                                <span class="menu-text">Pickers</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="forms-wizard.html" class="menu-link">
                                <span class="menu-text">Wizard</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="forms-masks.html" class="menu-link">
                                <span class="menu-text">Masks</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="forms-quilljs.html" class="menu-link">
                                <span class="menu-text">Quilljs Editor</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="forms-file-uploads.html" class="menu-link">
                                <span class="menu-text">File Uploads</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="forms-x-editable.html" class="menu-link">
                                <span class="menu-text">X Editable</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="forms-image-crop.html" class="menu-link">
                                <span class="menu-text">Image Crop</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
        <!--- End Menu -->
        <div class="clearfix"></div>
    </div>
</div>
