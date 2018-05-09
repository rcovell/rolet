<div class="hero-container">
  <div class="container">
    <div class="row equalize">
      @if (empty($longPageTitle))
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="hero-inner left">
            @isset($pageTitle)
              <h1 class="page-title">
                {{ $pageTitle }}
              </h1>
            @endisset
          </div>
        </div>
      @else
        <div class="col-md-8 col-sm-6 col-xs-12">
          <div class="hero-inner left">
            @isset($pageTitle)
              <h1 class="page-title">
                {{ $pageTitle }}
              </h1>
            @endisset
          </div>
        </div>
      @endif

      @empty ($longPageTitle)
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="hero-inner right">
            @isset($pageSubtitle)
              <p class="page-subtitle">
                {{ $pageSubtitle }}
              </p>
            @endisset

            @isset($pageShortDescription)
              <p class="page-short-description">
                {{ $pageShortDescription }}
              </p>
            @endisset
          </div>
        </div>
      @endempty
    </div>
  </div>
</div>
