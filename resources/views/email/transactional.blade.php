@extends('layouts.app')

@section('title', 'Transactional')
@section('description', 'Have an application that doesn\'t need to receive mail, only send? Our transactional email solution is for you.')
@section('keywords', 'transactional email, send email, printer email, fax email')
@section('body_class', 'transactional')

@section('content')
  @component('components.hero')
    @slot('pageTitle')
      Transactional
    @endslot
    {{-- @slot('pageSubtitle')
      Lorem ipsum dolor sit amet, consectetur
    @endslot
    @slot('pageShortDescription')
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin velit ante, bibendum eu consectetur non, accumsan ut orci. Maecenas velit nibh, imperdiet.
    @endslot --}}
  @endcomponent

  {{ Breadcrumbs::render('email.transactional') }}

  <div class="container">
    <div class="row theme">
      <div class="col-md-12">
        <div class="column left first">
          <h2 class="extend">
            Is it really that hard to just send email?
          </h2>
          <p class="leader">
            Sadly, it is. Other companies exist because your host won't let you send from the server you purchased from them.
          </p>
          <p>
            For the record you can send email with any of our hosted services.  If you can't now, you can with our Transactional Email service.
          </p>
        </div>
      </div>
    </div>

    <div class="row theme">
      <div class="col-md-6 col-xs-6">
        <div class="column left">
          <h3 class="extend">
            Pretty straight forward
          </h3>
          <p>
            Select the plan that best fits your situation and we will send you setup instructions afterwards.
          </p>
        </div>
      </div>

      <div class="col-md-6 col-xs-6">
        <div class="column right">
          <h3 class="extend">
            So is sending
          </h3>
          <p>
            SMTP Authentication or by IP.  Plain, TLS or SSL.  We will get your email out the door.
            {{-- <br />
            Webservices coming soon. --}}
          </p>
        </div>
      </div>
    </div>

    <div class="row theme equalize">
      <div class="col-md-3 col-xs-12">
    		<div class="column left light-grey">
  				<h2 class="extend">Bronze</h2>

          <div class="col-md-12 col-sm-6">
            <div class="price">
              <div class="monthly only">9.95</div>
            </div>
          </div>

          <div class="col-md-12 col-sm-6">
            <div class="line-items highlights fifty-fifty">
              <div class="line-item">
                <div class="inner">
                  <div class="q"><i class="fa fa-envelope-o"></i>40,000</div>
                  <div class="a">Emails</div>
                </div>
              </div>
              <div class="line-item">
                <div class="inner">
                  <div class="q"><i class="fa fa-dollar-sign"></i>$0.001</div>
                  <div class="a">Additional</div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-12 col-sm-6">
            <div class="centered">
              <a title="Activate Bronze Transactional Email" href="https://activate.rolet.com/service/pg/030a4177d32ee74ab8976618d279d0c1" class="button rounded">Activate</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-3">
    		<div class="column middle light-blue">
  				<h2 class="extend">Silver</h2>

          <div class="col-md-12 col-sm-6">
            <div class="price">
              <div class="monthly only">79.95</div>
            </div>
          </div>

          <div class="col-md-12 col-sm-6">
            <div class="line-items highlights fifty-fifty">
              <div class="line-item">
                <div class="inner">
                  <div class="q"><i class="fa fa-envelope-o"></i>100,000</div>
                  <div class="a">Emails</div>
                </div>
              </div>
              <div class="line-item">
                <div class="inner">
                  <div class="q"><i class="fa fa-dollar-sign"></i>$0.00085</div>
                  <div class="a">Additional</div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-12 col-sm-6">
            <div class="centered">
              <a title="Activate Silver Transactional Email" href="https://activate.rolet.com/service/pg/39ec1a01546c0a3a6cdf03418be7288b" class="button rounded popular">Activate</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-3">
    		<div class="column middle light-grey">
  				<h2 class="extend">Gold</h2>

          <div class="col-md-12 col-sm-6">
            <div class="price">
              <div class="monthly only">199.95</div>
            </div>
          </div>

          <div class="col-md-12 col-sm-6">
            <div class="line-items highlights fifty-fifty">
              <div class="line-item">
                <div class="inner">
                  <div class="q"><i class="fa fa-envelope-o"></i>300,000</div>
                  <div class="a">Emails</div>
                </div>
              </div>
              <div class="line-item">
                <div class="inner">
                  <div class="q"><i class="fa fa-dollar-sign"></i>$0.0005</div>
                  <div class="a">Additional</div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-12 col-sm-6">
            <div class="centered">
              <a title="Activate Gold Transactional Email" href="https://activate.rolet.com/service/pg/3c8a9c938b45e60ceea43f62b23dc789" class="button rounded">Activate</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-3">
    		<div class="column right light-grey">
  				<h2 class="extend">Platinum</h2>

          <div class="col-md-12 col-sm-6">
            <div class="price">
              <div class="monthly only">399.95</div>
            </div>
          </div>

          <div class="col-md-12 col-sm-6">
            <div class="line-items highlights fifty-fifty">
              <div class="line-item">
                <div class="inner">
                  <div class="q"><i class="fa fa-envelope-o"></i>700,000</div>
                  <div class="a">Emails</div>
                </div>
              </div>
              <div class="line-item">
                <div class="inner">
                  <div class="q"><i class="fa fa-dollar-sign"></i>$0.00045</div>
                  <div class="a">Additional</div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-12 col-sm-6">
            <div class="centered">
              <a title="Activate Platinum Transactional Email" href="https://activate.rolet.com/service/pg/363496ece539df9ca3f0b6b3e22b2846" class="button rounded">Activate</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
