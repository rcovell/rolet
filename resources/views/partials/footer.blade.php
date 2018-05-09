<div class="footer-container">
  <div class="container">
    @if (!Request::is('*site-map'))
      <div class="row footer">
        <div class="footer-inner">
          <div class="col-md-15 col-xs-6 col-xs-3">
            <div class="navigation footer">
              <ul class="menu footer">
                @include('partials.nav.hosting', ['primary' => false])
              </ul>
            </div>
          </div>

          <div class="col-md-15 col-xs-6 col-xs-3">
            <div class="navigation footer">
              <ul class="menu footer">
                @include('partials.nav.email', ['primary' => false])
              </ul>
            </div>
          </div>

          <div class="col-md-15 col-xs-6 col-xs-3">
            <div class="navigation footer">
              <ul class="menu footer">
                @include('partials.nav.websites-and-apps', ['primary' => false])
              </ul>
            </div>
          </div>

          <div class="col-md-15 col-xs-6 col-xs-3">
            <div class="navigation footer">
              <ul class="menu footer">
                @include('partials.nav.support', ['primary' => false])
              </ul>
            </div>
          </div>

          <div class="col-md-15 col-sm-12">
            <div class="navigation footer">
              <ul class="menu footer">
                @include('partials.nav.company', ['primary' => false])
              </ul>
            </div>
          </div>
        </div>
      </div>
    @endif

    <div class="row">
      <div class="col-md-12">
        <div class="copyright">
          &copy 1995 - {{ date('Y') }} {{ config('app.company_name')}}
        </div>
      </div>
    </div>
  </div>
</div>
