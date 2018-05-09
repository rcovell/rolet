@extends('layouts.app')

@section('title', 'Managed')
@section('description', 'Need help managing your website or application? We can handle content updates or security updates for your CMS.')
@section('keywords', 'cms updates, content updates, broken website, performance issues, migration, website backup, website recovery')
@section('body_class', 'managed')

@section('content')
  @component('components.hero')
    @slot('pageTitle')
      Managed
    @endslot
    @slot('pageSubtitle')
      Maintain
    @endslot
    @slot('pageShortDescription')
      Contain and security
    @endslot
  @endcomponent

  {{ Breadcrumbs::render('websites-and-apps.managed') }}

  @include('partials.message')

  <div class="container">
    <div class="row theme">
      <div class="col-md-12">
        <div class="column left first">
          <h2 class="extend">
            No Shirt, No Shoes, No Service
          </h2>

          <p class="leader">
            "No Customers" if you don't maintain your website.
          </p>

          <p>
            Your website or web application is only as good as you make it. If you don't Keep your content current or your CMS patched.
          </p>

          {{-- <h3>Q: Who wants to eat an apple that is not ripe?</h3>

          <p>
            Keep your content stagnet? Eat a bad apple you might need our <a href="{{ route('websites-and-apps.hacked') }}">hacked service</a>.  We both don't want this.
          </p>

          <blockquote>
           A: Nobody
          </blockquote> --}}
        </div>
      </div>
    </div>

    <div class="row theme equalize">
      <div class="col-md-6 col-sm-6 service">
        <h3 class="extend">CMS Updates</h3>
        <p>
          Keep security up to date.
        </p>
        <p>
          Hey, it happens. Security issues occur with most CMS's. We'll handle the updates so you don't need our <a href="{{ route('websites-and-apps.hacked') }}">hacked service</a>.
        </p>
      </div>

      <div class="col-md-6 col-sm-6 service">
        <h3 class="extend">Content Updates</h3>
        <p>
          Keep content up to date.
        </p>
        <p>
          Have something new to say?  Need an image replaced? Whether it is a one time or a recurring update we can handle it for you.
        </p>
      </div>

      <div class="col-md-6 col-sm-6 service">
        <h3 class="extend">Something Broken</h3>
        <p>
          It was working, really it was.
        </p>
        <p>
          We also bet that nothing changed. There could be numerous reasons for this. Let us take a look at it and get you back up and running.
        </p>
      </div>

      <div class="col-md-6 col-sm-6 service">
        <h3 class="extend">Performance Issues</h3>
        <p>
          Something running a bit slow?
        </p>
        <p>
          Let us look under the hood. As developers that run a data center we can identify were the bottleneck is and make that baby hum.
        </p>
      </div>

      <div class="col-md-6 col-sm-6 service">
        <h3 class="extend">Migration</h3>
        <p class="leader">
          #freemysite
        </p>
        <p>
          Need to move to a new host?  Whether it is to {{ config('app.name') }} or another host we can make the move for you. Take a look at our <a href="{{ route('hosting.migration') }}">migration</a> service.
        </p>
      </div>

      <div class="col-md-6 col-sm-6 service">
        <h3 class="extend">Professional Services</h3>
        <p>
          Take advantage of our expertise for any situation. Sometimes you might need a few extra tricks up your sleeve.
        </p>
      </div>

      <div class="col-md-6 col-sm-6 service">
        <h3 class="extend">Backup and Recovery</h3>
        <p>
          You are backing up your website, aren't you?
        </p>
        <p>
          Protect your website or application with our backup services that will get up and running quickly in the event of accidental data loss.
        </p>
      </div>

      <div class="col-md-6 col-sm-6 service">
        <h3 class="extend">Monitoring, Reporting & SLA</h3>
        <p>
          Take advantage of powerful monitoring and reporting tools to track your website or application for performance, issues, and uptime.
        </p>
      </div>

      {{-- <div class="col-md-6 col-sm-6 service">
        <h3 class="extend">Storage</h3>
        <p>
          SAN, dedicated NAS or local storage options are available. You'll be able to take advantage of new storage solutions as they're implemented.
        </p>
      </div>

      <div class="col-md-6 col-sm-6 service">
        <h3 class="extend">Databases</h3>
        <p>
          Choose from dedicated or shared database servers. We'll handle the licensing, installation, optimization and backup plans.
        </p>
      </div>

      <div class="col-md-6 col-sm-6 service">
        <h3 class="extend">Load Balancing & HA</h3>
        <p>
          Split the load between multiple servers for mission critical applications and offer High Availability (HA). Enterprise grade Layer 4-7 load balancing.
        </p>
      </div>

      <div class="col-md-6 col-sm-6 service">
        <h3 class="extend">Data Backup and Recovery</h3>
        <p>
          Protect your data and minimize downtime with our data backup services that will get up and running quickly in the event of accidental data loss.
        </p>
      </div>

      <div class="col-md-6 col-sm-6 service">
        <h3 class="extend">Server Upgrades</h3>
        <p>
          Keep your servers secure and up to date with the latest security patches and upgrades.
        </p>
      </div> --}}
    </div>

    <div class="row theme">
      <div class="col-md-12">
        <div class="column dark-grey call-to-action">
          <h2>Need a quote?</h2>

          <p>
            Take a minute to fill out our managed questionnaire so that we can get to know you and your project better.
          </p>

          <a href="{{ route('websites-and-apps.managed.questionnaire') }}" class="button rounded">Tell Us About Your Needs</a>
        </div>
      </div>
    </div>
  </div>
@endsection
