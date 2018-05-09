@extends('layouts.app')

@section('title', 'Hosting')
@section('description', 'Business class hosting. From cPanel and custom website hosting to cloud servers.')
@section('keywords', 'cpanel, hosting, website hosting, custom hosting, cloud servers, control panel, migration')
@section('body_class', 'hosting')

@section('content')
  @component('components.hero')
    @slot('pageTitle')
      Hosting
    @endslot
    @slot('pageSubtitle')
      Expect more from your hosting company.
    @endslot
    @slot('pageShortDescription')
      It's your business, why trust to someone who doesn't make it theirs?
    @endslot
  @endcomponent

  {{ Breadcrumbs::render('hosting') }}

  <div class="container">
    <div class="row theme">
      <div class="col-md-12">
        <div class="column left first">
          <h2 class="extend">
            Downtown Kansas City Data Center
          </h2>
          <p class="leader">
            Over 20 years of experience in hosting we have learned how to do it right.
          </p>
          <p>
            Not only for companies, but for developers too. We are developers by nature and crafted our hosting solutions to support today's technology and be flexible enough embrace tomorrows.
          </p>
          <p>
            Our downtown Kansas City location is a Tier II data center with over 11000 square feet of floor space. Oak Tower is one of the key Fiber transit buildings for Kansas City. Originally, the building housed the AT&T Central Office for the entire Kansas City Metro area. Today, this building is home to Verizon, Zayo, Cogent Communications and several other key transit and telecommunications infrastructure providers.
          </p>
        </div>
      </div>
    </div>

    <div class="row theme">
      <div class="col-md-6">
        <div class="column left light-blue header">
  				<h2 class="extend">Solutions</h2>
    		</div>
     	</div>
    </div>

    <div class="row equalize">
      <div class="col-md-4 col-sm-4 col-xs-12 service header-before">
        <h3 class="extend"><a href="{{ route('hosting.cpanel') }}">cPanel</a></h3>
        <p>
          The worlds most widely used hosting control panel.
        </p>
        <p>
          They have it, so do we.
        </p>
        <p>
          If your used to having everything in one place, this is for you.
        </p>
      </div>

      <div class="col-md-4 col-sm-4 col-xs-12 service header-before">
        <h3 class="extend"><a href="{{ route('hosting.custom') }}>">Custom</a></h3>
        <p>
          cPanel not for you?  Have hosting requirements that provide expertise to setup and maintain?
        </p>
        <p>
          Just let us know what your looking for and we'll get it up and running.
        </p>
      </div>

      <div class="col-md-4 col-sm-4 col-xs-12 service header-before">
        <h3 class="extend"><a href="{{ route('hosting.cloud-servers') }}">Cloud Servers</a></h3>
        <p>
          Pick your flavor and customize it to your specifications.
        </p>
        <p>
          Need help with that?  Our team of experts can get it setup for you.
        </p>
      </div>

      {{-- <div class="col-md-3 col-xs-6 service header-before">
        <h3 class="extend"><a href="{{ route('hosting.colocated') }}">Colocated</a></h3>
        <p>
          Have your own servers that need to be online 24x7x365?
        </p>
        <p>
          Place them in our data center and rest assured when the power grid fails or that storm comes.
        </p>
      </div> --}}
    </div>

    {{-- <div class="row-spacer">
      &nbsp;
    </div> --}}

    <div class="row theme equalize">
      <div class="col-md-6 col-md-offset-0 col-sm-8 col-sm-offset-2">
        <div class="column left white no-extend">
          <h3 class="extend">Tier 2 data center</h3>

          <p class="leader">
            Smack dab in the middle of the U.S.
          </p>

          <ul class="col-list">
            <li>
              Multiple On-net carriers
            </li>
            <li>
              N+1 cooling
            </li>
            <li>
              11,000 square feet of Tier 2 data center
            </li>
            <li>
              One of the best peered private colocation centers in Kansas City
            </li>
            <li>
              A / B network redundancy design
            </li>
            <li>
              MeetMe cross-connects available between carriers
            </li>
            <li>
              24x7x365 helpdesk and remote hands
            </li>
          </ul>
        </div>
      </div>

      <div class="col-md-3 col-sm-6">
        <div class="column middle white no-extend">
          <h3 class="extend">Migration</h3>
          <p class="leader">
            We can do it for you.
          </p>
          <p>
            Regardless of your current services we can map out a migration path to integrate you into comparable, or better, Rolet services.
          </p>
          <p>
            Our <a href="{{ route ('hosting.migration') }}">Migration</a> services offer a painless way to make a switch.
          </p>
        </div>
      </div>

      <div class="col-md-3 col-sm-6">
        <div class="column right white no-extend">
          <h3 class="extend">Management</h3>
          <p class="leader">
            Say goodbye.
          </p>
          <p>
            Say hello to fully managed servers and network configurations built specifically for your business.
          </p>
          <p>
            It's all backed by real engineers who are here when you need us 24x7x365.
          </p>
        </div>
      </div>
    </div>

    {{-- <div class="row theme equalize">
      <div class="col-md-12">
        <div class="column left">
          <b>Products</b>
          <br />
          Ask your current hosting company if they resell another companies hosting services.
          <br />
          Do they own their servers.
          <br />
          Do they have a datacenter?
          <br />
          #hostingchallenge
          <br />
          Enter domain name to see who is really hosting your website.
          <br />
          We will migrate your website for free.  <a href="/hosting/migration">Migrate</a>
          <br />
        </div>
      </div>
    </div> --}}
  </div>
@endsection
