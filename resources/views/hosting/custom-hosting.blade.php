@section('title', ' | Custom Hosting')

@section('body_class', 'custom-hosting')

@extends('layouts.app')

@section('content')
  @component('components.hero')
    @slot('pageTitle')
      Custom Hosting
    @endslot
    @slot('pageSubtitle')
      Managed Hosting + Dedicated Servers
    @endslot
    @slot('pageShortDescription')
      You get a dedicated support team with the ability to customize your settings based on specific needs and server class hardware with a low client load, but in a shared environment to save you money.
    @endslot
  @endcomponent

  {{ Breadcrumbs::render('hosting.custom-hosting') }}

  <div class="container">
    <div class="row theme">
      <div class="col-md-12">
        <div class="column left first">
          <h2 class="extend">
            This is where the good stuff is
          </h2>
          <p class="leader">
            Our Custom Hosting solution allows us to tailor a hosting plan specifically for your company.
          </p>
          <p>
            To be frank, when we started in Kansas City, cPanel was to rich for our blood. We setup our own web, database and email servers tailored for the needs of our clients. This experience has provided us with the unique ability to offer specialized services that don't exist in most control panels or are only available from a <a href="{{ route ('hosting.cloud-servers') }}">Cloud Server</a> with the aid of server administrator to set it up. With Custom Hosting you get both, the good stuff and the server administrator. If we don't have it, we can, just ask.
          </p>
        </div>
      </div>
    </div>

    <div class="row theme equalize">
      <div class="col-md-6">
        <div class="column left light-grey">
          <h2 class="extend">
            The Opposite of cPanel
          </h2>
          <p class="leader">
            If you just need hosting, then get just hosting?
          </p>
          <p>
            Not sure how to make the move? We can do it for you. Regardless of your current hosting platform we can tailor a solution to support your current services.
          </p>
          <p>
            Our Migration services offer a painless way to make a switch from your current provider.
          </p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="column left">
          <h2 class="extend">
            Distributed
          </h2>
          <p class="leader">
            Dedicated servers for each core component.
          </p>
          <p>
            While cPanel has everything under one roof, our custom hosting provides dedicated servers for each core component of your website or application.
          </p>
          <p>
            Not sure how to make the move? We can do it for you. Regardless of your current hosting platform we can tailor a solution to support your current services.
          </p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="column left">
          <h2 class="extend">
            Linux or Windows
          </h2>
          <p class="leader">
            Your not limited to just Linux with our Custom Hosting.
          </p>
          <p>
            Heck, you can have both.
          </p>
          <p>
            With either operating system we can customize your webserver configuration and support custom applications that drive your business.
          </p>
        </div>
      </div>
    </div>

    <div class="row theme equalize">
      <div class="col-md-3">
        <div class="column service">
          <h3 class="extend">
            Load Balance
          </h3>

          <p>
            Expecting high traffic? If you need to make your website scalable now or in the future we can offer solutions to support any type of load you might be expecting. Whether it is with servers located in our datacenter or using third party cloud servers.
          </p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="column service">
          <h3 class="extend">
            php-fpm
          </h3>

          <p>
            PHP the way it was meant to be run. It is faster with php-fpm and allows us to provide virtually any version of PHP that you could want. With the exception of PHP 4 (Not true, we do have it, but like the language the server is really, really old).
          </p>

          <div class="learn-more-container">
            <a href="" class="learn-more">Learn More</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="column service">
          <h3 class="extend">
            Email
          </h3>
          <p>
            Not all companies need email as it might already be in the cloud. If you need it or want to migrate it, we have a solution. From straight up POP/IMAP to Google Apps or Office 365.
          </p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="column service">
          <h3 class="extend">
            Migration
          </h3>
          <p>
            Not sure how to make the move? We can do it for you. Regardless of your current hosting platform we can tailor a solution to support your current services.
          </p>
          <p>
            Our Migration services offer a painless way to make a switch from your current provider.
          </p>
        </div>
      </div>
    </div>
  </div>
@endsection
