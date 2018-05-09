@extends('layouts.app')

@section('title', 'Managed')
@section('description', 'Need help managing your web server, cloud server or dedicated hardware? Over 20 years data center experience managing networks, Linux and Windows servers.')
@section('keywords', 'linux, windows, data center, networks, backup, recovery, monitoring, upgrades, performance')
@section('body_class', 'managed')

@section('content')
  @component('components.hero')
    @slot('pageTitle')
      Managed
    @endslot
    @slot('pageSubtitle')
      Enjoy complete control with expert support.
    @endslot
    @slot('pageShortDescription')
      Take care of the big things like your clients.
    @endslot
  @endcomponent

  {{ Breadcrumbs::render('hosting.managed') }}

  @include('partials.message')

  <div class="container">
    <div class="row theme">
      <div class="col-md-12">
        <div class="column left first">
          <p>
            Rolet's Managed Hosting Services is designed to help customers reduce cost and avoid hassles by providing day-to-day management of your hosted infrastructure. By utilizing our experts, you can focus your IT resources on their core business and be confident in the dedicated support we provide to maintain your hosted infrastructure.
          </p>
        </div>
      </div>
    </div>

    <div class="row theme equalize">
      <div class="col-md-6 col-sm-6 service">
        <h3 class="extend">Security</h3>
        <p>
          Choose from shared firewall and intrusion detection/prevention (IDS/IPS) to comprehensive compliance services to meet your specific needs.
        </p>
      </div>

      <div class="col-md-6 col-sm-6 service">
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
        <h3 class="extend">Monitoring, Reporting & SLA</h3>
        <p>
          Take advantage of powerful monitoring and reporting tools to track your servers for performance, issues, and uptime.
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
      </div>

      <div class="col-md-6 col-sm-6 service">
        <h3 class="extend">Professional Services</h3>
        <p>
          Take advantage of our expertise for any hosting situation. Sometimes you might need a few extra tricks up your sleeve.
        </p>
      </div>
    </div>

    <div class="row theme">
      <div class="col-md-12">
        <div class="column dark-grey call-to-action">
          <h2>Need a quote?</h2>

          <p>
            Take a minute to fill out our managed hosting questionnaire so that we can get to know you and your project better.
          </p>

          <a href="{{ route('hosting.managed.questionnaire') }}" class="button rounded">Tell Us About Your Needs</a>
        </div>
      </div>
    </div>
  </div>
@endsection
