@extends('layouts.app')

@section('title', 'cPanel')
@section('description', 'Experience cPanel, the Industry\'s Leading Hosting Platform, the Way It\'s Meant To Be. Website Hosting is Not Created Equal. Find out more.')
@section('keywords', 'cpanel, hosting, website hosting, control panel, migration')
@section('body_class', 'cpanel')

@section('content')
  @component('components.hero')
    @slot('pageTitle')
      cPanel
    @endslot
    @slot('pageSubtitle')
      Web Hosting Management, Simplified
    @endslot
    @slot('pageShortDescription')
      Combine the industry’s leading hosting platform with Rolet servers, datacenter and backbone and you’ll experience cPanel in a whole new way, the way it’s meant to be.
    @endslot
  @endcomponent

  {{ Breadcrumbs::render('hosting.cpanel') }}

  <div class="container">
    <div class="row theme">
      <div class="col-md-12">
        <div class="column left first">
          <h2 class="extend leader">
            The worlds most widely used control panel
          </h2>

          <img src="{{ asset('images/cpanel-logo-300w.png') }}" class="content-image" />

          <p class="leader">
            No need to sell you on cPanel. Just about everybody and their dog uses it, so do we (kinda of).
          </p>
          <p>
            Internet secret, if you didn't know, most hosting companies use cPanel to control their hosting services. They slap their logo on it and change the colors to look like them. Thing is, it is still cPanel. We offer it too, with default logo and colors, it is what it is.
          </p>
        </div>
      </div>
    </div>

    <div class="row theme equalize">
      <div class="col-md-4">
        <div class="column left white no-extend">
          <h3 class="extend">
            All in One
          </h3>
          <p>
            From hosting websites and database services to complete email solutions, cPanel offers everything you need, all in one place.
          </p>
          <p>
            Companies for years have trusted cPanel to power their website services.
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="column middle white no-extend">
          <h3 class="extend">
            Need Help Moving?
          </h3>
          <p>
            We can do it for you. Regardless of your current hosting platform we can integrate your current services into cPanel.
          </p>
          <p>
            Our <a href="{{ route ('hosting.migration') }}">Migration</a> services offer a painless way to make a switch from your current provider.
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="column right white no-extend">
          <h3 class="extend">
            Not for You?
          </h3>
          <p>
            cPanel is a great hosting solution but is not for everyone.  If you don't need everything under one roof or need something special, like node.js or nginx, then our <a href="{{ route ("hosting.custom") }}">Custom Hosting</a> might be for you.
          </p>
          <p>
    				We can tailor a hosting solution based on your needs.
          </p>
        </div>
      </div>
    </div>

    <div class="row-spacer">
      &nbsp;
    </div>

    <div class="row theme equalize">
      <div class="col-md-4 col-xs-12">
    		<div class="column left light-grey">
  				<h2 class="extend">Feature Plan</h2>

          <div class="col-md-12 col-sm-6">
            <div class="price">
              <div class="yearly">84</div>
              <div class="you-save">(save $24)</div>
              <div class="monthly">9</div>
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
              <div class="line-item">
                <div class="inner">
                  <div class="q"><i class="fa fa-envelope-o"></i>10</div>
                  <div class="a">Email Accounts</div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-12 col-sm-6">
            <div class="centered">
              <a title="Activate Feature Plan cPanel Hosting" href="https://activate.rolet.com/service/pg/4804d6a2112db5a42957fbd859a282b5" class="button rounded">Select this plan</a>
            </div>
          </div>

          <div class="col-md-12 col-sm-6">
            <div class="line-items condensed">
              <div class="line-item">
                <div class="inner">
                  <div class="q"><i class="fa fa-check"></i></div>
                  <div class="a">CGI Access</div>
                </div>
              </div>
              <div class="line-item">
                <div class="inner">
                  <div class="q">10</div>
                  <div class="a">FTP Accounts</div>
                </div>
              </div>
              <div class="line-item">
                <div class="inner">
                  <div class="q">10</div>
                  <div class="a">Email Lists</div>
                </div>
              </div>
              <div class="line-item">
                <div class="inner">
                  <div class="q">10</div>
                  <div class="a">Sub Domains</div>
                </div>
              </div>
              <div class="line-item">
                <div class="inner">
                  <div class="q">10</div>
                  <div class="a">Parked Domains</div>
                </div>
              </div>
              <div class="line-item">
                <div class="inner">
                  <div class="q">PHP</div>
                  <div class="a">5.3.x</div>
                </div>
              </div>
              <div class="line-item">
                <div class="inner">
                  <div class="q">PHP</div>
                  <div class="a">64MB memory limit</div>
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
              <div class="yearly">168</div>
              <div class="you-save">(save $48)</div>
              <div class="monthly">$18 / month</div>
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
                  <div class="q"><i class="fa fa-database"></i>25</div>
                  <div class="a">Databases</div>
                </div>
              </div>
              <div class="line-item">
                <div class="inner">
                  <div class="q"><i class="fa fa-envelope-o"></i>50</div>
                  <div class="a">Email Accounts</div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-12 col-sm-6">
            <div class="centered">
              <a title="Activate Professional Plan cPanel Hosting" href="https://activate.rolet.com/service/pg/e016b6f3b7029d3185091edd950ee1f4" class="button rounded popular">Select this plan</a>
            </div>
          </div>

          <div class="col-md-12 col-sm-6">
            <div class="line-items condensed">
              <div class="line-item">
                <div class="inner">
                  <div class="q"><i class="fa fa-check"></i></div>
                  <div class="a">SSH Access</div>
                </div>
              </div>
              <div class="line-item">
                <div class="inner">
                  <div class="q"><i class="fa fa-check"></i></div>
                  <div class="a">CGI Access</div>
                </div>
              </div>
              <div class="line-item">
                <div class="inner">
                  <div class="q">50</div>
                  <div class="a">FTP Accounts</div>
                </div>
              </div>
              <div class="line-item">
                <div class="inner">
                  <div class="q">50</div>
                  <div class="a">Email Lists</div>
                </div>
              </div>
              <div class="line-item">
                <div class="inner">
                  <div class="q">50</div>
                  <div class="a">Sub Domains</div>
                </div>
              </div>
              <div class="line-item">
                <div class="inner">
                  <div class="q">50</div>
                  <div class="a">Parked Domains</div>
                </div>
              </div>
              <div class="line-item">
                <div class="inner">
                  <div class="q">10</div>
                  <div class="a">Addon Domains</div>
                </div>
              </div>
              <div class="line-item">
                <div class="inner">
                  <div class="q">PHP</div>
                  <div class="a">5.3.x</div>
                </div>
              </div>
              <div class="line-item">
                <div class="inner">
                  <div class="q">PHP</div>
                  <div class="a">64MB memory limit</div>
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
              <div class="yearly">336</div>
              <div class="you-save">(save $96)</div>
              <div class="monthly">$36 / month</div>
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
                  <div class="q"><i class="fa fa-database"></i>50</div>
                  <div class="a">Databases</div>
                </div>
              </div>
              <div class="line-item">
                <div class="inner">
                  <div class="q"><i class="fa fa-envelope-o"></i>100</div>
                  <div class="a">Email Accounts</div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-12 col-sm-6">
            <div class="centered">
              <a title="Activate Business Plan cPanel Hosting" href="https://activate.rolet.com/service/pg/90cc47e21696fa41f5fd12ee4e7e6467" class="button rounded">Select this plan</a>
            </div>
          </div>

          <div class="col-md-12 col-sm-6">
            <div class="line-items condensed">
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
              <div class="line-item">
                <div class="inner">
                  <div class="q"><i class="fa fa-check"></i></div>
                  <div class="a">CGI Access</div>
                </div>
              </div>
              <div class="line-item">
                <div class="inner">
                  <div class="q">50</div>
                  <div class="a">FTP Accounts</div>
                </div>
              </div>
              <div class="line-item">
                <div class="inner">
                  <div class="q">50</div>
                  <div class="a">Email Lists</div>
                </div>
              </div>
              <div class="line-item">
                <div class="inner">
                  <div class="q">50</div>
                  <div class="a">Sub Domains</div>
                </div>
              </div>
              <div class="line-item">
                <div class="inner">
                  <div class="q">50</div>
                  <div class="a">Parked Domains</div>
                </div>
              </div>
              <div class="line-item">
                <div class="inner">
                  <div class="q">10</div>
                  <div class="a">Addon Domains</div>
                </div>
              </div>
              <div class="line-item">
                <div class="inner">
                  <div class="q">PHP</div>
                  <div class="a">5.3.x</div>
                </div>
              </div>
              <div class="line-item">
                <div class="inner">
                  <div class="q">PHP</div>
                  <div class="a">64MB memory limit</div>
                </div>
              </div>
            </div>
          </div>
    		</div>
      </div>
    </div>
{{--
    <div class="row-spacer">
      &nbsp;
    </div> --}}
  </div>
@endsection
