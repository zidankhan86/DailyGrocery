<!-- Navbar Start -->
<div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">

    <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn @if(! (request()->route()->getName() == 'home')) bg-white @endif" data-wow-delay="0.1s">
        <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
            <h1 class="fw-bold text-primary m-0">F<span class="text-secondary">oo</span>dy</h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{route ('home') }}" class="nav-item nav-link active">{{ __('Home') }}</a>
                <a href="{{route ('about.information') }}" class="nav-item nav-link">{{ __('About Us') }}</a>
                <a href="{{ route('product.information') }}" class="nav-item nav-link">{{ __('Products') }}</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{ __('Pages') }}</a>
                    <div class="dropdown-menu m-0">
                        <a href="blog.html" class="dropdown-item">Blog Grid</a>
                        <a href="feature.html" class="dropdown-item">Our Features</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>
                    </div>
                </div>
                <a href="{{route ('contract.information') }}" class="nav-item nav-link">{{ __('Contact Us') }}</a>
                <a href="{{route ('become.a.seller') }}" style="color: rgb(255, 127, 127)" class="nav-item nav-link">{{ __('Become a Seller') }}</a>
                <a href="{{route ('login') }}" class="nav-item nav-link">{{ __('Login') }}</a>
                <a href="{{route ('get.registration') }}" class="nav-item nav-link">{{ __('Registration') }}</a>
            </div>

            <select class="" name="language" id="" onchange="location = this.value;">
                <option  @if(session()->get('loc')=='en') selected @endif  value="{{route('switch.lang','en')}}">English</option>
                <option  @if(session()->get('loc')=='bn') selected @endif  value="{{route('switch.lang','bn')}}">Bangla</option>
                <option  @if(session()->get('loc')=='ko') selected @endif  value="{{route('switch.lang','ko')}}">Korean</option>

            </select>

            <div class="d-none d-lg-flex ms-2">
                <a class="btn-sm-square bg-white rounded-circle ms-3" href="">
                    <small class="fa fa-search text-body"></small>
                </a>
                <a class="btn-sm-square bg-white rounded-circle ms-3" href="{{ route('customer.profile') }}">
                    <small class="fa fa-user text-body"></small>
                </a>
                <a class="btn-sm-square bg-white rounded-circle ms-3" href="">
                    <small class="fa fa-shopping-bag text-body"></small>
                </a>
            </div>
        </div>
    </nav>
</div>
