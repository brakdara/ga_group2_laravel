<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand mt-5 ml-5">
        <a href="{{url('/redirect')}}">
          @include('components.authentication-card-logo')
        </a>
      </div>
      <ul class="sidebar-menu">
        <li class="menu-header">Main</li>
        <li class="dropdown active">
          <a href="{{url('redirect')}}" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
        </li>
        <li class="dropdown">
          <a href="{{url('category')}}" class="nav-link"><i
              data-feather="grid"></i><span>Category</span></a>
          
        </li>
        <li class="dropdown">
          <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="shopping-bag"></i><span>Product</span></a>
          <ul class="dropdown-menu">
            
            <li><a class="nav-link" href="{{url('allproducts')}}">Show Product</a></li>
            <li><a class="nav-link" href="{{url('products_create')}}" >Add Product</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="mail"></i><span>Customer</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="email-inbox.html">Inbox</a></li>
            <li><a class="nav-link" href="email-compose.html">Compose</a></li>
            <li><a class="nav-link" href="email-read.html">read</a></li>
          </ul>
        </li>
    </aside>
  </div>