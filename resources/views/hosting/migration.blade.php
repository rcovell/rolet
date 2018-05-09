@extends('layouts.app')

@section('title', 'Migration')
@section('description', 'Do you need help moving your website? Whether it is to us or another hosting provider we can move your Linux or Windows website.')
@section('keywords', 'migration, move website, linux migration, windows migration')
@section('body_class', 'migration')

@section('content')
  @component('components.hero')
    @slot('pageTitle')
      Migration
    @endslot
    {{-- @slot('pageSubtitle')
      Lorem ipsum dolor sit amet, consectetur
    @endslot
    @slot('pageShortDescription')
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin velit ante, bibendum eu consectetur non, accumsan ut orci. Maecenas velit nibh, imperdiet.
    @endslot --}}
  @endcomponent

  {{ Breadcrumbs::render('hosting.migration') }}

  @include('partials.message')

  <div class="container">
    <div class="row theme">
      <div class="col-md-12">
        <div class="column left first">
          <h2 class="extend lower">
            #freemysite
          </h2>
          <p class="leader">
            Locked into your current host because you don't know how to leave?
          </p>
        </div>
      </div>
    </div>

    <div class="row theme">
      <div class="col-md-6">
        <div class="column left">
          <p>
            You don't know how many times we have heard "We would move if we could". Many companies are in a bad relationship with their host and want out, or for other reasons they want to move but simply don't have the knowledge or resources to do it?
          </p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="column right">
          <p>
            Our 20 plus years of hosting provides us the unique ability to understand the most complicated of websites and applications. We'll leverage this knowledge and move you to the host of your choice, even if it isn't us (please say it isn't so, please <i class="fa fa-smile"></i>).
          </p>
        </div>
      </div>
    </div>

    <div class="row theme">
      <div class="col-md-12">
        <div class="column">
          <p class="centered">
            As with many of our services, this one is pretty simple.  Just fill out the questionnaire below to tell us what's going on and we'll help.
          </p>
        </div>
      </div>
    </div>

    <div class="row theme">
      <div class="col-md-12">
        <div class="column dark-grey call-to-action">
          <h2>Need help moving?</h2>

          <p>
            Take a minute to fill out our migration questionnaire.
          </p>

          <a href="{{ route ('hosting.migration.questionnaire') }}" class="button rounded">Tell Us Your Current Setup</a>
        </div>
      </div>
    </div>
  </div>
@endsection
