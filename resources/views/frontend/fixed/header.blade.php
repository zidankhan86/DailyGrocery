<!-- Navbar Start -->
<div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">

    <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn @if(! (request()->route()->getName() == 'home')) bg-white @endif" data-wow-delay="0.1s">
        <a href="{{route ('home') }}" class="navbar-brand ms-4 ms-lg-0">
            <h1 class="fw-bold text-primary m-0">Grocery</h1>
        </a>

        <form action="{{route('search')}}">

            <div class="input-group">
                <input name="search_key" type="text" class="form-control" placeholder="Search for products">
                <div class="input-group-append">
                        <button type="submit" class="btn btn-success">Search</button>
                </div>
            </div>
        </form>


        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{route ('home') }}" class="nav-item nav-link active">{{ __('Home') }}</a>
                <a href="{{route ('about.information') }}" class="nav-item nav-link">{{ __('About') }}</a>
                <a href="{{ route('product.information') }}" class="nav-item nav-link">{{ __('Products') }}</a>

                <a href="{{route ('contract.information') }}" class="nav-item nav-link">{{ __('Contact') }}</a>
                <a href="{{route ('become.a.seller') }}" style="color: rgb(255, 127, 127)" class="nav-item nav-link">{{ __('Become a Seller') }}</a>
                <a href="{{route ('get.registration') }}" class="nav-item nav-link">{{ __('Registration') }}</a>
                <a href="{{route ('login') }}" class="nav-item nav-link">{{ __('Login') }}</a>







            </div>
            <div>

            </div>

            <select class="" name="language" id="" onchange="location = this.value;">
                <option  @if(session()->get('loc')=='en') selected @endif  value="{{route('switch.lang','en')}}">En</option>
                <option  @if(session()->get('loc')=='bn') selected @endif  value="{{route('switch.lang','bn')}}">Bn</option>
                <option  @if(session()->get('loc')=='ko') selected @endif  value="{{route('switch.lang','ko')}}">Ko</option>

            </select>

            <div class="d-none d-lg-flex ms-2">

                @auth
                @if(auth()->user()->role=='customer'or'admin')




                <a href="{{route ('logout') }}" class="nav-item nav-link">{{ __('Logout') }}</a>
                <a class="btn-sm-square bg-white rounded-circle ms-3" href="{{ route('customer.profile') }}">
                    <small class="fa fa-user text-body"></small>


                    @endif
                    @endauth



                </a>
                <a class="btn-sm-square bg-white rounded-circle ms-3" href="{{route ('view.cart') }}">
                    <small class="	fas fa-cart-plus"></small>
                    <span>{{session()->has('cart') ? count(session()->get('cart')) : 0}}</span>

                </a>

            </div>
        </div>
    </nav>
</div>
