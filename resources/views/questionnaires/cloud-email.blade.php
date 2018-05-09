@extends('layouts.app')

@section('title', 'Cloud Email Questionnaire')
@section('description', 'Cloud email questionnaire.')
@section('keywords', 'cloud email, questionnaire')
@section('body_class', 'cloud-email-questionnaire questionnaire')

@section('content')
  @component('components.hero')
    @slot('pageTitle')
      Cloud Email Questionnaire
    @endslot
    {{-- @slot('pageSubtitle')
      Lorem ipsum dolor sit amet, consectetur
    @endslot
    @slot('pageShortDescription')
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin velit ante, bibendum eu consectetur non, accumsan ut orci. Maecenas velit nibh, imperdiet.
    @endslot --}}
  @endcomponent

  {{ Breadcrumbs::render('email.cloud.questionnaire') }}

  @include('partials.message')

  <form method="post" action="{{ route ('email.cloud.questionnaire.submit') }}" data-vv-scope="questionnaire" id="questionnaire" ref="questionnaire">
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
            {{-- @include ('questionnaires.partials.timeframe', ['question' => 'What is the timeframe you\'d like to implement your cloud email?']) --}}
            @include ('questionnaires.partials.radios', [
              'question' => 'What is the timeframe you\'d like to implement your cloud email?',
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
            @include ('questionnaires.partials.domain', ['question' => 'What is the primary domain will you be using to send email?'])
          </div>
        </div>
      </div>

      <div class="row theme">
        <div class="col-md-12">
          <div class="column light-grey">
            @include ('questionnaires.partials.email', ['question' => 'What email services are you interested in?'])
          </div>
        </div>
      </div>

      <div class="row theme">
        <div class="col-md-12">
          <div class="column light-grey">
            @include ('questionnaires.partials.radios', [
              'question' => 'What is the timeframe you\'d like this website to be completed by?',
              'title' => 'Mailbox Size',
              'answers' => $mailboxSizes,
              'type' => 'average-mailbox-size',
              'selected' => 0
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
