@extends('layouts.app')

@section('title', 'Custom Hosting')
@section('description', 'Looking for more than cPanel? Our business class hosting provides distributed services for every aspect of your web site or web application.')
@section('keywords', 'not cpanel, hosting, website hosting, custom hosting, apache, iis, nginx, node.js, tomcat, migration')
@section('body_class', 'custom-hosting')

@section('content')
  @component('components.hero')
    @slot('pageTitle')
      Custom Hosting
    @endslot
    @slot('pageSubtitle')
      Hosting + Dedicated Servers
    @endslot
    @slot('pageShortDescription')
      You get a dedicated support team with the ability to customize settings based on your needs with server class hardware, low client load, in a shared environment.
    @endslot
  @endcomponent

  {{ Breadcrumbs::render('hosting.custom') }}

  @include('partials.message')

  <div class="container">
    <div class="row theme">
      <div class="col-md-12">
        <div class="column left first">
          <h2 class="extend">
            This is where the good stuff is
          </h2>
          <p class="leader">
            Our Custom Hosting allows us to tailor a hosting solution specifically for your company.
          </p>
          <p>
            To be frank, when we started, cPanel was to rich for our blood. We setup our own web, database and email servers tailored for the needs of our clients. Developed our our own control panel for administration.  And there we are.
          </p>
          <p>
            This experience has provided us with the unique ability to offer specialized services that don't exist in most control panels or are only available from a <a href="{{ route ('hosting.cloud-servers') }}">Cloud Server</a> with the aid of server administrator to set it up. With Custom Hosting you get both, the good stuff and the server administrator. If we don't have it, just ask.
          </p>
        </div>
      </div>
    </div>

    <div class="row theme equalize">
      <div class="col-md-4 col-sm-6">
        <div class="column left white no-extend">
          <h2 class="extend">
            Not cPanel
          </h2>
          <p class="leader">
            If you just need hosting, then get just hosting?
          </p>
          <p>
            Why put your website or application on a server that does email, spam filtering, database and the dishes.
          </p>
          <p>
            Remove the overhead and put it on a server meant to do what you need, serve your website or application.
          </p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="column middle white no-extend">
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
            Web, database, email, filtering, and proxy servers.  Only one job per.
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="column right white no-extend">
          <h2 class="extend">
            Linux or Windows
          </h2>
          <p class="leader">
            Your not limited to just Linux with our Custom Hosting.
          </p>
          <p>
            Heck, you can have both.  Who says you have to tied to one or the other, we're not.
          </p>
          <p>
            With either operating system we can customize your webserver configuration and support custom applications that drive your business.
          </p>
        </div>
      </div>
    </div>

    <div class="row theme">
      <div class="col-md-6">
        <div class="column left light-grey header">
          <h2 class="extend">Hosting Your Way, Not Theirs</h2>
        </div>
      </div>
    </div>

    <div class="row theme equalize">
      <div class="col-md-4 col-sm-6">
        <div class="column left header-before">
          <h2 class="extend">
            Choice of Webserver
          </h2>
          <p class="leader">
            Apache, IIS, nginx, node.js, Tomcat?
          </p>
          <p>
            Choose the right one for your situation. They all have their roles within providing the services your website or application needs.
          </p>
          <p>
            Not up to us, it is up to you.
          </p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="column middle header-before">
          <h2 class="extend">
            Choice of Database
          </h2>
          <p class="leader">
            MySQL, $QL, PostgreSQL, Mongo?
          </p>
          <p>
            Heck you can throw Access into there if needed. ODBC, yea we support that too (we started on mSQL for the record).
          </p>
          <p>
            Need another one, let us know.
          </p>
        </div>
      </div>
      <div class="col-md-4 col-sm-12">
        <div class="column right header-before">
          <h2 class="extend">
            BYOC
          </h2>
          <p class="leader">
            Bring your own code
          </p>
          <p>
            It's your code and our job to support it.  Wide options of programming languages are available, from .NET to Classic ASP (yes classic), PHP, Ruby, JSP, Python, and Perl. Have something special?
          </p>
          <p>
            Odds are we support it, <a href="{{ route ('support') }}">chat with an engineer</a> to see if it is your lucky day.
          </p>
        </div>
      </div>
    </div>

    <div class="row theme equalize">
      <div class="col-md-3 col-sm-6">
        <div class="column left service">
          <h3 class="extend">
            Load Balance
          </h3>

          <p>
            Expecting high traffic? If you need to make your website scalable now or in the future we can offer solutions to support any type of load you might be expecting. Whether it is with servers located in our datacenter or using third party cloud servers.
          </p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="column middle service">
          <h3 class="extend">
            php-fpm
          </h3>
          <p>
            PHP the way it was meant to be run. It is faster with php-fpm and allows us to provide virtually any version of PHP that you could want. With the exception of PHP 4 (Not true, we do have it, but like the language the server is really, really old).
          </p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="column middle service">
          <h3 class="extend">
            Email
          </h3>
          <p>
            Not all companies need email as it might already be in the cloud. If you need it or want to migrate it, we have a solution. From straight up POP/IMAP to Google Apps or Office 365.
          </p>
          <p>
            Add <a href="{{ route('email.cloud') }}">email</a> to your custom hosting.
          </p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="column right service">
          <h3 class="extend">
            Migration
          </h3>
          <p>
            Not sure how to make the move? We can do it for you. Regardless of your current hosting platform we can tailor a solution to support your current services.
          </p>
          <p>
            Our <a href="{{ route('hosting.migration') }}">Migration</a> services offer a painless way to make a switch from your current provider.
          </p>
        </div>
      </div>
    </div>

    <div class="row theme equalize">
      <div class="col-md-4 col-xs-12">
    		<div class="column left light-grey">
  				<h2 class="extend">Feature Plan</h2>

          <div class="col-md-12 col-sm-6">
            <div class="price">
    					<div class="yearly">200</div>
    					<div class="you-save">(save $40)</div>
    					<div class="monthly">20</div>
    				</div>
          </div>

          <div class="col-md-12 col-sm-6">
            <div class="line-items highlights">
              <div class="line-item">
    						<div class="inner">
    							<div class="q"><i class="fa fa-hdd-o"></i>10 GB</div>
    							<div class="a">Dedicated Storage</div>
    						</div>
    					</div>
    					<div class="line-item">
    						<div class="inner">
    							<div class="q"><i class="fa fa-arrows-h"></i>100 GB</div>
    							<div class="a">Network Transfer</div>
    						</div>
    					</div>
    					<div class="line-item">
    						<div class="inner">
    							<div class="q"><i class="fa fa-database"></i>5</div>
    							<div class="a">Databases</div>
    						</div>
    					</div>
    				</div>
          </div>

          <div class="col-md-12 col-sm-6">
      			<div class="centered">
      				<a title="Activate Feature Plan Hosting" href="https://activate.rolet.com/service/pg/3ce5542259c9621ae6d8c1c85937aaad" class="button rounded">Activate</a>
      			</div>
          </div>

          <div class="col-md-12 col-sm-6">
            <div class="line-items condensed">
              <div class="line-item">
    						<div class="inner">
    							<div class="q"><i class="fa fa-check"></i></div>
    							<div class="a">Linux</div>
    						</div>
    					</div>

    					<div class="line-item">
    						<div class="inner">
    							<div class="q"><i class="fa fa-check"></i></div>
    							<div class="a">SSH Access</div>
    						</div>
    					</div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-xs-12">
    		<div class="column middle light-blue">
  				<h2 class="extend">Professional Plan</h2>

          <div class="col-md-12 col-sm-6">
            <div class="price">
    					<div class="yearly">400</div>
    					<div class="you-save">(save $80)</div>
    					<div class="monthly">40</div>
    				</div>
          </div>

          <div class="col-md-12 col-sm-6">
            <div class="line-items highlights">
              <div class="line-item">
    						<div class="inner">
    							<div class="q"><i class="fa fa-hdd-o"></i>25 GB</div>
    							<div class="a">Dedicated Storage</div>
    						</div>
    					</div>
    					<div class="line-item">
    						<div class="inner">
    							<div class="q"><i class="fa fa-arrows-h"></i>250 GB</div>
    							<div class="a">Network Transfer</div>
    						</div>
    					</div>
    					<div class="line-item">
    						<div class="inner">
    							<div class="q"><i class="fa fa-database"></i>10</div>
    							<div class="a">Databases</div>
    						</div>
    					</div>
    				</div>
          </div>

          <div class="col-md-12 col-sm-6">
            <div class="centered">
      				<a title="Activate Professional Plan Hosting" href="https://activate.rolet.com/service/pg/2093b1cc8bfc3b89cfe0c08fc681b387" class="button rounded popular">Activate</a>
      			</div>
          </div>

          <div class="col-md-12 col-sm-6">
            <div class="line-items condensed">
              <div class="line-item">
    						<div class="inner">
    							<div class="q"><i class="fa fa-check"></i></div>
    							<div class="a">Linux</div>
    						</div>
    					</div>

    					<div class="line-item">
    						<div class="inner">
    							<div class="q"><i class="fa fa-check"></i></div>
    							<div class="a">Dedicated IP</div>
    						</div>
    					</div>

    					<div class="line-item">
    						<div class="inner">
    							<div class="q"><i class="fa fa-check"></i></div>
    							<div class="a">SSH Access</div>
    						</div>
    					</div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-xs-12">
    		<div class="column right light-grey">
  				<h2 class="extend">Business Plan</h2>

          <div class="col-md-12 col-sm-6">
            <div class="price">
    					<div class="yearly">600</div>
    					<div class="you-save">(save $120)</div>
    					<div class="monthly">60</div>
    				</div>
          </div>

          <div class="col-md-12 col-sm-6">
            <div class="line-items highlights">
              <div class="line-item">
    						<div class="inner">
    							<div class="q"><i class="fa fa-hdd-o"></i>50 GB</div>
    							<div class="a">Dedicated Storage</div>
    						</div>
    					</div>
    					<div class="line-item">
    						<div class="inner">
    							<div class="q"><i class="fa fa-arrows-h"></i>500 GB</div>
    							<div class="a">Network Transfer</div>
    						</div>
    					</div>
    					<div class="line-item">
    						<div class="inner">
    							<div class="q"><i class="fa fa-database"></i>20</div>
    							<div class="a">Databases</div>
    						</div>
    					</div>
    				</div>
          </div>

          <div class="col-md-12 col-sm-6">
            <div class="centered">
      				<a title="Activate Business Plan Hosting" href="https://activate.rolet.com/service/pg/dc88c4cde153f783a7db065cf58d6ca1" class="button rounded">Activate</a>
      			</div>
          </div>

          <div class="col-md-12 col-sm-6">
            <div class="line-items condensed">
              <div class="line-item">
                <div class="inner">
                  <div class="q"><i class="fa fa-check"></i></div>
                  <div class="a">Linux</div>
                </div>
              </div>

              <div class="line-item">
                <div class="inner">
                  <div class="q"><i class="fa fa-check"></i></div>
                  <div class="a">Dedicated IP</div>
                </div>
              </div>

              <div class="line-item">
                <div class="inner">
                  <div class="q"><i class="fa fa-check"></i></div>
                  <div class="a">SSH Access</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- <div class="row-spacer">
      &nbsp;
    </div> --}}

    <div class="row theme">
      <div class="col-md-12">
        <div class="column dark-grey call-to-action">
          <h2>Need Custom Hosting?</h2>

          <p>
            Take a minute to fill out our custom hosting questionnaire so that we can identify your needs.
          </p>

          <a href="{{ route ('hosting.custom.questionnaire') }}" class="button rounded">Tell us what your looking for.</a>
        </div>
      </div>
    </div>
  </div>
@endsection
