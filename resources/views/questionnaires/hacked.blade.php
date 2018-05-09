@extends('layouts.app')

@section('title', 'Hacked Questionnaire')
@section('description', 'Hacked website or server questionnare.')
@section('keywords', 'hacked website, hacked server, questionnaire')
@section('body_class', 'hacked-questionnaire questionnaire')

@section('content')
  @component('components.hero')
    @slot('pageTitle')
      Hacked Questionnaire
    @endslot
    {{-- @slot('pageSubtitle')
      Lorem ipsum dolor sit amet, consectetur
    @endslot
    @slot('pageShortDescription')
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin velit ante, bibendum eu consectetur non, accumsan ut orci. Maecenas velit nibh, imperdiet.
    @endslot --}}
  @endcomponent

  {{ Breadcrumbs::render('websites-and-apps.hacked.questionnaire') }}

  <form method="post" action="{{ route ('websites-and-apps.hacked.questionnaire.submit') }}" data-vv-scope="questionnaire" id="questionnaire" ref="questionnaire">
    <div class="container">
      <div class="row theme">
        <div class="col-md-12">
          <div class="column first light-grey">
            @include ('questionnaires.partials.time', ['question' => 'I don\'t have time to answer your questionnaire, contact me ASAP.'])
          </div>
        </div>
      </div>

      <div class="row theme">
        <div class="col-md-12">
          <div class="column first light-grey">
            @include ('questionnaires.partials.contact', ['question' => 'How can we get ahold of you?', 'additionalInformation' => 'Provide a brief description of the hack; e.g. when it started, we can\'t do this or that, we noticed...'])
          </div>
        </div>
      </div>

      <div v-show="showQuestions">
        <div class="row theme">
          <div class="col-md-12">
            <div class="column light-grey">
              @include ('questionnaires.partials.radios', [
                'question' => 'Do you have backups of the website and/or database (Please change this to "Yes")?',
                'title' => 'First things first',
                'answers' => $backups,
                'type' => 'backups',
                'selected' => 1
              ])
            </div>
          </div>
        </div>

        <div class="row theme">
          <div class="col-md-12">
            <div class="column light-grey">
              @include ('questionnaires.partials.checkboxes', [
                'question' => 'Select any of the below that describe the effect of the hack.',
                'title' => 'Effects of Hack',
                'answers' => $effects,
                'type' => 'effects'
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
                'question' => 'Select any of the below that describe how your website is constructed.',
                'title' => 'Nuts & Bolts',
                'answers' => $nutsAndBolts,
                'type' => 'nutsandbolts'
              ])
            </div>
          </div>
        </div>

        <div class="row theme">
          <div class="col-md-12">
            <div class="column light-grey">
              @include ('questionnaires.partials.checkboxes', [
                'question' => 'Select any of the below that might also describe your situation.',
                'title' => 'Other',
                'answers' => $otherHacked,
                'type' => 'otherhacked'
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
