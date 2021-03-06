@extends('layouts.app')

@section('title', 'Website Questionnaire')
@section('description', 'Website questionnare.')
@section('keywords', 'website, questionnaire')
@section('body_class', 'website-questionnaire questionnaire')

@section('content')
  @component('components.hero')
    @slot('pageTitle')
      Website Questionnaire
    @endslot
    {{-- @slot('pageSubtitle')
      Lorem ipsum dolor sit amet, consectetur
    @endslot
    @slot('pageShortDescription')
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin velit ante, bibendum eu consectetur non, accumsan ut orci. Maecenas velit nibh, imperdiet.
    @endslot --}}
  @endcomponent

  {{ Breadcrumbs::render('websites-and-apps.websites.questionnaire') }}

  <form method="post" action="{{ route ('websites-and-apps.websites.questionnaire.submit') }}" data-vv-scope="questionnaire" id="questionnaire" ref="questionnaire">
    <div class="container">
      <div class="row theme">
        <div class="col-md-12">
          <div class="column first light-grey">
            @include ('questionnaires.partials.contact', ['question' => 'How can we get ahold of you?', 'additionalInformation' => 'Provide a brief description of your project and list any features you\'d like to see.'])
          </div>
        </div>
      </div>

      <div>
        <div class="row theme">
          <div class="col-md-12">
            <div class="column light-grey">
              @include ('questionnaires.partials.radios', [
                'question' => 'What is the timeframe you\'d like this website to be completed by?',
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
              @include ('questionnaires.partials.radios', [
                'question' => 'Do you have content ready for this website? (written copy, pictures, etc.)?',
                'title' => 'Content',
                'answers' => $content,
                'type' => 'content',
                'selected' => 0
              ])
            </div>
          </div>
        </div>

        <div class="row theme">
          <div class="col-md-12">
            <div class="column light-grey">
              @include ('questionnaires.partials.radios', [
                'question' => 'Knowing the budget you\'ve dedicated to this website allows us to identify if we can meet all of your needs and expectations.',
                'title' => 'Budget',
                'answers' => $budget,
                'type' => 'budget',
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
    </div>
  </form>
@endsection
