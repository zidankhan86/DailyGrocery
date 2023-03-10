<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">
          <i class="mdi mdi-grid-large menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('shop.list') }}">
          <i class="menu-icon ti-home" ></i>
          <span class="menu-title">MY SHOP</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route ('shop.form') }}">
          <i class="menu-icon ti-home"></i>
          <span class="menu-title">SHOPS</span>
        </a>
      </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route ('product.list') }}">
              <i class="menu-icon ti-package"></i>
              <span class="menu-title">PRODUCTS</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route ('category.list') }}">
              <i class="menu-icon  ti-layout-media-overlay"></i>
              <span class="menu-title">CATEGORY</span>
            </a>
          </li>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route ('order.list') }}">
          <i class="menu-icon ti-bag"></i>
          <span class="menu-title">ORDERS</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('customer.list') }}">
          <i class="menu-icon ti-user"></i>
          <span class="menu-title">CUSTOMERS</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route ('shipping.list') }}">
          <i class="menu-icon ti-truck"></i>
          <span class="menu-title">SHIPPINGS</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('brand.index') }}">
          <i class="menu-icon ti-github "></i>
          <span class="menu-title">Brand</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('refound.list') }}">
          <i class="menu-icon ti-loop"></i>
          <span class="menu-title">REFOUNDS</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('notice.list') }}">
          <i class="menu-icon ti-announcement"></i>
          <span class="menu-title">NOTICE</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">
          <i class="menu-icon ti-comment-alt"></i>
          <span class="menu-title">MESSAGE</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route ('reviews.list') }}">
          <i class="menu-icon ti-star"></i>
          <span class="menu-title">CUSTOMER REVIEW</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route ('reviews.list') }}">
          <i class="menu-icon mdi mdi-coin"></i>
          <span class="menu-title">CUPON</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route ('role.index') }}">
          <i class="menu-icon mdi mdi-account-key"></i>
          <span class="menu-title">Role</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}">
          <i class="menu-icon mdi mdi-window-close"></i>
          <span class="menu-title">Logout</span>
        </a>
      </li>
    </ul>
  </nav>
