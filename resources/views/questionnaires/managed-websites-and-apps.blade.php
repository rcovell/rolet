@extends('layouts.app')

@section('title', 'Managed Websites & Apps Questionnaire')
@section('description', 'Managed websites and apps questionnare.')
@section('keywords', 'managed websites, managed apps, questionnaire')
@section('body_class', 'managed-websites-and-apps-questionnaire questionnaire')

@section('content')
  @component('components.hero', ['longPageTitle' => true])
    @slot('pageTitle')
      Managed Websites & Apps Questionnaire
    @endslot
    {{-- @slot('pageSubtitle')
      Lorem ipsum dolor sit amet, consectetur
    @endslot
    @slot('pageShortDescription')
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin velit ante, bibendum eu consectetur non, accumsan ut orci. Maecenas velit nibh, imperdiet.
    @endslot --}}
  @endcomponent

  {{ Breadcrumbs::render('websites-and-apps.managed.questionnaire') }}

  <form method="post" action="{{ route ('websites-and-apps.managed.questionnaire.submit') }}" data-vv-scope="questionnaire" id="questionnaire" ref="questionnaire">
    <div class="container">
      <div class="row theme">
        <div class="col-md-12">
          <div class="column first light-grey">
            @include ('questionnaires.partials.contact', ['question' => 'How can we get ahold of you?'])
          </div>
        </div>
      </div>

      <div>
        <div class="row theme">
          <div class="col-md-12">
            <div class="column light-grey">
              @include ('questionnaires.partials.radios', [
                'question' => 'What is the timeframe you\'d like to implement?',
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
                'question' => 'Select any of the below that describe what your looking for.',
                'title' => 'Managed Needs',
                'answers' => $managedWebsitesAndAppsNeeds,
                'type' => 'managed-websites-and-apps-needs'
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
    </div>
  </form>
@endsection
