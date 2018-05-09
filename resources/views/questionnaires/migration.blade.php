@extends('layouts.app')

@section('title', 'Migration Questionnaire')
@section('description', 'Migration questionnare.')
@section('keywords', 'migration, questionnaire')
@section('body_class', 'migration-questionnaire questionnaire')

@section('content')
  @component('components.hero')
    @slot('pageTitle')
      Migration Questionnaire
    @endslot
    {{-- @slot('pageSubtitle')
      Lorem ipsum dolor sit amet, consectetur
    @endslot
    @slot('pageShortDescription')
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin velit ante, bibendum eu consectetur non, accumsan ut orci. Maecenas velit nibh, imperdiet.
    @endslot --}}
  @endcomponent

  {{ Breadcrumbs::render('hosting.migration.questionnaire') }}

  <form method="post" action="{{ route ('hosting.migration.questionnaire.submit') }}" data-vv-scope="questionnaire" id="questionnaire" ref="questionnaire">
    <div class="container">
      <div class="row theme">
        <div class="col-md-12">
          <div class="column first light-grey">
            @include ('questionnaires.partials.contact', [
              'question' => 'How can we get ahold of you?',
              'requiredWebsite' => true
            ])
          </div>
        </div>
      </div>

      <div class="row theme">
        <div class="col-md-12">
          <div class="column light-grey">
            @include ('questionnaires.partials.radios', [
              'question' => 'What is the timeframe you\'d like the migration to be completed?',
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
              'question' => 'Select any of the below that describe your hosting environment.',
              'title' => 'Hosting Environment',
              'answers' => $environment,
              'type' => 'environment'
            ])
          </div>
        </div>
      </div>

      <div class="row theme">
        <div class="col-md-12">
          <div class="column light-grey">
            @include ('questionnaires.partials.checkboxes', [
              'question' => 'Select any of the below that describe the internals of your setup.',
              'title' => 'Nuts & Bolts',
              'answers' => $nutsAndBolts,
              'type' => 'nutsandbolts'
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
