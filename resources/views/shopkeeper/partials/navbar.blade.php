<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{asset('images/logo.png')}}" alt="ourmarbles" class="brand-image img-circle elevation-3"
        style="opacity: .8">
        <span class="brand-text font-weight-light">Our Marbles</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset(Auth::user()->avatar)}}" style="height: 60px; width: 60px; border-radius: 50%; margin-right: 15px;">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link active">
                        {{--<i class="nav-icon fas fa-tachometer-alt"></i>--}}
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview menu-open">
                    <a href="{{route('category.index')}}" class="nav-link active">
                        {{--<i class="fa fa-btn fa-user"></i>--}}
                        <p>
                            Categories
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview menu-open">
                    <a href="{{route('product.index')}}" class="nav-link active">
                        {{-- <i class="fa fa-btn fa-product-hunt"></i>--}}
                        <p>
                            Products
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview menu-open">
                    <a href="{{route('shopkeeper.password.change')}}" class="nav-link active">
                        {{-- <i class="fa fa-btn fa-user"></i>--}}
                        <p>
                            Change Password
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview menu-open">
                    <a href="{{route('customers.index')}}" class="nav-link active">
                        {{-- <i class="fa fa-btn fa-user"></i>--}}
                        <p>
                            Customers
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview menu-open">
                    <a href="{{route('orders.index')}}" class="nav-link active">
                        {{-- <i class="fa fa-btn fa-user"></i>--}}
                        <p>
                            Orders
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview menu-open">
                    <a href="{{route('shopkeeper.logout')}}" class="nav-link active">
                        {{-- <i class="nav-icon fas fa-tachometer-alt"></i>--}}
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>