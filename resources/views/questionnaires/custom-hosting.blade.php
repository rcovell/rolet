@extends('layouts.app')

@section('title', 'Custom Hosting Questionnaire')
@section('description', 'Custom hosting questionnare.')
@section('keywords', 'custom hosting, questionnaire')
@section('body_class', 'custom-hosting-questionnaire questionnaire')

@section('content')
  @component('components.hero', ['longPageTitle' => true])
    @slot('pageTitle')
      Custom Hosting Questionnaire
    @endslot
    {{-- @slot('pageSubtitle')
      Lorem ipsum dolor sit amet, consectetur
    @endslot
    @slot('pageShortDescription')
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin velit ante, bibendum eu consectetur non, accumsan ut orci. Maecenas velit nibh, imperdiet.
    @endslot --}}
  @endcomponent

  {{ Breadcrumbs::render('hosting.custom.questionnaire') }}

  <form method="post" action="{{ route ('hosting.custom.questionnaire.submit') }}" data-vv-scope="questionnaire" id="questionnaire" ref="questionnaire">
    <div class="container">
      <div class="row theme">
        <div class="col-md-12">
          <div class="column first light-grey">
            @include ('questionnaires.partials.contact', ['question' => 'How can we get ahold of you?'])
          </div>
        </div>
      </div>

      <div class="row theme">
        <div class="col-md-12">
          <div class="column light-grey">
            @include ('questionnaires.partials.radios', [
              'question' => 'What is the timeframe you\'d like to implement your custom hosting?',
              'title' => 'Timeframe',
              'answers' => $timeframes,
              'type' => 'timeframe',
              'selected' => 0
            ])
          </div>
        </div>
      </div>

      <div class="row theme">
        <div class="col-md-12">
          <div class="column light-grey">
            @include ('questionnaires.partials.checkboxes', [
              'question' => 'What features do you need to support?',
              'title' => 'Features',
              'answers' => $customHostingFeatures,
              'type' => 'features'
            ])
          </div>
        </div>
      </div>

      <div class="row theme">
        <div class="col-md-12">
          <div class="column first light-grey">
            @include ('questionnaires.partials.additional')
          </div>
        </div>
      </div>

      <div class="row theme">
        <div class="col-md-12">
          <div class="column light-grey call-to-action">
            @include('questionnaires.partials.recaptcha', ['inputValue' => 'Submit Questionnaire'])
            <p v-show="errors.any('questionnaire')" class="text-danger">Questionnaire has errors.</p>
            {{ csrf_field() }}
          </div>
        </div>
      </div>
    </div>
  </form>
@endsection
