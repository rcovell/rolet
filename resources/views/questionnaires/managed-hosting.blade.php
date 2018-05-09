@extends('layouts.app')

@section('title', 'Managed Hosting Questionnaire')
@section('description', 'Managed hosting questionnare.')
@section('keywords', 'managed hosting, questionnaire')
@section('body_class', 'managed-hosting-questionnaire questionnaire')

@section('content')
  @component('components.hero', ['longPageTitle' => true])
    @slot('pageTitle')
      Managed Hosting Questionnaire
    @endslot
    {{-- @slot('pageSubtitle')
      Lorem ipsum dolor sit amet, consectetur
    @endslot
    @slot('pageShortDescription')
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin velit ante, bibendum eu consectetur non, accumsan ut orci. Maecenas velit nibh, imperdiet.
    @endslot --}}
  @endcomponent

  {{ Breadcrumbs::render('hosting.managed.questionnaire') }}

  <form method="post" action="{{ route ('hosting.managed.questionnaire.submit') }}" data-vv-scope="questionnaire" id="questionnaire" ref="questionnaire">
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
                'question' => 'What is the timeframe you\'d like to implement managed hosting?',
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
                'title' => 'Managed Hosting Needs',
                'answers' => $managedHostingNeeds,
                'type' => 'managed-hosting-needs'
              ])
            </div>
          </div>
        </div>

        {{-- <div class="row theme">
          <div class="col-md-12">
            <div class="column light-grey">
              @include ('questionnaires.partials.content', ['question' => 'Do you have content ready for this website? (written copy, pictures, etc.)'])
            </div>
          </div>
        </div> --}}

        {{-- <div class="row theme">
          <div class="col-md-12">
            <div class="column light-grey">
              @include ('questionnaires.partials.budget', ['question' => 'Knowing the budget you\'ve dedicated to this website allows us to identify if we can meet all of your needs and expectations.'])
            </div>
          </div>
        </div> --}}

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
