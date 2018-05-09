@extends('layouts.app')

@section('title', 'Continuity')
@section('description', 'Losing email or need to migrate email accounts.  Ninja Mail tools can save, sync, or migrate your email.')
@section('keywords', 'lost email, continuity, migrate email, move email, sync email, email tools, ninja')
@section('body_class', 'continuity')

@section('content')
  @component('components.hero')
    @slot('pageTitle')
      Continuity
    @endslot
    @slot('pageSubtitle')
      You never see them.
    @endslot
    @slot('pageShortDescription')
      But the Ninjas are always there.
    @endslot
  @endcomponent

  {{ Breadcrumbs::render('email.continuity') }}

  <div class="container">
    <div class="row theme">
      <div class="col-md-12">
        <div class="column left first">
          <img src="{{ asset('images/ninja_3.png') }}" class="content-image ninja" />

          <h2 class="extend leader lower">
            #ninjamailtools
          </h2>

          <p class="leader">
            We thought the loss of email was such a big issue we built an entire product for it.
          </p>
          <p>
            Ninja Mail Tools is a collection of web applications (ninjas) that provides continuity, syncing, and email migration.  We use it for our cloud email services when we need to migrate clients.
          </p>
        </div>
      </div>
    </div>

    <div class="row theme">
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="column left">
          <h3 class="extend">Mail Server Down?</h3>
          <p>
            If your mail server goes down or is inaccessible due to connectivity failures like a reboot, internet outage or server crash, our Ninjas will save your email and until your mail server comes back online.
          </p>
        </div>
      </div>

      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="column middle">
          <h3 class="extend">Saved For Any Reason</h3>
          <p>
            <ul class="col-list ninja">
              <li>
                Heavy server load
              </li>
              <li>
                System reboot
              </li>
              <li>
                Internet outage
              </li>
              <li>
                Firewall load or failure
              </li>
            </ul>
          </p>
        </div>
      </div>

      <div class="col-md-4 col-sm-12">
        <div class="column right call-to-action">
          <h3>Enter the Dojo</h3>
          <p>
            <a href="http://www.ninjamailtools.com/" target="_blank" class="ninja">http://www.ninjamailtools.com/</a>
          </p>
        </div>
      </div>
    </div>

    <div class="row theme">
      <div class="col-md-6 col-sm-6">
        <div class="column left light-grey header">
          <h3 class="extend">
            Inside the Dojo
          </h3>
        </div>
      </div>
    </div>

    <div class="row theme">
      <div class="col-md-12">
        <div class="column left light-grey header-before">
          <p>
            Ninja Mail Tools focuses on three core areas.  The website provides much more detail about all the services provided.
          </p>
        </div>
      </div>
    </div>

    <div class="row theme">
      <div class="col-md-4 col-sm-4">
        <div class="column left no-padding-top">
          <h3 class="extend">
            Email Continuity
          </h3>
          <p>
            Protect incoming email from any type of server outage, whether it's an in-house server or hosted with a cloud email service. Protect an entire domain in minutes and create user email accounts for long outages.
          </p>

          {{-- <a href="{{ route('websites-and-apps.applications.questionnaire') }}" class="button rounded">TODO - Tell Us About Your Email</a> --}}
        </div>
      </div>

      <div class="col-md-4 col-sm-4">
        <div class="column middle no-padding-top">
          <h3 class="extend">
            Email Sync
          </h3>
          <p>
            Use the Sync Ninja to move email between email accounts and email folders on different servers. Easily schedule jobs to sync email between continuity accounts, cloud email services or your in-house servers.
          </p>
          {{-- <a href="{{ route('websites-and-apps.applications.questionnaire') }}" class="button rounded">TODO - Tell Us About Your Email</a> --}}
        </div>
      </div>

      <div class="col-md-4 col-sm-4">
        <div class="column right no-padding-top">
          <h3 class="extend">
            Email Migration
          </h3>
          <p>
            The task of moving email from one server to another can be daunting for a user, another hosting company or an IT Administrator. We've created simple tools to help you migrate email from anywhere to anywhere.
          </p>
          {{-- <a href="{{ route('websites-and-apps.applications.questionnaire') }}" class="button rounded">TODO - Tell Us About Your Email</a> --}}
        </div>
      </div>
    </div>
  </div>
@endsection
