<nav class="navbar navbar-default navbar-static-top" v-bind:class="{ sticky: stickyHeader }">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="navbar-header">
          <a class="mobile-navigation" @click="toggleMobileNavigation()"><i class="fa fa-bars mobile-navigation-icon"></i></a>
          {{-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
            <span>Menu</span>
            <span class="sr-only">Toggle Navigation</span>
          </button> --}}

          <div class="site-name-container">
            @if (Request::is('/'))
              <h1 class="site-name">
                <a href="/" rel="home">
                  {{ config('app.name') }}
                </a>
              </h1>
            @else
              <h2 class="site-name">
                <a href="/" rel="home">
                  {{ config('app.name') }}
                </a>
              </h2>
            @endif
          </div>

          <div class="navigation top" id="navigation">
            <div class="mobile-only">
              <a href="tel:816-471-1095" title="Have a question or need additional information?  Give us a call." class="mobile-contact"><span class="link-text">816-471-1095</span></a>
            </div>
            <div class="navigation-container">
              <ul class="menu primary">
                @include('partials.nav.hosting', ['primary' => true])
                @include('partials.nav.email', ['primary' => true])
                @include('partials.nav.websites-and-apps', ['primary' => true])
                <span class="desktop-only">
                  <li><a href="{{ route ('support.customer-login') }}" title="Login to your Rolet services." class="nav-fa login-nav-fa{{ Request::is('*customer-login')? ' active' : '' }}"><span class="link-text">Login</span></a></li>
                  <li><a href="tel:816-471-1095" title="Have a question or need additional information?  Give us a call." class="nav-fa phone-nav-fa"><span class="link-text">816-471-1095</span></a></li>
                </span>
                <span class="mobile-only">
                  @include('partials.nav.support', ['primary' => true])
                  @include('partials.nav.company', ['primary' => true])
                </span>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>

<div class="secondary-nav-container">
  <div class="secondary-nav-inner navigation">
  </div>
</div>
