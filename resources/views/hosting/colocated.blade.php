@section('title', 'Colocated')

@section('body_class', 'colocated')

@extends('layouts.app')

@section('content')
  @component('components.hero')
    @slot('pageTitle')
      Colocated
    @endslot
    {{-- @slot('pageSubtitle')
      Lorem ipsum dolor sit amet, consectetur
    @endslot
    @slot('pageShortDescription')
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin velit ante, bibendum eu consectetur non, accumsan ut orci. Maecenas velit nibh, imperdiet.
    @endslot --}}
  @endcomponent

  {{ Breadcrumbs::render('hosting.colocated') }}

  <div class="container">
    <div class="row theme">
      <div class="col-md-12">
        <div class="column left first">
          <h2 class="extend">
            Got Nothing - Look at unpublished pages
          </h2>
          <p class="leader">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin velit ante, bibendum eu consectetur non, accumsan ut orci. Maecenas velit nibh, imperdiet quis velit et, molestie tempus sem. Vivamus sit amet pulvinar urna, ac gravida felis.
          </p>
          <p>
            Donec eu leo nibh. Donec fringilla vulputate nulla, ac finibus neque cursus nec. Pellentesque eu eros quis ante porta imperdiet viverra vitae enim. Duis ut dui sed nulla viverra dignissim.
          </p>
        </div>
      </div>
    </div>
  </div>
@endsection
