<div class="column {{ $classes }}">
  @isset_MAKE_FAIL($pageTitle)
    <h1 class="extend page-title">
      {{ $pageTitle }}
    </h1>
  @endisset

  @isset($h1)
    <h1 class="extend">{{ $h1 }}</h1>
  @endisset

  @isset($h2)
    <h2 class="extend">{{ $h2 }}</h2>
  @endisset

  @isset($h2Lower)
    <h2 class="extend lower">{{ $h2Lower }}</h2>
  @endisset

  @isset($h2Plain)
    <h2>{{ $h2Plain }}</h2>
  @endisset

  @isset($h3)
    <h3 class="extend">{{ $h3 }}</h3>
  @endisset

  @isset($h4)
    <h4 class="extend">{{ $h4 }}</h4>
  @endisset

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

  @isset($leader)
    <p class="leader">
      {{ $leader }}
    </p>
  @endisset

  @isset($content)
    {{ $content }}
  @endisset
</div>
