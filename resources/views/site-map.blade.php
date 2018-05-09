@section('title', 'Site map')

@section('body_class', 'site-map')

@extends('layouts.app')

@section('content')
  @component('components.hero')
    @slot('pageTitle')
      Site Map
    @endslot
    @slot('pageSubtitle')
      Just like our footer
    @endslot
    @slot('pageShortDescription')
      Minus me
    @endslot
  @endcomponent

  {{ Breadcrumbs::render('site-map') }}

  <div class="container site-map">
    <div class="row">
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="navigation">
          <ul class="menu">
            @include('partials.nav.hosting', ['primary' => false])
          </ul>
        </div>
      </div>

      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="navigation">
          <ul class="menu">
            @include('partials.nav.email', ['primary' => false])
          </ul>
        </div>
      </div>

      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="navigation">
          <ul class="menu">
            @include('partials.nav.websites-and-apps', ['primary' => false])
          </ul>
        </div>
      </div>
    </div>

    <div class="row footer">
      <div class="col-md-5 col-md-offset-1 col-sm-6 col-sm-offset-1 col-xs-12">
        <div class="navigation">
          <ul class="menu">
            @include('partials.nav.support', ['primary' => false])
          </ul>
        </div>
      </div>

      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="navigation">
          <ul class="menu">
            @include('partials.nav.company', ['primary' => false])
          </ul>
        </div>
      </div>
    </div>
    <div class="row-spacer">
      
    </div>
  </div>
@endsection
