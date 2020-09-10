<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard') }}" class="brand-link">
        <img src="{{ url('AdminPanel/img/AdminLTELogo.png') }}" alt="لوگو  وطن میزبان" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">پنل وطن میزبان</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{url('AdminPanel/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{ route('dashboard') }}" class="d-block">
                    @auth()
                        {{ Auth::user()->name }}
                        <smal style="font-size: 10px">
                            ( {{ Auth::user()->mobile }} )
                        </smal>
                    @else
                        نام کاربری
                    @endauth
                </a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Dashboard -->
                <li class="nav-item" id="dashboard">
                    <a href="{{ route('dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            داشبورد
                        </p>
                    </a>

                </li>
                <!-- Products -->
                <li class="nav-item has-treeview" id="products">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-list-alt"></i>
                        <p>
                            محصولات
                            <i class="fas fa-angle-left right"></i>

                            <span class="badge badge-info right">{{ \App\Product::all()->count() }}</span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('dashboard.product.index') }}" class="nav-link" id="allProducts">
                                <i class="far fa-circle nav-icon"></i>
                                <p>لیست همه محصولات</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('dashboard.product.create') }}" class="nav-link" id="new-product">
                                <i class="far fa-circle nav-icon"></i>
                                <p>افزودن محصول جدید</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Product Categories -->
                <li class="nav-item has-treeview" id="categories">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-list-ul" aria-hidden="true"></i>
                        <p>
                            دسته بندی محصولات
                            <i class="fas fa-angle-left right"></i>

                              <span class="badge badge-info right">{{ \App\ProductCategory::all()->count() }}</span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('dashboard.productCategory.index') }}" class="nav-link" id="allCategories">
                                <i class="far fa-circle nav-icon"></i>
                                <p>لیست همه دسته بندی ها</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('dashboard.productCategory.create') }}" class="nav-link" id="new-category">
                                <i class="far fa-circle nav-icon"></i>
                                <p>افزودن دسته بندی جدید</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Users -->
                <li class="nav-item has-treeview" id="users">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-users" aria-hidden="true"></i>
                        <p>
                            کاربران
                            <i class="fas fa-angle-left right"></i>

                            {{--                            <span class="badge badge-info right">{{ \App\User::all()->count() }}</span>--}}
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link" id="allUsers">
                                <i class="far fa-circle nav-icon"></i>
                                <p>لیست همه کاربران</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Cart -->
                <li class="nav-item has-treeview" id="carts">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-luggage-cart" aria-hidden="true"></i>
                        <p>
                            سفارشات
                            <i class="fas fa-angle-left right"></i>

                            {{--                            <span class="badge badge-info right">{{ \App\Models\Cart::all()->count() }}</span>--}}
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link" id="allCarts">
                                <i class="far fa-circle nav-icon"></i>
                                <p>لیست همه سفارشات</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- LogOut -->
                <li class="nav-item" id="sign-out">
                    <a href="{{ route('logoutUser') }}" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            خروج از سایت
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
