<header id="header">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <!-- logo of the page -->
        <div class="logo">
          <a href="/"><img src="{{ asset('assets/images/logo-light.png')  }}" alt="Naraku" height="35px"></a>
        </div>
        <!-- logo of the page end -->
        <!-- nav-holder of the page -->
        <div class="nav-holder">
          <a href="#" class="nav-opener"><i class="fa fa-bars"></i><i class="fa fa-times"></i></a>
          <!-- nav of the page -->
          <nav id="nav">
            <ul class="list-unstyled">
              <li><a href="{{ route('landing') }}" data-scroll-nav="0">Beranda</a></li>
              <li><a href="{{ route('landing') }}" data-scroll-nav="1">Fasilitas</a></li>
              <li><a href="{{ route('landing') }}" data-scroll-nav="2">Produk</a></li>
              <li><a href="{{ route('landing') }}" data-scroll-nav="3">Pembelian</a></li>
            </ul>
          </nav>
          <!-- nav of the page end -->
          <ul class="list-unstyled sign-list">
              @if (Route::has('login'))
                @auth
                  <li><a href="{{ route('home') }}" class="bg-grey md-round">Dasbor</a></li>
                  @else
                  <li><a href="{{ route('login') }}">Masuk</a></li>
                  <li><a href="{{ route('register') }}" class="bg-grey md-round">Daftar</a></li>
                @endauth
              @endif
          </ul>
        </div>
        <!-- nav-holder of the page end -->
      </div>
    </div>
  </div>
</header>
