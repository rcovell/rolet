@section('title', 'Hybrid')

@section('body_class', 'hybrid')

@extends('layouts.app')

@section('content')
  @component('components.hero')
    @slot('pageTitle')
      Hybrid
    @endslot
    {{-- @slot('pageSubtitle')
      Lorem ipsum dolor sit amet, consectetur
    @endslot
    @slot('pageShortDescription')
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin velit ante, bibendum eu consectetur non, accumsan ut orci. Maecenas velit nibh, imperdiet.
    @endslot --}}
  @endcomponent

  {{ Breadcrumbs::render('email.hybrid') }}

  <div class="container">
    <div class="row theme">
      <div class="col-md-12">
        <div class="column left first">
          <h2 class="extend">
            Integrate into Cloud Email
          </h2>
          <p class="leader">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin velit ante, bibendum eu consectetur non, accumsan ut orci. Maecenas velit nibh, imperdiet quis velit et, molestie tempus sem. Vivamus sit amet pulvinar urna, ac gravida felis.
          </p>
          <p>
            Donec eu leo nibh. Donec fringilla vulputate nulla, ac finibus neque cursus nec. Pellentesque eu eros quis ante porta imperdiet viverra vitae enim. Duis ut dui sed nulla viverra dignissim.
          </p>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <p>
          Don't want to pay for Office 365 or GApps for everyone in the company?
        </p>

        <p>
          Everyone in my company doesn't need Office 365 or GApps, only the management team.
        </p>

        <p>
          Most companies will tell you that it is all or nothing when selecting an email solution.
        </p>

        <p>
          We will tell you that it is not.
        </p>

        <p>
          Save a substantial amount by choosing our hybrid email solution.
        </p>

        <p>
          Target those individuals that need Office 365 or GApps and setup everyone else with IMAP or POP3 accounts.
        </p>
      </div>
    </div>

    <div class="row theme">
      <div class="col-md-12">
        <div class="column dark-grey call-to-action">
          <h2>Wanna send Email? Tell us what your looking for.</h2>

          <p>
            Take a minute to fill out our transactional email survey so that we can identify your needs.
          </p>

          <a href="{{ route('websites-and-apps.applications.questionnaire') }}" class="button rounded">TODO - Tell Us About Your Email</a>
        </div>
      </div>
    </div>
  </div>
@endsection
