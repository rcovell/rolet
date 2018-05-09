@extends('layouts.app')

@section('title', 'Web Applications')
@section('description', 'Looking for an web application not a website? Let us take a look at what you want to do. Experts in building web based applications.')
@section('keywords', 'web applications, api development, restful, web services, soap, laravel, vue, php, full stack, c#, csharp, asp.net, development, coding')
@section('body_class', 'web-applications')

@section('page-styles')
  <link href="/css/vendor/prism.css" rel="stylesheet" />
@endsection

@section('page-js-files')
  <script defer src="/js/vendor/prism.js"></script>
@endsection

@section('content')
  @component('components.hero')
    @slot('pageTitle')
      Web Applications
    @endslot
    @slot('pageSubtitle')
      Beyond a Website
    @endslot
    @slot('pageShortDescription')
      Solving a Problem
    @endslot
  @endcomponent

  {{ Breadcrumbs::render('websites-and-apps.web-applications') }}

  @include('partials.message')

  <div class="container">
    <div class="row theme">
      <div class="col-md-12">
        <div class="column left first">
          <h2 class="extend">
            Not all applications are created equal
          </h2>

          <p class="leader">
            We've been developing web applications for over 20 years and didn't know it.
          </p>

          <p>
            Well, we did, but at the time the term wasn't coined.  Our first, which you never forget, is the system that controls Rolet.  It has been in constant development for over 20 years.  When we started, it was to solve a single problem and grew from there.  Now providing portals for Clients, Resellers and Administrators.
          </p>

          <p>
            It integrates with Sendmail, Cyrus, Bind, cPanel, PayPal and our Desktop billing application to name a few.  The supporting code is written in Vue.js, jQuery, PHP, Perl, .NET with sprinkles of shell scripting (bash and powershell).  Consumes many API and provides numerous web services to automate provisioning of client services.  It also integrates with a wide variety of databases from BerkelyDB to MySql and Microsoft SQL.  Now that's and App.
          </p>
        </div>
      </div>
    </div>

    <div class="row theme equalize">
      <div class="col-md-8">
        <div class="column left light-grey">
          <h2 class="extend">Web Service & API Integration</h2>
          <div class="row equalize">
            <div class="col-md-6 col-sm-6">
              <h3 class="no-extend">Eat</h3>
              <p>
                We've written numerous applications that consume services using SOAP and XML or REST with JSON from major companys such as Apple, Facebook, Flickr, Google, Twitter, Tumblr, Bullhorn, Moraware and the ROTC.
              </p>

              <p>
                Today's applications have access to data all over the Internet.  If their is a Web Service or Web API we can we can use it.
              </p>
            </div>

            <div class="col-md-6 col-sm-6">
              <h3 class="no-extend">Or be Eaten</h3>

              <p>
                Expose public or private web services for your application. Many of todays web based applications are single page applications (SPA) that constantly communicate with RESTFul services from the server.
              </p>

              <p>
                Even if your application is not an SPA its' functionality can be greatly enhanced by utilizing RESTFul services.
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4 desktop-only">
        <div class="column right code">
<pre><code class="language-php line-numbers">public void SyncJobs(bool checkForNewJobs = false)
{
  string sEvent = "Syncing existing Jobs in " + Constants.LocaleDescriptions(locale);
  EventLog.WriteEntry(Constants.sSource, sEvent, EventLogEntryType.Information, Constants.EL_INFORMATION);
  if (!morawareConn.Connected)
  {
    ConnectToMoraware();
  }

  if (morawareConn.Connected)
  {
    int numberSynced = 0;
</code></pre>
        </div>
      </div>
    </div>


    <div class="row theme equalize">
      <div class="col-md-6 col-sm-6">
        <div class="column middle">
          <h3 class="extend">The User Interface</h3>

          <p class="leader">
            Can make or break your application
          </p>

          <p>
            The UI of your application is taken into account from the beginning, not the end.  We focus on functionality and the human factors of your application for the end users, not the developers writing it.
          </p>
          <p>
            We integration of modern Javascript frameworks such as Vue.js to increase usabilty and performance and speed up development time.
          </p>
          <p>
            Adoption of internet standards for core scaffolding including Material Design, Bootstrap and FontAwesome standardize vital elments and take your user interface to the next level.
          </p>
        </div>
      </div>

      <div class="col-md-6 col-sm-6">
        <div class="column right">
          <h3 class="extend">Sometimes the cool stuff</h3>

          <p class="leader">
            Is never seen
          </p>

          <p>
            A lot of the cool stuff we do is behind password protected areas such as in Client / Admin Portals.  Or running as a daemon / service keeping information in sync, not getting the rightfully deserved attention they deserve.
          </p>

          <p>
            Solving a business problem or automating a process doesn't need to have a website.  Your portal can convey its' status or provide the ability to change how it runs. Applications come in many shapes and sizes.  Need to automate or simplify a process <a href="{{ route('websites-and-apps.web-applications.questionnaire') }}">let us know</a>.
          </p>

          <p class="centered-text">
            #daemonday
          </p>

          <p>
            BTW, if you haven't read <a href="http://daniel-suarez.com/" target="_blank">Daemon by Daniel Suarez</a>, you should.
          </p>
        </div>
      </div>
    </div>

    <div class="row theme equalize">
      <div class="col-md-6 col-sm-6">
        <div class="column left">
          <h3 class="extend">Technology Stack</h3>

          <p class="leader">
            Everyone is talking about their Stack
          </p>

          <p>
            Well for over 20 years we have been working on ours.  Developers running a hosting company!  Sounds like kids in a candy store (it is).  Having a slew of Linux and Windows servers has allowed us to be profient on both sides of the spectrum.  It also provided a deep understanding of how it was done before frameworks became cool.
          </p>

          <p>
            We utilize some of the latest technology for frontend and backend development, leveraging how this stuff worked before they existed.
          </p>
        </div>
      </div>

      <div class="col-md-6 col-sm-6">
        <div class="column right">
          <h3 class="extend">Agile Development</h3>

          <p class="leader">
            Faster to market, better results
          </p>

          <p>
            You as the client, are involved with the process from day one.  You see results in weeks (if not weekly) as compared to the old way of months with the big reveal.  Might not be the final product but you'll see constant progress and will be able to modify the direction if something is not as it should be.
          </p>

          <p>
            We operate in a client centric universe.  It's your application, we love making them and delivering beyond initial expectations.  It never turns out the way it was supposed to.
          </p>
        </div>
      </div>
    </div>

    <div class="row theme equalize">
      <div class="col-md-5 col-sm-6">
        <div class="column left light-grey dark header">
          <h3 class="extend centered-text">Code happy my friend</h3>
        </div>
      </div>
      <div class="col-md-5 col-md-offset-1 col-sm-6">
        <div class="column right light-grey dark header">
          <h3 class="extend centered-text">Code responsibly</h3>
        </div>
      </div>
    </div>

    <div class="row theme">
      <div class="col-md-12">
        <div class="column dark-grey call-to-action">
          <h2>Need a quote? Tell us about your project.</h2>

          <p>
            Take a minute to fill out our development project survey so that we can get to know you and your project better.
          </p>

          <a href="{{ route('websites-and-apps.web-applications.questionnaire') }}" class="button rounded">Tell Us About Your Project</a>
        </div>
      </div>
    </div>
  </div>
@endsection
