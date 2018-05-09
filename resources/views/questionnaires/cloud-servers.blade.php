@extends('layouts.app')

@section('title', 'Cloud Servers Questionnaire')
@section('description', 'Cloud servers questionnaire.')
@section('keywords', 'cloud server, questionnaire')
@section('body_class', 'cloud-servers-questionnaire questionnaire')

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

  {{ Breadcrumbs::render('hosting.cloud-servers.questionnaire') }}

  <form method="post" action="{{ route ('hosting.cloud-servers.questionnaire.submit') }}" data-vv-scope="questionnaire" id="questionnaire" ref="questionnaire">
    <div class="container">
      <div class="row theme">
        <div class="col-md-12">
          <div class="column first light-grey">
            @include ('questionnaires.partials.show-questions', [
              'title' => 'Know Server Specs',
              'question' => 'Do you know what your looking for, or do you want us to contact you?',
              'answers' => $knowCloudServerTechology,
              'type' => 'know-server-specs'
            ])
          </div>
        </div>
      </div>

      <div class="row theme">
        <div class="col-md-12">
          <div class="column first light-grey">
            @include ('questionnaires.partials.contact', ['question' => 'How can we get ahold of you?'])
          </div>
        </div>
      </div>

      <div v-show="showQuestions">
        <div class="row theme">
          <div class="col-md-12">
            <div class="column light-grey">
              @include ('questionnaires.partials.radios', [
                'question' => 'What is the timeframe you\'d like to implement cloud hosting?',
                'title' => 'Timeframe',
                'answers' => $timeframes,
                'type' => 'timeframe',
                'selected' => 0
              ])
            </div>
          </div>
        </div>

        <div class="row theme">
          <div class="col-md-4">
            <div class="column left light-grey">
              @include ('questionnaires.partials.dropdown', [
                'question' => 'What operating system are you looking for?',
                'title' => 'Operating System',
                'answers' => $operatingSystems,
                'type' => 'operatingsystems',
                'selected' => 0
              ])
            </div>
          </div>

          <div class="col-md-4">
            <div class="column middle light-grey">
              @include ('questionnaires.partials.dropdown', [
                'question' => 'Preference on the Hypervisor for your server?',
                'title' => 'Hypervisor',
                'answers' => $hyperVisors,
                'type' => 'hypervisor',
                'selected' => 0
              ])
            </div>
          </div>

          <div class="col-md-4">
            <div class="column right light-grey">
              @include ('questionnaires.partials.radios', [
                'question' => 'Interested in using Proxmox to manage your server?',
                'title' => 'Proxmox VE',
                'answers' => $proxmox,
                'type' => 'proxmox',
                'selected' => 1
              ])
            </div>
          </div>
        </div>

        <div class="row theme">
          <div class="col-md-6">
            <div class="column left light-grey">
              @include ('questionnaires.partials.dropdown', [
                'question' => 'How much memory are you looking for?',
                'title' => 'Memory',
                'answers' => $memory,
                'type' => 'memory',
                'selected' => 0
              ])
            </div>
          </div>

          <div class="col-md-6">
            <div class="column right light-grey">
              @include ('questionnaires.partials.dropdown', [
                'question' => 'How much storage are you looking for?',
                'title' => 'Storage',
                'answers' => $storage,
                'type' => 'storage',
                'selected' => 0
              ])
            </div>
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
