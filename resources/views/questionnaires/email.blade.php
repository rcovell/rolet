@section('title', 'Cloud Servers Questionnaire')

@section('body_class', 'cloud-servers-questionnaire questionnaire')

@extends('layouts.app')

@section('content')
  @component('components.hero', ['longPageTitle' => true])
    @slot('pageTitle')
      Cloud Servers Questionnaire
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

  <form method="post" action="{{ route ('email.cloud.questionnaire.submit') }}" data-vv-scope="questionnaire" id="questionnaire">
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
            @include ('questionnaires.partials.timeframe', ['question' => 'What is the timeframe you\'d like to implement your cloud email?'])
          </div>
        </div>
      </div>

      <div class="row theme">
        <div class="col-md-12">
          <div class="column light-grey">
            @include ('questionnaires.partials.domain-name', ['question' => 'What is the primary domain will you be using to send email?'])
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
          <div class="column first light-grey">
            @include ('questionnaires.partials.additional')
          </div>
        </div>
      </div>

      <div class="row theme">
        <div class="col-md-12">
          <div class="column light-grey call-to-action">
            <input type="submit" name="submit" value="Submit Questionnaire" class="button rounded" v-on:click="validateQuestionnaire">
            <p v-show="errors.any('questionnaire')" class="text-danger">Questionnaire has errors.</p>
            {{ csrf_field() }}
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
    </div>
  </form>
@endsection
