@if (count($breadcrumbs))
  <div class="breadcrumb-container">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb">
            @foreach ($breadcrumbs as $breadcrumb)
              @if ($breadcrumb->url && !$loop->last)
                <li class="breadcrumb-item"><a href="{{ $breadcrumb->url }}" class="breadcrumb-link">{{ $breadcrumb->title }}</a></li>
              @else
                <li class="breadcrumb-item active">{{ $breadcrumb->title }}</li>
              @endif
            @endforeach
          </ol>
        </div>
      </div>
    </div>
  </div>
@endif
